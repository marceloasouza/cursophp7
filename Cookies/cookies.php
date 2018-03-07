<?php 

//Criando o arquivo

$data = array("empresa"=>"Mcl Solution"

);

setcookie("COOKIES_DADOS", json_encode($data), time() + 3600);


echo "OK";
 ?>