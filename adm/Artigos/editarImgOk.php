<?php
	include_once("../../sql/Carregar.class.php");

	$objArtigos = new Artigos();
	$objArtigos->id = $_POST["id"];


	if($_FILES["imagem"]){
		$diretorio = "../../artigo/img/";
		$nomeImg = $_FILES["imagem"]["name"];
		$nomeTemporarioImg = $_FILES["imagem"]["tmp_name"];
		move_uploaded_file($nomeTemporarioImg, $diretorio.$nomeImg);

	}

	$objArtigos->imagem = $nomeImg;

	$retorno = $objArtigos->EditarImagem();
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "sabia que nao ia funcionar";


?>
