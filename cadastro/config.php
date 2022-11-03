<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'GiM@Je44503';
$dbName = 'formulario_cadastro';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao -> connect_errno)
    {
        echo "Falha na conexão";
    }
else
    {
        echo "Conexão realizada com sucesso";
    }
    
?>