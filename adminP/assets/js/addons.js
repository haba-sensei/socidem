$(document).ready(function() {

    /*Ajax para Login y registro (clientes y vendedores)*/
    $('.Login-Form').submit(function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        var formType = $(this).attr('data-form');

        if (formType == "login") {

            $.ajax({
                type: "POST",
                url: "adminP/controller/login.controlador.php",
                data: data,
                beforeSend: function() {
                    $(".res-Login").html('<div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: 100%">Iniciando sesion</div></div>');
                },
                error: function() {
                    $(".res-Login").html("Ha ocurrido un error en el sistema");
                },
                success: function(data) {
                    $(".res-Login").html(data);
                }
            });
            return false;
        }


    });


});

function pagarNomina(date) {

    $.ajax({
        type: "POST",
        url: "adminP/controller/pagoDoc.controlador.php",
        data: {
            date: date
        },
        error: function() {
            $(".res-pago").html("Ha ocurrido un error en el sistema");
        },
        success: function(data) {
            if (data == "existe") {
                Swal.fire({
                    title: 'ESTE MES YA ESTA PAGO',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    title: 'MES PAGADO CON EXITO',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(function() { location.reload(); }, 2000);

            }


        }
    });




}

function verPago(id) {

    $.ajax({
        type: "POST",
        url: "adminP/controller/verPago.controlador.php",
        data: {
            cod: id
        },
        success: function(data) {
            $("#print_pago").html(data);

        }
    });


}

function cambioEstado(id) {
    input_check = document.getElementById("status_" + id);
    $.ajax({
        type: "POST",
        url: "adminP/controller/cambioStatus.controlador.php",
        data: {
            status: input_check.checked,
            cod: input_check.value
        },
        success: function(data) {

            Swal.fire({
                title: 'ACTUALIZADO CON EXITO',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            });

        }
    });
}

var dataTable1 = $('#doc-table').DataTable({
    "responsive": true,
    "iDisplayLength": "3",
    "aLengthMenu": [3, 10, 50, 100, 150, 200],
    "lengthMenu": true
});

var dataTable2 = $('#paciente-table').DataTable({
    "responsive": true,
    "iDisplayLength": "4",
    "aLengthMenu": [4, 10, 50, 100, 150, 200],
    "lengthMenu": true
});

var dataTable3 = $('#citas-table').DataTable({
    "responsive": true,
    "iDisplayLength": "10",
    "aLengthMenu": [10, 50, 100, 150, 200],
    "lengthMenu": true
});

var dataTable4 = $('#referidos-table').DataTable({
    "responsive": true,
    "iDisplayLength": "10",
    "aLengthMenu": [10, 50, 100, 150, 200],
    "lengthMenu": true
});

var dataTable4 = $('#referidos-interno-table').DataTable({
    "responsive": true,
    "iDisplayLength": "4",
    "aLengthMenu": [4, 10, 50, 100, 150, 200],
    "lengthMenu": true
});

var dataTable5 = $('#doc-table2').DataTable({
    "responsive": true,
    "iDisplayLength": "5",
    "aLengthMenu": [5, 10, 50, 100, 150, 200],
    "lengthMenu": true
});