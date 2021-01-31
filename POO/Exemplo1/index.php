<?php

require_once('./classes/Usuario.php');

$usuario = new Usuario;

$usuario->nome="Roberto Santos";
$usuario->email="roberto@teste.com";

echo $usuario->getNome();
echo "<br/>";
echo $usuario->getEmail();


/**
 * Sobras de Código
 * 
 */