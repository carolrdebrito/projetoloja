<?php
// Criando a função
function apresentar(){
    $data = date('d-m-Y', strtotime($_GET["nascimento"]));
    // o date pede para informar como que eu quero que ela apareça
    // strtotime = string to time (texto para tempo). Tem como parâmetro
    // a data ao contrário. O Y tem que ser em caixa alta.
    echo '<p>Olá, ' . $_GET["nome"] . '!</p>';
    // $_GET é um array
    // nome é a chave do array
    // as aspas duplas precisam estar dentro do array
    echo '<p>Data de Nascimento: ' . $data . '</p>';
 }
// Usando a função
apresentar();
echo "Só para reforçar!! <br>";
apresentar();

?>