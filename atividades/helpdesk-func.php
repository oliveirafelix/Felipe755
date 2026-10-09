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

}


?>