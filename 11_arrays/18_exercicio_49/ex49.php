<?php

    $raca = "pug";
    $cor = "abrico";
    $sexo = "masculino";
    $idade = 10;

    $dog = compact("raca","cor","sexo","idade");

    print_r($dog);
    echo "<br>";

    foreach($dog as $caracteriscias => $value){

        echo "$caracteriscias:  $value <br>"; 
        
    }

?>