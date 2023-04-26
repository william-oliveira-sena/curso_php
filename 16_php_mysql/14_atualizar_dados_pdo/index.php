<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$senha = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $senha);

//assunto da aula

$nome = "Josias Machado";
$idade = "34";
$nomeantigo = "josias";

$stmt = $conn->prepare("UPDATE pessoas SET nome = :nome, descricao = :descricao WHERE nome = :nomeantigo");

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":idade", $idade);

$stmt->execute(); 