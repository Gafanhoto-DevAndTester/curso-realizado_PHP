<?php

$texto = "Hello World! <br/><br/>";
$texto2 ="Hello Again PHP! <br/><br/>";

echo $texto;
echo $texto2;


$nome="Roberto Santos";
$idade=28;
$formacoes=array();
$ultimaVizualizacao=null;

echo $nome."<br/><br/>";
echo $idade."<br/><br/>";

echo isset($formacoes)."<br/>"; //true
echo isset($ultimaVizualizacao)."<br/>";//false

echo empty($formacoes)."<br/>";//true
echo empty($ultimaVizualizacao);//true

//Isso é um comentario de uma linha só
/*
Comentario de várias linhas
*/
/**
 * Comentario de documentação
 */

 //Definição de Variaveis & Constantes - Variaveis 

 $nome="Roberto Santos";
 $nome=13;
 echo("<br/><br/>".$nome);

 //Definição de Variaveis & Constantes - Constantes
 define('PI',3.14);
 echo ("<br/><br/> O valor de PI é: ".PI);

 /**
  * Tipos Primitivos 
    *$nome="Roberto Santos"; - string
    *$instrutor=true; - boolean
    *$formacoes=array('php','laravel','mysql');-array
    *$estudos=('filosofia','informatica','entre outras coisas');
    *$idade=32; - int/integer
    *$pi=3.14; - float/double
  */