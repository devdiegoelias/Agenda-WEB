<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$cliente = new Cliente();

		if(!empty($_GET['busca'])){
			$b = $_GET['busca'];
		} else {
			$b = '';
		}

		$listCliente = $cliente->listCliente($b);
			
		$dados['listCliente'] = $listCliente;
		$this->loadTemplate('home', $dados);
	}

	public function cadastro(){
		$dados = array();

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$dataN = addslashes($_POST['dataNascimento']);

		$cliente = new Cliente();
		$cliente->cadastrar($nome, $email, $dataN);
		header("Location: ".BASE_URL);
	}

	public function editar($i){
		$dados = array();

		$id = addslashes($i);
		$cliente = new Cliente();

		if(isset($_POST['nome']) && !empty($_POST['nome'])){

			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$dataN = $_POST['dataNascimento'];

			$cliente->AltCliente($id, $nome, $email, $dataN);


		}

		$infoClienteId = $cliente->infoClienteId($id);

		$dados['infoCliente'] = $infoClienteId;
		$this->loadTemplate('edit', $dados);
	}

	public function deletar(){
		$id = addslashes($_POST['id']);

		$cliente = new Cliente();
		$cliente->deletarCliente($id);

		header("Location: ".BASE_URL);
	}
}