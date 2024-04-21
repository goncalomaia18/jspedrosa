<?php
    $dbhost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Mypassword1234!'; 
    $dbName = 'contactos';

    $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);
    
  /*  if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conexão com sucesso";
    } */
?>