<?php

    function testaArray($array){

        $arrayNovo = [];
        
        for($i = 0; $i < count($array);$i++){

            if($array[$i] > 7){
                array_push($arrayNovo, $array[$i]);
            }
        }

        return $arrayNovo;
    }

    $arr = [2,3,6,7,10,12,34];
    $arrayNovo = testaArray($arr);

    print_r ($arrayNovo);

?>