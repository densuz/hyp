<?php


// Define your location project directory in htdocs 
$project_location = "/hyp/";

// For get URL PATH
$request = $_SERVER['REQUEST_URI'];
$me = str_replace($project_location, '', $request);
$me = explode('/', $me);

switch ($me[0]) {
    case '':
        require "landing.php";
        break;
    case 'con':
        require "config/connect.php";
        break;
    case 'home':
        require "landing.php";
        break;
    case 'login':
        require "auth/login.php";
        break;
    case 'logout':
        require "auth/logout.php";
        break;
    case 'main':
        require "auth/main.php";
        break;
    case 'setting':
        require "auth/admin/setting.php";
        break;
    case 'usersdata':
        require "views/usersdata.php";
        break;
    case 'vusers':
        require "views/vusers.php";
        break;
    case 'adduserss':
        require "process/adduserss.php";
        break;
    case 'generate':
        require "process/generate.php";
        break;
    case 'profile':
        require "views/profile.php";
        break;
    case 'error?=403':
        require "auth/403.php";
        break;


    default:
        http_response_code(404);
        require "views/404.php";
        break;
}
