	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>TTs</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body>
	
		<div class="blocoPrincipal">
			
			<h1>Adicionar funcionario</h1>
			
			<p><a href="menu.php">Home</a> </p>
			
			
			<!--<?php include_once('incs/menu_principal.php'); ?>-->
			
			<form method="post" action="insertFuncionario.php">



				<p>
					<label for="nome_funcionario">Nome Do Funcionario:</label><br />
					<input type="text" name="nome_funcionario" required="required" placeholder="Seu nome" />
				</p>
				<p>
					<label for="data_nascimento">Data Nascimento:</label><br />
					<input type="date" name="data_nascimento" required="required"  placeholder="01/01/1198"/>
                </p>
                <p>
					<label for="cpf">CPF Do Funcionario:</label><br />
					<input type="text" name="cpf" required="required" placeholder="Seu cpf" maxlength="11"/>
				</p>
				<p>
					<label for="celular">Celular:</label><br />
					<input type="text" name="celular" required="required" placeholder="(51)55555-5555"/>
				</p>


				<p>
					<label for="endereco">Endereco</label><br />
					<input type="text" name="endereco" required="required" />
				</p>
				<p>
					<label for="data_admissao">Data de Ademissão:</label><br />
					<input type="date" name="data_admissao" required="required" />
				</p>
				<p>
					<label for="valor_hora">Valor ganho por hora</label><br />
					<input type="text" name="valor_hora" required="required" placeholder="00.00"/>
                </p>
                
                <p>
					<label for="sexo">Sexo</label><br />
					<input type="text" name="sexo" required="required"  placeholder="M ou F" maxlength="1"/>
				</p>
				
				
				<p>
					<input type="submit" value="Cadastrar" />
				</p>
			</form>
		</div>
		
		
		
		<div class="blocoPrincipal">
			<p>Desenvolvido por: Bruno Simon</p>
		</div>
		

	</body>
	
</html>