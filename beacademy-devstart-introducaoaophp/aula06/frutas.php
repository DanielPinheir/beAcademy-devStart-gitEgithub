<?php
//array(lista) de frutas
$frutas = [
  'Laranja',
  'Banana',
  'Abacaxi',
];

//adicionando nova fruta na lista(array)
//vai entrar na ultima posição
$frutas[] = 'Maçã';

//adicionando uma fruta na posição 10
$frutas[10] = 'Melancia';

$frutas[7] = 'Morango';

//Quando nao especifica a posição entra na ultima (11  e 12 posicao)
$frutas[] = 'Tangerina';
$frutas[] = 'Uva';
//mostando a estrutura do array
var_dump($frutas);

?>
<!--Criando uma lista não ordenada que percorre, através do FOR, uma lista de frutas-->
<ul>
  <?php
  $posicaoFrutas = [0, 1, 2, 3, 7, 10, 11, 12];
  $quantidadeFrutas = sizeof($frutas);
  echo "<h2><br>A lista possui {$quantidadeFrutas} frutas:</h2>";
  for ($i = 0; $i < $quantidadeFrutas; $i++) {
    echo "<li> A fruta na posição {$posicaoFrutas[$i]} é {$frutas[$posicaoFrutas[$i]]}. </li>";
  }
  //Outra forma através do FOREACH pela posicao
  echo "<h2><br>A lista possui {$quantidadeFrutas} frutas:</h2>";
  foreach ($frutas as $cadaFruta => $value) {
    echo "<li>A fruta na posição {$cadaFruta} é {$frutas[$cadaFruta]}.</li>";
  }

  //Outra forma através do FOREACH pelos elementos
  echo "<h2><br>A lista possui {$quantidadeFrutas} frutas:</h2>";
  foreach ($frutas as $cadaFruta) {
    echo "<li>{$cadaFruta}.</li>";
  }
  ?>
</ul>