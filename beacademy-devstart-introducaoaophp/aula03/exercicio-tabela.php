<?php

//Apresentar uma tabela HTML usando PHP//

//criando uma base de dados no PHP
$dados = [
  ['Daniel', 'M', 'Fortaleza'],
  ['Chiquim', 'M', 'Juazeiro'],
  ['Juanita', 'F', 'Paris'],
  ['Genitácia', 'F', 'Berlim'],
];

?>

<!--Criando uma estrutura de tabela com HTML-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela Dados</title>
</head>

<body>
  <!--Aplicando borda-->
  <table border="5">
    <thead>
      <!--Inserindo titulo na tabela-->
      <tr>
        <th>Nome</th>
        <th>Gênero</th>
        <th>Cidade</th>
      </tr>
    </thead>

    <?php foreach ($dados as $item) : ?>

      <tr>
        <td><?= $item[0] ?></td>
        <td><?= $item[1] ?></td>
        <td><?= $item[2] ?></td>
      </tr>

    <?php endforeach; ?>
    <tbody>

    </tbody>
  </table>
</body>

</html>