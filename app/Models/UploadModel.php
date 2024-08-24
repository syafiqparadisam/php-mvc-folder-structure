<?php
namespace Belajar\PhpMvc\Models;
use Belajar\PhpMvc\Core\DB;


class UploadModel extends DB {

	public function upload() {
		return ["message" => "Successfully upload"];
	}
}