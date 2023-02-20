<?php
    $vel = 41;

    if( $vel < 40){
        echo "Você esta dentro da velocidade correta";
    }else if($vel == 40){
        echo "Cuidado, você está dentro do limite";
    }else{
        echo "você acaba de levar uma multa";
    }
?>