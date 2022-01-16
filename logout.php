<?php
    // Redirecionando o Usuário para fora da area restrita 
    header("Location: index.php");

    // Iniciando a session
    session_start();

    // Limpando as variáveis da session 
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

    // Destruindo a sessão
    session_destroy();
    
?>