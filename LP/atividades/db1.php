<?php
//db1.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sistema de cadastro de produtos</h1>
    <h2>
        <?php
            if ($produtoEditar) {
                echo "Editar produto"
            } else {
                echo "Cadastrar Produto"
            }
        ?>
        
        <form method="POST">
            <?php if ($produtoEditar) { ?>
            <input type="hidden" name="id" value="<?=  $produtoEditar['id'] ?>">
            <?php } ?>
            <label>Nome do Produto:</label>
            <input type="text" name="nome" value="<?=  $produtoEditar['nome'] ?? '' ?>">
            <br><br>
            <label>Preço:</label>
            <input type="number" name="preco" step="0.01" min="0" required value="<?= $produtoEditar['preco'] ?? '' ?>">
        </form>
    </h2>
</body>
</html>