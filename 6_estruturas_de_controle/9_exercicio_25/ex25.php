<?php
    $x = 15;
    $nome = "joão";

    if(is_int($x)){
        $multiplicacao = $x * 2;

        if($multiplicacao > 100){
            echo "$multiplicacao é maior que 100";
        }else{
            echo "$multiplicacao é menor que 100";
        }

    }
?>