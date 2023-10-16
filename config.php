<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root'
    $dbPassword = ''01001023Pe;
    $dbName = 'login-reg'

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName )

    if($conexao -> connect_errno){
        echo "Erro";
    }

    else{
        echo "Conexão efetuada com sucesso"
    }

?>
