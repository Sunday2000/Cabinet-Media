<?php

namespace Router;

class Route {

    public $path;
    public $action;

    public function __construct(string $path, $action){
        $this->path = trim($path, '/');
        $this->action = $action;
    }

    public function matches($url){
        return $url == $this->path;
    }
}