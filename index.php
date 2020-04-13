<?php

require_once("config.php");

//LOADS ONE USER ONLY
/* $root = new Usuario();
$root->loadById(7); */
//echo $root;

//LOADS A LIST OF USERS
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

 //CREATING NEW USER
/*  $aluno = new Usuario("aluno", "@alun0"); 
 $aluno->insert();
 echo $aluno; */

 //TO CHANGE AN USER
/*  $usuario = new Usuario();
 $usuario->loadById(8);
 $usuario->update("professor", "!$%&&");
echo $usuario; */

//DELETE AN USER
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

?>