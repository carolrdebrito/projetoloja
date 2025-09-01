<?php
// Incluir a classe "Pessoa" existente 
// no arquivo aula8c.php
include ("aula08c.php");

$pessoa = new Pessoa("Castanho", "Castanhos", 1.71, 110, "Carolina", "Branca", "PHP");

// Apresentando a pessoa
$pessoa->apresentar_pessoa();
$pessoa->estudar();

// Criando outra pessoa
echo "<br><br>";

$pessoa1 = new Pessoa("Cinza", "Castanhos", 1.63, 95, "Ana", "Branca", "Crochet");
$pessoa1->apresentar_pessoa();
$pessoa1->estudar();

if ($pessoa->nome == "Bia"){
    echo "<br><br>Esta pessoa não foi criada ainda";

} else if ($pessoa->nome == "Carolina"){
    echo "<br><br>A Carolina já foi criada";

} else {
    echo "<br><br>Você não informou um nome válido";
}


?>