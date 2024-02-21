<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Kider - Escola Bilingue</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
        include 'conexao_bd.php';

        $nome = $_POST["txtNome"];
        $escola_anterior = $_POST["txtEscolaAnterior"];
        $turno_disponivel = $_POST["txtTurnoDisponivel"];
        $formacao = $_POST["txtFormacao"];
        $tempo_experiencia = $_POST["txtTempoExperiencia"];

        $sql = "INSERT INTO professor(nome,escola_anterior,turno_disponivel,formacao,tempo_experiencia)";
        $sql = "VALUES ('$nome,$escola_anterior,$turno_disponivel,$formacao,$tempo_experiencia')"

        if (executarComando($sql))
        {
            echo "<h1>VENHA SER PROFESSOR!</h1>";
        }
        else
        {
            echo "<h1>Erro!</h1>";
        }

    ?>
</body>
</html>