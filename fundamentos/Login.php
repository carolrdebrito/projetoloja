<?php
    // Conexão com o banco de dados
    $servidor = "localhost";
    $user_banco = "root";
    $senha_banco = "";
    $banco = "senac";
    $conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);
    
    //Capitando os dados do form. de login
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //Executando a sql (query)
    $consulta = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
    $executa = $conexao->query($consulta);

    //Testando para ver se tem no banco
    if ($executa->num_rows > 0){
        echo "<br>Usuário logado no sistema";
    } else {
        echo "<br>Usuário ou senha incorreta";
    }
?>