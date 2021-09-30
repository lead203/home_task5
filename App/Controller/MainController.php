<?php

	namespace App\Controller;

	use App\Core\Controller;

	class MainController extends Controller {
		public function indexAction() {
			$this->view->render('Main page');
		}
	}