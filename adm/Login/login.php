<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="icon" type="image/png" sizes="16x16" href="../../theme/ample-admin-lite/plugins/images/favicon.png">

    <title>Admin Login</title>
    <link href="../../theme/ample-admin-lite/html/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="../../theme/ample-admin-lite/html/less/icons/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../theme/ample-admin-lite/html/css/style_login.css" rel="stylesheet">
    <link href="../../theme/ample-admin-lite/html/assets/css/style-responsive.css" rel="stylesheet">

  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" action="loginok.php" method="POST">
		        <h2 class="form-login-heading">Admin Login</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="User Email" name="email" autofocus required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="senha" required><br><br>
		            <button class="btn btn-theme btn-block" type="submit">Submit</button>
		            <button class="btn btn-theme btn-block" type="reset">Reset</button>
		            <hr>
		        </div>
		      </form>

	  	</div>
	  </div>

    <script src="../../theme/ample-admin-lite/html/assets/js/jquery.js"></script>
    <script src="../../theme/ample-admin-lite/html/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../theme/ample-admin-lite/html/assets/js/jquery.backstretch.min.js"></script>
  </body>
</html>

<?php
	if(isset($_GET['msg'])){
		echo "<script>alert('Login e/ou Senha não cadastrados.');</script>";
	}

?>
