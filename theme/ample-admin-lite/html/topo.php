<?php
	session_start();

	if(!isset($_SESSION['adm'])){
		header("Location:../Login/login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../../theme/ample-admin-lite/plugins/images/favicon.png">
    <title>Arquinuv Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../theme/ample-admin-lite/html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../../theme/ample-admin-lite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../../theme/ample-admin-lite/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../../theme/ample-admin-lite/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../theme/ample-admin-lite/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../../theme/ample-admin-lite/html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../theme/ample-admin-lite/html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../../theme/ample-admin-lite/html/css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="../Index/index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../../theme/ample-admin-lite/html/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../../theme/ample-admin-lite/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../../theme/ample-admin-lite/html/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../../theme/ample-admin-lite/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" style="background:#071d42;" href="../../adm/Login/logout.php"><b class="hidden-xs">Logout</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="../Index/index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Perfil ADM</a>
                    </li>
                    <li>
                        <a href="../Usuarios/listar.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Usuários</a>
                    </li>
                    <li>
                        <a href="../Artigos/listar.php" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Artigos</a>
                    </li>
                    <li>
                        <a href="../Categorias/listar.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Categorias</a>
                    </li>

                </ul>
            </div>

        </div>
