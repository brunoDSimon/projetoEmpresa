<!--ESTA PAGINA EDITA OU APAGA MODELO -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Ou apagar modelo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
    <?php require_once 'incs/conexao.php';
        $sql = "SELECT * FROM modelo";
        $resultado = mysqli_query($conexao,$sql);
    ?>
        
    <div class="blocoPrincipal container">
        <div class="col">
            <a class="btn btn-outline-danger active" href="menu.php">Home</a>
            <a class="btn btn-outline-danger active" href="inseremodelo.php">Adicionar Modelo</a>

        </div>           
       
    <div class="col mt-5">
        <table class="table table-bordered">
            <thead class="thead-dark lead">
                <tr>
                <th scope="col" rowspan="6">Foto do talão</th>
                <th scope="col">Cleinte</th>
                <th scope="col">Referencia</th>
                <th scope="col">Valor</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Remesa</th>
                <th scope="col">Data</th>
                <th scope="col">Edita</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($modelo = mysqli_fetch_array($resultado)){?>
                    <tr>
                        <td ><img src="fototalao/<?php echo $modelo ['foto'] ?>"> </td>
                        <td><?php echo $modelo ['cliente']?></td>
                        <td><?php echo $modelo ['referencia']?></td>
                        <td><?php echo $modelo ['valor']?></td>
                        <td><?php echo $modelo ['quantidade']?></td>
                        <td><?php echo $modelo ['remesa']?></td>
                        <td><?php echo $modelo ['datat']?>  </td>
                        <td><a  class="btn btn-outline-primary btn-block" href="editarModelo.php?c=<?php echo $modelo ['id'] ?>" >Editar</a></td>
                        <td><a  class="btn btn-outline-primary btn-block" href="excluirModelo.php?c=<?php echo $modelo ['id'] ?>" >Excluir</a></td>
                    </tr>
                <?php
                    } ?>        
            </tbody>
        </table>
    </div>        


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>