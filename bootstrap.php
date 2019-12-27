<?php
session_start();
include __DIR__ . 'config.php';
include __DIR__ . '/src/error_handler.php';
include __DIR__ . '/src/resolve-route.php';
include __DIR__ . '/src/render.php';
include __DIR__ . '/src/connection.php';
include __DIR__ . '/src/flash.php';

if (resolve('/admin/?(.*)')){
    require __DIR__ . '/admin/routes.php';
} elseif (resolve('/(.*)')) {
    require __DIR__ . '/site/routes.php';
}
