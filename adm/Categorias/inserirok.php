<?php
	include_once("../../sql/Categoria.class.php");
	
	$objCategoria = new Categoria();
	$objCategoria->nome = $_POST["nome"];

	$retorno = $objCategoria->InserirCategoria();
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "sabia que nao ia funcionar";
?>