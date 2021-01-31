<?php

namespace App\Models;

class Funcionario extends Usuario
{

    
    
    public function __construct()//pode-se passar um parametro aqui
    {
        parent::__construct();//primeiro chamamos o construtor da classe pai(usuario)
        //Se recebessemos um parametro nome nesse construtor poderiamos definir com o $this->nome=$nome
        echo "<br/> Chamou a classe funcionário... <br/><br/>";
    }
    
    public function getConta()
    {
        $this->conta ="BB";
        return $this->conta;
    }

}
