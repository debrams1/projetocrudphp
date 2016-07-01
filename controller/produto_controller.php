<?php

require_once 'model/produto_model.php';

class produto_controller{
	private $model_e;

	function __construct(){
		$this->model_e= new produto_model();
	}

	function index(){
		$title = "Produtos";
		$query = $this->model_e->get();
		require_once 'view/header.php';
		require_once 'view/index.php';
		require_once 'view/footer.php';

	}


		function produto(){
			$data = NULL;
			if (isset($_REQUEST['_id'])){
				$data = $this->model_e->getId($_REQUEST['_id']);
			}
			$title = "Produtos";
			$query = $this->model_e->get();
			require_once 'view/header.php';
			require_once 'view/produto.php';
			require_once 'view/footer.php';
	}



	function salvar_produto(){
		$data['nome']= $_REQUEST['txt_nome'];
		$data['preco']= $_REQUEST['txt_preco'];

		$_id =$_REQUEST['txtid'];
		$_id > 0?
		 $this->model_e->editar($data,$_id):
		$this->model_e->add($data);
		header('Location:index.php');

	}


	function delete(){
		$_id = $_REQUEST['_id'];
		$this->model_e->delete($_id);
		header('Location: index.php');
	}





}
?>