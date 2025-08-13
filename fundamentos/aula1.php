<?php // delimita onde começa o php 
    // Primeiro programa
    echo "Olá, mundo!";
    // Comando de saida, igual o console.log do JS

    // declaração de variáveis ($)
    $idade = 35;
    $altura = 1.71;
    $nome = "Carolina";
    $trabalho = true;

    // Concatenação
    echo "<br>Meu nome é " . $nome . ". Tenho " . $idade . " anos e a minha altura é de " . $altura . ". Se eu trabalho? " . $trabalho . ".";
    // os pontos rosas se chamam concatenar que é uma operação onde se junta duas equações. Concatenação clássica.

    // echo "<br>Meu nome é $nome. Tenho $idade anos e a minha altura é de $altura. Se eu trabalho? $trabalho."; 
    // Esse formato é uma atualização nova do PHP, então ele não roda nos antigos. Concatenação corrida.

    // Operadores Aritméticos
    $x = 10;
    $y = 15;

    $soma = $x + $y;
    $subtracao = $x - $y;
    $multiplicacao = $x * $y;
    $divisao = $x / $y;
    $resto = $x % $y;

    echo "<br>Soma de " . $x . " e " . $y . ": " . $soma;
    echo "<br>Subtração de " . $x . " e " . $y . ": " . $subtracao;
    echo "<br>Multiplicação de " . $x . " e " . $y . ": " . $multiplicacao;
    echo "<br>Divisão de " . $x . " e " . $y . ": " . $divisao;
    echo "<br>Resto da divisão: $resto";

    // Transformação do tipo da variável
    $div_inteiro = intval($divisao);
    echo "<br>Divisão entre $x e $y: $div_inteiro";
    // parseInt no js = intval no php
    // parseFloat no js = floatval no php

    $num1 = 4;
    $num2 = 2;
    $div = $num1 / $num2;
    $div_float = floatval($div);
    
    echo "<br>Resultado: $div_float";





?>

