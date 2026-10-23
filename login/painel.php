<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="cartao">
        <span class="selo">Área secreta</span>
        <h1>Bem-Vindo, <?php htmlspecialchars($_SESSION["usuario"]) ?></h1>
        <p>Esta página é secreta. só quem faz lpgin consegue ver.</p>
        <a href="sair.php">sair</a>
    </main>
</body>
</html>