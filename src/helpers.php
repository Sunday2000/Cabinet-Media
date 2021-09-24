<?php
    
function render(string $view, $route = null)
{
    include(VIEW_PATH.DIRECTORY_SEPARATOR.$view.'.php');
}

function active_link($route, $url){
    if (is_null($route))
        return "";
    return $route->matches(trim($url, '/')) ? "active" : "";
}