<!doctype html>
<html lang='pt-br'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/reset.css">
   
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <title>MENU ADM</title>
</head>
    <body>
        
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="menu.php">HOME</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                   
                    <li class="nav-item dropdown">
                        <a class=" navbar-brand nav-link dropdown-toggle active" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relatorio</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="listagemMod.php">Editar modelo</a>
                            <a class="dropdown-item" href="inseremodelo.php">Adiciona MOD</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="  navbar-brand nav-link dropdown-toggle active" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relatorio</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="modorelatorio.php">Gera relatorio</a>
                            <a class="dropdown-item" href="modorelatorioPDF.php">Gera relatorio em pdf</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class=" navbar-brand nav-link dropdown-toggle active" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Funcionario</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="funcionario.php">ADC Funcionario</a>
                            <a class="dropdown-item" href="listfuncionario.php">Excluir ou Editar</a>
                        </div>
                    </li>
                    <a class="navbar-brand" href="sair.php">SAIR</a>
                    <a class="navbar-brand" href="index.html">SITE</a>
                    
                </ul>
                
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0 disabled" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
        
        <div class="bordas">
            <div class="ganhos" >GANHOS</div>
        </div>

        <div class="bordas">
            <div class="ganhos" >GASTOS</div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
<html>
