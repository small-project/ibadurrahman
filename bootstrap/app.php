<?php

session_start();


require __DIR__ . '/../vendor/autoload.php';


$app = new \Slim\App([

	'settings'	=> [
		'displayErrorDetails'	=> true,
	]
]);


$container = $app->getContainer();

$container['view'] = function($container){

	$view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [

		'cache'	=> false,
	]);
	$view->addExtension(new \Slim\Views\TwigExtension(

		$container->router,
		$container->request->getUri()
	));

	return $view;
};

$container['HomeController']	= function($container) {

	return new \App\Controllers\HomeController($container);
};
$container['GaleryController']	= function($container) {

	return new \App\Controllers\GaleryController($container);
};
$container['AboutController']	= function($container) {

	return new \App\Controllers\AboutController($container);
};
$container['ArtikelController']	= function($container) {

	return new \App\Controllers\ArtikelController($container);
};
$container['BoothController']	= function($container) {

	return new \App\Controllers\BoothController($container);
};
$container['ContactController']	= function($container) {

	return new \App\Controllers\ContactController($container);
};
$container['LogRegController']	= function($container) {

	return new \App\Controllers\LogRegController($container);
};


require __DIR__ .'/../app/routes.php';
?>
