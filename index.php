<?php 

require_once("config.php");

	//carrega apenas 1 usuario
	//$root = new Usuario();
    //$root->loadById(3);
  //  echo $root;

	// carrega uma lista de usuario

	//$lista = Usuario::getList();

	//echo json_encode($lista);


	//carregar lista de usuarios buscando pelo login

	//$search = Usuario::search("Ad");

	//echo json_encode($search);

	//carregar usuario com autenticação

	$usuario = new Usuario();
	$usuario->login("Marcelo Souza", "7777");

	echo $usuario;
 ?>