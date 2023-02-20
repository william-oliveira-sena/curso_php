<?php

    $str = "carro - navio - helicóptero - barco - jangada";

    $strArray = explode(" - ",$str);

   for($i = 0; $i < count($strArray); $i++){

    echo "item: $strArray[$i] <br>";
   }

   
   
    //print_r($strArray);

?>