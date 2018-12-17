<?php
	include_once("../../sql/Carregar.class.php");
	include_once("../../theme/ample-admin-lite/html/topo.php");

	if(!isset($_SESSION['adm'])){
			header("Location:../Login/login.php");
	}

	$objCategoria = new Categoria();
	$resultado = $objCategoria->ListarCategoria();

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
												<li class="active">Cadastrar Artigo</li>
										</ol>
								</div>
								<!-- /.col-lg-12 -->
						</div>


						<!-- /row -->
						<div class="row">
								<div class="col-sm-12">
										<div class="white-box">
												<h3 class="box-title">Preencha os Campos</h3>
												<form method="POST" action="inserirok.php" enctype="multipart/form-data">

												Titulo:<input type="text" class="form-control" name="titulo"/><br/>
												Data de Publicação:<input type="date" class="form-control" name="data_pub"/><br/>
												Número de páginas:<input type="number" class="form-control" name="num_pag"/><br/>
												Descrição:<input type="text" class="form-control" name="descricao"/><br/>
												Arquivo:<input type="file" class="form-control" name="arquivo"/><br/>
												Imagem:<input type="file" class="form-control" name="imagem"/><br/>
                                                Prévia:<input type="text" class="form-control" name="v_previa"/><br/>    
												Categoria:<select class="form-control" name="id_cat">
												<!--id_user: inserindo com ADM -->

												<option class="form-control" value="" >Selecione</option>
												<?php
													foreach($resultado as $dados){
														echo "<option value='$dados->id'>$dados->nome</option>";

													}

												?>


												</select><br/>
												<br/>
												<input type="submit" name="botao" value="submeter" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="margin-top: 50px;"/>
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
