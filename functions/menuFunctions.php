<?php

function  displayMenu(){
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menu WHERE isAvailable=:available");
    $stmt->execute([':available' => 1]); 
    $data = $stmt->fetchall();
    
    foreach ($data as $item){
        displayItem($item['itemName'],$item['price'],$item['category'],$item['description'],$item['calories'],$item['isAvailable']);
    }
}

function getCategories() {
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT DISTINCT category FROM menu WHERE isAvailable=:available");
    $stmt->execute([':available' => 1]); 
    $data = $stmt->fetchall();
    
    foreach ($data as $item){

        echo '<option value="'.$item['category'].'">'.$item['category'].'</option>';

        /*displayItem($item['itemName'],$item['price'],$item['category'],$item['description'],$item['calories'],$item['isAvailable']);*/
    }
}

function displayItem($itemName, $price, $category, $description, $calories, $available){
    echo '
    <div class="menu-item">
        <img src="../img/filler-food.jpg">
        <p class="cat">'.$category.'</p>
        <p class="item-name">'.$itemName.'<br> $'.$price.'  |</p>
        <button type="button" class="order-button"> Add to Order </button>
    </div>
    ';
}
?>