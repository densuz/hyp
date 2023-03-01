<?php

// error_reporting(0);

include_once '../config/connect.php';

$id = $_GET['id'];

$query = pg_query($konek, "DELETE FROM tb_role WHERE id='$id'");

if ($query) {
	// fungsi untuk membuat format json
	header('Content-Type: application/json');
	// untuk load data yang sudah ada dari tabel
	$content = file_get_contents('' . $url . 'proses/View_tbadmin.php', true);
	$data = array('status' => 'success', 'data' => $content);
	echo json_encode($data);
} else {
	$data = array('status' => 'failed', 'data' => null);
	echo json_encode($data);
}
