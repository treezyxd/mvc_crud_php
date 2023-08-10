<?php

class PessoaController
{
  public static function index()
  {
    include 'models/PessoaModel.php';

    $model = new PessoaModel();
    $model->getAllRows();

    include 'views/modules/Pessoa/ListaPessoa.php';
  }

  public static function form()
  {
    include 'models/PessoaModel.php';

    $model = new PessoaModel();

    $model = $model->getById((int) $_GET['id']);

    include 'views/modules/Pessoa/FormPessoa.php';
  }

  public static function save()
  {
    include 'models/PessoaModel.php';

    $model = new PessoaModel();
    $model->nome = $_POST['nome'];
    $model->cpf = $_POST['cpf'];
    $model->data_nascimento = $_POST['data_nascimento'];

    $model->save();

    header("Location: /pessoa");
  }
}
