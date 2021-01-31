<?php

class Pessoa
{
    public function configura($nome)
    {
        return "Nome: ".$nome;
    }
}

class Exibe
{
    public $pessoa;
    public $nome;

    public function __construct($nome=null)
    {
        $this->pessoa=new Pessoa();
        $this->nome=$nome;
    }

    public function mostrarNome()
    {
        echo $this->pessoa->configura($this->nome);
    }
}

$exibe = new Exibe("Roberto Santos");
$exibe->mostrarNome();