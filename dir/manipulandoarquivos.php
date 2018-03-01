<?php 

$images = scandir("images");

$data = array();

foreach ($images as $img) {
	
	if(in_array($img, array(".", ".."))){

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename); //tamanho do arquivo em bytes

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));  //quando o arquivo foi modificado

		$info["url"] = "http://localhost:8080/exemplos/DIR/".str_replace("\\", "/", $filename);//acessar via URL

		array_push($data, $info);



	}
}

echo json_encode($data);


 ?>