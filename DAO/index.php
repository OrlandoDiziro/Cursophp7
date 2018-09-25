<?php 

require_once("config.php");

/*
$root = new Usuario();
$root->loadById(2);
echo $root;
*/

/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*
$usuario = new Usuario();
$usuario->login("jose","1234567890");
echo $usuario;
*/

/*
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;
*/

/*
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

/*
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "!@#$%");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;


 ?>