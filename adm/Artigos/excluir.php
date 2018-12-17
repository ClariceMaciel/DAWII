<?php
  include_once("../../sql/Carregar.class.php");

  if(!$_GET["id"]){
    header("location:listar.php");
  }else{
    $id = $_GET["id"];
    $obj = new Artigos();
    $obj->id = $id;
    $retorno = $obj->Excluir();

    if($retorno){
      echo "Excluído com sucesso!";
    }else{
      echo "Não excluído.";
    }
  }

 ?>
