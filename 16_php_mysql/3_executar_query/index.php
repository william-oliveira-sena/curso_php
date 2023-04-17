<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

$conn = new mysqli($host, $user,$pass, $bd);

//assunto da aula

$sql = "SELECT * FROM pessoas";

$result = $conn->query($sql);

print_r($result);

$conn->close();

?>