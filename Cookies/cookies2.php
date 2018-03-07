<?php 

if (isset($_COOKIE["COOKIES_DADOS"])) {

$obj = json_decode($_COOKIE["COOKIES_DADOS"]);

echo $obj->empresa;

}

 ?>