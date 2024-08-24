<?php
namespace Belajar\PhpMvc\Models;
use Belajar\PhpMvc\Core\DB;
use PDO;

class ProductModel extends DB
{
	public function __construct() {
		parent::__construct();
	}

	public function showDatabases()
	{
		$result = $this->db->prepare("SHOW DATABASES");
		$result->execute();

		return $result->fetchAll(PDO::FETCH_ASSOC);
		// return "lahh";
	}
}