<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Metadados -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css" >

         <!-- Título do Página (aparece na aba do navegador) -->
        <title>Session</title>
    </head>
    <body>
    
        <!-- Início do Forms -->
        <form method="post" action="valida-login.php"> 

        <!-- Campo onde é colocado o seu Usuário -->
        <label for="Usuario">
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>               
        </label> 

         <!-- Campo onde é colocado a sua Senha -->
        <label for="Senha">
            <input type="password" id="senha" name="senha" placeholder="Senha" required>   
        </label> 

                <!-- Botão que envia o Formulário -->
                <button>Log in</button> <br> <br>

                <!-- Variáveis para as mensagens de errro -->
                <?php 
                        if(isset($_GET['errousuario'])){
                            echo("<h5><font color=\"#FF0000\">".$_GET['errousuario']."</font></h5>");
                        }
                        else if(isset($_GET['errosenha'])){
                            echo("<h5><font color=\"#FF0000\">".$_GET['errosenha']."</font></h5>");
                        }
                        else if(isset($_GET['errousuariosenha'])){
                            echo("<h5><font color=\"#FF0000\">".$_GET['errousuariosenha']."</font></h5>");
                        }
                        else if (isset($_GET['destroisession'])){
                            echo("<h5><font color=\"#FF0000\">".$_GET['destroisession']."</font></h5>");
                        }
                    ?>
        </form>

        <!-- Imagem da mulher  -->
        <img src="../prj-session/img/dec.jpg" >
    </body>
</html>