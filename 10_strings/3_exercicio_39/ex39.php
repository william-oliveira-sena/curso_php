<?php

        $list=[
            'porta' => 100,
            'maçaneta' => 5,
            'motor' => 2000,
            'retrovisor' => 8
         ];

    function itensCarros($arr){
        $arrItenscarros = [];

        foreach($arr as $item => $preco){
            if($preco > 10){
                array_push($arrItenscarros, $item);
            }
        }

        return $arrItenscarros;
        
   }
   $novoArr = itensCarros($list);

   print_r($novoArr);
?>