<?php

// require 'app/lib/Dev.php';

use app\core\Router;

// echo "INDEX START.";

ini_set('display_errors', true);

spl_autoload_register(function($class) {
	$path = str_replace('\\', '/', $class.'.php');
	// var_dump($path."<br>");					//dell
	if (file_exists($path)) {
		require $path;
	}
});

session_start();

$router = new Router;
$router->run();
