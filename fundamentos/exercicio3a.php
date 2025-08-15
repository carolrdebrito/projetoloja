<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Apenas um exercício</h1>
    <?php
        $nome = ["Carol", "Bia", "Ana"];
        $nome_procurado = "Carol";

    echo "<h2>Dados Cadastrais</h2>";
        
    for ($x = 0; $x < count($nome); $x++){
        echo "<p>Nome: $nome[$x]</p>";
        
        if ($nome[$x] == $nome_procurado){
            // vai procurar o nome dentro do array
            echo "<span> (Já tem experiência) </span>";
        }
    }
    ?>
</body>
</html>

