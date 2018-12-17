<?php
	include_once("../../sql/Carregar.class.php");
	$objeto = new User();
	$objeto->nome = $_POST["nome"];
	$objeto->email = $_POST["email"];
	$objeto->senha = $_POST["senha"];
	$objeto->id = $_POST["id"];
	$retorno = $objeto->editar();
	
	if($retorno)
		echo "Editado com sucesso!";
	else
		echo "Não editado";


?>