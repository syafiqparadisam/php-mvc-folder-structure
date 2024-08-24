<?php

namespace Belajar\PhpMvc\Core;

class Controller
{
	public function model(string $model)
	{
		$modelClass = "\\Belajar\\PhpMvc\\Models\\$model";
		if (class_exists($modelClass)) {
			return new $modelClass;
		}
		
		throw new \Exception("Model $model not found");
	}

}