<?php
	include_once("../../sql/Carregar.class.php");
	include_once("../../themeUser/startbootstrap-modern-business-gh-pages/topo.php");
    
	
	if(!$_GET["id"]){
		header("location:listar.php");    //Listar Arquivo Unico
	}
	else{
		$id = $_GET["id"];
		$obj = new Artigos();
		$obj->id = $id;
		$var = $obj->RetornarArquivoUnico();
	}

    //listar Categoria do arquivo
    $id_cat = $var->id_cat;
    $objCat = new Categoria();
    $objCat->id = $id_cat;
    $res = $objCat->RetornarCategoriaUnica();

?>
<html>
	 <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        <small><?php echo"$res->nome"?></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../../themeUser/startbootstrap-modern-business-gh-pages/index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Artigo</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-5">
          <img class="img-fluid rounded mb-4" src="../../Artigo/img/<?php echo $var->imagem;?>" width="360" heigth="370" alt="">
        </div>
        <div class="col-lg-6">
          <h2><?php echo $var->titulo;?></h2>
          <p><?php echo $var->descricao;?></p>
		  
		  <div class="row mb-6">
            <div class="col-md-6" style="margin:0px auto;padding-top: 60px;">
			  <?php echo"<a class='btn btn-lg btn-secondary btn-block' href='listar.php?id=".$var->id."'>Ler documento completo</a>";?>
			</div>
		</div>
        </div>		
      </div>
	</div>  
    <div class="container">
    <hr>    '
    <!-- Page Heading/Breadcrumbs -->
      <div class="jumbotron">
        <p>Amostra de Texto.</p>
        <hr> 
        <?php
            echo"
                <div style='margin:60px;'>
                    $var->v_previa
                </div>    
            ";
        ?>        
        <div class="row mb-4">
            <div class="col-md-6" style="margin:0px auto;">
			  <a class="btn btn-lg btn-secondary btn-block" href="listar.php">Ler documento completo</a>
			</div>
		</div>
      </div>
      <!-- /.jumbotron -->
        <!-- Page Content -->
    <div class="container">
       <!-- Date/Time -->
          <p>Postado em: <?php echo $var->data_pub;?></p>     
      <!-- Page Heading/Breadcrumbs -->
      <hr>            
      <h1 class="mt-4 mb-3">FAQ
        <small>Subheading</small>
      </h1>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">          
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsible Group Item #1</a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>

    </div>
        
    <!-- Comentários -->    
    <div class="col-lg-8">    
        <hr>
        
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        
          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        
          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
             </div>
          </div>         
    </div>
  <!-- fim comment-->        
 </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="../../themeUser/startbootstrap-modern-business-gh-pages/vendor/jquery/jquery.min.js"></script>
    <script src="../../themeUser/startbootstrap-modern-business-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
<?php
	include_once("../../themeUser/startbootstrap-modern-business-gh-pages/rodape.php");
?>