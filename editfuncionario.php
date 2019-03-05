

<?php
$cod = $_GET['c'];
$nomeFuncionario = $_POST['nomeFuncionario'];
$dataNascimento = $_POST['dataNascimento'];
$tipo = $_POST['tipo'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$dataAdmissao = $_POST['dataAdmissao'];
$valor_hora = $_POST['valor_hora'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];



require_once('incs/conexao.php');
$sql = "UPDATE funcionario SET nomeFuncionario = '$nomeFuncionario', dataNascimento = '$dataNascimento', tipo = '$tipo', celular= '$celular', endereco= '$endereco', dataAdmissao='$dataAdmissao', valor_hora = '$valor_hora', sexo= '$sexo', cpf = '$cpf'   ";
$sql .= "WHERE nomeFuncionario = '$cod'";
//echo $sql;
$resultado = mysqli_query($conexao,$sql);
if ($resultado == true) {
    echo "<script type=\"text/javascript\">alert('Modelo Editado');</script>";
    //echo "Cadastro atualizado!!!";
    header('location: listfuncionario.php');
}else{
    echo "<script type=\"text/javascript\">alert('Não foi possivel atualizar tente novamente');</script>";
    //echo"Não foi possivel atualizar tente novamente";
};

?>