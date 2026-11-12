<?php 

// host = 'localhost' -> roda na máquina
// host = '194.61.238.119' -> roda na VPS

// - MySQL - > SGBD

// - PDO - > Interfaçe do PHP que permite conversar com o banco de dados

$host = 'localhost' ;
    // - host é onde roda

$db = 'felipe755' ;
    // - banco de dados dentro do mysql

$user = 'felipe755' ;
    // - usuario

$pass = '755!@#' ;
    // - senha


$charset = 'utf8mb4' ;
    // - serve para ler caracteres especiais


    // - o try funciona como um IF, tipo "tente conectar"
try {

    // - definindo variáveis no PDO
    // - usuario e senha ficam de fora das aspas duplas
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset",
        $user,
        $pass   
    );


    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "CONECTADO COM ÊXITO";

} catch (PDOException $e) {
    echo "ERRO AO CONECTAR AO BANCO DE DADOS: ";
    echo $e->getMessage();
}


?>