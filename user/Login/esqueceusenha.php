<?php
    include_once("../../themeUser/startbootstrap-modern-business-gh-pages/topo.php");
    include_once("conexao.php");
    
    if(isset($_POST["ok"])){
        $novasenha = substr(md5(time()),0,6);
        $nscriptografada = md5(md5($novasenha));
        $email = $mysqli->escape_string($_POST['email']);
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro[] = "E-mail inválido";
        }
        
        if(mail($email, "Sua nova Senha","Sua nova senha:".$novasenha)){
            $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die ($mysli->error);
        }
        
    }
?>

<html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="../../theme/ample-admin-lite/plugins/images/favicon.png">
        <title>Criar nova senha</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron" style="margin-top: 100px;margin-bottom: 150px;">
                <div class="row bg-title">
				    <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
				        <h4 class="page-title">Preencha o campo para envio da nova senha.</h4>
                    </div>
                  <br><br><br>        
                  <hr>
				</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <form method="POST" action="">
                                <input name="email" placeholder="Seu e-mail" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" />
                                <input name="ok" value="ok" type="submit" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" style="margin-top: 50px;" />
                            </form>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>    
    </body>
</html>

<?php
    include_once("../../themeUser/startbootstrap-modern-business-gh-pages/rodape.php");
?>