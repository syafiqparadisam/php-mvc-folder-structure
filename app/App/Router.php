<?php

namespace Belajar\PhpMvc\App;
use Belajar\PhpMvc\Connection\ConnectDB;
use Belajar\PhpMvc\Core\DB;
use Belajar\PhpMvc\Core\Model;
use PDO;

class Router
{
	public static array $routes = [];

	public static function add($method, $path, $controller, $function, array $middlewares = [])
	{
		self::$routes[] = [
			"method" => $method,
			"path" => $path,
			"controller" => $controller,
			"function" => $function,
			"middlewares" => $middlewares
		];

	}

	public static function run()
	{
		$path = "/";
		$method = $_SERVER["REQUEST_METHOD"];
		if (isset($_SERVER["PATH_INFO"])) {
			$path = $_SERVER["PATH_INFO"];
		}

		// Inisialisasi koneksi database

		foreach (self::$routes as $route) {
			$pattern = "#^" . $route['path'] . "$#";

			if (preg_match($pattern, $path, $variables) && $method == $route["method"]) {


				$function = $route["function"];
				$controller = new $route["controller"];

				array_shift($variables);
				call_user_func_array([$controller, $function], $variables);
				return;
			}

			http_response_code(404);
			echo "Controller Not Found";
		}
	}
}