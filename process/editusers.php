<?php
    
    error_reporting(0);

    include_once '../config/connect.php';

    if(isset($_POST['chk'])=="")
    {
        ?>
        <script>
        alert('At least one checkbox Must be Selected !!!');
        window.location.href='../views/usersdata.php';
        </script>
        <?php
    }
    $chk = $_POST['chk'];
    $chkcount = count($chk);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Data Users</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="keywords disini" name="description" />
        <meta content="Densus Dev" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
         <!-- Pre-loader -->
        <div id="preloader">
            <div id="status">
                <div class="bouncing-loader"><div ></div><div ></div><div ></div></div>
            </div>
        </div>
        <!-- End Preloader-->

        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
          <?php @include_once "../layouts/sidebar.php" ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                   <?php @include_once "../layouts/topbar.php"; ?>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                   <?php @include_once "../layouts/pagetitle_crud.html"; ?>
                        
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                      <form method="post" action="updateusers.php">
                                        <table class='table table-bordered'>
                                        <tr>
                                        <th>Fullname</th>
                                        <th>Userid</th>
                                        <th>Role</th>

                                        </tr>
                                        <?php
                                        for($i=0; $i<$chkcount; $i++)
                                        {
                                            $id = $chk[$i];         
                                            $res= mysqli_query($konek, "SELECT * FROM users WHERE id=".$id);
                                            while($row= mysqli_fetch_array($res))
                                            {
                                                ?>
                                                <tr>
                                                <td>
                                                <input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
                                                
                                                <input type="text" name="fullname[]" value="<?php echo $row['fullname'];?>" class="form-control" />
                                                </td>
                                                <td>
                                                <input type="text" name="userid[]" value="<?php echo $row['userid'];?>" class="form-control" />
                                                </td>
                                                <td>
                                                <input type="text" name="role[]" value="<?php echo $row['role'];?>" class="form-control" />
                                                </td>
                                               
                                                </tr>
                                                <?php   
                                            }           
                                        }
                                        ?>
                                        <tr>
                                        <td colspan="2">
                                        <button type="submit" name="savemul" class="btn btn-primary"><i class="uil-pen"></i> &nbsp; Update all</button>&nbsp;
                                        <a href="../views/usersdata.php" class="btn btn-large btn-success"> <i class=" uil-step-backward-circle"></i> &nbsp; Cancel</a>
                                        </td>
                                        </tr>
                                        </table>
                                        </form>


                                        <div class="tab-content">
                                           
                                                              

                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                 <?php @include_once "../layouts/footer.html"; ?>
               
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
       

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
        

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            
                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->




        <!-- bundle -->
        <script src="../assets/js/vendor.min.js"></script>
        <script src="../assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="../assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="../assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="../assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="../assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="../assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="../assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="../assets/js/vendor/buttons.html5.min.js"></script>
        <script src="../assets/js/vendor/buttons.flash.min.js"></script>
        <script src="../assets/js/vendor/buttons.print.min.js"></script>
        <script src="../assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="../assets/js/vendor/dataTables.select.min.js"></script>

        <script src="../assets/jq/jquery.js" type="text/javascript"></script>
        <script src="../assets/js/js-script.js" type="text/javascript"></script>
        <!-- third party js ends -->
       
        <!-- demo app -->
        <!-- <script src="../assets/js/pages/demo.datatable-init.js"></script> -->
        <!-- end demo js-->

    </body>
</html>
