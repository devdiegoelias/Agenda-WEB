<?php 
class informacaoController extends controller {

    public function index(){
        $dados = array();

        $this->loadTemplate('informacao', $dados);
    }

    public function buscar($id){
        $dados = array();

        $cliente = new Cliente();
        $info = $cliente->infoCliente($id);

        $dados['info'] = $info;
        $dados['id_cli'] = $id;
        $this->loadTemplate('informacao', $dados);
    }

    public function cadastroContato($i){
        $id = addslashes($i);
        $descricao = $_POST['descricao'];
        $numero = $_POST['contato'];

        $cliente = new Cliente();
        $cliente->salvContato($id, $descricao, $numero);
        header("Location: ".BASE_URL."informacao/buscar/".$id);
    }

    public function editContato($i){
        $dados = array();

        $id = addslashes($i);
        $cliente = new Cliente();

        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){

            $desc = addslashes($_POST['descricao']);
            $numero = addslashes($_POST['contato']);

            $cliente->AltContato($id, $desc, $numero);
        }

        $info = $cliente->infoContato($id);

        $dados['info'] = $info;
        $this->loadTemplate('editContato', $dados);
    }

    public function deletar(){
		$id = addslashes($_POST['id']);

		$cliente = new Cliente();
		$cliente->deletarContato($id);

		header("Location: ".BASE_URL);
	}
}

?>