<?php
    
    $teste = [10,"william","thiago", "felipe", 24, 33,"jhonathan", 27,28,"lisiane"];

    $cont = 0;

    while($cont < 10){
        if(is_string($teste[$cont])){
            echo "$teste[$cont] <br>";
            
        }
        $cont ++;
    }
?>