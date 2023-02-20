<?php

    class Cachorro {
        function Latir(){
            echo "auauau <br>";
        }

        function Andar($m){
            echo "no passinho eu andei $m metros <br>";
        }
    }

    $bobby = new Cachorro;
    $bobby -> Latir();

    $nina = new Cachorro;
    $nina -> Andar(25);
?>