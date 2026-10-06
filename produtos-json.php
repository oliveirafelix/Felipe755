<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $fabricante = $_POST["fabricante"];
    $origem = $_POST["origem"];
    $nomeProduto = $_POST["nomeProduto"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $novoProduto = [
        "fabricante" => $fabricante,
        "origem" => $origem,
        "nomeProduto" => $nomeProduto,
        "categoria" => $categoria,
        "marca" => $marca,
        "preco" => $preco,
        "quantidade" => $quantidade
    ];
}







?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form method="POST">
        <h1>CADASTRO DE PRODUTOS</h1>
        <label>Nome do fabricante:</label>
        <input type="text" name="fabricante" required>
        <label>País de origem:</label>
        <br><br>
        <input type="text" name="origem" required>
        <label>Nome do produto:</label>
        <input type="text" name="nomeProduto" required>
        <br><br>
        <label>Categoria:</label>
        <input type="text" name="categoria" required>
        <br><br>
        <label>Marca:</label>
        <input type="text" name="marca" required>
        <br><br>
        <label>Preço:</label>
        <input type="text" name="preco" required>
        <br><br>
        <label>Quantidade em estoque:</label>
        <input type="text" name="quantidade" required>
    </form>
</body>
</html>