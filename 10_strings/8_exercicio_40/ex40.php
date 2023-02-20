<?php

    $str = "O rato roeu a roupa do rei de roma";

    $contLetraA = 0;

        for($i = 0; $i < strlen($str); $i++){

            if($str[$i] == "a" || $str[$i] == "A"){
                $contLetraA ++;
            }
        }

    echo "A frase: $str <br> Possui: $contLetraA letras A ou a";

?>