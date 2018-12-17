<?php
    //include_once("../../sql/anti_injection.php");
	include_once("../../sql/User.class.php");
	
	$objUsuarios = new User();
    
    //$nome = anti_injection($_POST["nome"]);

	$objUsuarios->nome = $_POST["nome"];
    $objUsuarios->email = $_POST["email"];
	//$objUsuarios->email = anti_injection($_POST["email"]);
	//$objUsuarios->senha = $_POST["senha"];
	$objUsuarios->tipo = "usuario" ;

    if(isset($_POST["senha"])){
        $string = $_POST["senha"];
		$objUsuarios->senha = sha1($string);	
    }

	$retorno = $objUsuarios->InserirUser();

	if($retorno){
			session_start();
			$_SESSION["id_user"] = $retorno->id;
			$_SESSION["usuario"] = true;
			
			header("Location:../Perfil/profile.php");
			
	}
	else
		echo "sabia que nao ia funcionar";
?>