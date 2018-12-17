<?php
	include_once("../../sql/Carregar.class.php");
	include_once("../../theme/ample-admin-lite/html/topo.php");

	if(!isset($_SESSION['adm'])){
			header("Location:../Login/login.php");
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
										<h4 class="page-title">Cadastrar Nova Categoria</h4></div>
								<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
										<ol class="breadcrumb">
												<li><a href="../Index/index.php">Dashboard</a></li>
												<li><a href="../Categorias/listar.php">Categorias</a></li>
												<li class="active">Cadastrar Categoria</li>
										</ol>
								</div>
								<!-- /.col-lg-12 -->
						</div>


						<!-- /row -->
						<div class="row">
								<div class="col-sm-12">
										<div class="white-box">
												<h3 class="box-title">Preencha os Campos</h3>
												<form method="POST" action="inserirok.php">

												Nome da Categoria:<input type="text" class="form-control" name="nome"/>

												<input type="submit" name="botao" value="Submeter" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="margin-top: 50px;"/>
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
