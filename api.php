<?php
require("functions/database_functions.php");
require("functions/config.php");

if (isset($_GET["item"])) {

    $item = $_GET["item"];

    $data = get_all_items();

    if ($item == "all") {    
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    if (array_key_exists($item, $data) && $item != "all") {
        header("Content-Type: application/json");
        echo json_encode($data[$item]);
    }

    else if ($item != "all") {
        output_error("Food item not found in database.");
    }
}
else if(isset($_GET["category"])){
    $cat = $_GET["category"];
    $data = get_all_cats();
    if ($cat == "all") {    
        header("Content-Type: application/json");
        echo json_encode($data);
    }
    else{
        echo "Specific categories not yet supported";
    }
} else if(isset($_GET["search"])){

    $search = $_GET["search"];
    $data = get_all_items();

    $result = filterItems($data, $search);
    header("Content-Type: application/json");
    echo json_encode($result);

} else {
    output_error("You need to pass in a parameter, item or search, for this API.");
}


function get_all_items(){

    $data = array();
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menuItem");
    $stmt->execute();
    $resp = $stmt->fetchall(PDO::FETCH_ASSOC);

    foreach ($resp as $item) {
        $item_arr = array();
        array_push($item_arr, $item);
        $data[$item["itemID"]] = $item_arr;
    }
    return $data;
}

function get_all_cats(){
    $data = array();
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT DISTINCT category FROM menuItem");
    $stmt->execute();
    $resp = $stmt->fetchall(PDO::FETCH_ASSOC);

    foreach ($resp as $item) {
        array_push($data, $item);
    }
    return $data;
}

function filterItems($data, $search){
    $search = strtolower($search);
    $filtered = array();
    foreach ($data as $item){
        //print_r(array_keys($item));
        if (str_contains(strtolower($item[0]['itemName']), $search) ){
            $filtered[$item[0]['itemID']] = $item;
        }
    }
    return $filtered;
}


function output_error($msg) {
    header("HTTP/1.1 400 Invalid Request");
    header("Content-type: text/plain");
    echo $msg;
}
