<?php

require_once("config.php");


/*Carrega um usuário
$root = new Usuario();

$root->loadbyId(3);

echo $root;
*/

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROm tb_usuarios");

//echo json_encode($usuarios);

//carrega uma lista de usuários
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usaário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "root");

//echo $usuario;


/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/
//Auterar um usuario
/*
$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("professor", "!@#$%^&*");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>