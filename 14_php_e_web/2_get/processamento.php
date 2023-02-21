<?php

if(isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "padrão";
    $idade = "padrão";
}

?>


<h1> O seu nome é <?= $nome ?>, e possui <?= $idade ?> anos</h1>