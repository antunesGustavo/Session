<!DOCTYPE html>
<html lang="pt-br">
    <head>
    
    <!-- Metadados -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../css/restricted.css" >

        <!-- Título do Página (aparece na aba do navegador) -->
        <title>Area restrita</title>
    </head>
    <body>

        <?php

        // Incluíndo o arqruivo na página, mas não repetindo o codigo
            include_once("../sentinela.php");   
        ?>

        <!-- Classe com a mensagem e o botão de Sair  -->
        <div class="message">
            Bem vindo! <br>
            <a href="../logout.php">
                    <button>Sair</button>
                </a>
        </div>
        
    </body>
</html>