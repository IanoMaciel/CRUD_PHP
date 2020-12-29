<?php
	
	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	if(isset($_POST['nome']))
	{
		

		$id_dado = $_POST['id_dado'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		
		$id_endereco = $_POST['id_endereco'];
		$rua = $_POST['rua'];
		$bairro = $_POST['bairro'];
		$numero = $_POST['numero'];
		$id1 = $_POST['id'];

		$registro1  = " UPDATE dados SET ";
		$registro1 .= " nome = '{$nome}', ";
		$registro1 .= " email = '{$email}', ";
		$registro1 .= " id = {$id} ";
		$registro1 .= " WHERE id_dado = {$id_dado} ";

		$registro2  = " UPDATE endereco SET ";
		$registro2 .= " rua = '{$rua}', ";
		$registro2 .= " bairro = '{$bairro}', ";
		$registro2 .= " numero = {$numero}, ";
		$registro2 .= " id_dado = {$id1}  ";
		$registro2 .= " WHERE id_endereco = {$id_endereco} ";

		$sql1 = mysqli_query($link, $registro1);
		$sql2 = mysqli_query($link, $registro2);

		if(!$sql1)
		{
			if(!$sql2)
			{
				die('Erro ao editar no banco');
			}
		} else {
			header('Location: registro_aluno.php?success=1');
		}

	}

?>