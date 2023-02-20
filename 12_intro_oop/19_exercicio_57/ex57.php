<?php

    class Cachorro {
        public $cor;
        public $raca;
        public $porte;
    
    function __construct($cor, $raca,$porte){

        $this->cor = $cor;
        $this->raca = $raca;
        $this->porte = $porte;
    }

    public function exibirAnimal(){
        echo "O bobby é da raça $this->raca com pelagem $this->cor e tem porte $this->porte <br> ";
    }
    
    }

    $bobby = new Cachorro("Abrico","PUG","Pequeno");

    $bobby->exibirAnimal();

   



?>