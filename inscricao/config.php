<?php

    $dbHost = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = '123456';
    $dbName = 'eventos';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno){
    echo "Erro na conexão: " . $conexao->connect_error;
    }
    else {
        echo "Conexão efetuada com sucesso";
    }

?>