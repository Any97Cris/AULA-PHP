<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"> 
        <title>Formulário</title>
    </head>
    <body>
        <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

        <form action="script.php" method="POST">
            <?php 

                $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
                if(!empty($mensagemDeSucesso)){
                    echo $mensagemDeSucesso; 
                }
                
                $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
                if(!empty($mensagemDeErro)){
                    echo $mensagemDeErro;
                }
            ?>
            <p>Seu nome: <input typr="text" name="nome" /></p>
            <p>Sua idade: <input type="text" name="idade" /></p>
            <p><input type="submit" value="Enviar dados do Competidor" /></p>
        </form>

    </body>
</html>