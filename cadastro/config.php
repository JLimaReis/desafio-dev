<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'GiM@Je44503';
    $dbName = 'form_cadastro';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao -> connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão efetuada com sucesso";
    }
?>