<?php
namespace Belajar\PhpMvc\Controller;
use Belajar\PhpMvc\Core\Controller;
class Upload extends Controller {
	
	public function index()
	{
		$result = $this->model("UploadModel")->upload();
		header("Content-type: Application/json");
		echo json_encode($result);
		
	}

}