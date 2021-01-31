<?php
$filtro = ["nome1"=>"Joana","nome2"=>"Livia"];

$nomes = ["Renata","Joana","Livia","Samiy","Laura","Michele"];

$resultado = array_filter($nomes,function($valor) use($filtro){
return($valor ===$filtro["nome1"])|| ($valor ===$filtro["nome2"]);
});
echo "<pre>";
var_dump($resultado);
echo "</pre>";


