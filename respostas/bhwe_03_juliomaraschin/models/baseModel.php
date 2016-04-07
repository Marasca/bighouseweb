<?php
class BaseModel {
	
	protected $db;
	
	public function __construct() {
		$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
		$this->db->query("SET NAMES 'utf8'");
    }
	
}
?>