<?php 

$file = fopen("log.txt", "w+"); // criando o arquivo com w+

fwrite($file, date("Y-m-d H:i:s") . "\r\n"); // função para escrever no arquivo

fclose($file);

echo "Arquivo criado coom sucesso!";



 ?>