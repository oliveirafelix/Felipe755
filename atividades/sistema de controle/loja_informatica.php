<?php
require_once '../../conexao.php';

// CRIANDO AS TABELAS
$sql = "CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL)";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    categoria_id INT,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    estoque_minimo INT NOT NULL,

    FOREIGN KEY (categoria_id)
    REFERENCES categorias(id))";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT,
    quantidade INT NOT NULL,
    valor_total DECIMAL(10,2) NOT NULL,
    data_venda DATETIME NOT NULL,

    FOREIGN KEY (produto_id)
    REFERENCES produtos(id))";

$pdo->exec($sql);

// CADASTRANDO PRODUTO

if (isset($_POST["cadastrar"])) {

    $nome = $_POST["nome"];
    $categoria_id = $_POST["categoria_id"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $estoque_minimo = $_POST["estoque_minimo"];

    if ($nome == "") {

        echo "Digite o nome do produto!";

    } else if ($preco <= 0) {

        echo "O preço deve ser maior que zero!";

    } else if ($quantidade < 0 || $estoque_minimo < 0) {

        echo "A quantidade não pode ser negativa!";

    } else {

        $sql = "INSERT INTO produtos
        (nome, categoria_id, preco, quantidade, estoque_minimo)
        VALUES ('$nome', '$categoria_id', '$preco', '$quantidade', '$estoque_minimo')";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        echo "Produto cadastrado com sucesso!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de controle de estoque</title>
</head>
<body>
    <form method="POST">

    <label>Nome do Produto:</label>
    <input type="text" name="nome" required>

    <br><br>

    <label>Categoria:</label>
    <select name="categoria_id" required>
        <?php
        $sql = "SELECT * FROM categorias";
        $stmt = $pdo->query($sql);

        while ($categoria = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <option value="<?= $categoria['id'] ?>">
                <?= $categoria['nome'] ?>
            </option>
        <?php } ?>
    </select>

    <br><br>

    <label>Preço:</label>
    <input type="number" name="preco" step="0.01" min="0.01" required>

    <br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" min="0" required>

    <br><br>

    <label>Estoque mínimo:</label>
    <input type="number" name="estoque_minimo" min="0" required>

    <br><br>

    <button type="submit" name="cadastrar">Cadastrar produto</button>

</form>
</body>
</html>