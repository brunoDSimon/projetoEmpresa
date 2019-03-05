	
<?php
$ref = $_POST['ref'];
$valor = $_POST ['valor'];
$qtde = $_POST['qtde'];
$datat = $_POST['datat'];
$cliente = $_POST['cliente'];
$remesa = $_POST['remesa'];
$foto = $_FILES["foto"];

// precisa verificar se foi ou não selecionada uma foto
	if (!empty($foto["name"])) {
		echo "tem foto";
		// Largura máxima em pixels
		$largura = 600;
		// Altura máxima em pixels
		$altura = 600;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 10000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fototalao/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
 
			$sql = "INSERT INTO modelo (referencia, valor, quantidade, cliente, remesa, datat, foto ) ";
			$sql .= "VALUES ('$ref','$valor','$qtde','$cliente','$remesa','$datat','$nome_imagem' )"; 
								}
		}
		else{
			$sql = "INSERT INTO modelo (referencia, valor, quantidade, cliente, remesa, datat) ";
			$sql .= "VALUES ('$ref','$valor','$qtde','$cliente','$remesa','$datat')" ;
		}

	//echo $sql;
	require_once 'incs/conexao.php';

	$resultado = mysqli_query($conexao,$sql);

	if($resultado == true){
		echo " foi";
		echo "<script type=\"text/javascript\">alert('MODELO ADICIONADO mmm');</script>";

		header("location: inseremodelo.php");
		
	}
	else{
		echo "nao foi";
		echo "<script type='text/javascript'>
						alert('Falha no cadastro!!');
						</script>";
	   
	}
	?>