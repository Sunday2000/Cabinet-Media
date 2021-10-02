<?php
    
function render(string $view, $route = null, $variable = null)
{
    ob_start();
    require(VIEW_PATH.DIRECTORY_SEPARATOR.$view.'.php');
    $content = ob_get_clean();
    require(VIEW_PATH.DIRECTORY_SEPARATOR.'layouts'.DIRECTORY_SEPARATOR.'layout.php');
}

function active_link($route, $url){
    if (is_null($route))
        return "";
    return $route->matches(trim($url, '/')) ? "active" : "";
}