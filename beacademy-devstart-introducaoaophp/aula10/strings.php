<?php

$nome = 'daniel';
$sobrenome = 'PINHEIRO';
$nome2 = 'daniel pinheiro';

//apenas primeira letra da primeira palavra em maiusculo
echo "Nome: " . ucfirst($nome);
echo '<br>';
//palavra inteira em letra maiscula (caixa alta)
echo "Nome: " . strtoupper($nome);
echo '<br>';
//palavra inteira em letra minuscula (caixa baixa)
//apenas primeira letra da primeira palavra em maiusculo
//uma funcao dentro de outra funcao
echo "Sobrenome: " . ucfirst(strtolower($sobrenome));
echo '<br>';
//apenas primeira letra de todas as palavras em maiusculo
echo "Nome completo: " . ucwords($nome2);