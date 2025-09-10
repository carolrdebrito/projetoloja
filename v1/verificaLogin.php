<?php //10/09/2025

$usuario = $_POST['nome'];
$senha = $_POST['senha'];

//Conexão com o banco
$servidor = 'localhost';
$user_banco = 'root';
$senha_banco = '';
$banco = 'projetoloja';

$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);

// **** Verificando Login ****

?>