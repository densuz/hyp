 <table id="scroll-vertical-datatable" class="table dt-responsive nowrap table-sm">
     <thead>
         <tr>
             <th>#</th>
             <th>X</th>
             <th>Userid</th>
             <th>Role</th>
         </tr>
     </thead>

     <tbody>
         <?php
            $query = "SELECT * FROM tb_role ";
            $result = pg_query($konek2, $query);
            $count = pg_num_rows($result);
            $no = 1;
            while ($row = pg_fetch_assoc($result)) {

            ?>
             <tr>

                 <td><?= $no++; ?></td>
                 <td>
                     <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="uil-edit"> </i></a>
                     <!-- <a href="#"> 
                      <i class=" uil-edit"> </i>
                       </a> -->
                     <a href="javascript:void(0)" data-id='<?php echo  $row['id']; ?>' class="delete_modal">
                         <i class="uil-trash-alt" style="color:red"></i>
                     </a>
                 </td>
                 <td><?= $row['userid'] ?> </td>
                 <td><?= $row['role'] ?> </td>
             </tr>
         <?php


            }
            ?>

     </tbody>
 </table>