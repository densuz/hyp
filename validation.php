<?php

// session_start();

include('config/pg_config.php');

$userid     = $_POST['userid'];
$password   = $_POST['password'];

//query
$query       = "SELECT * FROM tb_usersx WHERE userid='$userid' AND password='$password'";
$result      = pg_query($konek, $query);

$num_row     = pg_num_rows($result);
$row         = pg_fetch_assoc($result);

if($num_row >= 0) {
    session_start();
    $_SESSION['id']       = $row['id'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['userid']   = $row['userid'];
    $_SESSION['role']     = $row['role'];
    echo "Suc";
    

} else {
    
    echo "error";

}

?>
