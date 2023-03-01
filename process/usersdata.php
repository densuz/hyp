<?php
//cek login
require "../config/connect.php";
if (!isset($_SESSION['userid'])) {
    session_start();

    // header('location: login');
    if ($_SESSION['role'] != "Admin") {

        echo "<script type='text/javascript'>alert('Anda Tidak Memiliki Akses!');
        window.location='error?=403'</script>";
        // header("HTTP/1.1 403 Forbidden");
        exit(header('HTTP/1.0 403 Forbidden', true, 403));
        die();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Data Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="keyword disini" name="description" />
    <meta content="Densus Dev" name="author" />
    <!-- App favicon -->
    <link href='assets/favicon/favicon.ico' rel='shortcut icon'>

    <!-- third party css -->
    <link href="assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    <!-- <script src="assets/jq/jquery.js" type="text/javascript"></script> -->


    <!-- Toastr CSS -->
    <link rel="stylesheet" href="assets/plugin/toastr/toastr.min.css">

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Pre-loader -->
    <div id="preloader">
        <div id="status">
            <div class="bouncing-loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- End Preloader-->

    <!-- Begin page -->
    <div class="wrapper">
        <?php include_once "layouts/sidebar.php" ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php include_once "layouts/topbar.php"; ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
                                        <li class="breadcrumb-item active">Users</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Data Users</h4>
                            </div>
                        </div>
                    </div>

                    <!-- end page title -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="tab-content">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data Users</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Jumlah Data Baru</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="card-body">

                                                                        <div class="tab-content">
                                                                            <form method="post" name="frm" action="adduserss">
                                                                                <table>
                                                                                    <tr>
                                                                                        <td>Masukan Jumlah Data yang akan di inputkan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <input type="text" name="no_of_rec" placeholder="ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" class="form-control" required />
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <button type="submit" name="btn-gen-form" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>

                                                                            </form>
                                                                        </div> <!-- end tab-content-->
                                                                    </div> <!-- end card body-->
                                                                </div> <!-- end card -->
                                                            </div><!-- end col-->
                                                        </div><!-- end row-->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tabel Data  -->

                                        <form method="post" name="crm" action="">
                                            <?php include_once 'source/tb/tblpgusers.php'; ?>

                                        </form>
                                        <!-- End Tabel Data -->


                                    </div> <!-- end tab-content-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                </div> <!-- container -->

            </div> <!-- content -->



            <!-- Footer Start -->
            <?php @include_once "layouts/footer.html"; ?>

            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Modal Popup untuk delete-->
    <div class="modal fade" id="modal_delete">
        <div class="modal-dialog modal-sm ">
            <div class="modal-content" style="margin-top:100px;">
                <div class="modal-header">
                    <h5 class="modal-title">Anda akan menghapus data ini?</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Right Sidebar -->
    <?php include_once "layouts/rightsidebar.php"; ?>
    <!-- /End-bar -->

    <!-- Modal Edit -->

    <?php include_once 'inc/modal/edituser.html'; ?>



    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/buttons.html5.min.js"></script>
    <script src="assets/js/vendor/buttons.flash.min.js"></script>
    <script src="assets/js/vendor/buttons.print.min.js"></script>
    <script src="assets/js/vendor/dataTables.keyTable.min.js"></script>
    <script src="assets/js/vendor/dataTables.select.min.js"></script>

    <!-- TOASTR -->
    <script type="text/javascript" src="assets/plugin/toastr/toastr.min.js"></script>


    <!-- Function -->
    <script type="text/javascript" src="source/app.js"></script>
    <script type="text/javascript" src="source/js-script.js"></script>


    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.datatable-init.js"></script>
    <!-- end demo js-->

</body>

</html>