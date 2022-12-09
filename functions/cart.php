<?php
session_start();

require("database_functions.php");

header('Content-Type: application/json; charset=utf-8');

if(!isset($_POST['action'])) return;

switch($_POST['action']) {
    case 'add':
        if(!isset($_SESSION['order']->items))
            $_SESSION['order']->items = [];
        array_push($_SESSION['order']->items, $_POST['item']);
        break;
    case 'remove':
        array_pop($_SESSION['order']->items, $_POST['item']);
        break;
    case 'get':
        break;
    case 'clear':

        break;
    // Only use SQL here.
    case 'place':
        break;
}

echo json_encode($data);