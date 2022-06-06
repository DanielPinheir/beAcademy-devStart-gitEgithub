<?php

$nome = "Daniel";
$sobrenome = "Pinheiro";
$idade = 43;
$cidade = "Fortaleza";

echo $nome . " " . $sobrenome;

//outra forma
$nome2 = "Chiquim";
$nome2 .= "da Silva"; //Chiquimda Silva

echo "<br>";

//Template string
//Forma bem mas prática de concatenar varáveis
echo "Eu me chamo {$nome} {$sobrenome}, tenho {$idade} anos e moro em {$cidade}.";
