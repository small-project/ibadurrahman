<?php

namespace App\Controllers;
use Slim\Views\Twig as View;

class AboutController extends Controller


{

	public function index($request, $response)
	{

		return $this->view->render($response, 'sejarah.twig');
	}

	public function visimisi($request, $response)
	{

		return $this->view->render($response, 'visimisi.twig');
	}
}
