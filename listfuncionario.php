    
<!--ESTA PAGINA EDITA OU APAGA MODELO -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Ou apagar Funcionario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php require_once 'incs/conexao.php';
    $sql = "SELECT * FROM funcionario";
    $resultado = mysqli_query($conexao,$sql);
    
    
    ?>
        
    <div class="blocoPrincipal">

            <p><a href="menu.php">*Home</a> </p><br/> <br/>
            
        <table class="minimalistBlack">
           
            <thead>
				<tr>
                    <th>Nome Do funcionario</th>
					<th>Data Nascimento</th>
					<th>Tipo</th>
					<th>Celular</th>
					<th>Endereco</th>
                    <th>Data de Admissão</th>
                    <th>Valor Hora</th>
                    <th>Sexo</th>
                    <th>CPF</th>
                    <th>EDITAR</th>
                    <th>EXCLUIR</th>
					   
                
				</tr>
			</thead>
            <tfoot>
				<?php
				while ($funcionario = mysqli_fetch_array($resultado)){?>
				<tr>
                    
					<td><?php echo $funcionario ['nomeFuncionario']?></td>
					<td><?php echo $funcionario ['dataNascimento']?></td>
					<td><?php echo $funcionario ['tipo']?></td>
					<td><?php echo $funcionario ['celular']?></td>
                    <td><?php echo $funcionario ['endereco']?></td>
                    <td><?php echo $funcionario ['dataAdmissao']?>  </td>
                    <td><?php echo $funcionario ['valor_hora']?>  </td>
                    <td><?php echo $funcionario ['sexo']?>  </td>
                    <td><?php echo $funcionario ['cpf']?>  </td>

                    <td><a href="editarfuncionario.php?c=<?php echo $funcionario ['nomeFuncionario'] ?>" >Editar</a></td>
                    <td><a href="excluirfuncionario.php?c=<?php echo $funcionario ['nomeFuncionario'] ?>" >Excluir</a></td>
                    

				<?php
				} ?>
				
			</tfoot>

        </table>

        
    </div>
</body>
</html>