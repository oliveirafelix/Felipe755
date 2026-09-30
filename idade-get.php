<?php 
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $resultado = "";

    if($idade >= 18) {
        $resultado = "Você é maior de idade";
    } else { 
        $resultado = "Você é menor de idade";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de idade</title>
    <link rel="stylesheet" href="verificador.css">
</head>
<body>
    <!--MENU-->
    <div class="logo">
        <h2>Verificação de idade</h2>
    <nav>
        <a href="index.php">Início</a>
    </nav>
    </div>

    <div class="mensagem">
    <form method="GET">
        <label>Nome:</label>
        <input type="text" class="nome" id="nome" name="nome">
        <input type="numero" class="idade" id="idade" name="idade">

        <button type="submit">Enviar</button>
    </div>
    </form>
    <h2> <?= $resultado ?> </h2>
</body>