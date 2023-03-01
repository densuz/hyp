$(document).ready(function (e) {

    // Membuat function login_proses
    function login_proses() {
        var userid = $("#userid").val();
        var password = $("#password").val();


        // Mengecek userid di isi atau tidak
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
        } else {
            // Jika semua form terisi maka ajax akan memulai memproses data

            $.ajax({
                url: "auth/validation.php",
                type: "POST",
                data: {

                    "userid": userid,
                    "password": password
                },
                // Jika response nya sukses atau berhasil maka fungsi ini akan berjalan
                success: function (response) {
                    // alert(response);

                    // Jika ia sebagai Admin 
                    var decode = JSON.parse(response);
                    // alert(decode.status);
                    if (decode.status == 200) {
                        
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
                        toastr.success('Login Berhasil', 'Success !'), (decode.succes);

                        setTimeout(function () {
                            window.location.href = "main";
                        }, 2000);

                        // Jika ia sebagai user
                    } 
                    else if (decode.status == 201) {

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
                        toastr.success('Login Berhasil', 'Success !'), (decode.succes);
                        setTimeout(function () {
                            window.location.href = "dashboard";
                        }, 2000);

                    }
                     else {

                        // Jika response nya error maka fungsi ini yang akan berjalan
                        // alert(response);
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
                        toastr.warning('userid atau Password Kamu Salah!', 'Failed !'), (decode.error);

                    }
                    console.log(decode);
                },
                // Jika ajax nya error/bermasalah maka fungsi ini yang akan berjalan
                error: function (response) {

                    // alert(response);
                    Swal.fire({
                        type: 'error',
                        title: 'Opps!',
                        text: 'Terjadi kesalahan pada server!'
                    });

                    console.log(response);
                }
            });

        }
    }

    // click button logn -> run -> login_proses
    $("#btn-login").on('click', function (s) {
        s.preventDefault();
        login_proses();
    });

});