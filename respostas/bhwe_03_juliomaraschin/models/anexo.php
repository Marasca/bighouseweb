<?php
class Anexo extends BaseModel {
	
	protected $table = 'anexo';
	
	public $id;
	public $nome;
	public $anexo;
	
	public function findAll() {
		$data = array();
		$result = $this->db->query("SELECT * FROM ".$this->table." ORDER BY id DESC");
		
		while ($row = $result->fetch_assoc())
			$data[] = $row;
		
		return $data;
	}
	
	public function findById($id) {
		$data = array();
		
		if ($stmt = $this->db->prepare("SELECT * FROM ".$this->table." WHERE id = ?")) {
			$stmt->bind_param('i', $id);
			
			$stmt->execute();
			
			$result = $stmt->get_result();
			
			if ($row = $result->fetch_assoc())
				$data = $row;
			
			$stmt->close();
		}
		
		return $data;
	}

	public function insert() {
		if ($stmt = $this->db->prepare("INSERT INTO ".$this->table." SET nome = ?, anexo = ?")) {
			$stmt->bind_param('ss', $this->nome, $this->anexo);
			
			$stmt->execute();
			$stmt->close();
		}
	}

	public function delete() {
		if ($stmt = $this->db->prepare("DELETE FROM ".$this->table." WHERE id = ?")) {
			$stmt->bind_param('i', $this->id);
			
			$stmt->execute();
			$stmt->close();
		}
	}
	
}
?>