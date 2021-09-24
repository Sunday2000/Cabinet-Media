<?php

require dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor/autoload.php';

define('VIEW_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'views');

use Router\Router;

$router = new Router($_SERVER['PATH_INFO'] ?? '/');

$router->get('/', 'index');
$router->get('/a-propos', 'a-propos');

$router->run($_SERVER);