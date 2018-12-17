<?php
      include_once("../../sql/Carregar.class.php");

      $obj = new Artigos();

      $obj->titulo = $_POST["titulo"];
      $obj->num_pag = $_POST["num_pag"];
      $obj->descricao = $_POST["descricao"];
      $obj->v_previa = $_POST["v_previa"];
      //$obj->arquivo = $_FILE;
      //$obj->imagem = $_FILE;
      $obj->id_cat = $_POST["id_cat"];

      $retorno = $obj->Editar();

      if($retorno){
        echo "Editado com sucesso!";
      }else{
        echo "Não editado.";
      }

 ?>
