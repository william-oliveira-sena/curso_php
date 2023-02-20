<?php

    $carro = ["jaguar", 3.0, "azul", 18, "teto solar","automático"];

    print_r($carro);

    echo "<br>";

    list($marca, $potencia, $cor, $aro, $opcionais, $cambio) = $carro;

    echo "$marca <br>";
    echo "$potencia <br>";
    echo "$cor <br>";
    echo "$aro <br>";
    echo "$opcionais <br>";
    echo "$cambio <br>";
    ?>