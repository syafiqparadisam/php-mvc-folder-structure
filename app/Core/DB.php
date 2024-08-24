<?php
namespace Belajar\PhpMvc\Core;
use PDO;

class DB {
	public $db;
	public function __construct() {
		$this->db = new PDO("mysql:host=localhost;dbname=tes", "root");

	}
}
