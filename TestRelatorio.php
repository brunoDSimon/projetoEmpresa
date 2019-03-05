

	<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<?php

use Dompdf\FrameReflower\Table;
	$data1 = $_POST['data1'];
	//$data1 = '2018-03-06';
	$data2 = $_POST['data2'];
	//$data2 = '2018-11-22';
	$cliente = $_POST['cliente'];
	//$cliente = 'Sagga';

	require_once('incs/conexao.php');
	$sql = "SELECT referencia, valor, quantidade, cliente, valor* quantidade as total FROM modelo WHERE datat BETWEEN '$data1' and '$data2' and cliente LIKE '$cliente%' ";
    //echo $sql;
	$resultado = mysqli_query($conexao, $sql);
	

	$html ='<h3>Atelier de Corte Simon</h3>';
		$html .='<table>';
		
				
				$html .= '	<tr>';

				$html .= '<th><p>Fone (51)55555-5555</p></th>';
				$html .='<th><p>Rua Bruno werner stockr, 297 <br/>- Bairro Canudos </p></th>';
				$html .='<th><p>CEP 93.544.360 <br>- Novo Hamburgo -RS </p></th>';
				$html .=' <th><p >CNPJ <br/>08.782.747/0001-50</p></th>';
				$html .='<th><p >INSCRIÇÃO ESTADUAL <br/> 086/0395464</p></th>';
				
				$html .= '	</tr>';
			$html.='</table>';



	
	//$html  .= '<h1>Listagem de Clientes</h1>';
	$html .= '<table width="100%" border="1px" text-align="left">';
	$html .= '<thead>';
	$html .= '	<tr>';
	$html .= '		<th>Cliente</th>';
	$html .= '		<th>Referencia</th>';
	$html .= '		<th>Valor</th>';
	$html .= '		<th>Quantidade</th>';
	$html .= '		<th>Valor a receber</th>';
	$html .= '	</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
		$html .= $total = 0;
		$html .= $qtde = 0;

	while ($modelo = mysqli_fetch_array($resultado)){

		//echo $modelo ['cliente'] . $modelo ['referencia'];
		$html .= '<tr>';
		$html .=  '<td>'.$modelo ['cliente'].'</td>';
		$html .=  '<td>'.$modelo ['referencia'].'</td>';
		$html .=  '<td>'.$modelo ['valor'].'</td>';
		$html .=  '<td>'.$modelo ['quantidade'].'</td>';
		$html .=  '<td> R$ '.number_format($modelo ['total'],2,",",".").'</td>';
		 $total +=  $modelo ['total']; $qtde += $modelo ['quantidade']; 

		$html .= '</tr>';
	}
		
	$html .= '<tr>';
		$html .=  '<td colspan="2.5" >Quantidade : ' . $qtde . '</td>';
		
		$html .=  '<td colspan="2.5">Valor a receber: R$ ' .number_format($total,2,",",".") .'</td>';

		$html .= '</tr>';
			
			
	$html .= '</tbody>';
	$html .= '</table>';
	$html .=  date('d/m/Y \à\s H:i:s');

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html($html);

	// Definindo o papel e a orientação

	$dompdf->setPaper('A4', 'portrait');


	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_Pagamento.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);


?>