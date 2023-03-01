<?php
session_start();
include '../config/connect.php';
function clean_injeksi($data)
{
	$filter = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
	return $filter;
}


$userid   	= clean_injeksi($_POST['userid']);
$password 	= clean_injeksi(md5($_POST['password']));
// $password 	= md5($pass);

// Mencari user berdasarkan userid dan password yang di input
$query  	= "SELECT * FROM userkm WHERE userid='$userid' AND password='$password' limit 1";
$result     = pg_query($konek2, $query);
$num_row    = pg_num_rows($result);

// Mengecek data nya ada atau tidak
if ($num_row > 0) {
	$cekrole  = "SELECT * FROM tb_role where userid='$userid' ";
	$res_role = pg_query($konek2, $cekrole);
	$role_num = pg_num_rows($res_role);
	

	if ($role_num > 0) {
		$row  = pg_fetch_assoc($res_role);
		$row2 = pg_fetch_assoc($result);
		// header("location: main");
		
		$_SESSION['login']    = 'OK';
        $_SESSION['userid']   = $row['userid'];
        $_SESSION['namauser'] = $row2['namauser'];
        $_SESSION['role'] = $row['role'];
		$json['status'] = 200;
		
		// header("location: main");

	}else{
		$json['status'] = 404;
	}
} else{
	$json['status'] = 404;
}
echo json_encode($json);

