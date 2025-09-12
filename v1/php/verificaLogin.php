<?php // 10/09/2025

// Iniciando a sessão
session_start();

// Conexão com o bando
require('conexao.php'); // Vai requerer o arquivo conexao.php

// Os dados abaixo vieram do form html
$usuario = $_POST['nome'];
$senha = $_POST['senha'];

$_SESSION['nome'] = $usuario; // Associo o nome do usuário na sessão

// Procurando no banco os dados
$sql = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha' ";
$procurar = $conexao->query($sql);
// Ele executa o SELECT de $sql

// Verificando se existe
if ($procurar->num_rows > 0){
    // Caso o usuário esteja correto
    // Ele vai redirecionar para a página 'admin.html'
    header("Location: admin.php");
    // Redireciona a página para o que está dentro do Location
} else {
    // Caso o usuário não exista
    // Vai informar que o usuário não existe
    echo "Usuário ou Senha incorretos ";
    echo "<a href='../index.html'>Voltar</a>";
    // <a> é tag de link
}


?>