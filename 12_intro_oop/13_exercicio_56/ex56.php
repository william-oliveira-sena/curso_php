<?php

    class Humano{
        public $nome = "william";
        public $idade = 34;

             public function falar(){

        echo "blablabla <br>";
        }

    }

    class Professor extends Humano{
        public $materia = "programação";
        public  $escola = "programadores an";
            public function lecionando(){
                echo "em aula <br>";
            }

    }

    $wil = new Professor;
        echo $wil->nome . "<br>";
        echo $wil->materia . "<br>";
    $wil -> falar();
    $wil -> lecionando();

?>