<?php
	include_once("../../sql/Carregar.class.php");

	$objArtigos = new Artigos();
	$objArtigos->id = $_POST["id"];


	if($_FILES["arquivo"]){
		$diretorio = "../../artigo/arquivo/";
		$nome = $_FILES["arquivo"]["name"];
		$nomeTemporario = $_FILES["arquivo"]["tmp_name"];
		move_uploaded_file($nomeTemporario, $diretorio.$nome);

	}

	$objArtigos->arquivo = $nome;

	$retorno = $objArtigos->EditarArquivo();
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "sabia que nao ia funcionar";


?>
