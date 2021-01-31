<?php

$nome = "Roberto Santos";
$idade = 28;
$altura = 1.64;
$formacoes = array('JS','C#','PHP','Wordpress','Node','SQL');
$cliente = new \StdClass();

echo '$nome: '.gettype($nome).'<br/>';
echo '$idade: '.gettype($idade).'<br/>';
echo '$altura: '.gettype($altura).'<br/>';
echo '$formacoes: '.gettype($formacoes).'<br/>';
echo '$cliente: '.gettype($cliente).'<br/><br/>';

$idadeRoberto =28;
$idadeLivia=22;//mude para string '22'
$ehFormado =true;
$temCertificado =false;


var_dump($idadeRoberto == $idadeLivia);//para verificar valor e tipo ===
var_dump($idadeRoberto > $idadeLivia);
var_dump($idadeRoberto < $idadeLivia);
var_dump($idadeRoberto >= $idadeLivia);
var_dump($idadeRoberto <= $idadeLivia);
var_dump($idadeRoberto != $idadeLivia);
var_dump(!$ehFormado);
var_dump(!!$ehFormado);
var_dump($ehFormado && $temCertificado);
var_dump($ehFormado || $temCertificado);

