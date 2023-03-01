<?php

session_start();
//cek apakah session terdaftar

unset($_SESSION['id']);
unset($_SESSION['userid']);
unset($_SESSION['role']);
session_destroy();

header('location: login');

?>