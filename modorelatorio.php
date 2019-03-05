	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>TTs</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
	
		<div class="blocoPrincipal form-group">
			
			<h1 class="display-4">Pre-Relatorio</h1>
			<h3> <a href="menu.php" class="btn btn-dark active"> Menu</a></h3>
			
			<!--<p><a href="relatorio.php">Visit Gerar relatorio</a> </p>-->
			
			<!--<?php include_once('incs/menu_principal.php'); ?>-->
			
			<form method="post" action="relatorio.php">



				<p>
					<label>Cliente:</label><br />
					<input	class="form-control	w-50" type="text" name="cliente" required="required" placeholder="Ex sagga"/>
				</p>
				
				<p>

					<label for="data1">Data do inicio:</label><br />
					<input	class="form-control	w-50" type="date" name="data1" required="required" placeholder="De data ex 1/10/2018 A"/>
				</p>
				<p>
					<label for="data2">Data final:</label><br />
					<input	class="form-control example-date-input	w-50" type="date" name="data2" required="required" placeholder="15/10/2018" />
				</p>
				
				
				<p>
                <button	class="btn btn-dark btn-block" type="submit" formaction="relatorio.php">Relatorio na tela</button>
                
				</p>
			</form>
		</div>
		
        
		
		<div class="blocoPrincipal">
			<p>Desenvolvido por: Bruno Simon</p>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	
</html>