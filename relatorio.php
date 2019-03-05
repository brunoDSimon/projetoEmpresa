	

	<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>TTs</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<link rel="stylesheet" type="text/css" href="css/table.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
<body>

<?php 

	require_once('incs/conexao.php');
	$data1 = $_POST['data1'];
	//echo $data1;
	$data2 = $_POST['data2'];
	//echo $data2;
	$cliente = $_POST['cliente'];



	$sql = "SELECT referencia, valor, quantidade, cliente, valor* quantidade as total FROM modelo WHERE datat BETWEEN '$data1' and '$data2' and cliente LIKE '$cliente%' ";
	//echo $sql;
	$resultado = mysqli_query($conexao, $sql);?>

	
	<div class="blocoPrincipal container">
		<a	class="btn btn-info btn-dark" href="menu.php"> Menu</a>
		<h4 class=" text-center">Atelier de Corte Simon</h4>
		<div class="row mt-2">
			<div class="col">
				Fone: (51)55555-5555
			</div>
			<div class="col">
				Rua Bruno werner storck, 297 - Bairro Canudos
			 </div>
			<div class="col">
				CEP 93.544.360 - Novo Hamburgo -RS 
			</div>
			<div class="col">
				CNPJ 08.782.747/0001-50
			</div>
			<div class="col">
				INSCRIÇÃO ESTADUAL 086/0395464
			</div>
		</div>
	<table class="table table-bordered  lead mt-4">
	<thead class="table-dark">
		<tr>
			<th scope="col">Cliente</th>
			<th scope="col">Referencia</th>
			<th scope="col">Quantidade</th>
			<th scope="col">Valor</th>
			<th scope="col">Valor a Receber</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$total = 0;
			$qtde = 0;
			while ($modelo = mysqli_fetch_array($resultado)){?>
				<tr>
					<td ><?php echo $modelo ['cliente']?></td>
					<td><?php echo $modelo ['referencia']?></td>
					<td><?php echo $modelo ['quantidade']?></td>
					<td><?php echo $modelo ['valor']?></td>
					<td>R$ <?php echo number_format($modelo ['total'],2,",",".")?></td>
					<?php $total +=  $modelo ['total']; $qtde += $modelo ['quantidade']; ?>
				</tr>
			<?php
			} ?>	
		<tr>
			<td >#</td>
			<td colspan="2.5">Quantidade <?php echo $qtde;?></td>
			<td colspan="2.5">Total R$ <?php echo number_format($total,2,",",".");?></td>
			
		</tr>
	</tbody>
	</table>
		<p class="lead"><?php echo date('d/m/Y \à\s H:i:s');?></p>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>