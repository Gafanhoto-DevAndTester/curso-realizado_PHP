<?php



function latir(string $nomeDoCachorro)
{
    echo "O Cachorro {$nomeDoCachorro} latiu!<br/><br/>";
}
latir("Marley");


function mostrarIdade(int $idade)
{
    echo "<br/>sua idade é {$idade}<br/>";
}
mostrarIdade(43);

$resultado = mostrarIdade2(32);

echo "<br/>".$resultado."<br/>";

function mostrarIdade2(int $idade):int{
    return $idade;
}

//dump and die
function dd($variavel){
    echo '<pre>';
   print_r($variavel);//var_dump()
   echo"<br/>";
    echo '</pre>';
    die();
}

$nomes = ["icaro","Danilo"];

dd($nomes);




