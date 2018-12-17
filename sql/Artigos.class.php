<?php
	class Artigos{
		private $id;
		private $titulo;
		private $data_pub;
		private $num_pag;
		private $descricao;
        private $v_previa;
		private $arquivo;
		private $imagem;
		private $id_user;
		private $id_cat;
        

		private $conexao;
		private $tabela;

		public function __construct(){
			$this->conexao = mysqli_connect("127.0.0.1", "root", "", "arquinuv") or die ("Erro ao conectar");
			mysqli_set_charset($this->conexao,"utf8");
			$this->tabela = "artigos";
		}

		public function __destruct(){
			unset($this->link);
		}

		public function __get($key){
		return $this->$key;
		}

		public function __set($key, $value){
			$this->$key = $value;
		}

		public function InserirArquivo(){
			$sql = "INSERT INTO $this->tabela(titulo, data_pub, num_pag, descricao, v_previa, arquivo,imagem, id_user, id_cat)
			values('$this->titulo','$this->data_pub', $this->num_pag, '$this->descricao', '$this->v_previa','$this->arquivo','$this->imagem',$this->id_user,$this->id_cat)";
			$retorno = mysqli_query($this->conexao, $sql);
			return $retorno;
		}

		public function ListarArquivo($complemento=""){
			$sql = "SELECT $this->tabela.*,categoria.nome FROM $this->tabela INNER JOIN categoria ON $this->tabela.id_cat = categoria.id".$complemento;
			$retorno = mysqli_query($this->conexao, $sql);

			$arrayObj = NULL;

			while($res = mysqli_fetch_assoc($retorno)){
				$obj = new Artigos();
				$obj->id = $res["id"];
				$obj->titulo = $res["titulo"];
				$obj->data_pub = $res["data_pub"];
				$obj->num_pag = $res["num_pag"];
				$obj->descricao = $res["descricao"];
                $obj->v_previa = $res["v_previa"];
				$obj->arquivo = $res["arquivo"];
				$obj->imagem = $res["imagem"];
				$obj->id_user = $res["id_user"];
				$obj->id_cat = $res["id_cat"];

				$arrayObj[] = $obj;
			}

			return $arrayObj;
		}

		public function RetornarArquivoUnico(){
		$sql = "SELECT * FROM $this->tabela where id=$this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);

		if($resultado){
			$objeto = new Artigos();
			$objeto->id = $resultado['id'];
			$objeto->titulo = $resultado['titulo'];
			$objeto->data_pub = $resultado['data_pub'];
			$objeto->num_pag = $resultado['num_pag'];
			$objeto->descricao = $resultado['descricao'];
            $objeto->v_previa = $resultado["v_previa"];
			$objeto->arquivo = $resultado['arquivo'];
			$objeto->imagem = $resultado['imagem'];
			$objeto->id_user = $resultado['id_user'];
			$objeto->id_cat = $resultado['id_cat'];

			$ArquivoRetornado = $objeto;
		}
		else {
			$ArquivoRetornado = null;
		}

		return $ArquivoRetornado;

	}

	public function Excluir(){
		$sql = "DELETE FROM $this->tabela WHERE id = $this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}

	public function Editar(){
		$sql = "UPDATE $this->tabela SET titulo ='$this->titulo',num_pag=$this->num_pag,descricao='$this->descricao',v_previa='$this->v_previa',id_cat=$this->id_cat WHERE id = $this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}


	public function EditarImagem(){
		$sql = "UPDATE $this->tabela SET imagem='$this->imagem' WHERE id=$this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}


	public function EditarArquivo(){
		$sql = "UPDATE $this->tabela SET arquivo='$this->arquivo' WHERE id=$this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
        
    public function ListarArquivoPorCategoria($id){
        $sql = "SELECT artigos.*,categoria.id AS categoria FROM artigos
                INNER JOIN categoria ON artigos.id_cat = categoria.id
                WHERE id_cat = {$id}";
        $retorno = mysqli_query($this->conexao, $sql);
        $resultado = mysqli_fetch_assoc($retorno);
        
        $arrayObj = NULL;
        
        while($resultado = mysqli_fetch_assoc($retorno)){
				$objCat = new Artigos();
				$objCat->id = $res["id"];
				$objCat->titulo = $res["titulo"];
				$objCat->data_pub = $res["data_pub"];
				$objCat->num_pag = $res["num_pag"];
				$objCat->descricao = $res["descricao"];
                $objCat->v_previa = $res["v_previa"];
				$objCat->arquivo = $res["arquivo"];
				$objCat->imagem = $res["imagem"];
				$objCat->id_user = $res["id_user"];
				$objCat->id_cat = $res["id_cat"];

				$arrayObj[] = $objCat;
			}

			return $arrayObj;
        
    }    

	}

?>
