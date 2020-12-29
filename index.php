<?php
	
	$cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : 0; 

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
			           	<li><a href="group.php">Operação GROUP BY</a></li>
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
	    					<form method="post" action="cadastrar_aluno.php">
	    						<?php

	    							if($cadastro == 1)
	    							{
	    								echo '<p style="text-align: center; color: #045FB4;">Aluno cadastrado com sucesso!</p>';
	    							}

	    						?>
	    						
	    						<h2 style="text-align: center;">Cadastro de Aluno</h2>
	    						<hr>
	    						<h4 style="text-align: center;">Nome</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="nome" name="nome" placeholder="Ex: João Pereira">
	    						</div>
	    						<h4 style="text-align: center;">E-mail</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="email" name="email" placeholder="Ex: joão@teste.com">
	    						</div>
	    						
	    						<hr>
	    						<h2 style="text-align: center;">Endereço</h2>
	    						<hr>

	    						<h4 style="text-align: center;">Rua</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="rua" name="rua" placeholder="Ex: Rua Adamastor">
	    						</div>

	    						<h4 style="text-align: center;">Bairro</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="bairro" name="bairro" placeholder="Ex: Centro">
	    						</div>

	    						<h4 style="text-align: center;">Numero</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="numero" name="numero" placeholder="Ex: 99999">
	    						</div>
	    						
	    						<div class="form-group">
	    							<button type="submit" class="btn btn-primary center-block" id="btn_cadastrar" style="width: 150px;">Cadastrar</button>
	    						</div>
	    					</form>
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