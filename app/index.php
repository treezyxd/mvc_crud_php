<?php

include 'controllers/PessoaController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
  case '/':
    echo 'Home Page';
    break;

  case '/pessoa':
    PessoaController::index();
    break;

  case '/pessoa/form':
    PessoaController::form();
    break;

  case '/pessoa/form/save':
    PessoaController::save();
    break;

  default:
    echo 'Error 404';
    break;
}
