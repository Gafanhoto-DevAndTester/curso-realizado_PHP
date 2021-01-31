<?php

$corFavorita = "marrom";//Vermelho,verde,roxo

switch($corFavorita){
    case "azul":
        echo "Selecionou Azul!<br/>";
        break;
    case "vermelho":
        echo "Selecionou Vermelho!<br/>";
        break;
    default:
    echo "Essa cor não foi cadastrada!<br/>";
}

for($numero=0;$numero<=10;$numero++){
    echo "<br/>O número atual é: {$numero}";
}

echo'<br/><br/>';
$numero =1;

while($numero <=5){
    echo "O número atual é {$numero} <br/>";
    $numero++;
}

echo'<br/><br/>';
$numero =1;

do{
    echo "O número atual é {$numero} <br/>";
    $numero++;
}while($numero<=5);

echo'<br/><br/>';
$cores = ['vermelho','verde','azul','amarelo'];
foreach($cores as $cor){
    echo "A cor atual é {$cor}<br/>";
}

echo'<br/><br/>';
$nomes=["Icaro","Danilo","Roberto","Victor"];
$resultado = [];

foreach($nomes as $key =>$value){
    if(!($key % 2)){
        continue;
    }
    array_push($resultado,$value);
}
var_dump($resultado);


