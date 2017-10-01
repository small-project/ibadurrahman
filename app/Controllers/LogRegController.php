<?php

namespace App\Controllers;
use Slim\Views\Twig as View;

class LogRegController extends Controller


{

	public function index($request, $response)
	{

		return $this->view->render($response, 'login.twig');
	}
  public function register($request, $response)
	{

		return $this->view->render($response, 'register.twig');
	}
}
