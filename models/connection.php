<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'pw21');

    function getConnection() {
        try {
            $conn = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            ));
            return $conn;
        } catch (PDOException $e) {
            echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
    }
}