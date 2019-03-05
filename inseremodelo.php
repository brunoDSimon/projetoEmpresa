	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>TTs</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			.btn{
				border-radius: 25rem;
			}
		</style>
	</head>
	<body>
	
		<div class="blocoPrincipal form-group container">
			
				<h1 class="display-4 text-center">Adiciona modelo</h1>
				<div class="col-sm text-center  ">
					<a	class="btn btn-danger" href="menu.php">Home</a> 
					<a	class="btn btn-danger" href="modorelatorio.php">Mod relatorio</a>
				</div>
				<div class="col d-flex justify-content-center lead">		
					<form method="post" action="insertmodelo.php" enctype="multipart/form-data" >
						<div class="form-group ">
							<label for="qtde">Cliente:</label>
							<input  class="form-control w-auto " type="text" name="cliente" required="required" />
						</div>
						<div class="form-group">
							<label for="ref">Referencia:</label>
							<input class="form-control	w-auto"	type="text" name="ref" required="required" />
						</div>
						<div class="form-group">
							<label for="remesa">Remesa:</label>
							<input	class="form-control	w-auto" type="text" name="remesa" required="required" />
						</div>
						<div class="form-group">
							<label for="valor">valor</label>
							<input	class="form-control	w-auto" type="text" name="valor" required="required" />
						</div>
						<div class="form-group">
							<label for="qtde">Quantidade:</label>
							<input	class="form-control w-auto" type="text" name="qtde" required="required" />
						
						</div>
							<label for="datat">Data:</label>
							<input	class=" form-control example-date-input	w-auto" type="date" name="datat" required="required" />
						
						<div class="custom-file mt-3 w-auto">
							<input class="custom-file-input	" type="file" name="foto"/>
							<label	class="custom-file-label" for="foto"></label>
						</div>
						<div class="col mt-3">
							<input class="btn btn-dark btn-block " type="submit" value="Cadastrar" />
						</div>
					</form>
				</div>			
				
		</div>
		<!-- Footer -->
	<footer class="page-footer font-small blue">

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2019 Copyright:
	<a href="#" class="btn-outline-primary"> Bruno Simon</a>
	</div>
	<!-- Copyright -->

	</footer>
	<!-- Footer -->
							
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	
</html>