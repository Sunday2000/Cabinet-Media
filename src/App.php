<?php 

namespace App;

use Router\Router;

class App {

    public static $router;

    public static function getRouter(string $path_info){

        if (!self::$router){
            self::$router = new Router($path_info);
        }
        return self::$router;
    }
}