<?php

namespace Belajar\PhpMvc\Controller;
use Belajar\PhpMvc\Core\Controller;
use Cloudinary\Api\Upload\UploadApi;
// use Cloudinary\Cloudinary;
use Ramsey\Uuid\Uuid;


class Product extends Controller
{

	public function promo()
	{

	}

	public function popular()
	{

	}

	public function index()
	{
		$result = $this->model("UploadModel")->upload();
		header("Content-type: Application/json");
		echo json_encode($result);
		
	}

	public function details()
	{

	}

	public function search($params)
	{
		print_r($params);
		echo $params["search"];
	}

	public function largeDiscount()
	{

	}


	public function upload(string $file)
	{

		$publicid = Uuid::uuid4()->toString();

		$upload = new UploadApi();
		$response = $upload->upload($file, [
			"public_id" => $publicid,
			'use_filename' => true,
			'overwrite' => true,
		]);

		$publicUrl = $response["secure_url"];
		echo $publicUrl;
	}

}