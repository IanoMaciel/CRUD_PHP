<?php

	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$id_usuario = $_GET['id'];

	$sql = " select d.id_dado, d.id, d.nome, d.email, e.id_endereco, e.rua, e.bairro, e.numero from dados as d JOIN endereco as e ON(d.id = e.id_dado) WHERE d.id_dado = $id_usuario ";

	$registro = mysqli_query($link, $sql);

	if(!$registro)
	{
		die('Erro ao recupear no banco');
	} else {
		$dados = mysqli_fetch_assoc($registro);
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
			           	<li><a href="index.php">Cadastrar alunos</a></li>
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
	    					<form method="post" action="update.php">
	    						
	    						<h2 style="text-align: center;">Cadastro de Aluno</h2>
	    						<hr>
	    						<h4 style="text-align: center;">Nome</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="nome" name="nome" value="<?php echo $dados['nome']; ?>">
	    						</div>
	    						<h4 style="text-align: center;">E-mail</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="email" name="email" value="<?php echo $dados['email']; ?>">
	    						</div>
	    						
	    						<hr>
	    						<h2 style="text-align: center;">Endereço</h2>
	    						<hr>

	    						<h4 style="text-align: center;">Rua</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="rua" name="rua" value="<?php echo $dados['rua']; ?>">
	    						</div>

	    						<h4 style="text-align: center;">Bairro</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="bairro" name="bairro" value="<?php echo $dados['bairro']; ?>">
	    						</div>

	    						<h4 style="text-align: center;">Numero</h4>
	    						<div class="form-group">
	    							<input class="form-control" type="text" id="numero" name="numero" value="<?php echo $dados['numero']; ?>">
	    						</div>
	    						
	    						<div class="form-group">
	    							<input type="hidden" name="id_dado" value="<?php echo $dados['id_dado']; ?>">
	    						</div>

	    						<div class="form-group">
	    							<input type="hidden" name="id_endereco" value="<?php echo $dados['id_endereco']; ?>">
	    						</div>

	    						<div class="form-group">
	    							<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
	    						</div>

	    						<div class="form-group">
	    							<button type="submit" class="btn btn-warning center-block" style="width: 150px;">Confirmar</button>
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