<?php
require '../../config/connect.php';
$id = pg_escape_string($_POST['id']);
$webname = pg_escape_string($_POST['webname']);
$slogan = pg_escape_string($_POST['slogan']);

$webupdate = "UPDATE websetting set webname ='$webname' , slogan ='$slogan' where id = '$id' ";
$upd = pg_query($konek2,$webname);

if($upd){
    header('Content-Type :application/json');
    $content = file_get_contents(''.$url.'proses/setupd.php', true);

}
echo json_encode($data);


?>