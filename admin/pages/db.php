<?php

function pages_get_data($redirectOnError)
{
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if (is_null($title) or is_null($url)){
        flash('Informe os campos de titulo e url', 'error');
        header('Location: ' . $redirectOnError);
        die();
    }

    return compact('title', 'url', 'body');
}

$pages_all = function () use ($conn)
{
  // find alll pages
  $result = $conn->query('SELECT * FROM pages');
  return $result->fetch_all(MYSQLI_ASSOC);

};

$pages_one = function ($id) use ($conn)
{
  // find one page

    $sql = 'SELECT * FROM pages WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$pages_create = function () use ($conn)
{
  // create page

    $data = pages_get_data('/admin/pages/create');
    $sql = 'INSERT INTO pages (title, url, body, updated, created) VALUES (?, ?, ?, NOW(), NOW())';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['url'], $data['body']);

    flash('Criou registro com sucesso!!', 'success');

    return $stmt->execute();
};

$pages_edit = function ($id) use ($conn)
{
  // update page

  $data = pages_get_data('/admin/pages/' . $id . '/edit' );
  $sql = 'UPDATE pages SET title=?, url=?, body=?, updated=NOW() where id=?';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('sssi', $data['title'], $data['url'], $data['body'], $id);
  flash('Atualizou registro com sucesso!!', 'success');
  return $stmt->execute();


};

$pages_delete = function ($id) use ($conn)
{
  // delete page

  $sql = 'DELETE FROM pages WHERE id=?';

  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $id);

  flash('Deletou registro com sucesso!!', 'success');
  return $stmt->execute();


};