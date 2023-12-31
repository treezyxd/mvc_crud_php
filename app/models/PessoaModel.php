<?php

class PessoaModel
{
  public $id, $nome, $cpf, $data_nascimento;

  public $rows;

  public function save()
  {
    include 'DAO/PessoaDAO.php';

    $dao = new PessoaDAO();

    $dao->insert($this);
  }

  public function getAllRows()
  {
    include 'dao/PessoaDAO.php';

    $dao = new PessoaDAO();

    $this->rows = $dao->select();
  }

  public function getById(int $id)
  {
    include 'dao/PessoaDAO.php';

    $dao = new PessoaDAO();

    return $dao->selectById($id);
  }
}
