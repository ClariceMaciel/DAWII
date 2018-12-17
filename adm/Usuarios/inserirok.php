<?php
	include_once("../../sql/User.class.php");
	
	$objUsuarios = new User();
	$objUsuarios->nome = $_POST["nome"];
	$objUsuarios->email = $_POST["email"];
	//$objUsuarios->senha = $_POST["senha"];    
	$objUsuarios->tipo = $_POST["tipo"];

    if(isset($_POST["senha"])){
        $string = $_POST["senha"];
		$objUsuarios->senha = sha1($string);	
    }

	$retorno = $objUsuarios->InserirUser();
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "sabia que nao ia funcionar";
?>