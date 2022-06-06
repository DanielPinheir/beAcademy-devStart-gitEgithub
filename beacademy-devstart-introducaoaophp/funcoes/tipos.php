<?php
//declarando tipos da funcao
declare(strict_types=1);

//tipando os parametros da funcao e o tipo de retorno esperado
function soma(float $n1, float $n2) : float
{
  return $n1 + $n2;
}

//tipando os parametros da funcao e o tipo de retorno esperado
function welcome(string $nome, string $sobrenome) : string
{
  return "Bem vindo {$nome}" . " {$sobrenome}.";
}

echo soma(5.67, 20);
echo '<br>';
echo welcome('Daniel', 'Pinheiro');