<?php
	include_once("../../sql/Carregar.class.php");
	
	if(!$_GET["id"]){
		header("location:listar.php");
	}
	else{
		$id = $_GET["id"];
		$objeto = new User();
		$objeto->id = $id;
		$retorno = $objeto->excluir();
		
		if($retorno){
			echo "Excluido com sucesso!";
		}				
		else {
			echo "Não excluido";
		}
			
	}
?>

