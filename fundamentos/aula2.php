<?php
    $pontuacao = 0;
    $resposta = [];
    echo "<b>Quiz</b><br>";;
    //<b></b> deixa o que tiver dentro em negrito

    //Primeira questão
    echo "<br> <b>1. Qual era o nome do 'descobridor' do Brasil?</b>
          <br> a. Cabral
          <br> b. Cabril
          <br> c. Cabrol
    ";
   
    //$resposta1 = "a";
    $resposta [0] = "a";
    echo "<br>Resposta: " . $resposta [0];
    
    //if ($resposta1 =="a"){
    if ($resposta[0] == "a"){
        echo "<br>Resposta correta!<br>";
        $pontuacao++; //incremento, é a mesmo que $pontuacao + 1

    } else{
        echo "<br>Você errou!<br>";
    }

    //Segunda questão
    echo "<br> <b>2. Qual era a cor do cavalo branco de Napoleão?</b>
    <br> a. Branco
    <br> b. Preto
    <br> c. Marrom
    ";
   
    //$resposta2 = "b";
    $resposta [1] = "b";
    echo "<br>Resposta: " . $resposta [1];
    if ($resposta[1] == "a"){
        echo "<br>Errou! Branco era o nome do cavalo de Napoleão. A cor dele era marrom<br>";

    } else if ($resposta[1] == "b"){
        echo "<br>Acertou! Parabéns!<br>";
        $pontuacao++;

    } else if ($resposta[1] == "c"){
        echo "<br>Misericórdia! Vai estudar!<br>";

    } else {
        echo "<br>Você escolheu uma opção inválida.<br>";
    }

    //Terceira questão
    echo "<br> <b>3. Qual é a capital do Brasil? </b>
    <br> a. Pavuna
    <br> b. Maricá
    <br> c. Brasília
    ";
   
    //$resposta3 = "c";
    $resposta [2] = "c";
    //switch case pode substituir o else if
    switch ($resposta [2]){
        case "a":
            echo "<br>Pavuna é um bairro do Rio de Janeiro";
            break; //lê todos #1 os casos e breca quando chega no caso correto
        case "b":
            echo "<br>Maricá é um município do estado do Rio de Janeiro";
            break;
        case "c":
            echo "<br>Parabéns, você acertou!<br>";
            $pontuacao++;
            break;
        default:
            echo "<br>Opção inválida";
            break;
    }

    // echo "<br> <b>Você tirou $pontuacao pontos!</b>";

    //looping mais complicado
    echo "<br><b>Você tirou, deixa-me ver... </b>";
    $x = 1;
    while ($x <= $pontuacao){
        echo "<br>$x";
        $x++;
    }
    echo " pontos<br>";

    //looping mais fácil
    echo "<br><b>Espera, vou contar de novo!</b>";
    for ($x = 1; $x <= $pontuacao; $x++){
        echo "<br>$x";
    }
    echo " pontos";
?>

