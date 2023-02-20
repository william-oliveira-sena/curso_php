<?php

    class Pessoa{
        public $nome = "william";
        public $idade = 34;

        function andar(){
            echo "no passinho <br>";
        }
    }

    $pessoa = new Pessoa;
    $pessoa -> andar();

    echo $pessoa -> nome . "<br>";
    echo $pessoa -> idade . "<br>";
?>