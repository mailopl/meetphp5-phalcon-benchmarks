<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Say extends Controller {

	public function action_hello()
	{
		// $view = new View('site');
	 //    $view->posts = ORM::factory('user')->find_all();
  //   	$view->render(true);
  $this->response->body('<h1>hello, world!</h1>');
	}

} // End Welcome
