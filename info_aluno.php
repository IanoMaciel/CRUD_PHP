<?php
	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();


	$sql = " SELECT * FROM dados  ";

	$resultado = mysqli_query($link, $sql);


	if(!$resultado)
	{
		die('Erro na consulta');
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Banco de dados - CRUD</title>

		<!-- Link Bootstrap - cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- Link jQuery - cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- Link CSS -->
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<!-- JavaScript -->
		<script>
			
		</script>
	</head>

	<body>
		<!-- navbar --> 
		<nav class="navbar navbar-default navbar-static-top">
	      	<div class="container">
	        	<div class="navbar-header">
		          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
		          	</button>
	        	</div>
	        
		        <div id="navbar" class="navbar-collapse collapse">

			        <ul class="nav navbar-nav">
			        	<li><a href="index.php">Home</a></li>
			           	<li><a href="registro_aluno.php">Alunos cadastrados</a></li>
			           	<li><a href="pesquisar_aluno.php">Pesquisar aluno</a></li>
			        </ul>
		        </div><!--/.nav-collapse -->
	      	</div>
	    </nav><!-- /navbar --> 

	    <div class="container">
	    	<div class="row">
	    		<!-- panel esquerdo -->
	    		<div class="col-md-3"></div>

	    		<!-- panel central -->
	    		<div class="col-md-6">
	    			<div class="panel panel-default">
	    				<div class="panel-body">
	    					
		    					 
							<?php while($registro = mysqli_fetch_assoc($resultado))  { ?>
								<table class="table" style="text-align: left;">
									<tbody>
										<tr>
											<th scope="col"><?= $registro['nome']; ?></th>
											<th scope="col"><?= $registro['email']; ?></th>
											<th><button><a href="update_tela.php?id=<?php echo $registro['id_dado']?>">Editar</a></button></th>
											<th><button><a href="delete.php?id=<?php echo $registro['id_dado'];?>">Excluir</a></button></th>
											<th><button><a href="info_aluno.php?id=<?php echo $registro['id_dado'];?>">Info</a></button></th>
										</tr>
									</tbody>
								</table>
								
							<?php } ?>
	    				</div>
	    			</div>
	    		</div><!-- /panel central -->

	    		<!-- panel direito -->
	    		<div class="col-md-3"></div>

	    	</div>
	    </div>
		
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>