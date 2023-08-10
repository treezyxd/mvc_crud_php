<?php

class PessoaDAO
{

  private $connection;

  public function __construct()
  {
    $dsn = "mysql:host=localhost:3306;dbname=crud_mvc";

    $this->connection = new PDO($dsn, 'root', '');
  }


  public function insert(PessoaModel $model)
  {
    $sql = "INSERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?) ";

    $stmt = $this->connection->prepare($sql);
    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->cpf);
    $stmt->bindValue(3, $model->data_nascimento);

    $stmt->execute();
  }

  public function update()
  {
  }

  public function select()
  {
    $sql = "SELECT * FROM pessoa";

    $stmt = $this->connection->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  public function delete()
  {
  }
}
