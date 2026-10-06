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
    $conteudoJson = file_get_contents(__DIR__ . "/dados/produtos.json");

    $produto = json_decode($conteudoJson, true);

    $produto[] = $novoProduto;

    $jsonAtualizado = json_encode(
        $produto,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents(__DIR__ . "/dados/produtos.json", $jsonAtualizado);
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
        <h1>SISTEMA DE CADASTRO</h1>
        <h2>cadastrando fabricante</h2>
        <label>Nome do fabricante:</label>
        <input type="text" name="fabricante" required>
        <br><br>
        <label>País de origem:</label>
        <input type="text" name="origem" required>
        <h2>cadastrando produto</h2>
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
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    
    <h1>Produtos cadastrados</h1>
    <?php foreach ($produto as $novoProduto) { ?>
        <h2>Dados do fabricante</h2>
        <p>Fabricante: <? $novoProduto["fabricante"]?></p>
        <p>País de origem: <? $novoProduto["origem"]?></p>
        <h2>Dados do produto</h2>
        <p>Nome do produto: <? $novoProduto["nomeProduto"]?></p>
        <p>Categoria: <? $novoProduto["categoria"]?></p>
        <p>Marca: <? $novoProduto["marca"]?></p>
        <p>Preço: <? $novoProduto["preco"]?></p>
        <p>Quantidade em estoque: <? $novoProduto["quantidade"]?></p>
    <?php } ?>
</body>
</html>