<?php
require('config.php');

function connect_to_db(){

    global $database,$databasehost,$databaseuser,$databasepassword;
    $dsn = "mysql:unix_socket=$databasehost;dbname=$database;charset=UTF8";
    
    $pdo = new PDO($dsn, $databaseuser, $databasepassword);
    return $pdo;
}
?>

