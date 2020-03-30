<?php

namespace app\core;

use app\core\View;

class Router {

	protected $routes = [];
	protected $params = [];

	function __construct() {
		$arr = require 'app/config/routes.php'; //~include
		foreach ($arr as $model=>$action) {
			$this->add($model, $action);//key, value
		}
	}

	public function add($route, $params){
		$route = '#^'.$route.'$#';
		// echo 'this route:'.$route."\n";
		$this->routes[$route] = $params;
		// echo($route." and ".$params);
	}

	public function match() {
		$url = trim($_SERVER['REQUEST_URI'], '/');
		// echo "<br>url='".$url."'<br>";//dell
		// print_r($this->routes);//dell
		foreach($this->routes as $route=>$params) {
			if (preg_match($route, $url, $matches)) {
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	public function run() {
		if ($this->match()) {
			$path = 'app\controllers\\'.ucfirst($this->params['controller']).'Controller';
			// echo $path;				//dell
			if (class_exists($path)) {
				$action = $this->params['action'].'Action';
				if (method_exists($path, $action)) {
					$controller = new $path($this->params);
					$controller->$action();
				} else {
					echo "Method not found.";
					View::errorCode(404);
				}
			} else {
				echo "<br>Class not found.<br>";
				View::errorCode(404);
			}
		} else {
			echo "<br>Rout does not exist.<br>";
			View::errorCode(404);
		}
	}

}







?>