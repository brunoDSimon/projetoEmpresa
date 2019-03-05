	
<?php
require_once('incs/conexao.php');

$nome_funcionario = $_POST['nome_funcionario'];
$data_nascimento = $_POST['data_nascimento'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$data_admissao =$_POST['data_admissao'];
$valor_hora =$_POST['valor_hora'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];


$sql = "INSERT INTO funcionario (nomeFuncionario,dataNascimento,celular,endereco,dataAdmissao,valor_hora,sexo,cpf ) ";
$sql .= "VALUES ('$nome_funcionario', '$data_nascimento','$celular','$endereco','$data_admissao','$valor_hora','$sexo','$cpf' ) ";
echo $sql;

$resultado = mysqli_query($conexao, $sql);

if($resultado == true){
    #echo "<script type='text/javascript'>alert('Cadastro realizado com sucesso!');</script>";
   echo"foi";
    
   // header("location: login.php");
}else{
    #echo "<script type='text/javascript'>alert('falha no cadastro');</script>";
               // header("location: login.php");
               echo"nao foi";
}

?>
