<?php

namespace App\Controllers;
use Slim\Views\Twig as View;

class GaleryController extends Controller


{
	
	public function index($request, $response)
	{

		return $this->view->render($response, 'photos.twig');
	}

	public function videos($request, $response)
	{

		return $this->view->render($response, 'videos.twig');
	}
}