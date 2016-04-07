<?php
class Artigo extends BaseModel {
	
	protected $table = 'artigo';
	
	public $id;
	public $titulo;
	public $texto;
	
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

	public function update() {
		if ($stmt = $this->db->prepare("UPDATE ".$this->table." SET titulo = ?, texto = ? WHERE id = ?")) {
			$stmt->bind_param('ssi', $this->titulo, $this->texto, $this->id);
			
			$stmt->execute();
			$stmt->close();
		}
	}

	public function insert() {
		if ($stmt = $this->db->prepare("INSERT INTO ".$this->table." SET titulo = ?, texto = ?")) {
			$stmt->bind_param('ss', $this->titulo, $this->texto);
			
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