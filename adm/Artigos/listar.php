<?php
	include_once("../../sql/Carregar.class.php");
	include_once("../../theme/ample-admin-lite/html/topo.php");

	$objArtigo = new Artigos();
	$resultado = $objArtigo->ListarArquivo();
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
										<h4 class="page-title">Artigos</h4></div>
								<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
									<a href="inserir.php" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Inserir Novo Artigo</a>
										<ol class="breadcrumb">
												<li><a href="../Index/index.php">Dashboard</a></li>
												<li class="active">Artigos</li>
										</ol>
								</div>
								<!-- /.col-lg-12 -->
						</div>
						<!-- /row -->
						<div class="row">
								<div class="col-sm-12">
										<div class="white-box">
												<h3 class="box-title">Artigos Existentes</h3>
												<div class="table-responsive">
														<table class="table">
																<thead>
																		<tr>
																				<th>#</th>
																				<th>Título</th>
																				<th>Data de Publicação</th>
																				<th>Número de Páginas</th>
																				<th>Descrição</th>
                                                                                <th>Prévia</th>
																				<th>Arquivo</th>
																				<th>Imagem</th>
																				<th># Usuário</th>
																				<th>Categoria</th>
																				<th colspan="4">Action</th>
																		</tr>
																</thead>
																<tbody>
																<?php
																		foreach($resultado as $local){
																			echo "<tr>
																							<td>$local->id</td>
																							<td>$local->titulo</td>
																							<td>$local->data_pub</td>
																							<td>$local->num_pag</td>
																							<td>$local->descricao</td>
                                                                                            <td>$local->v_previa</td>
																							<td><img src='../../artigo/arquivo/$local->arquivo'width='20'/></td>
																							<td><img src='../../artigo/img/$local->imagem'width='70'/></td>
																							<td>$local->id_user</td>
																							<td>$local->id_cat</td>
																							<td><a href='editar.php?id=$local->id'>Editar</a></td>
																							<td><a href='excluir.php?id=$local->id'>Excluir</a></td>
																							<td><a href='editarArquivo.php?id=$local->id'>Editar Arquivo</a></td>
																							<td><a href='editarImg.php?id=$local->id'>Editar Imagem</a></td>
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
