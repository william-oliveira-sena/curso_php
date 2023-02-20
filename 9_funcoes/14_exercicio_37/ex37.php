<?php

    function defineCorCarro($cor = "vermelho"){

        return $cor;

    }

    $corCarro = defineCorCarro();

        echo "A cor do carro é: $corCarro <br>";

    $corCarro2 = defineCorCarro("prata");

        echo "A cor do carro é: $corCarro2 <br>";

?>