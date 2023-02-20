<?php

    class Carro{
        public $cor;
        public $tetoSolar;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "A velodade máxima da BMW $this->cor é $this->velocidadeMaxima Km/h  <BR>";

        }

     }

     $carro = new Carro;

     $carro->cor = "vermelha";
     $carro-> tetoSolar = true;

     $carro -> setVelocidadeMaxima(320);
     $carro -> getVelocidadeMaxima();
?>