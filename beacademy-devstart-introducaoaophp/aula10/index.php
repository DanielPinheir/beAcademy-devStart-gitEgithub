<?php

$notasCursoA = [
  10,
  9,
  9.5,
];

$notasCursoB = [
  8,
  9.4,
  5,
  6,
];

function mediaDeNotas(array $notas): float
{
  //sem funcoes nativas do PHP
  /*
  $total = 0;
  $quantidade = 0;

  foreach ($notas as $cadaNota) {
    $total += $cadaNota;
    $quantidade ++;
  } */

  //Usando funcoes nativas do PHP
  return array_sum($notas)/ count($notas);
}

echo mediaDeNotas($notasCursoA) . '<br>';
echo mediaDeNotas($notasCursoB) . '<br>';
