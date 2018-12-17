<?php
    include_once("../../sql/Carregar.class.php");
	include_once("../../themeUser/startbootstrap-modern-business-gh-pages/topo.php");
	
	if(!$_GET["id"]){
		header("location:listar.php");
	}
	else{
		$id = $_GET["id"];
		$obj = new Categoria();
		$obj->id = $id;
		$var = $obj->RetornarCategoriaUnica();
	}  
    
     $objArtigo = new Artigos();
     $res = $objArtigo->ListarArquivo();

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
<html>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Arquivos 
        <small>Nesta Categoria</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../../themeUser/startbootstrap-modern-business-gh-pages/index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="listar.php">Categorias</a>
        </li>
        <li class="breadcrumb-item active"><?php echo"$var->nome"?></li>
      </ol>

      <div class="row">
        <?php 
            foreach($res as $local){
            if ($id==$local->id_cat){    
              echo"                  
                <div class='col-lg-4 col-sm-6 portfolio-item'>
                  <div class='card h-100''>
                    <a href='../Artigos/single.php?id=$local->id'><img class='card-img-top' src='http://placehold.it/700x400' alt=''></a>
                    <div class='card-body'>
                      <h4 class='card-title'>
                        <a href='../Artigos/single.php?id=$local->id'>$local->titulo</a>
                      </h4>
                      <p>".limita_caracteres($local->descricao,150)."</p>
                    </div>
                  </div>
                </div>
              ";  
            }
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
</html>

<?php
	include_once("../../themeUser/startbootstrap-modern-business-gh-pages/rodape.php");
?>