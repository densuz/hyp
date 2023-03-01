//Function Delete users
$('body').on('click', '.delete_modal', function(e) {
    let m = $(this).data('id');

    $('#modal_delete').modal('show', {
        backdrop: 'static'
    });
    $("#delete_link").on("click", function() {
        e.preventDefault();
        $.ajax({
                method: 'POST', // untuk mendapatkan attribut method pada form
                url: 'process/delusers.php', // untuk mendapatkan attribut action pada form
                data: {
                    id: m
                },
                success: function(response) {
                    console.log(response);
                    // var status = response.status

                    var decode = JSON.parse(response);
                    if (decode.status == true) {
                        // $("#modal-data").empty();
                        // $("#modal-data").html(response.data);
                        $("#modal_delete").modal('hide');
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "1000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr.success('Berhasil Menghapus Data', 'Success !'), (decode.success);
                        // table.draw();
                        // location.reload();

                    }

                },
                error: function(decode) {
                    toastr.options = {
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "300",
                        "timeOut": "1000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.error('Gagal Menghapus Data', 'Failed !'), (decode.error);
                    // table.draw();
                    // Error function here
                },
                beforeSend: function(b) {
                    // Before function here
                }
            })
            .done(function(d) {
                // When ajax finished
            });
    });
});
