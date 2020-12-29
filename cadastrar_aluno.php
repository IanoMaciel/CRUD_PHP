<?php

	session_start();

	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	if(!isset($_SESSION['id']))
	{
		$_SESSION['id'] = 1;
		$id_usuario = $_SESSION['id'];
	} else {
		$_SESSION['id']++;
		$id_usuario = $_SESSION['id'];
	}

	if(isset($_POST['nome']))
	{
		$nome = $_POST['nome'];
		$email = $_POST['email'];

		$rua = $_POST['rua'];
		$bairro = $_POST['bairro'];
		$numero = $_POST['numero'];

		$sql1 = " INSERT INTO dados(nome, email, id) VALUES('$nome', '$email', $id_usuario) ";
		$sql2 = " INSERT INTO endereco(rua, bairro, numero, id_dado) VALUES('$rua', '$bairro', $numero, $id_usuario) ";

		$registro1 = mysqli_query($link, $sql1);
		$registro2 = mysqli_query($link, $sql2);

		if(!$registro1)
		{
			if(!$registro2)
			{
				die('Erro ao registrar aluno no banco');
			}
		} else {
			header('Location: index.php?cadastro=1');
		}

	}

?>