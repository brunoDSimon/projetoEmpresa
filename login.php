	

<?php
	$email = $_POST["email_log"];
	$senha = MD5($_POST["senha"]);

	require_once('incs/conexao.php');

	$sql = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";
	//echo $sql;
	$resultado = mysqli_query($conexao, $sql);
	$registros = mysqli_fetch_array($resultado);
	if ($registros == false) {
			//echo "ops";
			header("location: index.html#paralogin");
	} else {
		session_start();
		$_SESSION ['LOGIN'] = $email;
		//$_SESSION ['NOME'] = $registros["nome"];
		$_SESSION ['TIPO'] = $registros["tipo"];
		//echo $_SESSION["TIPO"];
		header("location: menu.php");
		//echo "okkkkkk";
	}

	
?>