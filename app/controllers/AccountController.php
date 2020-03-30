<?php

namespace app\controllers;

use app\core\Controller;
use app\lib\Db;

class AccountController extends Controller {

	public function loginAction() {
		$result = [];
		if (!empty($_POST)) {

			if ($this->model->login($_POST)) {
				echo"Login success.";
			} else {
				echo"Login failed.";
			}
			exit();
		}
		$this->view->render('Login');
	}


	public function registrationAction() {
		if (!empty($_POST)) {
			if ($this->model->registration($_POST)) {
				echo "Registration success.";
			} else {
				echo "Registration failed.";
			}
			exit();
		}
		$this->view->render('Registration');
	}

	public function password_resetAction() {
		if (!empty($_POST)) {
			return $this->model->passwordReset($_POST);
			exit();
		}
		$this->view->render('password_reset');
	}
}

?>