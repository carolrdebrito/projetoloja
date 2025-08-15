<?php
    $nome = ["Ana", "Marcio", "Isabella", "Eliane", "Carol"];
    //fila comum
    for($x = 0; $x <= 4; $x++){
    echo "<p>Olá, meu nome é $nome[$x] !</p>";
    }
    
    $nome1 = ["Joãozinho", "Mariazinha", "Juquinha"];
    //fila dinâmica
    for($y = 0; $y < count($nome1); $y++){
        //count é o tamanho da array. permite fazer uma redinâmica, não precisa
        // ser fechada no número
        //é infinito
    echo "<p>Olá, meu nome é $nome1[$y] !</p>";
    }

    ?>

