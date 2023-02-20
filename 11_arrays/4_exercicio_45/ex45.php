<?php

    $arr = range(10,45);

    for($i=0; $i < count($arr);$i++){
        $imprimi[$i] = $arr[$i] + 6;

        if($imprimi[$i] > 30){
            echo "Número $imprimi[$i] é muito alto <br>";
        }else{
            echo $imprimi[$i] . "<br>";
        }
    }
?>