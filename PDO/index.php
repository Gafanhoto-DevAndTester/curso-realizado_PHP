<?php
/*
if(!defined('PDO::ATTR_DRIVER_NAME')){
    echo "PDO não está disponivel. Ative no php.ini";
}
*/
require_once('config.php');

//Buscar todos os usuarios
$usuarios = $pdo->query('SELECT *FROM usuarios')->fetchAll();

echo '<pre>';
//var_dump($usuarios);
print_r($usuarios);
echo('<br/><br/>'.$usuarios[3]['nome']);
echo '</pre>';

//Buscar um usuario específico
echo('<br/><br/>');

$nome = "Roberto Santos";

$query = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
$query->execute(['nome'=>$nome]);

$resultado = $query->fetch();

echo '<pre>';
var_dump($resultado);
echo '</pre>';



//Buscar um ou varios usuarios com like
echo('<br/><br/>');
$query = $pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE ?");
$query->execute(array("%{$nome}%"));

$resultado = $query->fetchAll();

echo '<pre>';
var_dump($resultado);
echo '</pre>';

//Inserir um usuario
echo('<br/><br/>');

$row = [
    'nome'=>'Paloma',
    'email'=>'paloma@teste.com.br'
];

$sql = "INSERT INTO usuarios SET nome=:nome, email=:email;";
$status=$pdo->prepare($sql)->execute($row);

if($status){
    $usuario_id=(int) $pdo->lastInsertId();
}

echo'<h6>';
echo $usuario_id;
echo'</h6><hr/><br/>';

//Update

echo('<br/><br/>');

$row = [
    'id'=>3,
    'nome'=>'Paloma',
    'email'=>'paloma@teste.com.br'
];

$sql = "UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id;";
$status=$pdo->prepare($sql)->execute($row);

echo'<h6>';
echo 'Atualizado!';
echo'</h6><hr/><br/>';

//Remove

echo('<br/><br/>');

$where = ['id'=>3];
$pdo->prepare("DELETE FROM usuarios WHERE id=:id")->execute($where);

echo'<h6>';
echo 'Excluido!';
echo'</h6><hr/><br/>';




