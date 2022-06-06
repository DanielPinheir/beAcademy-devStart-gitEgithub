<?php

$senha = '123456';
$code = 'MTIzNDU2';

//função que codifica e decodifica
echo base64_encode($senha) . '<br>';
echo base64_decode($code) . '<br>';