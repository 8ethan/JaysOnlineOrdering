<?php
$databasehost = "getenv('INSTANCE_UNIX_SOCKET')";
$database = "getenv('CLOUDSQL_DB')";
$databaseuser = "getenv('CLOUDSQL_USER')";
$databasepassword = "getenv('CLOUDSQL_PASSWORD')";
?>

<!-- $instanceUnixSocket = getenv('INSTANCE_UNIX_SOCKET'); 
    $user = getenv('CLOUDSQL_USER');      
    $password = getenv('CLOUDSQL_PASSWORD');  
    $dbname = getenv('CLOUDSQL_DB'); -->