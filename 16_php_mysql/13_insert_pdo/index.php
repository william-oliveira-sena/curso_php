<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$senha = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $senha);

//assunto da aula

$stmt = $conn-> prepare(" INSERT INTO pessoas (nome, idade) VALUES (:nome, :descricao)");

$nome = "josias";
$idade = "45";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":idade", $idade);

$stmt->execute();