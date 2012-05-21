<?php

class IndexController extends Phalcon_Controller {

	public function indexAction(){
		$this->view->setVar('items', Users::find());
	}

}

