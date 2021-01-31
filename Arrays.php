<?php

$frutas = array('maça','banana');
$idiomas = ['português','inglês'];

$sobrenomes=array(
    'hinata' =>'hyugaa',
    'naruto' =>'uzumaki',
    'sakura' =>'haruno',
    'sasuke' =>'uchiha'

);

$idades=[
    'Roberto' =>28,
    'Livia'=>22
];

$nome="Roberto";
$sobrenome="Santos";

$resultado = compact('nome','sobrenome');

print_r($resultado);
echo('<br/><br/>'); 
print_r($sobrenomes);
echo('<br/><br/>'); 
print_r($idiomas); 
echo('<br/><br/>');
print_r($frutas); 
echo('<br/><br/>');
print_r($idades); 
echo('<br/><br/>');

//StdClass
$objeto = new \StdClass();
$objeto->nome="Livia";
$objeto->sobrenome="Santos";

$teste = [];

//var_dump($objeto);
echo $objeto->nome.' é um tipo: ';
echo gettype($objeto).'<br/><br/>';

echo gettype($teste);


