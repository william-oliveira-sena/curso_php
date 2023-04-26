<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$senha = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $senha);

//assunto da aula

//variavel com o dado a comparar

$stmt = $conn->prepare("SELECT * FROM pessoas WHERE VARIAVEPARACOMPARA > NOMECOMPARADO");

$stmt = bindParam(":varivelcomparação", comparados);

$stmt->execute();

$data = $slml->fetch(PDO:fetch_assoc);


print_r($data);