<?php
	include_once("../../sql/Carregar.class.php");
	
	$obj = new User();
	$obj->email = $_POST['email'];
    //$obj->senha = $_POST['senha'];

    if(isset($_POST["senha"])){
        $string = $_POST["senha"];
		$obj->senha = sha1($string);	
    }
	
	$retorno = $obj->LoginUser();
	
	if($retorno){
			session_start();
			$_SESSION["id_user"] = $retorno->id;
			$_SESSION["usuario"] = true;
			
			header("Location:../../themeUser/startbootstrap-modern-business-gh-pages/index.php");
			
	}
	else{
		header("Location:login.php?msg=error");
	}

    
    // incluir a funcionalidade do recaptcha
    require_once "recaptchalib.php";

    // definir a chave secreta
    $secret = "6LfkyH8UAAAAALZZBdwpcgtyRzcmn5wAw3pEuwvf";

    // verificar a chave secreta
    $response = null;
    $reCaptcha = new ReCaptcha($secret);

    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
    }

    // deu tudo certo?
    if ($response != null && $response->success) {
        // processar o formulario
    }
?>