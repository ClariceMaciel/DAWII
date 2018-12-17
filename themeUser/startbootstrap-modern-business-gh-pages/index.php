<?php
	include_once("../../sql/Carregar.class.php");
	include_once("topo.php");
	
	$objArtigos = new Artigos();
	$resultado = $objArtigos->ListarArquivo();	

    
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

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/fundo_1.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Artigos Científicos</h3>
              <p>Dos mais variados temas.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/fundo_2.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Artigos Acadêmicos</h3>
              <p>Dê uma olhada.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/fundo_3.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Monografias</h3>
              <p>Não sabe o que é uma monografia?</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Explore alguns artigos.</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
	  
		<?php
			foreach(array_slice($resultado,0,3) as $local){       
				echo "
				<div class='col-lg-4 mb-4'>
				  <div class='card h-100'>
					<h4 class='card-header'>$local->titulo</h4>
					<div class='card-body'>
					  <p class='card-text'>".limita_caracteres($local->descricao,150)."</p>
					</div>
					<div class='card-footer'>
					  <a href='../../user/Artigos/single.php?id=$local->id' class='btn' style='background-color:#000046;color:white;'>Ler Mais</a> 
					</div>
				  </div>
				</div>
				";
			}         
		?>	
      </div>
      <!-- /.row -->  
		
	  <hr>
      <!-- Portfolio Section -->
      
	  <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="img/arquinuv.png" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Sobre Arquinuv</h2>
          <p>Nossa missão é oferecer um conjunto cada vez maior de ferramentas de aprendizagem on-line para ajudar no sucesso dos estudantes.</p>
          <p>Fazemos isso ao levar a todos os seus dispositivos o nosso crescente acervo de quase 2 milhões de documentos enviados por outros estudantes, dentre os quais, resumos de aula, trabalhos de pesquisa, artigos, monografias, TCCs, dissertações e resenhas de livros.</p>
          <p>Não sabe por onde começar? Comece pesquisando um tema específico ou navegue em nossa extensa lista de categorias, onde centenas de novos trabalhos são adicionados diariamente ao site.</p>
        </div>
      </div>
	  
	  
	  
      <!-- /.row -->
      <!-- Call to Action Section -->
	<hr>
		<div class="row mb-4">
			<div class="col-md-4">
			  <a class="btn btn-lg btn-secondary btn-block" href="../../user/Categorias/listar.php" >Veja todas as Categorias</a>
			</div>
		</div>
	
    </div>
    <!-- /.container -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	 <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/img_background.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="margin: 90px;">Aproveite, todo material está disponível gratuitamente!</h3>
              <p>Manda Ver!</p>
			  <p>obs: Para o acesso na íntegra dos artigos é necessário possuir cadastro.</p>
            </div>
          </div>
     </div>	
	</div>
<?php
	include_once("rodape.php");
?>
