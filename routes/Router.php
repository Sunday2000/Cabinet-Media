<?php

namespace Router;

class Router {
    
    public $url;
    public $routes = [];

    public function __construct($url){

        $this->url = trim($url, '/');
    }

    public function get(string $path, $action){
        $this->routes['GET'][] = new Route($path, $action);
    }

    public function post(string $path, $action){
        $this->routes['POST'][] = new Route($path, $action);
    }

    public function run($server){

        foreach($this->routes[$server['REQUEST_METHOD']] as $route){
            
            if($route->matches($this->url)){
                return $this->execute($route);
            }
        }
        render('404');
    }

    private function execute(Route $route)
    {
        $path_info = explode('@', $route->action);
        $path_part = count($path_info);
        if ($path_part == 1){
            return render($path_info[0], $route);
        } else if($path_part == 2){
            $controller = new $path_info[0]();
            $function = $path_info[1];
            return $controller->$function($_POST);
        }
    }

}