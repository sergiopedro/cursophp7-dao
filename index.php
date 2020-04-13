<?php

require_once("config.php");

//Loads one user only.
/* $root = new Usuario();
$root->loadById(7); */
//echo $root;

//Loads a List of users
/* $lista = Usuario::getList();

echo json_encode($lista); */

//LOADS A USER LIST BY LOGIN
/* $search = Usuario::search("jo");

echo json_encode($search); */

//lOADS AN USER USING THE LOGIN

/* $usuario = new Usuario();
$usuario->login("user", "12345");

echo $usuario;
 */

/*  $aluno = new Usuario("aluno", "@alun0"); //Creating a new user

 $aluno->insert();

 echo $aluno; */

 $usuario = new Usuario();

 $usuario->loadById(8);

 $usuario->update("professor", "!$%&&");

echo $usuario;

?>