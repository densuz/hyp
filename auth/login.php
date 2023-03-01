<?php
session_start();
require 'config/connect.php';

if (isset($_SESSION['userid']) == true) {
    header('location: main');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="keyword" name="description" />
    <meta content="login-pages-deni" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    <link href="assets/css/stylemod.css" rel="stylesheet" type="text/css" />
    <!-- Toastr -->
    <link href="assets/plugin/toastr/toastr.min.css" rel="stylesheet">

    <!-- SweetAlert2 Css-->
    <link rel="stylesheet" href="assets/plugin/sweetalert/css/sweetalert.css">
    <style>
        * {
            transform: scale(0.99);

        }
    </style>

</head>

<body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <form method="POST">
                <div class="row justify-content-center ">

                    <div class="col-xxl-4 col-lg-4">
                        <div class="card ">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-warning">
                                <span><img src="assets/images/logo/logo.png" alt="LOGO" height="70"></span>
                            </div>

                            <div class="card-body p-4">
                                <a href="<?php echo $base_url; ?>" style="text-decoration: none;"><i class="dripicons-backspace badge bg-danger"> Back To Home</i></a>
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold"><i class="badge bg-info">Sign In</i></h4>
                                    <!-- <p class="text-muted mb-4">Enter your userid and password to access admin panel.</p> -->
                                </div>

                                <div class="mb-3">
                                    <label for="userid" class="form-label">Userid</label>
                                    <input class="form-control" type="text" id="userid" autocomplete="current-userid" placeholder="Enter your userid" required>
                                </div>

                                <div class="mb-3">

                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" autocomplete="current-password" placeholder="Enter your password" required>

                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mb-0 text-center ">
                                    <input type="submit" class="btn btn-primary btn-login bouncy" name="login" id="btn-login" value="Login">
                                    <span>|</span>
                                    <input type="reset" class="btn btn-danger buttonD" id="btn-reset" value="Reset">
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <!--   <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ms-1"><b>Sign Up</b></a></p> -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </form>
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQUERY -->
    <script src="assets/jq/jquery-3.6.3.min.js"></script>

    <!-- SweetAlert2 js-->
    <script src="assets/plugin/sweetalert/js/sweetalert2.all.min.js"></script>


    <!-- <script type="text/javascript"> 
        $(document).on('click','#btn-login',function (e) {
            // $("#btn-login").click(function (e) {
                var userid = $("#userid").val();
                var password = $("#password").val();

                if (userid.length == "") {
                            toastr.options = {
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "900",
                            "timeOut": "2000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr.error('Userid harus Di isi!', 'Failed !'), (e.error);
                        } else if (password.length == "") {
                            toastr.options = {
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "900",
                            "timeOut": "2000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr.error('Password harus Di isi!', 'Failed !'), (e.error);
                        }

                // e.preventDefault();
                $.ajax({
                    url: "validation.php",
                    type: "POST",
                    data: {
                        "userid": userid,
                        "password": password
                    },
                    success: function (response) {
                        console.log(response);
                        if (response == "success") {
                            Swal.fire({
                                type: 'success',
                                title: 'Login Berhasil!',
                                text: 'Anda akan di arahkan dalam 3 Detik',
                                timer: 3000,
                                showCancelButton: false,
                                showConfirmButton: false
                            })
                                .then(function () {
                                    window.location.href = "admin/index.php";

                                }); //END IF

                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Login Gagal!',
                                text: 'Silahkan coba lagi!'
                            });

                        } // End ELSE

                    },

                    // ERROR
                    error: function (e) {
                        Swal.fire({
                            type: 'error',
                            title: 'Opps!',
                            text: 'Server error!'
                        });
                        console.log(response);
                    },
                   
                
                });
            });
        // });
    </script> -->



    <footer class="footer footer-alt">
        2018 - 2022 © Deni susanto
    </footer>

    <script type="text/javascript" src="source/login.js"></script>
    <script src="assets/js/stylemod.js"></script>

    <!-- Toastr JS -->
    <script type="text/javascript" src="assets/plugin/toastr/toastr.min.js"></script>

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

</body>

</html>