<?php

function cadastrarChamado($solicitante, $setor, $equipamento, $descricao, $prioridade) {

    $arquivo = __DIR__ . "../dados/chamados.json";

    $conteudo = file_get_contents($arquivo);

    $chamados = [];

    $chamado = [
        "solicitante" => $solicitante,
        "setor" => $setor,
        "equipamento" => $equipamento,
        "descricao" => $descricao,
        "prioridade" => $prioridade
    ];

    $chamados[] = $chamado;

    json_encode(
        $arquivo,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
    return true;
}

function listarChamado() {
    $arquivo = "chamados.json";
    
    $dados = file_get_contents($arquivo);

    return json_decode($dados, true);
    
}


?>