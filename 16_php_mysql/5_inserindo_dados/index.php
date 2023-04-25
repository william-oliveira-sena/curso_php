<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

$conn = new mysqli($host, $user,$pass, $bd);

//assunto da aula

$table = "pessoas";
$nome = "joão";
$idade = 22;

$q = "INSERT INTO $table (nome, idade) VALUES ('$nome', '$idade')";

$conn->query($q);
$conn->close();

?>  