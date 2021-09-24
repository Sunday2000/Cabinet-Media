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

    public function run($server){

        foreach($this->routes[$server['REQUEST_METHOD']] as $route){
            
            if($route->matches($this->url)){
                $this->execute($route);
                return ;
            }
        }
        render('404');
    }

    private function execute(Route $route)
    {
        $path_info = explode('@', $route->action);
        if (count($path_info) == 1){
            render($path_info[0], $route);
        } else {
            //
        }
    }

}