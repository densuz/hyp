<?php
require '../config/connect.php';
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$userid = $_POST['userid'];
$role = $_POST['role'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	mysqli_query($konek,"UPDATE users SET fullname='$fullname[$i]', userid='$userid[$i]', role='$role[$i]' WHERE id=".$id[$i]);
}
header("Location: ../views/userdata.php");
?>