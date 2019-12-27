<?php

$pages_all = function () use ($conn)
{
  // buscar todas as páginas
  $result = $conn->query('SELECT * FROM pages');
  return $result->fetch_all(MYSQLI_ASSOC);

};

$pages_one = function ($id)
{
  // buscar uma única página
};

$pages_create = function ()
{
  // cadastra página
    flash('Criou registro com sucesso!!', 'success');
};

$pages_edit = function ($id)
{
  // atualiza uma página
    flash('Atualizou registro com sucesso!!', 'success');

};

$pages_delete = function ()
{
  // deleta página
    flash('Deletou registro com sucesso!!', 'success');

};