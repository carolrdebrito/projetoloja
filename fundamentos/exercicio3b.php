<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cidade = $_POST["cidade"];

    echo "Nome digitado: $nome";
    echo "<br>Idade: $idade";

    if ($cidade == "Cidade"){
        echo "<br>A cidade não foi informada";
    } else {
        echo "<br>Cidade: $cidade";
    }

    if ($idade >= 18){
        echo "<br> Vai entrar no Rio Innovation Week";
    } else {
        echo "<br> Barrada! Menor de idade!";
    }
?>