<?php

//abrir arquivo => file open
//a+ => leitura e escrita
//w => escrita (write)
//r => leitura (read)
$arquivo = fopen('aula11/produtos.csv', 'a+');

//escrever no arquivo (file write)
fwrite($arquivo, 'Daniel' .PHP_EOL);
fwrite($arquivo, 'Bruno' .PHP_EOL);
fwrite($arquivo, 'Luiza' .PHP_EOL);

//fechar o arquivo
fclose($arquivo);