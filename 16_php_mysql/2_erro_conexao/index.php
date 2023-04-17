<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cursopha";

$conn = new mysqli($host, $user,$pass, $bd);

    if($conn->connect_errno){
        echo"erro na conexão! <br>";
        echo "<br> Erro:". mysqli_connect_error(); //imprimi na tela o erro tratado.
    }

?>