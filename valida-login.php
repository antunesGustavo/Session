<?php
    // Variáveis que recebem os valores do forms
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Condição caso o usuario e senha estejam corretos
    if(($usuario=='adm') && ($senha=='123')){

        // Iniciando a session
        session_start();

        // Criando duas variaveis de sessão
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        // Direcionando o Usuário para a area restrita
        header("Location: area-restrita/index-area-restrita.php");
    }
    
    // Redirecionando para a página com o forms, caso o usuario ou senha não sejam válidos
    else if (($usuario != 'adm') && ($senha == '123')){
        header("Location: index.php?errousuario=Verifique se o campo do usuário foi preenchido corretamente");
    }
    
    else if(($senha != '123') && ($usuario == 'adm' )){
        header("Location:index.php?errosenha=Verifique se o campo da senha foi preenchido corretamente");
    }  

    else{
        header("Location:index.php?errusuariosenha=Verifique se os campos foram preenchidos corretamente");
    }  
    
?>