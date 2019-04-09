<?php

require_once("config.php");

$joao = new Usuario();

$joao->loadbyId(2);

echo $joao;

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROm tb_usuarios");

//echo json_encode($usuarios);

?>