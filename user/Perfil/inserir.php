<?php
	include_once("../../sql/Carregar.class.php");
	include_once("../../themeUser/startbootstrap-modern-business-gh-pages/topo.php");

	if(!isset($_SESSION['usuario'])){
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
		<div class="container">
                <ol class="breadcrumb" style="margin: 40px;">
                    <li class="breadcrumb-item">
                      <a href="../../themeUser/startbootstrap-modern-business-gh-pages/index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="profile.php">Perfil</a>
                    </li>
                    <li class="breadcrumb-item active">Enviar Artigo</li>
                </ol>
				<div class="jumbotron" style="margin: 40px;">
						<div class="row bg-title">
								<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
										<h4 class="page-title">Preencha os campos</h4>
                                </div>
								<!-- /.col-lg-12 -->
						</div>
                    <hr>
                    <div class="row">
								<div class="col-sm-12">
										<div class="white-box">
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
												<input type="submit" name="botao" value="Submeter" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="margin-top: 50px;"/>
												</form>

										</div>
								</div>
				    </div>
						<!-- /.row -->
                </div>
        </div>
    </body>
</html>

<?php
    include_once("../../themeUser/startbootstrap-modern-business-gh-pages/rodape.php");
?>
