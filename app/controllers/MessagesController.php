<?php

namespace app\controllers;

use app\core\Controller;
// use app\lib\Db;

class MessagesController extends Controller {

	public function listAction() {
		$result = ['result' => 'message'];
		// echo ("This is MainController index Action.");
		// $result = ["data from Main index"=>" to View->index."];
		$this->view->render('Camagru', ['message_list'=>$result]);
	}
}

?>