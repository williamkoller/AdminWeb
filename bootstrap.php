<?php

function resolve($route){
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $route = '/^' . str_replace('/','\/',$route) . '$/';

    if (preg_match($route, $path, $params)){
        return $params;
    }
    return false;
}

//var_dump(resolve('/'));
//var_dump(resolve('/admin'));



if (resolve('/admin/?(.*)')){
    require __DIR__ . '/admin/routes.php';
} elseif (resolve('/(.*)')) {
    require __DIR__ . '/site/routes.php';
}
