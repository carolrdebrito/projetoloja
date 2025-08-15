<?php
    //While
    $x = 0;
    while ($x <= 10){
        echo "<br>Numéro $x";
        $x++;
    }

    //For
    for ($x = 0; $x <= 10; $x++){
        echo "<br>Número $x";
    }

    //Do While -> a diferença entre ele e o while é que, mesmo que x seja maior que 10, 
    // o do while vai printar a 1ª execução. O while nem faz o looping.
    // é usado mais em login e senha em caixas eletrônicos...
    $x = 0;
    do {
        echo "<br>Número $x";
        $x++;
    } while ($x <= 10);

    // estruturas de controle: if, else, if else e switch
    // estruturas de looping: while, for, do while
?>

