<?php
  //forma mais antiga decriar constante
  define('CPF', '123.123.123-12');

  //forma mais recente
  //so pode atribuir uma unica vez
  //usa-se letras maiúsculas para constantes
  const NOME_COMPLETO = "Chiquim da Silva";

  echo "Meu nome é " . $NOME_COMPLETO;
