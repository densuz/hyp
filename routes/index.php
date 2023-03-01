<?php

$request = $_SERVER['REQUEST_URI'];
$server = $_SERVER['SERVER_NAME'];

switch ($request) {

    case '':
    case '/':
        require __DIR__ . '/index.html';
        break;

    case '/admin':
        require __DIR__ . '../admin/index.php';
        break;

    case '/auth':
        require __DIR__ . '../auth/profile.php';
        break;

    // case '/about':
    //     require __DIR__ . '/views/aboutus.php';
    //     break;

    default:
        http_response_code(404);
        require __DIR__ . '/index.html';
        break;

}