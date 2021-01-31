<?php

$primeiro=null;
$segundo='ok';
$terceiro=null;
$quarto=null;

$resultado=$primeiro??$segundo??$terceiro??$quarto??'não preenchido';

$cpf="";
$cnpj="12.212.892/0001-31";

$tipoDocumento=($cpf != '')? "CPF" :'CNPJ';
echo $tipoDocumento."<br/>";

$ehFormado =true;
$temCertificado =false;

$_POST =array(
    'nome'=>'Icaro Jobs',
    'sobrenome'=>null
);

$nome='';
$sobrenome='';

if($temCertificado==true&&$ehFormado==true){
    echo("Tudo Certo!<br/>");
}elseif($temCertificado==false&&$ehFormado==true){
    echo("Ok! Mas avise-nos quando obter o certificado.<br/>");
}else{
    echo("Vai estudar rapaz!<br/>");
}


if($_POST['nome']<>null){
    $nome=$_POST['nome'];    
}else{
    $nome='não preenchido';
}


if($_POST['sobrenome']<>null){
    $sobrenome=$_POST['sobrenome'];    
}else{
    $sobrenome='não preenchido';
}

echo "{$nome}<br/>";
echo "{$sobrenome}";

$_POST = array(
    'nome'=> 'Roberto',
    'sobrenome'=>null
);

$nome = $_POST['nome']??'não preenchido';
$sobrenome=$_POST['sobrenome']??'não preenchido';

echo "<br/>{$nome}<br/>{$sobrenome}";

echo "<br/>{$resultado}";