<?php 
	include_once("../../sql/Carregar.class.php");
	include_once("../../themeUser/startbootstrap-modern-business-gh-pages/topo.php");
	
	$objCategoria = new Categoria();
	$res = $objCategoria->ListarCategoria();

    $objArtigo = new Artigos();
    $resul = $objArtigo->ListarArquivo();

    function limita_caracteres($texto, $limite, $quebra = true){
       $tamanho = strlen($texto);
       if($tamanho <= $limite){ //Verifica se o tamanho do texto é menor ou igual ao limite
          $novo_texto = $texto;
       }else{ // Se o tamanho do texto for maior que o limite
          if($quebra == true){ // Verifica a opção de quebrar o texto
             $novo_texto = trim(substr($texto, 0, $limite))."...";
          }else{ //corta $texto na última palavra antes do limite
             $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
             $novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; // Corta o $texto
          }
       }
        return $novo_texto; // Retorna o valor formatado
    }
?>

<html lang="en">
  <body>
	  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		 <div class="carousel-inner" role="listbox">
			  <!-- Slide One - Set the background image for this slide in the line below -->
			  <div class="carousel-item active" style="background-image: url('../../themeUser/startbootstrap-modern-business-gh-pages/img/cat_fundo.png')">
				<div class="carousel-caption d-none d-md-block">	
				  <h3 style="padding-bottom: 70px;">Categorias</h3>	
					<div class="row" style="padding-bottom: 90px">
						<?php
							foreach(array_slice($res,0,3) as $dado){
								echo "<div class='col-lg-4'>
										  <ul class='list-unstyled mb-0'>
											<li>
											  <a href='results.php?id=$dado->id' style='color: white;'>$dado->nome</a>
											</li>
										  </ul>
										</div>";								
							}
						
						?>
						<?php
							foreach(array_slice($res,3,6) as $dado){
								echo "<div class='col-lg-4'>
										  <ul class='list-unstyled mb-0'>
											<li>
											  <a href='results.php?id=$dado->id' style='color: white;'>$dado->nome</a>
											</li>
										  </ul>
										</div>";								
							}
						
						?>
					</div>
					
				  <!-- Search Widget -->
				  <div>
					<div class="card-body">
					  <div class="input-group">
						<input type="text" class="form-control" placeholder="Procurando dori..."/>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>	
		</div>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"> Trabalhos 
        <small>Recentes</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../../themeUser/startbootstrap-modern-business-gh-pages/index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Categorias</li>
      </ol>

      <div class="row">
        <?php 
             foreach(array_slice($resul,0,3) as $local){
                 echo"
                  <div class='col-lg-4 col-sm-6 portfolio-item'>
                  <div class='card h-100'>
                    <a href='../../user/Artigos/single.php?id=$local->id'><img class='card-img-top' src='http://placehold.it/700x400' alt=''></a>
                    <div class='card-body'>
                      <h4 class='card-title'>
                        <a href='../../user/Artigos/single.php?id=$local->id'>$local->titulo</a>
                      </h4>
                      <p class='card-text'>".limita_caracteres($local->descricao,150)."</p>
                    </div>
                  </div>
                </div>  
            ";        
         }
             
        ?>  
      </div>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->
  </body>

</html>
<?php
	include_once("../../themeUser/startbootstrap-modern-business-gh-pages/rodape.php");
?>