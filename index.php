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

	//$usuario = new Usuario();
	//$usuario->login("Marcelo Souza", "7777");

	//echo $usuario;






	//Inserindo no banco com procedures

	//$aluno = new Usuario();

	//$aluno->setDeslogin("Vitor");
	//$aluno->setDessenha("2222");

	//$aluno->insert();

	//echo $aluno;




	//Inserindo com metodo construtor
	
	//$aluno = new Usuario("Marcio", "3333");

	//$aluno->insert();

	//echo $aluno;





	// Criando Update 

	$usuario = new Usuario();

	$usuario->loadById(7);

	$usuario->update("Tavares", "4444");

	echo $usuario;

 ?>