<?php


$app->get('/', 'HomeController:index');
$app->get('/home', 'HomeController:index');
$app->get('/sejarah', 'AboutController:index');
$app->get('/visimisi', 'AboutController:visimisi');
$app->get('/photos', 'GaleryController:index');
$app->get('/videos', 'GaleryController:videos');
$app->get('/artikel', 'ArtikelController:index');
$app->get('/booth', 'BoothController:index');
$app->get('/contact', 'ContactController:index');
$app->get('/login', 'LogRegController:index');
$app->get('/register', 'LogRegController:register');

?>
