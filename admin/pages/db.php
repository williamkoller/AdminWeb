<?php

$pages_all = function ()
{
  // buscar todas as páginas
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