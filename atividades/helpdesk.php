<?php
require_once "helpdesk-func.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
        $solicitante = $_POST["solicitante"];
        $setor = $_POST["setor"];
        $equipamento = $_POST["equipamento"];
        $descricao = $_POST["descricao"];
        $prioridade = $_POST["prioridade"];
        
    cadastrarChamado(
        $solicitante,
        $setor,
        $equipamento,
        $descricao,
        $prioridade
    );
    $chamados = listarChamado();
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Chamados</title>
</head>
<body>

    <h1>Sistema de Chamados Técnicos</h1>

    <h2>Abrir novo chamado</h2>

    <form method="POST">

        <label>Nome do funcionário:</label>
        <input type="text" id="solicitante" name="solicitante" required>

        <br><br>

        <label>Setor da empresa:</label>
        <select id="setor" name="setor" required>
            <option value="Produção">Produção</option>
            <option value="Administrativo">Administrativo</option>
            <option value="Logística">Logística</option>
            <option value="Financeiro">Financeiro</option>
            <option value="TI">TI</option>
        </select>

        <br><br>

        <label>Equipamento afetado:</label>
        <select id="equipamento" name="equipamento" required>
            <option value="Computador">Computador</option>
            <option value="Impressora">Impressora</option>
            <option value="Rede">Rede</option>
            <option value="Sistema">Sistema</option>
            <option value="Outro">Outro</option>
        </select>

        <br><br>

        <label>Descrição do problema:</label>
        <br>
        <textarea id="descricao" name="descricao"
                  rows="5" cols="40" required></textarea>

        <br><br>

        <label>Prioridade:</label>
        <select id="prioridade" name="prioridade" required>
            <option value="Baixa">Baixa</option>
            <option value="Média">Média</option>
            <option value="Alta">Alta</option>
        </select>

        <br><br>

        <button type="submit">Registrar chamado</button>

    </form>

    <h2>Chamados</h2>
    <?php foreach ($chamados as $chamado) { ?>
    <h2><b>Funcionário:</b> <?= $solicitante ?></h2>
    <p><b>Setor:</b> <?= $setor ?></p>
    <p><b>Equipamento afetado</b> <?= $equipamento ?></p>
    <p><b>Descrição do problema:</b> <?= $descricao ?></p>
    <p><b>Prioridade:</b> <?= $prioridade ?></p>
    <hr>
    

    <?php } ?>

</body>
</html>