<?php
// ini_set('allow_url_fopen');

switch(@parse_url($_SERVER['REQUEST_URI'])['path']){
    case '/':
    case '/index':
    case '/index.html':
    case '/menu':
        require 'index.php';
        break;

    case '/admin.php':
    case '/admin':
        require 'admin.php';
        break;

    case '/order':
    case '/order.php':
        require 'order.php';
        break;

    default:
        http_response_code(404);
}
?>