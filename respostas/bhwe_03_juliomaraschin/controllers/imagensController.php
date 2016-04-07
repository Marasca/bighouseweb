<?php
class ImagensController extends BaseController {
	
	protected $imagem;
	
	public function __construct() {
		$this->imagem = new Imagem();
	}
	
	public function index() {
		$imagens = $this->imagem->findAll();
		$this->view('imagens/index', compact('imagens'));
	}

	public function inserir() {
		$this->view('imagens/inserir');
	}
	
	public function salvar() {
		$extensoesPermitidas = array('jpg', 'jpeg', 'gif', 'png');
		$extensao = strtolower(end(explode('.', $_FILES['imagem']['name'])));
		
		if (!in_array($extensao, $extensoesPermitidas))
			$this->redirect('index.php?c=imagens&a=inserir', 'Arquivo em formato inválido.', 'danger');
		
		$destino = 'uploads/';
		$arquivo = $_FILES['imagem']['tmp_name'];
		$nome = time().'_'.rand(1000, 9999).'.'.$extensao;
		
		if (!move_uploaded_file($arquivo, $destino.$nome))
			$this->redirect('index.php?c=imagens&a=inserir', 'Não foi possível enviar o arquivo.', 'danger');
		
		$this->imagem->nome = trim($_POST['nome']);
		$this->imagem->imagem = $nome;
		
		$this->imagem->insert();
		$this->redirect('index.php?c=imagens&a=index', 'Imagem inserida com sucesso!');
	}
	
	public function excluir() {
		$id = (int) $_GET['id'];
		$imagem = $this->imagem->findById($id);
		
		if (file_exists('uploads/'.$imagem['imagem']))
			unlink('uploads/'.$imagem['imagem']);

		$this->imagem->id = $id;
		$this->imagem->delete();
		
		$this->redirect('index.php?c=imagens&a=index', 'Imagem excluída com sucesso!');
	}
	
}
?>