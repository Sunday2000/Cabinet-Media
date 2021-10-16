<?php

use App\App;

require dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor/autoload.php';

define('VIEW_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'views');


$router = App::getRouter($_SERVER['REQUEST_URI'] ?? '/');

$router->get('/', 'index');
$router->get('/a-propos', 'a-propos');
$router->get('/team', 'team');
$router->get('/contact', function(){
    header('Location:/#contact');
});
$router->post('/contact', 'App\Controller\ContactController@index');

$router->run($_SERVER);