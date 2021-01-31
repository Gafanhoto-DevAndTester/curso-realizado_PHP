<?php

class Produtos
{
    public $nome;
    public $valor;

    public function __construct($nome=null,$valor=null)
    {
        $this->nome=$nome;
        $this->valor=$valor;        
    }
}

class CarrinhoCompras{
    public $produtos;

    public function adiciona(Produtos $produto)
    {
        $this->produtos[] = $produto;
    }

    public function exibe()
    {
        foreach($this->produtos as $produto)
         {
            echo "<ul>";
            echo "<li>{$produto->nome}</li>";
            echo "</ul>";
        }
    }
}

$produto1 = new Produtos('Playstation');
$produto2 = new Produtos('Xbox');

$carrinho=new CarrinhoCompras();

$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();