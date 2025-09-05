<?php
// a session está ali para ser usada 
// enquanto a sessão estiver aberta
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
    echo "Olá, " . $_SESSION['nome'] . "!";


    
?>
