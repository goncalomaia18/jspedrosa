<?php
    $dbhost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = ''; 
    $dbName = 'formulario_contacto';

    $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);
    
    if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "conexão com sucesso";
    }
?>