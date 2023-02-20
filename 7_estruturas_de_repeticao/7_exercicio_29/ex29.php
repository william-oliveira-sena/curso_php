<?php

    $x = [10,20,30,40,50,60,70,80,90,100];
   
    $y=0;

    while($y < count($x)){
        if($x[$y] == 30 || $x[$y] == 40){
            $y++;
           
            continue;
          
        }
        echo "$x[$y] <br>";
        
        $y++;
    }
?>