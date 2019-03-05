	
<?php
$cod = $_GET['c'];
$cliente = $_POST['cliente'];
$referencia = $_POST['referencia'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$data = $_POST['data'];
$remesa = $_POST['remesa'];

require_once('incs/conexao.php');
$sql = "UPDATE modelo SET cliente = '$cliente', referencia = '$referencia', quantidade = '$quantidade', valor= '$valor', remesa= '$remesa', datat='$data' ";
$sql .= "WHERE id = '$cod'";
//echo $sql;
$resultado = mysqli_query($conexao,$sql);
if ($resultado == true) {
    echo "<script type=\"text/javascript\">alert('Modelo Editado');</script>";
    //echo "Cadastro atualizado!!!";
    header('location: listagemMod.php');
}else{
    echo "<script type=\"text/javascript\">alert('Não foi possivel atualizar tente novamente');</script>";
    //echo"Não foi possivel atualizar tente novamente";
};











?>