<?php

function flash($message = null, $type = null)
{
    if($message){
      // guardo a mensagem
      $_SESSION['flash'][] = compact('message', 'type');
    } else {
      // mostra a mensagem
      $flash = $_SESSION['flash'] ?? [];
      if(!count($flash)){
        return;
      }

      foreach ($flash as $key => $message){
        render('flash', 'ajax', $message); // printa a mensagem
        unset($_SESSION['flash'][$key]); // remove dados da sessão
      }
    }
}