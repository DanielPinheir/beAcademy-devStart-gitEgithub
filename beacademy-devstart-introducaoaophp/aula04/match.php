<?php

$mes = 20;

echo match ($mes) {
  1 => 'Janeiro',
  2 => 'Fevereiro',
  9 => 'Setembro',
  default => 'Mês inválido'
};
