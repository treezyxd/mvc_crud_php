<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Pessoas</title>
</head>

<body>
  <table>
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>CPF</td>
      <td>Data de Nascimento</td>
    </tr>

    <?php foreach ($model->rows as $item) : ?>

      <tr>
        <td><?= $item->id ?></td>
        <td>
          <a href="/pessoa/form?=id<? $item->id ?>"><?= $item->nome ?></a>
        </td>
        <td><?= $item->cpf ?></td>
        <td><?= $item->data_nascimento ?></td>
      </tr>

    <?php endforeach ?>

  </table>
</body>

</html>