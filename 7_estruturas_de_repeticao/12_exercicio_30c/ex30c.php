<?php

    $arr = [];

    for($i = 10; $i <= 20; $i++){
        array_push($arr,$i);
    }

        print_r($arr);
        echo "<br>";

        for($j = 0; $j < count($arr); $j++){
            $resto = $arr[$j] % 2;
            if($resto != 0){
                echo "$arr[$j] <br>";
            }
        }
   
   

?>