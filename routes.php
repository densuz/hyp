<?php
    // Define your location project directory in htdocs 
    $project_location = "/hyp";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/home' :
            require "index.php";
            break;
        case $me.'/auth' :
            require "auth/login";
            break;
        case $me.'/main' :
            require "admin/main.php";
            break;
            case $me.'/setting' :
                require "admin/setting.php";
                break;
        case $me.'/usersdata' :
            require "views/usersdata.php";
            break;
        case $me.'/profile' :
            require "views/profile.php";
            break;
            case $me.'/logout' :
            require "logout.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
