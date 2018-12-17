<?php
	include_once("../../sql/Carregar.class.php");
	include_once("../../theme/ample-admin-lite/html/topo.php");

	$objUsuarios = new User();
	$resultado = $objUsuarios->ListarUser();
?>


<html>
	<head></head>
	<body>
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
		<div class="container-fluid">
				<div class="row bg-title">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h4 class="page-title">Usuários</h4> </div>
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<a href="inserir.php" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Inserir Usuário</a>
								<ol class="breadcrumb">
										<li><a href="../Index/index.php">Dashboard</a></li>
										<li class="active">Usuários</li>
								</ol>
						</div>
						<!-- /.col-lg-12 -->
				</div>
				<!-- /row -->
				<div class="row">
						<div class="col-sm-12">
								<div class="white-box">
										<h3 class="box-title">Usuários Cadastrados</h3>
										<div class="table-responsive">
												<table class="table">
														<thead>
																<tr>
																		<th>#</th>
																		<th>Nome</th>
																		<th>Email</th>
																		<th>Senha</th>
																		<th>Tipo</th>
																		<th colspan="2">Action</th>
																</tr>
														</thead>
														<tbody>
															<?php
																foreach($resultado as $local){
																	echo "<tr>
																					<td>$local->id</td>
																					<td>$local->nome</td>
																					<td>$local->email</td>
																					<td>$local->senha</td>
																					<td>$local->tipo</td>
																					<td><a href='editar.php?id=$local->id'>Editar</a></td>
																					<td><a href='excluir.php?id=$local->id'>Excluir</a></td>
																		 		</tr>";
																}
															?>
														</tbody>
												</table>
										</div>
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
