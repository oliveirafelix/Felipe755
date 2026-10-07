<?php

    //Caminho do arquivo JSON
    $arquivo = __DIR__ . "/dados/teste.json";

    // 1. Ler o arquivo JSON
    $conteudo = file_get_contents($arquivo);

    // 2. Transformar o JSON em ARRAY PHP
    $alunos = json_decode($conteudo, true);

    // 3. Percorrer todos os alunos
    foreach($alunos as $aluno) {

        // 4. Procurar o aluno com NOME: "Maria"
        if ($aluno["nome"] == "Maria") {

            // 5. Alterar o dado
            $aluno["idade"] = 15;
        }
    }

    // 6. Transformar ARRAY PHP em JSON novamente
    $json = json_encode($alunos, 
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    // 7. Salvar no arquivo 
    file_put_contents($arquivo, $json);

    echo "ALUNO ATUALIZADO"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>