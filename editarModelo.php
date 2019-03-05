	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Editar modelo</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body>
	
		<div class="blocoPrincipal">
			
			<h1>Editar modelo</h1>
			<?php 
			$cod = $_GET['c'];
			require_once('incs/conexao.php');
			$sql = "SELECT * FROM modelo WHERE id = '$cod'";
			$resultado = mysqli_query($conexao,$sql);
			$modelo = mysqli_fetch_array ( $resultado );
    
			?>
			
			
			
			
			<form method="post" action="editModelo.php?c=<?php echo $modelo ['id'] ?>">
			

				<p>
					<label for="foto">Foto talao</label>
					<input type="file" name="foto" value="<?php echo $modelo['foto']?>" />

				</p>
				<p> 
					<label for="cliente">Cliente:</label><br/>
					<input  name="cliente"  type="text" value="<?php echo $modelo['cliente'] ?>"  />
				</p>
				
				<p> 
					<label for="referencia">Referencia:</label><br/>
					<input  name="referencia"  type="text" value="<?php echo $modelo['referencia'] ?>"  />
				</p>
				<p> 
					<label for="remesa">Remesa:</label><br/>
					<input  name="remesa"  type="text" value="<?php echo $modelo['remesa'] ?>"  />
				</p>

				<p>
					<label for="quantidade">Quantidade:</label><br/>
					<input  name="quantidade"  type="text" value="<?php echo $modelo['quantidade'] ?>">
				</p>

				<p>
					<label for="valor">Valor:</label><br/>
					<input  name="valor"  type="text" value="<?php echo $modelo['valor'] ?>">
				</p>

				<p>
					<label for="data">Data:</label><br/>
					<input  name="data"  type="date" value="<?php echo $modelo['datat'] ?>">
				</p>
				<br/>
				
				<input type="submit" value="Editar" />	
            </form>
			

        </div>
		
        <div class="blocoPrincipal">
			<p>Desenvolvido por:</p>
		</div>
	</body>
	
</html>