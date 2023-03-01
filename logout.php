<?php

session_start();
unset($_SESSION['id']);
unset($_SESSION['userid']);
session_destroy();

header('location:../hyp/index.php')
?>