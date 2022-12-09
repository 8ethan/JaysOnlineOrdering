<?php

require("database_functions.php");

header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['ids'])) {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT name FROM menuItem WHERE itemID IN (:ids)");
    $stmt->execute([
        ':ids' => implode(',',$_GET['ids'])
    ]); 
    $data = $stmt->fetchall(PDO::FETCH_ASSOC);
}
// Query with blank name if none specified
$str = '';
if (isset($_GET['name'])) 
    $str = $_GET['name'];

// Include category if given
if (isset($_GET['category']) && $_GET['category']) {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menuItem WHERE category=:cat AND itemName LIKE CONCAT('%', :name, '%')");
    $stmt->execute([
        ':cat' => $_GET['category'],
        ':name'=> $str
    ]); 
    $data = $stmt->fetchall(PDO::FETCH_ASSOC);
} else {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menuItem WHERE itemName LIKE CONCAT('%', :name, '%')");
    $stmt->execute([
        ':name'=> $str
    ]); 
    $data = $stmt->fetchall(PDO::FETCH_ASSOC);
}

echo json_encode($data);