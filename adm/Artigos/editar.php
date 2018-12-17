<?php
      include_once("../../sql/Carregar.class.php");
      include_once("../../theme/ample-admin-lite/html/topo.php");

      if(!$_GET["id"]){
        header("Location:listar.php");
      }else{
        $id = $_GET["id"];
        $obj = new Artigos();
        $obj->id = $id;
        $unico = $obj->RetornarArquivoUnico();

        $objCat = new Categoria();
        $resultado = $objCat->ListarCategoria();
      }
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8"; />
 	</head>
 	<body>
 		<div id="page-wrapper">
 				<div class="container-fluid">
 						<div class="row bg-title">
 								<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
 										<h4 class="page-title">Cadastrar Novo Artigo</h4></div>
 								<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
 										<ol class="breadcrumb">
 												<li><a href="../Index/index.php">Dashboard</a></li>
                        <li><a href="../Artigos/listar.php">Artigos</a></li>
 												<li class="active">Editar Artigo</li>
 										</ol>
 								</div>
 								<!-- /.col-lg-12 -->
 						</div>
            <div class="row">
								<div class="col-sm-12">
										<div class="white-box">
												<h3 class="box-title">Preencha os Campos</h3>
                        <form method="POST" action="editarok.php">
                            Titulo: <input class="form-control" type="text" name="titulo" value="<?php echo $unico->titulo;?>"/></br>
                            Número de Páginas: <input class="form-control" type="number" name="num_pag" value="<?php echo $unico->num_pag;?>"/></br>
                            Descrição: <input class="form-control" type="text" name="descricao" value="<?php echo $unico->descricao;?>"/></br>
                            Vizualização Prévia: <input class="form-control" type="text" name="descricao" value="<?php echo $unico->v_previa;?>"/></br>    
                            Categoria: <select name="id_cat" class="form-control">
                                       <option value=""></option>

                                       <?php
                                            foreach($resultado as $dados){
                                              if($dados->$id == id_cat){
                                                  echo "<option value='$dados->id' selected>$dados->nome</option>";
                                              }
                                              else{
                                                echo "<option value='$dados->id' selected>$dados->nome</option>";
                                              }
                                            }
                                       ?>
                            Prévia: <input class="form-control" type="text" name="descricao" value="<?php echo $unico->v_previa;?>"/></br>
                            <input type="submit" value="Submeter"  class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="margin-top: 50px;"/>
                            <input type="hidden" name="id" value="<?php echo $unico->id;?>"/>

                        </form>

										</div>
								</div>
						</div>
						<!-- /.row -->
				</div>
			</body>
</html>

<?php
			include_once("../../theme/ample-admin-lite/html/rodape.php");
 ?>
