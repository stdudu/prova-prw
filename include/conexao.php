<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'Prova2';
    $port = 3307;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro de conexão: %s", mysqli_connect_error());
        exit();
    }

?>