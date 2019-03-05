	

<head>
		<title>Editar funcionario</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>


<body>
		<div class="blocoprincipal">
			<h1>Editar Funcionario</h1>
			<?php 
			$cod = $_GET['c'];
			require_once('incs/conexao.php');
			$sql = "SELECT * FROM funcionario WHERE nomeFuncionario = '$cod'";
			$resultado = mysqli_query($conexao,$sql);
			$funcionario = mysqli_fetch_array ( $resultado );
    
			?>

			<form method="post" action="editfuncionario.php?c=<?php echo $funcionario ['nomeFuncionario'] ?>">
				
				<p>
					<label for="nomeFuncionario">Nome Funcionario</label><br>
					<input type="text" name="nomeFuncionario" value="<?php echo $funcionario ['nomeFuncionario']?>" />

				</p>
				<p> 
					<label for="dataNascimento">Data de Nascimento:</label><br/>
					<input  name="dataNascimento"  type="date" value="<?php echo $funcionario ['dataNascimento']?>"  />
				</p>
				
				<p> 
					<label for="tipo">Tipo:</label><br/>
					<input  name="tipo" maxlength="1" type="text" value="<?php echo $funcionario ['tipo']?>"  />
				</p>
				<p> 
					<label for="celular">Celular:</label><br/>
					<input  name="celular"  type="text" value="<?php echo $funcionario ['celular']?>"  />
				</p>

				<p>
					<label for="endereco">Endereco:</label><br/>
					<input  name="endereco"  type="text" value="<?php echo $funcionario ['endereco']?>">
				</p>

				<p>
					<label for="dataAdmissao">Data de Admissão:</label><br/>
					<input  name="dataAdmissao"  type="date" value="<?php echo $funcionario ['dataAdmissao']?>">
				</p>

				<p>
					<label for="valor_hora">Valor por hora:</label><br/>
					<input  name="valor_hora"  type="text" value="<?php echo $funcionario ['valor_hora']?>">
				</p>

				<p>
					<label for="sexo">Sexo:</label><br/>
					<input  name="sexo" maxlength="1" type="text" value="<?php echo $funcionario ['sexo']?>">
				</p>


				<p>
					<label for="cpf">Cpf:</label><br/>
					<input  name="cpf"  type="text" value="<?php echo $funcionario ['cpf']?> ">
				</p>






				<br/>
				
				<input type="submit" value="Editar" />	



			</form>



		</div>


</body>