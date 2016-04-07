<?php
class AnexosController extends BaseController {
	
	protected $anexo;
	
	public function __construct() {
		$this->anexo = new Anexo();
	}
	
	public function index() {
		$anexos = $this->anexo->findAll();
		$this->view('anexos/index', compact('anexos'));
	}

	public function inserir() {
		$this->view('anexos/inserir');
	}
	
	public function salvar() {
		$extensoesPermitidas = array('zip', 'rar', 'doc', 'docx', 'pdf', 'txt');
		$extensao = strtolower(end(explode('.', $_FILES['anexo']['name'])));
		
		if (!in_array($extensao, $extensoesPermitidas))
			$this->redirect('index.php?c=anexos&a=inserir', 'Arquivo em formato inválido.', 'danger');
		
		$destino = 'uploads/';
		$arquivo = $_FILES['anexo']['tmp_name'];
		$nome = time().'_'.rand(1000, 9999).'.'.$extensao;
		
		if (!move_uploaded_file($arquivo, $destino.$nome))
			$this->redirect('index.php?c=anexos&a=inserir', 'Não foi possível enviar o arquivo.', 'danger');
		
		$this->anexo->nome = trim($_POST['nome']);
		$this->anexo->anexo = $nome;
		
		$this->anexo->insert();
		$this->redirect('index.php?c=anexos&a=index', 'Anexo inserido com sucesso!');
	}
	
	public function excluir() {
		$id = (int) $_GET['id'];
		$anexo = $this->anexo->findById($id);
		
		if (file_exists('uploads/'.$anexo['anexo']))
			unlink('uploads/'.$anexo['anexo']);

		$this->anexo->id = $id;
		$this->anexo->delete();
		
		$this->redirect('index.php?c=anexos&a=index', 'Anexo excluído com sucesso!');
	}
	
}
?>