<?php

date_default_timezone_set('Asia/Jakarta');

// $host = "192.168.10.22";
// $user = "postgres";
// $password = "sim7140";
// $dbname = "itsitmapas";
// $port = "5432";
// $konek = pg_connect("host=$host user=$user password=$password dbname=$dbname port=$port") or die("Gagal terhubung ke Database: $dbname ,  $host.");

$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_admin";

// Create connection
$konek = mysqli_connect($host, $username, $password, $dbname);


// Check connection
if (!$konek) {
  die("Connection failed: " . mysqli_connect_error());
}


$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
// $base_url ="http://".$_SERVER['SERVER_NAME']. dirname($_SERVER["REQUEST_URI"].'?').'/';
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$base_url = "http://" . $host . $path . "/";

?>


