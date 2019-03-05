	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>TTs</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
	
		<div class="blocoPrincipal form-group container">
			
			<h4	class="text-center">Pre-Relatorio PDF</h4>
			<h3> <a href="menu.php"> Menu</a></h3>
			
			<form method="post" action="TestRelatorio.php">



				<p>
					<label class="form-label">Cliente:</label><br />
					<input	class="form-control w-auto" type="text" name="cliente" required="required" placeholder="Ex sagga"/>
				</p>
				
				<p>

					<label for="data1">Data do inicio:</label><br />
					<input type="date" name="data1" required="required" placeholder="De data ex 1/10/2018 A"/>
				</p>
				<p>
					<label for="data2">Data final:</label><br />
					<input type="date" name="data2" required="required" placeholder="15/10/2018" />
				</p>
				
				
				<p>
                <button class="btn btn-outline-danger btn-block"	type="submit" formaction="TestRelatorio.php">Relatorio em PDF</button>
                
				</p>
			</form>
		
		
        
		
			
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	
</html>