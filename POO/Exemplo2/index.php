<?php

require_once('vendor/autoload.php');

//use \App\Repositories\UsuarioRepository;
use App\Models\Ave;
use App\Models\Mamifero;
use App\Models\Usuario;
use App\Models\Funcionario;
use App\Config\Database;
use App\Controllers\Logger;

$tipoDeConexao = Database::$driver;
Database::staticEcho();

$usuario = new Usuario;
$usuario2 =new Funcionario;

$usuario3 = new \App\Models\Usuario;
$funcionario = clone $usuario3;

$usuario->nome="Roberto Santos<br/>";
$usuario2->nome ="Valkyria<br/>";

echo $tipoDeConexao;

echo"<h3>Lista de Funcionarios: </h3><ul>";
echo "<li>{$usuario->getName()}</li>";
echo "<li>{$usuario2->getName()}</li>";
echo"</ul><br/><br/>";

echo $usuario2->getConta();
//$usuarioRepository=new  UsuarioRepository;
echo"<br/><br/>";


$usuario->setConta("Bradesco");
echo $usuario->getConta();

echo"<br/><br/>";

$usuario->setSenha('423rr');
echo $usuario->getSenha();

echo"<br/><br/><hr/>";

var_dump($usuario3,$funcionario);

echo"<br/><br/>";
var_dump($usuario3===$funcionario);//false -Clone é diferente de copiar o Clone é igual mais não possue a mesma referencia

echo"<br/><br/>";
$clone1 = $usuario;
$clone2 = clone $usuario3;

var_dump($usuario === $usuario3);
var_dump($clone1 === $usuario);
var_dump($clone1 === $usuario3);
var_dump($clone2 === $usuario);

echo"<br/><br/>";
$mamifero = new Mamifero;
echo $mamifero->locomover();
$ave=new Ave;
echo $ave->locomover();

echo"<br/><hr/><br/>";

Logger::log('teste de log');
