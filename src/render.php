<?php

/**
 * @param $content
 * @param $template
 * @param array $data
 * @return mixed
 */
function render($content, $template, array $data = []) {
    $content = __DIR__ . '/../templates/' . $content . '.tpl.php';
    return require __DIR__ . '/../templates/' . $template . '.tpl.php';
}