<?php
// Verifica se o formulárop foi enviado usando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    
    // Recebe as notas de Português
    $portugues_prova1 = $_POST["portugues_prova1"];
    $portugues_prova2 = $_POST["portugues_prova2"];
    $portugues_prova3 = $_POST["portugues_prova3"];
    
    // Recebe as notas de Matemática
    $matematica_prova1 = $_POST["matematica_prova1"];
    $matematica_prova2 = $_POST["matematica_prova2"];
    $matematica_prova3 = $_POST["matematica_prova3"];
    
    // Recebe as notas História
    $historia_prova1 = $_POST["historia_prova1"];
    $historia_prova2 = $_POST["historia_prova2"];
    $historia_prova3 = $_POST["historia_prova3"];
}
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>