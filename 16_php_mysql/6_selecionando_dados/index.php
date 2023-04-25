<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

$conn = new mysqli($host, $user,$pass, $bd);

//assunto da aula

$q = "SELECT * FROM pessoas";

$result = $conn->query($q);

$conn->close();

//um resultado
$pessoa = $result->fetch_assoc();

//todos resultados
$pessoas = $result->fetch_all();

print_r($pessoas);



?>