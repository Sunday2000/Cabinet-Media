<?php

use App\App;

require dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor/autoload.php';

define('VIEW_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'views');


$router = App::getRouter($_SERVER['PATH_INFO'] ?? '/');

$router->get('/', 'index');
$router->get('/a-propos', 'a-propos');
$router->get('/team', 'team');
$router->post('/contact', 'App\Controller\ContactController@index');

$router->run($_SERVER);