<?php
//verificando a requisicao(o que vem apos o dominio)
$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
  echo '<h1>Pagina inicial</h>';
} elseif ($url === '/login') {
  echo '<h1>Pagina de login</h1>';
} elseif ($url === '/cadastro') {
  echo '<h1>Pagina de cadastro</h1>';
} else {
  echo '<h1>Pagina não encontrada</h1>';
}
