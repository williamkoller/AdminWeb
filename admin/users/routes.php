<?php

include __DIR__ . '/db.php';

if (resolve('/admin/users')){
    $users = $user_all();
    render('admin/users/index', 'admin', compact('users'));

} else if (resolve('/admin/users/create')){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user_create();
        return header('Location:  /admin/users');
    }
    render('admin/users/create', 'admin');

} else if ($params = resolve('/admin/users/(\d+)')){
    $user = $users_view($params[1]);
    render('admin/users/view', 'admin', compact('user'));

} else if ($params = resolve('/admin/users/(\d+)/edit')){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_edit($params[1]);
        return header('Location:  /admin/users/' . $params[1]);
    }
    $user = $users_view($params[1]);
    render('/admin/users/edit', 'admin', compact('user'));

} else if ($params = resolve('/admin/users/(\d+)/delete')){
    $user_delete($params[1]);
    header('Location: /admin/users');
}