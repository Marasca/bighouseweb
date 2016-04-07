<?php
class ArtigosController extends BaseController {
	
	protected $artigo;
	
	public function __construct() {
		$this->artigo = new Artigo();
	}
	
	public function index() {
		$artigos = $this->artigo->findAll();
		$this->view('artigos/index', compact('artigos'));
	}

	public function inserir() {
		$this->view('artigos/inserir');
	}
	
	public function editar() {
		$id = (int) $_GET['id'];
		$artigo = $this->artigo->findById($id);
		
		$this->view('artigos/editar', compact('artigo'));
	}
	
	public function salvar() {
		$this->artigo->titulo = trim($_POST['titulo']);
		$this->artigo->texto = trim($_POST['texto']);
		
		if (isset($_POST['id'])) {
			$this->artigo->id = $_POST['id'];
			$this->artigo->update();
			
			$this->redirect('index.php?c=artigos&a=ver&id='.$_POST['id'], 'Artigo atualizado com sucesso!');
		} else {
			$this->artigo->insert();
			$this->redirect('index.php?c=artigos&a=index', 'Artigo inserido com sucesso!');
		}
	}
	
	public function excluir() {
		$this->artigo->id = $_GET['id'];
		$this->artigo->delete();
		
		$this->redirect('index.php?c=artigos&a=index', 'Artigo excluído com sucesso!');
	}
	
	public function ver() {
		$id = (int) $_GET['id'];
		$artigo = $this->artigo->findById($id);
		
		$this->view('artigos/ver', compact('artigo'));
	}
	
}
?>