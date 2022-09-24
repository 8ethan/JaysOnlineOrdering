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


function displayItem($itemName, $price, $category, $description, $calories, $available){

    echo '
    <div class="menuItem">
    <p class="itemName">'.$itemName.': '.$price.'  |<p>
    </div>
    ';

}



?>