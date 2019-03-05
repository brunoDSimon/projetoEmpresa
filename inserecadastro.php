	

<?php
require_once('incs/conexao.php');

$nome_cad = $_POST['nome_cad'];
$email_cad = $_POST['email_cad'];
$senha_cad = $_POST['senha_cad'];
$telefone_cad = $_POST['telefone_cad'];
$cpf_cad =$_POST['cpf_cad'];
$nascimento_cad =$_POST['nascimento_cad'];
$usuario_cad = $_POST['usuario_cad'];


$sql = "INSERT INTO login (nome,email,telefone,cpf,nascimento,usuario,senha ) ";
$sql .= "VALUES ('$nome_cad', '$email_cad','$telefone_cad','$cpf_cad','$nascimento_cad','$usuario_cad','$senha_cad' ) ";


$resultado = mysqli_query($conexao, $sql);

if($resultado == true){
    echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');
				</script>";
   
    
    
}else{
    echo "<script type='text/javascript'>
				alert('falha no cadastro');
                </script>";
               //header("location: login.php");
   
}

?>
