<?php
	
	// error_reporting(0);
	
	include_once '../config/connect.php';

$id = $_POST['id'];

$query = pg_query($konek2,"DELETE FROM tb_role WHERE id='$id'");
 
// exit(header("location: usersdata?pesan=berhasil-dihapus!"));

if ($query) // jika HAPUS data berhasil
{
    // fungsi untuk membuat format json
    header('Content-Type: application/json');
    // untuk load data yang sudah ada dari tabel
    $content = file_get_contents(''.$base_url.'usersdata', true);
    $data = array('status' => 'success', 'data' => $content);
    $data['status'] = "success";
    $data['data'] = $content;

} else // jika HAPUS data gagal
{
    $data = array('status' => 'failed', 'data' => null);
}
echo json_encode($data);

?>