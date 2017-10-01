<?php

namespace App\Controllers;
use Slim\Views\Twig as View;

class BoothController extends Controller


{

	public function index($request, $response)
	{

		return $this->view->render($response, 'booth.twig');
	}

}
