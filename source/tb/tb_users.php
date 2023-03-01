 <table id="scroll-vertical-datatable" class="table dt-responsive nowrap table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>X</th>

                                                            <th>Fullname</th>
                                                            <th>Userid</th>
                                                            <th>Password</th>
                                                            <th>Role</th>
                                                            <th>Created at</th>
                                                            <th>Created by</th>
                                                          <!--   <th>Updated at</th>
                                                            <th>Updated by</th> -->

                                                        </tr>
                                                    </thead> 
                                                
                                                    <tbody>
                                                        <?php
                                                          $query = "SELECT * FROM users ";
                                                          $result = mysqli_query($konek,$query);
                                                          $count = mysqli_num_rows($result);
                                                          $no = 1 ;
                                                          while($row= mysqli_fetch_assoc($result)){
                                                        
                                                    ?>
                                                        <tr>
                                                           
                                                            <td><?= $no++; ?></td>
                                                            <td>
                                                                <a  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="uil-edit"> </i></a>
                                                                <!-- <a href="#"> 
                                                                    <i class=" uil-edit"> </i>
                                                                </a> -->
                                                                 <a href="../process/deleteusers.php?id=<?php echo $row['id']; ?>"><i class="uil-trash-alt" style="color:red"></i></a>
                                                             </td>
                                                            <td><?= $row['userid'] ?>  </td>
                                                            <td><?= $row['fullname'] ?>  </td>
                                                            <td><?= $row['password'] ?>  </td>
                                                            <td><?= $row['role'] ?>  </td>
                                                            <td><?= $row['created_at'] ?> </td>
                                                            <td><?= $row['created_by'] ?> </td>
                                                            <!-- <td><?= $row['updated_at'] ?> </td>
                                                            <td><?= $row['updated_by'] ?> </td> -->
                                                        </tr>
                                                        <?php

                                                        
                                                    } 
                                                    ?>

                                                    </tbody>
                                                </table>