<?php
    $feira = ["batata","maça","pera", "feijão", "arroz"];

    print_r ($feira);
    echo "<br>";

    $removidos = array_splice($feira, 2, 2);

    print_r ($removidos);
    echo "<br>";
    
    print_r ($feira);
    echo "<br>";
?>