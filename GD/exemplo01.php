<?php 

	header("Content-Type: image/png"); //criando a imagem

	$image = imagecreate(256, 256); //tamanho da imagem já em px

	//criando as cores

	$black = imagecolorallocate($image, 0, 0, 0); 

	$red = imagecolorallocate($image, 255, 0, 0);

	//Escrevendo na tela

	imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

	imagepng($image);

	imagedestroy($image);

 ?>