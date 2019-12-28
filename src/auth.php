<?php

function get_user()
{
    return $_SESSION['auth'] ?? null;
}

function auth_protection()
{
    $user = get_user();

    if (!$user && !resolve('/admin/auth.*')){
        header('Location:  /admin/auth/login');
        die();
    }
}

function logout()
{
    unset($_SESSION['auth']);
    flash('Você se desconectou', 'success');
    header('Location: /admin/auth/login');
    die();
}