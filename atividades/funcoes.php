<?php

$nomeEscola = "SENAI";

// FUNÇÃO 1 - EXIBIR MENSAGEM
function saudacao() {
    return "Bem vindo ao sistema!";
}

// FUNÇÃO - RECEBER UM NOME
function cumprimentar($nome) {
    return "Olá, " . $nome . "!";
}

// FUNÇÃO 3 - SOMAR DOIS NÚMEROS
function somar($numero1, $numero2) {
    $resultado = $numero1 + $numero2;
    return $resultado;
}

function calcularMedia($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;

    return $media;
}

function verificarStatus($media) {
    // MÉDIA É 7
    if ($media >= 7) {
        return "É de maior";
    } else {
        return "É de menor";
    }
}

?>