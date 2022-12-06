<?php

require("database_functions.php");

header('Content-Type: application/json; charset=utf-8');

// Query with blank name if none specified
$str = '';
if (isset($_GET['name'])) 
    $str = $_GET['name'];

// Include category if given
if (isset($_GET['category'])) {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menu WHERE category=:cat AND itemName LIKE CONCAT('%', :name, '%')");
    $stmt->execute([
        ':cat' => $_GET['category'],
        ':name'=> $str
    ]); 
    $data = $stmt->fetchall(PDO::FETCH_ASSOC);
} else {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menu WHERE itemName LIKE CONCAT('%', :name, '%')");
    $stmt->execute([
        ':name'=> $str
    ]); 
    $data = $stmt->fetchall(PDO::FETCH_ASSOC);
}

echo json_encode($data);