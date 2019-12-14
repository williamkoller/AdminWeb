<?php

$path = var_dump($_SERVER['PATH_INFO'] ?? '/');

if($path == '/'){
    require __DIR__ . '/';
}