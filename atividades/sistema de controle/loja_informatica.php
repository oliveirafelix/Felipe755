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


// CADASTRANDO CATEGORIAS E PRODUTOS INICIAIS

$sql = "SELECT COUNT(*) FROM categorias";
$total = $pdo->query($sql)->fetchColumn();

if ($total == 0) {

    $sql = "INSERT INTO categorias (nome) VALUES
    ('Computadores'),
    ('Periféricos'),
    ('Armazenamento'),
    ('Componentes'),
    ('Acessórios')";

    $pdo->exec($sql);

    $sql = "INSERT INTO produtos
    (nome, categoria_id, preco, quantidade, estoque_minimo)
    VALUES
    ('Notebook Dell', 1, 3500.00, 10, 2),
    ('Computador Gamer', 1, 5000.00, 5, 1),
    ('Teclado Mecânico', 2, 250.00, 20, 5),
    ('Mouse Gamer', 2, 120.00, 30, 5),
    ('SSD 480GB', 3, 220.00, 15, 3),
    ('HD 1TB', 3, 300.00, 10, 2),
    ('Memória RAM 8GB', 4, 180.00, 20, 4),
    ('Placa de Vídeo', 4, 1800.00, 5, 1),
    ('Mousepad', 5, 50.00, 25, 5),
    ('Suporte para Notebook', 5, 80.00, 15, 3)";

    $pdo->exec($sql);
}


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

        $sql = "INSERT INTO produtos (nome, categoria_id, preco, quantidade, estoque_minimo) VALUES ('$nome', '$categoria_id', '$preco', '$quantidade', '$estoque_minimo')";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        echo "Produto cadastrado com sucesso!";
    }
}

// Atualizando produto

if (isset($_POST["atualizar"])) {

    $id = $_POST["id"];
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

        $sql = "UPDATE produtos SET nome = '$nome', categoria_id = $categoria_id, preco = $preco, quantidade = $quantidade, estoque_minimo = $estoque_minimo WHERE id = $id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        echo "Produto atualizado com sucesso!";
    }
}

if (isset($_POST["excluir"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM produtos WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

// buscar produto para edição
$produtoEditar = null;

if (isset($_GET["editar"])) {
    $id = $_GET["editar"];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $produtoEditar = $stmt->fetch(PDO::FETCH_ASSOC);
}

// LISTAR TODOS OS PRODUTOS
$sql = "SELECT * FROM produtos ORDER BY id ASC";
$stmt = $pdo->query($sql);
$produtos = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de controle de estoque</title>
</head>
<body>
    <h1>Sistema de estoque</h1>
    <h2>
            <?php
        if ($produtoEditar) {
            echo "Editar produto";
            } else {
                echo "Cadastrar Produto";
                }
                ?>

<form method="POST">
    <?php if ($produtoEditar) { ?>
    <input type="hidden" name="id" value="<?= $produtoEditar['id'] ?>">
    <?php } ?>
    <label>Nome do Produto:</label>
    <input type="text" name="nome" value="<?= $produtoEditar['nome'] ?? '' ?>">
    <br><br>
    <label>Preço:</label>
    <input type="number" name="preco" step="0.01" min="0" required value="<?= $produtoEditar['preco'] ?? '' ?>">
    <br><br>
    <label>Quantidade:</label>
    <input type="number" name="quantidade" min="0" required value="<?= $produtoEditar['quantidade'] ?? '' ?>">
    <br><br>
    <?php if ($produtoEditar) { ?>
    <button type="submit" name="atualizar">Atualizar Produto</button>
    <?php } else { ?>
    <button type="submit" name="cadastrar">Cadastrar produto</button>
    <?php } ?>
</form>
<hr>
<h2>Produtos Cadastrados</h2>
<table>
    <!-- TR | Table Row | Cria uma linha dentro da tabela -->
    <tr>
        <!-- TH | Table Header | Cria uma célula de cabeçalho na tabela -->
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($produtos as $produto) { ?>
    <tr>
        <!-- TD | Table Data | Cria uma célula de dados na tabela -->
        <td><?= $produto["id"] ?></td>
        <td><?= htmlspecialchars($produto["nome"]) ?></td>
        <td>R$ <?= number_format($produto["preco"], 2, ",", ".") ?></td>
        <td><?= $produto["quantidade"] ?></td>
        <td>
            <!-- EDITAR -->
            <a href="loja_informatica.php?editar=<?= $produto['id'] ?>">Editar</a>
            
            <!-- EXLUIR -->
            
            <form method="POST" action="loja_informatica.php" style="display:inline;">
                <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                <button type="submit" name="excluir" onclick="return confirm ('Deseja excluir este produto?')">Excluir</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>