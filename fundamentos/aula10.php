<?php
    // Começa a armazenar coisas de forma temp. Abrindo uma sessão
    session_start();

    $_SESSION['nome'] = "Carolina"; //array
    // ^ variável temporária
    echo $_SESSION['nome'];

    // fechando a sessão
    session_destroy();
    // usado em login de sistema






?>