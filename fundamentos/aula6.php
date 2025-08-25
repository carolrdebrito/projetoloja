<?php
// Tipos de Variáveis
$nome = "Carolina"; // String
$idade = 35; // Int
$altura = 1.70; // Float
$vivo = true; // Booleano

// Arrays - é usado pq o processamento fica mais fácil, 
// sendo usado menos memória do computador para montar essa lista
$frutas = ["Uva", "Banana", "Maçã"]; // String
$casas = [102, 104, 106]; // lista de inteiros
$cadastro1 = ["Carolina", 35, 1.70]; // não é mais uma lista de um dado só, tem um string, um int e um float.
// O java, C++ , C e typescript não aceitam esse tipo de array com mais de um tipo de variável

// $cadastro_pessoa = [ cria um grupo de informações
      //  ["Carolina", 35, 1.70 ],
      //  ["Bia", 31, 1,69],
       // ["Ana", 60, 1,63]
// ];
$cadastro_pessoa = array( //chave valor, dicionário
    // nome é a chave e o "Carolina" é o valor
    "Nome" => "Carolina",
    "Idade" => 35,
    "Altura" => 1.70

);

echo $cadastro_pessoa["Nome"] . "<br>";
echo $cadastro_pessoa["Idade"];

// array multidemensional - muito usada em python
$cadastro_pessoa1 = array( // consigo verificar vários valores
    array( //0
        "Nome" => "Bia",
        "Idade" => 31,
        "Altura" => 1.69
    ),
    array( //1
        "Nome" => "Ana",
        "Idade" => 60,
        "Altura" => 1.63
    )
);

echo "<br>" . $cadastro_pessoa1[1]["Nome"];

?>