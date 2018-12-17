<?php
	class User{
		private $id;
		private $nome;
		private $email;
		private $senha;
		private $tipo;

		private $conexao;
		private $tabela;

		public function __construct(){
			$this ->conexao = mysqli_connect("127.0.0.1","root","","arquinuv") or die ("Erro ao conectar");
			mysqli_set_charset($this->conexao,"utf8");
			$this->tabela = "usuarios";
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

		public function InserirUser(){
			$sql = "INSERT INTO $this->tabela(nome,email,senha,tipo) values('$this->nome','$this->email','$this->senha','$this->tipo')";
			$retorno = mysqli_query($this->conexao, $sql);

			return $retorno;
		}

		public function RetornarUnico(){
			$sql = "SELECT * FROM $this->tabela where id=$this->id";
			$retorno = mysqli_query($this->conexao, $sql);
			$resultado = mysqli_fetch_assoc($retorno);  //mysqli_fetch_assoc separa cada informação do usuário para fazer SELECT

			if($resultado){
				$objeto = new User();
				$objeto->nome = $resultado['nome'];
				$objeto->email = $resultado['email'];
				$objeto->senha = $resultado['senha'];
				$objeto->id = $resultado['id'];

				$usuarioRetornado = $objeto;
			}
			else {
				$usuarioRetornado = null;
			}

			return $usuarioRetornado;
		}


		public function LoginUser(){
			$sql = "SELECT * FROM $this->tabela where email='$this->email' and senha='$this->senha' and tipo='usuario'";
			$retorno = mysqli_query($this->conexao, $sql);
			$resultado = mysqli_fetch_assoc($retorno);

			if($resultado){
				$objeto = new User();
				$objeto->id = $resultado['id'];

				$usuarioRetornado = $objeto;
			}
			else {
				$usuarioRetornado = null;
			}

			return $usuarioRetornado;
		}


		//functions adm

		public function LoginAdm(){
			$sql = "SELECT * FROM $this->tabela where email='$this->email' and senha='$this->senha' and tipo='administrador'";
			$retorno = mysqli_query($this->conexao, $sql);
			$resultado = mysqli_fetch_assoc($retorno);

			if($resultado){
				$objeto = new User();
				$objeto->id = $resultado['id'];

				$usuarioRetornado = $objeto;
			}
			else {
				$usuarioRetornado = null;
			}

			return $usuarioRetornado;
		}


		public function ListarUser(){
			$sql = "SELECT id,nome,email,senha,tipo FROM usuarios";
			$retorno = mysqli_query($this->conexao, $sql);

			$arrayObj[] = NULL;

			while($res = mysqli_fetch_assoc($retorno)){

				$obj = new User();
				$obj->id = $res["id"];
				$obj->nome = $res["nome"];
				$obj->email = $res["email"];
				$obj->senha = $res["senha"];
				$obj->tipo = $res["tipo"];

				$arrayObj[] = $obj;
			}

			return $arrayObj;

		}

		public function editar(){
			$sql = "UPDATE $this->tabela SET nome = '$this->nome', email = '$this->email', senha = '$this->senha' WHERE id = $this->id";
			$retorno = mysqli_query($this->conexao, $sql);
			return $retorno;
		}

		public function excluir(){
			$sql = "DELETE FROM $this->tabela WHERE id=$this->id";
			$retorno = mysqli_query($this->conexao, $sql);
			return $retorno;
		}



	}

?>
