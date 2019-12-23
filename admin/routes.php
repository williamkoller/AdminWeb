<?php

if (resolve('/admin')) {
    render('home', 'admin');
} elseif (resolve('/admin/pages')){
    render('pages', 'admin');
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}
