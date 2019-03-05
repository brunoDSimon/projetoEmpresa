<?php
	$conexao = @mysqli_connect("localhost", "root", "", "empresa");
	//mysqli_select_db($conexao, "jonas");
	if (mysqli_connect_errno())
  {
  echo "Falha para conectar ao Mysql - " . mysqli_connect_error();
  }
?>