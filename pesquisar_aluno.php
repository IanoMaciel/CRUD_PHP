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
			$(document).ready( function(){
				$('#procurar_pessoa').click( function(){
					$.ajax({
						url: 'get_pessoas.php',
						method: 'post',
						data: {pesquisa : $('#pesquisa').val()},
						success: function(data){
							$('#pessoas').html(data);
						}
					});
						
				});
				
			});
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
	    					<div class="input-group">
								<input type="text" name="pesquisa" id="pesquisa" class="form-control" placeholder="Procurar pessoa">
								<span class="input-group-btn">
									<button class="btn btn-primary" id="procurar_pessoa" type="submit">Procurar</button>
								</span> 
							</div>
	    				</div>
	    			</div>
	    			<div id="pessoas" class="list-group"></div>
	    		</div><!-- /panel central -->

	    		<!-- panel direito -->
	    		<div class="col-md-3"></div>

	    	</div>
	    </div>
		
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>