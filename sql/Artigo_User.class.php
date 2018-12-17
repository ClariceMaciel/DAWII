<?php
	class Artigo_User{
		private $id_user;
		private $id_artigo;

		private $tabela;
		private $conexao;

		public function __construct(){
			$this->conexao = mysqli_connect("127.0.0.1","root","","arquinuv")
			or die ("Erro ao conectar");
			mysqli_set_charset($this->conexao,"utf8");
			$this->tabela = "artigo_user";
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










	}


?>
