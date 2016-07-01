<?php
	class produto_model{
		private $DB;
		private $produtos;

		function __construct(){
			$this->DB = conecta::getConnection();
			$this->produtos =  array();
		}
		
		function get(){
			$query= $this->DB->query("SELECT * FROM produtos");
			while($fila=$query->fetch_assoc()){
				$this->produtos[] = $fila;

			}
			return $this->produtos;
		}



		function getId($_id){
			$query = $this->DB->query("SELECT *  FROM produtos WHERE id= '$_id'");
			while ($fila = $query->fetch_assoc()){
				$this->produtos = $fila;
			}
			return $this->produtos;

		}

		public function delete($_id){
			$sql = "DELETE FROM produtos WHERE id='$_id'";
			mysqli_query($this->DB, $sql) or die ('error \n'.mysqli_error($this->DB));

		}

		
		
		function add($data){
			$sql = "INSERT INTO produtos (nome,preco) VALUES".
			"('".$data['nome']."','".$data['preco']."')";
			mysqli_query($this->DB, $sql) or die ('error \n'.mysqli_error($this->DB));
		
		}


			function editar($data,$_id){
				$sql = "UPDATE produtos SET nome='".$data['nome']."',
				preco='".$data['preco']."'
				WHERE id = $_id";
			mysqli_query($this->DB, $sql) or die ('error \n'.mysqli_error($this->DB));
	}


	}

?>