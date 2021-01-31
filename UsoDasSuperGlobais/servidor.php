<?php
session_start();
//var_dump($_POST);

$nome = $_POST['nome']??"Não Informado";
echo "O nome informado no formulario foi:<b>{$nome}</b>";

$_SESSION['cor_favorita'] = $_GET['cor'];

echo 'Cor favorita setada!';