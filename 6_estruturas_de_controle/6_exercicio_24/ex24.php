<?php

    $nome="william";
    $idade = 34;
    $empregado = true;

    if(is_int($nome)){
        echo "A variável  é um inteiro <br>";
    }else {
        echo"A variável nome não é um inteiro <br>";
    } 

    if(is_int($idade)){
        echo "A variável idade é um inteiro <br>";
    }else {
        echo"A variável não é um inteiro <br>";
    }

    if(is_int($empregado)){
        echo "A variável é um inteiro <br>";
    }else {
        echo"A variável empregado não é um inteiro <br>";
    }

?>