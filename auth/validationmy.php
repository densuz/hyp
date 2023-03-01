<?php
session_start();
include '../config/connect.php';
function clean_injeksi($data)
{
	$filter = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
	return $filter;
}


$userid   	= clean_injeksi(mysqli_real_escape_string($konek, $_POST['userid']));
$pass 	  	= clean_injeksi(mysqli_real_escape_string($konek, $_POST['password']));
$password 	= md5($pass);

// Mencari user berdasarkan userid dan password yang di input
$query  	= "SELECT * FROM users WHERE userid='$userid' AND password='$password'";
$result     = mysqli_query($konek, $query);
$num_row    = mysqli_num_rows($result);

// Mengecek data nya ada atau tidak
if ($num_row > 0) {

	$row    = mysqli_fetch_array($result);

	if ($row['role'] == "Admin") {

		// Mengirim response ke ajax
		// Membuat Session
		$_SESSION['id'] = $row['id'];
		$_SESSION['role'] = $row['role'];
		$_SESSION['userid'] = $row['userid'];
		$_SESSION['fullname'] = $row['fullname'];

		$json['status'] = 200;

	} elseif ($row['role'] == "users") {

		// Mengirim response ke ajax
		// Membuat Session
		$_SESSION['id'] = $row['id'];
		$_SESSION['role'] = $row['role'];
		$_SESSION['userid'] = $row['userid'];
		$_SESSION['fullname'] = $row['fullname'];

		$json['status'] = 200;

		// Jika Rolenya tidak ada yang sesuai maka akan menampilkan error
	} else {
		// Mengirim response ke ajax
		$json['status'] = 400;
	}
} else {
	// Mengirim response ke ajax
	$json['status'] = 400;
}
echo json_encode($json);
