<?php
date_default_timezone_set('Asia/Jakarta');
/* MYSQLI */
// $host = "localhost"; /* Host name */
// $user = "root"; /* User */
// $password = ""; /* Password */
// $dbname1 = "db_admin"; /* Database name 1 */

// $konek = mysqli_connect($host, $user, $password, $dbname1);
// // Check connection
// if (!$konek) {
//     die("Connection failed: " . mysqli_connect_error());
// }

/* POSTGRESQL */
// $host = "192.168.10.22"; /* Host name */
$host = "localhost"; /* Host name */
$user = "postgres"; /* User */
$pgpwd = "sim7140"; /* Password */
$dbname2 = "postgres"; /* Database name 2 */
$port = "5432";
$konek2 = pg_connect("host=$host user=$user password=$pgpwd dbname=$dbname2 port=$port") or die("Could not connect" . pg_last_error());
$cek_konek = pg_connection_busy($konek2);

if ($cek_konek) {
    echo 'connection is busy (2)';
} 
// else {
//     echo 'connection is not busy (2)';
// }


/* Base URL  */
$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
// $host  = $_SERVER['HTTP_HOST'];
// $host_upper = strtoupper($host);
// $path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// $base_url = "http://" . $host . $path . "/";
// $base_url ="http://".$_SERVER['SERVER_NAME']. dirname($_SERVER["REQUEST_URI"].'?').'/';

