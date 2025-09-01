<?php

include ("aula08b.php"); // Importei a classe Cachorro
include ("aula08.php"); // Importei a classe Garrafa

$cachorro = new Cachorro("Kiara", "Pitbull");

    echo "<br>Nome: ";
    echo $cachorro->nome;
    echo "<br>Raça: ";
    echo $cachorro->raca;
    echo "<br>";
    $cachorro->latir();

$cachorro1 = new Cachorro("Kiko", "Poodle");
echo "<br>Nome: ";
echo $cachorro1->nome;
$cachorro->latir();

$nome = "Carolina";
    $idade = 35;
    $garrafa = new Garrafa("Azul", "Inox", 510, "Água");
    // O objeto só é montado aqui. 
    // Istanciar o objeto é pegar uma variável e receber um objeto
    $garrafa->apresentar_garrafa();
    // a setinha mostra que a variável é um objeto

    echo "<br><br>O status da garrafa é: <br>";
    echo $garrafa->status_tampado(true);

    $copo = new Garrafa("Transparente", "Vidro", 150, "Cerveja");
    echo "<br><br>";
    $copo->apresentar_garrafa();

    echo "<br><br>Cor do copo é:";
    echo $copo->cor;


?>

