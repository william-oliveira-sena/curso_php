<?php

    $cont = 4;

    while($cont < 30){
        echo "$cont <br>";

        if($cont == 24){
            echo "saindo do loop";
            break;
        }
        $cont += 2;
    }

?>