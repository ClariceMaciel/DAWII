<?php
    include_once("../../sql/Carregar.class.php");
    include_once("../../themeUser/startbootstrap-modern-business-gh-pages/topo.php");
    
    if(!isset($_SESSION['usuario'])){
			header("Location:../../themeUser/startbootstrap-modern-business-gh-pages/index.php");
	}

    $id = $_SESSION['id_user'];
    $objUser = new User();
    $objUser->id = $id;
    $res = $objUser->RetornarUnico();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <!-- animation CSS -->
    <link href="../../theme/ample-admin-lite/html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../theme/ample-admin-lite/html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../../theme/ample-admin-lite/html/css/colors/default.css" id="theme" rel="stylesheet">
    
</head>
       <body>
        <div id="page-wrapper" style="margin-left:10px;">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Página do Usuário</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="../Login/logout.php" class="btn pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="background-color:#000046; color: white;" >Logout</a>
                        <a href="#" target="_blank" class="btn pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="background-color:#000046; color: white;" >Meu Acervo</a>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../../theme/ample-admin-lite/plugins/images/large/back_user_1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="../../theme/ample-admin-lite/plugins/images/users/user.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white"><?php echo $res->nome;?></h4>
                                        <h5 class="text-white"><?php echo $res->email;?></h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-8 col-sm-4 text-center" >
                                </div>
                                <div class="col-md-8 col-sm-4 text-center">
                                     <a href="../Perfil/inserir.php" target="_blank" class="btn pull-right hidden-xs hidden-sm waves-effect waves-light" style="background-color:#000046; color: white; margin: 10px;">Enviar Artigo</a>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="editarok.php">
                                <div class="form-group">
                                    <label class="col-md-12">Nome</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="<?php echo $res->nome?>" class="form-control form-control-line" name="nome"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="<?php echo $res->email?>" class="form-control form-control-line" name="email" id="example-email"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Senha</label>
                                    <div class="col-md-12">
                                        <input type="password" value="password" class="form-control form-control-line" name="senha"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Message</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Selecione Região</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Sul</option>
                                            <option>Norte</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Atualizar Perfil</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../../theme/ample-admin-lite/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../theme/ample-admin-lite/html/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../../theme/ample-admin-lite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../../theme/ample-admin-lite/html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../theme/ample-admin-lite/html/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../theme/ample-admin-lite/html/js/custom.min.js"></script>
</body>

</html>
<?php
    include_once("../../themeUser/startbootstrap-modern-business-gh-pages/rodape.php");
?>
