<?php

namespace app\core;

use app\core\View;

abstract class Controller {

	public $route;
	public $view;
	public $model;
	public $acl;

	public function __construct($route) {
		$this->route = $route;
		if (!$this->chackAcl()) {
			View::errorCode(403);
		}
		$this->view = new View($route);
		$this->model = $this->loadModel($route['controller']);
	}

	public function loadModel($name) {
		$path = 'app\models\\'.ucfirst($name);
		if (class_exists($path)) {
			return new $path;
		}
		return NULL;
	}

	public function chackAcl() {
		$this->acl = require 'app/acl/'.$this->route['controller'].".php";
		if ($this->isAcl('guest')) {
			return true;
		}
		if (isset($_SESSION['user_id']) && $this->isAcl('guest')) {
			return true;
		}
		return false;
	}

	public function isAcl($key) {
		return in_array($this->route['action'], $this->acl[$key]);
	}

}


?>