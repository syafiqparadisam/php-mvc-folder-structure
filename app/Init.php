<?php

namespace Belajar\PhpMvc;
require_once __DIR__ . "/../vendor/autoload.php";
use Belajar\PhpMvc\App\Router;
use Belajar\PhpMvc\Controller\Upload;

Router::add("GET", "/product", Upload::class, "index");
Router::run();