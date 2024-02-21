<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include 'conexao_bd.php';

        $email = $_POST["txtEmail"];
        $idade = $_POST["txtIdade"];
        $nome_crianca = $_POST["txtNomedaCrianca"];
        $nome_pais = $_POST["txtNomedosPais"];
        $mensagem = $_POST["txtMensagem"];

        $sql = "INSERT INTO professor(email,idade,nome_crianca,nome_pais,mensagem)";
        $sql = "VALUES ('$email,$idade,$nome_crianca,$nome_pais,$mensagem')"

        if (executarComando($sql))
        {
            echo "<h1>Mensagem enviada!</h1>";
        }
        else
        {
            echo "<h1>Erro!</h1>";
        }

    ?>
</body>
</html>