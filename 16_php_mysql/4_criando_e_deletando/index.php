<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursophp";

$conn = new mysqli($host, $user,$pass, $bd);

//assunto da aula

//criando tabela
//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

//deletando tabela

$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();

?>