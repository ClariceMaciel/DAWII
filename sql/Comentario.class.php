<?php 
	class Comentario{
		private $id;
		private $texto;
		private $id_artigo;
		private $id_user;
		
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
		
	public function AdicionarComentario(){
		$sql = "INSERT INTO $this->tabela(texto,id_artigo,id_user) 
		values('$this->texto',$this->id_artigo,$this->id_user)";
	}
	
	public function RetornarComentario($id_user,$id_artigo){
		$sql = "SELECT * FROM $this->tabela 
				WHERE comentario.id_user = id_user
				AND comentario.id_artigo = id_artigo";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;	
				
	}
		
	}
?>