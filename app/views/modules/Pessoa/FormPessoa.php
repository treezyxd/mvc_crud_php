<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Pessoa</title>
  <style>
    label,
    input {
      display: block;
      margin: 5px 0;
    }
  </style>
</head>

<body>
  <fieldset>
    <legend>Cadastro de Pessoa</legend>

    <form action="/pessoa/form/save" method="post">
      <label>Nome:</label>
      <input type="text" id="nome" name="nome">
      <label>CPF:</label>
      <input type="number" id="cpf" name="cpf">
      <label>Data de Nascimento:</label>
      <input type="date" id="data_nascimento" name="data_nascimento">

      <button type="submit">Cadastrar</button>
    </form>
  </fieldset>
</body>

</html>