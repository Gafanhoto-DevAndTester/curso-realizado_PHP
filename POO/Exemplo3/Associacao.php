<?php
 //Conceito de Associação
class Marido
{
   public $nome;
   public $esposa;
   
   public function __construct($nome=null,$esposa=null)
   {
     $this->nome=$nome;
     $this->esposa=$esposa;  
   }
}

class Esposa
{
    public $nome;
    public function __construct($nome=null)
    {
        $this->nome=$nome;
    }
}

$esposa = new Esposa('Samiy');
$marido = new Marido('Roberto',$esposa);

echo "{$marido->nome} e {$marido->esposa->nome}";
