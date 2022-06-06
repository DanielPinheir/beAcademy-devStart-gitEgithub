<?php

$idade = 17;

//if ternário
echo $idade >= 18 ? "de maior" : "de menor";

echo "<br>";

//outro tipo de ternario ( )
//se nome existir => mostra nome => senão mostra 'nome não definido'

//$nome = 'Daniboy';
echo isset($nome) ? $nome : 'nome não definido';

//spread operator
//forma mais simplificada de utilizar o código anterior
echo "<br>";
$nome = "Daniel";
echo $nome ?? 'nome não definido';
