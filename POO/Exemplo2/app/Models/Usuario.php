<?php

namespace App\Models;

class Usuario
{
    public $nome;
    public $email;

    protected $conta;
    private $senha;

    public function __construct()
    {
        echo "<br/>Chamou a classe usuario...<br/>";    
    }
    public function getName()
    {
        return $this->nome;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setConta($valor)
    {
        $this->conta = $valor;
    }
    public function getConta()
    {
        return $this->conta;
    }

    public function setSenha($valor)
    {
        $this->senha=$valor;
        $this->hash($this->senha);
    }
    private function hash($senha)
    {
        $this->senha = sha1($senha);
    }
    public function getSenha()
    {
        return $this->senha;
    }
}