<?php

	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$nome = $_POST['pesquisa'];

	$sql = " SELECT * FROM dados WHERE nome LIKE '%$nome%' ";

	$result = mysqli_query($link, $sql);

	if(!$result)
	{
		die('erro ao executar a qaury');
	}

	while($registro = mysqli_fetch_assoc($result))
	{
		echo '<a href="#" class="list-group-item">';
			echo '<strong style="text-align:center;">'.$registro['nome'].'</strong>';
		echo '</a>';
	}
	
?>