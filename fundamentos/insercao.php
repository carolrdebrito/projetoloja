<?php
    // Conexão com o banco de dados
    $servidor = "localhost";
    $user_banco = "root";
    $senha_banco = "";
    $banco = "senac";
    $conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);

    // Conexão deu certo?
    if($conexao->connect_error){
        echo "Deu ruim";
    } else {
        echo "Deu bom! A conexão foi feita!";
    }


    // Insersão dos dados no banco
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $inserir = "INSERT INTO login VALUES (DEFAULT, '$usuario', '$senha')";
    // variável que tá recebendo um SQL
    $conexao->query($inserir);

    echo "<br>Dados inseridos com sucesso!";
?>