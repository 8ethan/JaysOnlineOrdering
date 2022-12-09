<?php
session_start();

require("database_functions.php");

header('Content-Type: application/json; charset=utf-8');

if(!isset($_POST['action'])) return;

switch($_POST['action']) {
    case 'add':
        if(!isset($_SESSION['order']->items))
            $_SESSION['order']->items = [];

        $item = array(
            "id"        => $_POST['item'],
            "quantity"  => 1,
            "notes"     => ''
        );

        array_push($_SESSION['order']->items, $item);

        break;
    case 'remove':
        $_SESSION['order']->items = array_filter($_SESSION['order']->items, static function ($element) {
            return $element['id'] !== $_POST['item'];});
        break;
    case 'get':
        echo json_encode($_SESSION['order']);
        break;
    case 'clear':
        $_SESSION['order']->items = [];
        break;
    // Only use SQL here.
    case 'place':
        break;
}