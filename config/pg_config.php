<?php

$host = "192.168.10.22";
$user = "postgres";
$password = "sim7140";
$dbname = "itsitmapas";
$port = "5432";
$konek = pg_connect("host=$host user=$user password=$password dbname=$dbname port=$port") or die("Gagal terhubung ke Database: $dbname ,  $host.");



?>