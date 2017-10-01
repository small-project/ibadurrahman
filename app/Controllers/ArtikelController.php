<?php

namespace App\Controllers;
use Slim\Views\Twig as View;

class ArtikelController extends Controller


{

	public function index($request, $response)
	{

		return $this->view->render($response, 'artikel.twig');
	}

}
