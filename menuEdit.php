<?php

require("functions/database_functions.php");
require("functions/config.php");

# Post parameters for a new item
$all_params = isset($_POST['itemName']) && isset($_POST['category']) && isset($_POST['price']) && isset($_POST['desc']) 
&& isset($_POST['calories']) && isset($_POST['isAvailable']) && isset($_POST['dir']); 

if (!isset($_POST['editID']) && $all_params){
    createItem();
}
# Post parameters for editing an item
else if (isset($_POST['editID']) && $all_params){
    updateItem();
}
# Post parameter for deleting an item
else if(isset($_POST['deleteID'])){
    deleteItem();
} else {
    echo "Please provide the correct POST paramters.";
}

function createItem(){
    $db = connect_to_db();
    $sql = "INSERT INTO menuItem (itemName, category, price, description, calories, isAvailable, imgDir) 
    VALUES (:item_name, NULLIF(:cat, ''), :price, NULLIF(:desc, ''), NULLIF(:cal, ''), :isAvail, NULLIF(:dir, ''))";
    $stmt = $db->prepare($sql);
    $stmt->execute(array('item_name'=>$_POST['itemName'], 'cat'=>$_POST['category'], 'price'=>$_POST['price'],
    'desc'=>$_POST['desc'], 'cal'=>$_POST['calories'], 'isAvail'=>$_POST['isAvailable'], 'dir'=>$_POST['dir']));
}

function updateItem(){
    $db = connect_to_db();
    $sql = "UPDATE menuItem SET itemName=:item_name, category=NULLIF(:cat, ''),
    price=:price, description=NULLIF(:desc, ''), calories=NULLIF(:cal, ''), isAvailable=:isAvail, imgDir=NULLIF(:dir, '')
    WHERE itemID=:item_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(array('item_name'=>$_POST['itemName'], 'cat'=>$_POST['category'], 'price'=>$_POST['price'],
    'desc'=>$_POST['desc'], 'cal'=>$_POST['calories'], 'isAvail'=>$_POST['isAvailable'], 'dir'=>$_POST['dir'],
    'item_id'=>$_POST['editID']));
}

function deleteItem(){
    $db = connect_to_db();
    $sql = "DELETE FROM menuItem WHERE itemID = :item_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(array('item_id'=>$_POST['deleteID']));
}