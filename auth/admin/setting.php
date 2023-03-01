<?php
//cek login
session_start();
require "config/connect.php";
require "config/getx.php";

if (isset($_SESSION['role'])) {
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
    <title>Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Deny5500245" name="description" />
    <meta content="Densus Dev" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include_once "layouts/sidebar.php" ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <?php @include_once "layouts/topbar.php"; ?>

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <a href="javascript: void(0);">Admin</a>
                                        </li>

                                        <li class="breadcrumb-item active">Settings</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Website Settings</h4>
                                <?php
                                if (empty($resstg)) {

                                    echo '<div class="badge bg-info ">
                                    <label>Anda Belum Setting Konfigurasi Aplikasi</label>
                                    </div>
                                    <br>
                                    <p>Silahkan Lakukan Konfigurasi Aplikasi Melalui Databse!</p>';
                                }

                               
                                ?>


                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="container">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row gutters">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="account-settings">
                                                <div class="user-profile">
                                                    <img src="assets/images/logo/logo.png" alt="Logo Default" width="200px" loading="lazy">
                                                    <hr>
                                                </div>
                                                <div class="about">
                                                    <h5>Slogan</h5>
                                                    <p>Ngoding Terus Bree!!!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mb-2 text-primary">Edit Website Configuration</h6>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="webname"> (*) Website Name</label>
                                                        <input type="text" class="form-control" id="id_webname" placeholder="Enter Website name" required value="<?= $rwstg['webname']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Email</label>
                                                        <input type="email" class="form-control" id="id_email" placeholder="Enter email" value="<?= $rwstg['email']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Slogan</label>
                                                        <input type="text" class="form-control" id="id_slogan" placeholder="Ngoding terus breee!!!" value="<?= $rwstg['slogan']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Website URL</label>
                                                        <input type="url" class="form-control" id="id_url" placeholder="https://ideni.my.id or http://ideni.my.id" value="<?= $rwstg['weburl']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="Street">Street</label>
                                                        <input type="name" class="form-control" id="id_street" placeholder="Enter Street" value="<?= $rwstg['street']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="ciTy">City</label>
                                                        <input type="name" class="form-control" id="id_city" placeholder="Enter City" value="<?= $rwstg['kota']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="sTate">State</label>
                                                        <input type="text" class="form-control" id="id_state" placeholder="Enter State" value="<?= $rwstg['provinsi']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="zIp">Zip Code</label>
                                                        <input type="text" class="form-control" id="id_zip" placeholder="Zip Code" value="<?= $rwstg['kodepos']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Logo Settings -->
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mt-3 mb-2 text-primary">LOGO</h6>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <label for="zIp">Preview</label>
                                                    <div class="form-group">

                                                        <img id="preview" src="assets/images/180.png" alt="your image" loading="lazy" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="Street">Change Your Logo</label>
                                                        <input type="file" class="form-control" id="id_logo" accept=".jpg, .png" onchange="readURL(this);">
                                                        <small for="file_allowed" class="text-danger"> image extension : Jpg,Png</small>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mt-3 mb-2 text-primary">Footer</h6>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="Street">Footer</label>
                                                        <input type="text" class="form-control" id="id_footer" value="<?= $rwstg['webfooter']; ?>">

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- End Logo Settings -->
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div style="float:right">
                                                        <br>
                                                        <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                                        <button type="button" id="submit" name="submit" class="btn btn-warning">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Row Gutters First -->
                        </form> <!-- End Form -->
                    </div> <!-- End container -->
                




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
    <script src="process/js/set.js"></script>


    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</body>

</html>