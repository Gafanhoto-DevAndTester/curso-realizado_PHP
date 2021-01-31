<?php
//phpinfo();
header('Content-Type:text/html;charset=utf-8');

$nome="<h1>Roberto Santos</h1><br/>";
$maiusculo=strtoupper($nome);

echo strtoupper($nome);
echo strtolower($maiusculo);

$habilidades='<h3> html / js / css / php <h3>';
echo trim($habilidades);
echo stripslashes($habilidades);

$tituloDeFilme ='<b>Nome: </b>Matrix';
echo htmlspecialchars($tituloDeFilme);

echo("<br/><br/>");

//Criando um array de pizzas
$pizzas = "mussarela calabrezza frango";
$arrayDePizzas=explode(" ",$pizzas);
var_dump($arrayDePizzas);

echo("<br/><br/>");
//Criando uma string de pizzas
$pizzas = ['mussarela','calabrezza','frango'];
$stringDePizzas = implode(', ',$pizzas);
$joinDePizzas = join(', ',$pizzas);

echo $stringDePizzas."<br/>";
echo $joinDePizzas."<br/>";
echo("<br/>");

$mensagem = "Olá, meu nome é Roberto, tenho 28 anos de idade.";
$nome=substr($mensagem,5); //A partir da 5a posção,pega o restante
echo $nome;

echo("<br/><br/>");
$mensagem = "Olá, meu nome é Roberto, tenho 28 anos de idade.";
$nome=substr($mensagem,-6);//A partir do fim, pega apenas 6 caracteres
echo $nome;

echo("<br/><br/>");
$mensagem = "Olá, meu nome é Roberto, tenho 28 anos de idade.";
$nome=substr($mensagem,0,3);//A partir do inicio, pega apenas 3 caracteres
echo $nome;

echo("<br/><br/>");
$mensagem = "Olá, meu nome é Roberto, tenho 28 anos de idade.";
$nome=substr($mensagem,17,4);
echo $nome;

echo("<br/><br/>");
$idades=[
    'Sandra'=>23,
    'julio'=>'Julio é de 86',
    'roberto'=>'Roberto é de 92'
];

$json = json_encode($idades,JSON_UNESCAPED_UNICODE);

echo $json;

echo("<br/><br/>");
$json = '{"Sandra":23,"julio":"Julio é de 86","roberto":"Roberto é de 92"}';
$objeto = json_decode($json);

var_dump($objeto);
echo("<br/><br/>");
echo $objeto->julio;

$texto =file_get_contents('teste2.txt');
echo '<br/>'.$texto;

$texto2=file_put_contents("teste.txt","Vocês são tudo coisado!");
echo "<br/>".$texto2;
