<?php
	class Categoria{
		private $id;
		private $nome;
		
		private $tabela;
		private $conexao;
		
		public function __construct(){
			$this->conexao = mysqli_connect("127.0.0.1","root","","arquinuv") or die ("Erro ao conectar");
			mysqli_set_charset($this->conexao,"utf8");
			$this->tabela = "categoria";
		}
		
		public function __destruct(){
			unset($this->link);
		}
		
		public function __get($key){
			return $this->$key;
		}
		
		public function __set($key,$value){
			$this->$key = $value;
		}
		
		public function InserirCategoria(){
			$sql = "INSERT INTO $this->tabela(nome) values('$this->nome')";
			$retorno = mysqli_query($this->conexao,$sql);
			return $retorno;
		}
		
		public function ListarCategoria(){
			$sql = "SELECT * FROM $this->tabela";
			$retorno = mysqli_query($this->conexao,$sql);
			
			$arrayObj = NULL;
			
			while($res = mysqli_fetch_assoc($retorno)){
				$obj = new Categoria();
				$obj->id = $res["id"];
				$obj->nome = $res["nome"];
				
				$arrayObj[] = $obj;
			}
			
			return $arrayObj;
		}
		
		public function RetornarCategoriaUnica(){
			$sql = "SELECT * FROM $this->tabela WHERE id = $this->id";
			$retorno = mysqli_query($this->conexao,$sql);
			$resultado = mysqli_fetch_assoc($retorno);
			
			if($resultado){
				$objeto = new Categoria();
				$objeto->id = $resultado['id'];
				$objeto->nome = $resultado['nome'];
				
				$categoriaRetornada = $objeto;
			}else{
				$categoriaRetornada = NULL;
			}
			
			return $categoriaRetornada;
			
		}
		
		public function editar(){
			$sql = "UPDATE $this->tabela SET nome = '$this->nome' WHERE id = $this->id";
			$retorno = mysqli_query($this->conexao,$sql);
			return $retorno;
		}
		
		public function excluir(){
			$sql = "DELETE FROM $this->tabela WHERE id= $this->id";
			$retorno = mysqli_query($this->conexao,$sql);
			return $retorno;
		}			
	}
?>