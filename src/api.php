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


} else {
    output_error("You need to pass in a parameter, item, for this API.");
}


function get_all_items(){

    $data = array();
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM menu");
    //$stmt->execute([':available' => 1]);
    $stmt->execute();
    $resp = $stmt->fetchall(PDO::FETCH_ASSOC);

    foreach ($resp as $item) {
        $item_arr = array();
        array_push($item_arr, $item);
        $data[$item["itemID"]] = $item_arr;
    }
    return $data;
}


function output_error($msg) {
    header("HTTP/1.1 400 Invalid Request");
    header("Content-type: text/plain");
    echo $msg;
}

?>