<?php

	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$id_usuario = $_GET['id'];

	$sql = " select d.id_dado, d.id, e.id_endereco, e.id_dado as id_end from dados as d JOIN endereco as e ON(d.id = e.id_dado) ";

	$resultado = mysqli_query($link, $sql);

	$registro = mysqli_fetch_assoc($resultado);

	$id_dado = $registro['id_dado'];
	$id = $registro['id'];
	$id_endereco = $registro['id_endereco'];
	$id_end = $registro['id_end'];

	$excluir1 = " DELETE FROM dados WHERE id_dado = $id_dado AND id = $id";
	$excluir2 = " DELETE FROM endereco WHERE id_endereco = $id_endereco AND id_dado = $id_end ";

	$result1 = mysqli_query($link, $excluir1);
	$result2 = mysqli_query($link, $excluir2);

	if(!$result1)
	{
		if(!$result2)
		{
			die('Não foi possivel excluir dados do banco');
		}
	} else {
		header('Location: index.php?delete_success=1');
	}



?>