<?php

    //Configurando as credenciais do banco de dados com entrada padrão.
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', '');
    define('DB_PASSWORD', '');
    define('DB_NAME', '"');

    try{
        
        $pdo = new PDO ("mysql:host=". DB_SERVER. "; dbname=". DB_NAME, DB_USERNAME, DB_PASSWORD); // faz a conexão com BANCO DE DADOS MySQL.
        
        $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // definir o modo de erro PDO para exceção.
        
    } catch (PDOException $erro) {

        die ("ERROR: Não foi possível conectar.". ferro->getMessage()); //exibir mensagem de erro caso falha na conexão.

    }

    ?>