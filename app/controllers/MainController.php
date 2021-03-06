<?php

namespace app\controllers;

use app\core\Controller;
use app\lib\Db;

class MainController extends Controller {

	public function indexAction() {
		$result = $this->model->getNews();
		$vars = [
			'news' => $result,
		];
		$this->view->render('Home', $vars);
	}

	public function contactAction() {
		$this->view->render('Contacts');
	}
}
