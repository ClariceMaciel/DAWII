<?php
	include_once("../../sql/Carregar.class.php");
	include_once("../../theme/ample-admin-lite/html/topo.php");

	if(!$_GET["id"]){
		header("location:listar.php");
	}
	else{
		$id = $_GET["id"];
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
									 <h4 class="page-title">Editar Artigo</h4></div>
							 <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
									 <ol class="breadcrumb">
											 <li><a href="../Index/index.php">Dashboard</a></li>
											 <li><a href="../Artigos/listar.php">Artigos</a></li>
											 <li class="active">Editar Imagem</li>
									 </ol>
							 </div>
							 <!-- /.col-lg-12 -->
					 </div>
					 <div class="row">
							 <div class="col-sm-12">
									 <div class="white-box">
											 <h3 class="box-title">Atualizar Imagem</h3>
											 <form method="POST" action="editarImgOk.php" enctype="multipart/form-data">
									 			Nova Imagem : <input class="form-control" type="file" name="imagem"/><br/>
									 			<input type="submit" value="Submeter" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="margin-top: 50px;" />
									 			<input class="form-control" type="hidden" name="id" value="<?php echo $id;?>" />

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
