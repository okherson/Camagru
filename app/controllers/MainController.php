<?php

namespace app\controllers;

use app\core\Controller;
// use app\lib\Db;

class MainController extends Controller {

	public function indexAction() {
		$result = [];
		// echo ("This is MainController index Action.");
		// $result = ["data from Main index"=>" to View->index."];
		$this->view->render('Camagru', ['item'=>$result]);
	}

	public function logoutAction() {
		// $result = ['user' => 'Logged out'];
		if (!empty($_SESSION["email"])) {
			unset($_SESSION["email"]);
			unset($_SESSION["user_id"]);
			unset($_SESSION["first_name"]);
		}
		// echo ("This is MainController index Action.");
		// $result = ["data from Main index"=>" to View->index."];
		$this->view->render('login');
	}


}

?>