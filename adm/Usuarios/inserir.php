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
										<h4 class="page-title">Cadastrar Novo Usuário</h4></div>
								<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
										<ol class="breadcrumb">
												<li><a href="../Index/index.php">Dashboard</a></li>
												<li><a href="../Usuarios/listar.php">Usuários</a></li>
												<li class="active">Cadastrar Novo Usuário</li>
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

												Nome:<input type="text"  class="form-control" name="nome" required/>
												Email:<input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
												Senha:<input type="password" class="form-control" name="senha" required/>
												Tipo:<input type="text" class="form-control" name="tipo" required/>

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
