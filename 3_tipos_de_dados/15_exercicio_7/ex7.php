<?php

    $pessoa = ['nome' => 'vanderleia', 
    'idade' => 17,
     'altura' => 1.80,
      'peso' => 65];

      $nome = $pessoa['nome'];
      $altura = $pessoa['altura'];
      $idade = $pessoa['idade'];
      $peso = $pessoa['peso'];

        if($idade >= 18){
            echo "$nome é maior de idade, possui $idade anos, tem altura $altura e pesa $peso KG";
        }else{
            echo"$nome é menor de idade, possui $idade anos, tem altura $altura e pesa $peso KG";
        }
?>