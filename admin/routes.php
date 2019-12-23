<?php

if (resolve('/admin')) {
    render('home', 'admin');
} elseif (resolve('/admin/pages')){
    render('pages', 'admin');
} else {
    echo 'Página não encontrada';
}
