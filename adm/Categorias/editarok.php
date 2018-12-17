<?php
	include_once("../../sql/Carregar.class.php");
	$objeto = new Categoria();
	$objeto->id = $_POST["id"];
	$objeto->nome = $_POST["nome"];
	$retorno = $objeto->editar();
	
	if($retorno)
		echo "Editado com sucesso!";
	else
		echo "Não editado";


?>