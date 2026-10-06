<?php








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
        <br><br>
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