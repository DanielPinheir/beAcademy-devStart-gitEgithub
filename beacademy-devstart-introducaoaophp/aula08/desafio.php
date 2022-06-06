<?php
////verificando a requisicao(o que vem apos o dominio) utilizando o match
$url = $_SERVER['REQUEST_URI'];

echo match ($url) {
  '/' => '<h1>Pagina inicial</h>',
  '/login' => '<h1>Pagina de login</h1>',
  '/cadastro' => '<h1>Pagina de cadastro</h1>',
  default => '<h1>Pagina não encontrada</h1>'
};
