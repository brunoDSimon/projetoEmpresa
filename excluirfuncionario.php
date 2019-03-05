    

<?php
//echo"entrou aqui";

    $codigo = $_GET['c'];
   require_once('incs/conexao.php');
    $sql = "DELETE FROM funcionario WHERE nomeFuncionario = '$codigo'";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado == true) {
        echo "<script type=\"text/javascript\">alert('MODELO APAGADO');</script>";
        //header('location: listagemMod.php');
    } else {
        echo "<script type=\"text/javascript\">alert('ERRO AO EXCLUIR');</script>";
        //header('location: listagemMod.php');
    }
?>