<?php
//cek login
session_start();
if (!isset($_SESSION['userid'])) {
    // header('location: logout');
}
?>

<head>
    <title>[403] You are not authorized! </title>

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/403.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

</head>

<body>
    <div class="message">You are not authorized.
    </div>
    <div class="message2">You tried to access a page you did not have prior authorization for.
        </br>
        </br>
        <div>
            <a class="btn btn-primary" href="login" style="text-decoration:none" role="button">Back To Home</a>
        </div>

    </div>

    <div class="container">
        <div class="neon">403</div>
        <div class="door-frame">
            <div class="door">
                <div class="rectangle">
                </div>
                <div class="handle">
                </div>
                <div class="window">
                    <div class="eye">
                    </div>
                    <div class="eye eye2">
                    </div>
                    <div class="leaf">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>