<?php

require("functions/database_functions.php");
require("functions/config.php");

if (isset($_POST['itemName']) && isset($_POST['category']) && isset($_POST['price']) && isset($_POST['desc']) 
&& isset($_POST['calories']) && isset($_POST['isAvailable'] && isset($_POST['dir']))){
    createItem();
}
else if(isset($_POST['deleteID'])){
    deleteItem();
} else {
    echo "Please provide the correct POST paramters.";
}

function createItem(){
    $db = connect_to_db();
    $sql = "INSERT INTO menu (itemName, category, price, description, calories, isAvailable, imgDir) 
    VALUES (:item_name, :cat, :price, :desc, :cal, :isAvail, :dir)";
    $stmt = $db->prepare($sql);
    $stmt->execute(array('item_name'=>$_POST['itemName'], 'cat'=>$_POST['category'], 'price'=>$_POST['price'],
    'desc'=>$_POST['desc'], 'cal'=>$_POST['calories'], 'isAvail'=>$_POST['isAvailable'], 'dir'=>$_POST['dir']));
}

function deleteItem(){
    $db = connect_to_db();
    $sql = "DELETE FROM menu WHERE itemID = :item_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(array('item_id'=>$_POST['deleteID']));
}