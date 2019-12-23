<?php

if (resolve('/')) {
    echo 'home';
} elseif (resolve('/contact')){
    echo 'Páginas de contato';
} else {
    echo 'Página não encontrada';
}