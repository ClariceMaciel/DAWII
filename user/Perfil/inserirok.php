<?php
	session_start();

	include_once("../../sql/Artigos.class.php");

	$objArtigo = new Artigos();
	$objArtigo->titulo = $_POST["titulo"];
	$objArtigo->data_pub = $_POST["data_pub"];
	$objArtigo->num_pag = $_POST["num_pag"];
	$objArtigo->descricao = $_POST["descricao"];
    $objArtigo->v_previa = $_POST["v_previa"];
	$objArtigo->id_cat = $_POST["id_cat"];
	$objArtigo->id_user = $_SESSION["id_user"];
		

	if($_FILES["arquivo"]){
		$diretorio = "../../artigo/arquivo/";
		$nome = $_FILES["arquivo"]["name"];
		$nomeTemporario = $_FILES["arquivo"]["tmp_name"];
		move_uploaded_file($nomeTemporario, $diretorio.$nome);
	}

	if($_FILES["imagem"]){
		$diretorio = "../../artigo/img/";
		$nomeImg = $_FILES["imagem"]["name"];
		$nomeTemporarioImg = $_FILES["imagem"]["tmp_name"];
		move_uploaded_file($nomeTemporarioImg, $diretorio.$nomeImg);

	}

	$objArtigo->arquivo = $nome;
	$objArtigo->imagem = $nomeImg;
	
	$retorno = $objArtigo->InserirArquivo();
	
		

	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "sabia que nao ia funcionar";
?>
