<?php

require("database_functions.php");

header('Content-Type: application/json; charset=utf-8');



// Query with blank name if none specified
$str = '';
if (isset($_POST['name'])) 
    $str = $_POST['name'];

// Include category if given
if (isset($_POST['category']) && $_POST['category']) {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menuItem WHERE category=:cat AND itemName LIKE CONCAT('%', :name, '%')");
    $stmt->execute([
        ':cat' => $_POST['category'],
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