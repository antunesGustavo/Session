<?php
    // Iniciando a session
    session_start();

    // Verifica se o Usuario e a senha são válidos
    if(($_SESSION['usuario'] != 'adm') ||
         ($_SESSION['senha'] != '123')){

    // Caso não sejam válidos redireciona para fora da area restrita
    header("Location: ../index.php?destroisession=Ops...Ocorreu algo inesperado");
       }
?>