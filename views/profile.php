<?php
//cek login
session_start();
require "config/connect.php";
if (!isset($_SESSION['userid'])) {
    header('location: logout');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <?= include_once "layouts/heading.php"; ?>

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

        <?php @include_once "layouts/sidebar.php" ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <?php include_once "layouts/topbar.php"; ?>

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Views</a></li>

                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile Information</h4>


                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Profile -->
                            <div class="card bg-primary">
                                <div class="card-body profile-user-box">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar-lg">
                                                        <img src="assets/images/users/avatar-11.jpg" alt="" class="rounded-circle img-thumbnail">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div>
                                                        <h4 class="mt-1 mb-1 text-white"><i class="mdi mdi-account"></i> <?php echo $_SESSION['namauser'] ?> </h4>
                                                        <p class="font-13 text-white-50"> Junior Programmer</p>

                                                        <ul class="mb-0 list-inline text-light">
                                                            <li class="list-inline-item me-3">
                                                                <h5 class="mb-1">Role</h5>
                                                                <p class="mb-0 font-13 text-white-80 badge bg-success"> <?= $_SESSION['role']; ?> </p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <h5 class="mb-1">IP Address</h5>
                                                                <?= $_SERVER['REMOTE_ADDR']; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col-->

                                        <div class="col-sm-4">
                                            <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                                <button type="button" class="btn btn-light">
                                                    <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                                </button>

                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->

                                </div> <!-- end card-body/ profile-user-box-->
                            </div><!--end profile/ card -->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Personal-Information -->
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                            <!-- Personal-Information -->


                        </div> <!-- end col-->

                        <!-- <div class="col-xl-8">

                            <div class="card">
                                <div class="card-body">
                                    
                                </div> 
                            </div> 
                        </div> -->

                    </div>
                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->
            


            <?php @include_once "layouts/footer.html"; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <?php @include_once "layouts/rightsidebar.php"; ?>
    <!-- /End-bar -->


    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/Chart.bundle.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="assets/js/pages/demo.profile.js"></script>
    <!-- end demo js-->
</body>

</html>