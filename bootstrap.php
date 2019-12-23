<?php
include __DIR__ . 'config.php';
include __DIR__ . '/scr/error_handler.php';
include __DIR__ . '/scr/resolve-route.php';
include __DIR__ . '/scr/render.php';
include __DIR__ . '/scr/connection.php';

if (resolve('/admin/?(.*)')){
    require __DIR__ . '/admin/routes.php';
} elseif (resolve('/(.*)')) {
    require __DIR__ . '/site/routes.php';
}
