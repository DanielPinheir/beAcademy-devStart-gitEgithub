<?php

declare(strict_types=1);

//tipando a funcao e o retorno esperado
//void => quando não existe retorno
function mostrarNomes(array $nomes) : void
{
  foreach ($nomes as $cadaNome) 
  {
    echo "Nome: " . $cadaNome . '<br>';
  }
}

mostrarNomes(['Daniel', 'Bruno', 'Carolina']);
