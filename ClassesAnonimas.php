<?php

$usuario = new class(){
    private $nome;

    public function __construct()
    {
        echo "Contrutor da minha classe anônima<br/>";
    }

    public function setNome($valor)
    {
        $this->nome = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }

};
    $usuario->setNome('Helena');
    echo $usuario->getNome(); 
