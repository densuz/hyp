<?php
session_start();
include_once 'config/connect.php';
$no = 1;
$query = pg_query($konek2, "SELECT * FROM tb_role ORDER BY userid ASC");
while ($row = pg_fetch_assoc($query)) {

?>
    <tr>
        <td><?= $no++; ?></td>
        <td>
            <a href="javascript:void(0)" class='open_modal' id='<?php echo  $row['id']; ?>'>
                <i class="fa fa-edit"></i></a>
            <a href="javascript:void(0)" class="delete_modal" id='<?php echo  $row['id']; ?>'>
                <i class="fa fa-trash" style="color:red"></i></a>
        </td>
        <td><?php echo  $row['userid']; ?></td>
        <td><?php echo  $row['role']; ?></td>
    </tr>
<?php }

?>