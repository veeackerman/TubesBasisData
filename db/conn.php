<?php 
    //Development Connection
    //$host = '127.0.0.1';
    //$db = 'dbtubes';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';

    //Remote Database Connection
    $host = 'remotemysql.com';
    $db = '0FW7TSXnLr';
    $user = '0FW7TSXnLr';
    $pass = 'ezQMSjtuRK';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>
