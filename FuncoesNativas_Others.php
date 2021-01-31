<?php

echo(rand()."<br/>");
echo(rand()."<br/>");
echo(rand(0,10)."<br/>");

$nomes=['Roberto','Mariana','Maristela'];
echo"<br/>";
echo (count($nomes));

echo"<br/>";
echo (ceil(0.60)."<br/>");
echo (ceil(0.40)."<br/>");
echo (ceil(6)."<br/>");
echo (ceil(6.1)."<br/>");
echo (ceil(-9.8)."<br/>");
echo (ceil(-9.60)."<br/>");

echo"<br/>";
echo (round(0.60)."<br/>");
echo (round(0.40)."<br/>");
echo (round(6)."<br/>");
echo (round(6.1)."<br/>");
echo (round(-9.8)."<br/>");
echo (round(-9.60)."<br/>");

echo"<br/>";
$apelido = "Roberto Santos";
$nome=str_replace("Kuchiki","Orihime",$apelido);
echo strlen($apelido);

echo "<br/>".$nome."<br/>";

$md5=md5('1234');
$sha1=sha1('1234');

echo '<br/>'.$md5."<br/>";
//81dc9bdb52d04dc20036dbd8313ed055

echo $sha1."<br/>";
//7110eda4d09e062aa5e4a390b0a572ac0d2c0220

echo"<br/>";
$nome="Roberto";
$nomeCodificado = base64_encode($nome);
$nomedecodificado=base64_decode($nomeCodificado);

echo $nome."<br/>";
echo $nomeCodificado."<br/>";
echo $nomedecodificado;

echo"<br/>";

$mensagem = "Olá, meu nome é Bond";
$mensagem = wordwrap($mensagem,25);
echo $mensagem."<br/>";

echo"<br/>";
echo  number_format("100000")."<br/>";
echo  number_format("100000",2)."<br/>";
echo  number_format("100000",1)."<br/>";
echo number_format('100000.45',2,",",".")."<br/>";