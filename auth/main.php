<?php

//cek login
session_start();
require "config/connect.php";
require "config/getx.php";

if (!isset($_SESSION['userid'])) {

    exit(header('location: logout'));

    if (isset($_SESSION['userid']) == '') {
        echo "<script type='text/javascript'>alert('Silahkan Login Terlebih Dahulu!');
        window.location='login'</script>";
        // header("HTTP/1.1 403 Forbidden");
        header('HTTP/1.0 403 Forbidden', true, 403);
        die();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="keyword disini" name="description" />
    <meta content="Densus Dev" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />


    <!-- third party css -->
    <link href="assets/css/vendor/britecharts.min.css" rel="stylesheet" type="text/css" />

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

        <?php require "layouts/sidebar.php" ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->


        <div class="content-page">
            <div class="content">
                <?php require "layouts/topbar.php" ?>

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Auth</a></li> -->
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php
                    if ($_SESSION['role'] == 'Admin') {

                    ?>
                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">ABC</h5>
                                                <h3 class="my-2 py-1">9,184</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">DEFG</h5>
                                                <h3 class="my-2 py-1">3,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="new-leads-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">ROLE</h5>
                                                <h3 class="my-2 py-1">2</h3>

                                                <!-- <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                </p> -->
                                            </div>
                                            <div class="col-6">
                                                <div class="avatar-lg">
                                                    <img src="assets/images/users/role.gif" alt="" class="rounded-circle img-thumbnail">
                                                </div>
                                                <!-- <div class="text-end">
                                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                                </div> -->
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card card-4">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6 ">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate " title="Users">Users</h5>
                                                <h3 class="my-2 py-1">2</h3>
                                                <!-- <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                                </p> -->
                                            </div>
                                            <div class="col-6">
                                                <!-- <div class="col-auto"> -->
                                                <div class="avatar-lg">
                                                    <img src="assets/images/users/avatar-users.gif" alt="" class="rounded-circle img-thumbnail">
                                                </div>
                                                <!-- </div> -->
                                                <!-- <div class="text-end">
                                                    <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                                                </div> -->
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->
                    <?php
                    } else if ($_SESSION['role'] == 'users') {

                        // }

                    ?>
                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">ABC</h5>
                                                <h3 class="my-2 py-1">9,184</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">DEFG</h5>
                                                <h3 class="my-2 py-1">3,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="new-leads-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <!-- Content disini -->


                        </div> <!-- container -->

                    <?php
                    }
                    ?>

                    <!-- Content disini -->



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


    <!-- Apex js -->
    <!-- <script src="assets/js/vendor/apexcharts.min.js"></script> -->

    <!-- Todo js -->
    <script src="assets/js/ui/component.todo.js"></script>

    <!-- demo app -->
    <!-- <script src="assets/js/pages/demo.dashboard-crm.js"></script> -->
    <!-- end demo js-->

    <script src="assets/js/vendor/britecharts.min.js"></script>


    <!-- third party end -->

    <!-- demo:js -->
    <script src="assets/js/vendor/d3.min.js"></script>
    <script src="assets/js/pages/demo.britechart.js"></script>
    <!-- demo end -->
</body>

</html>