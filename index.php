<?php

require_once("config.php");


//carrega uma linha
//$root = new Usuario();
//$root->loadById(6);
//echo $root;


//carrega toda a lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("deyvd", "12341234");
//echo $usuario;


//metodo insert
/*$aluno = new Usuario("aluno", "@lun0");
$aluno ->insert();
echo $aluno;

*/


$usuario = new Usuario();

$usuario->loadById(15);

$usuario->update("professor", "!@#$");

echo $usuario;
?>