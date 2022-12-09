<?php
// ini_set('allow_url_fopen');

$path_to_require = substr(@parse_url($_SERVER['REQUEST_URI'])['path'], 1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
    case '/index':
    case '/index.html':
    case '/menu':
        require 'index.php';
        break;
    default:
        if (is_readable($path_to_require) && !is_dir($path_to_require))
            require($path_to_require);
        else
            http_response_code(404);
}