function modalCred(id) {


    $.ajax({
        type: "POST",
        url: "controller/dashboard/credenciales.controlador.php",
        data: {
            id: id,

        },
        success: function(data) {
            $('#cuerpo_cred').html(data);
            $('#credenciales').modal('show');
        }
    });

}

function modalDetalle(id) {


    $.ajax({
        type: "POST",
        url: "controller/dashboard/agendaMedListPacient.controlador.php",
        data: {
            id: id,

        },
        success: function(data) {
            $('#cuerpo_detalles_paciente').html(data);
            $('#detalles_med_paciente').modal('show');
            $('#detalles_cli_agenda').modal('hide');
        }
    });


}

function modalConfirm(id) {


    $.ajax({
        type: "POST",
        url: "controller/dashboard/confirmarCita.controlador.php",
        data: {
            id: id,

        },
        success: function(data) {
            $('#cuerpo_confirm_paciente').html(data);
            $('#confirm_cita_paciente').modal('show');
        }
    });


}


function modalReasignar(cod_med, cod_consulta) {

    $.ajax({
        type: "POST",
        url: "controller/dashboard/reAsignarCita.controlador.php",
        data: {
            cod_med: cod_med,
            cod_consulta: cod_consulta
        },
        success: function(data) {
            $('#cuerpo_citas_medico').html(data);
            $('#example_id').DataTable({ "destroy": true, "iDisplayLength": "5", "aLengthMenu": [5, 10, 15, 20, 50, 100], "lengthMenu": true });
            $('#re_asig_cita_paciente').modal('show');
        }
    });

}

function actualizarAgenda(cod_med, cod_consulta, id) {


    $.ajax({
        type: "POST",
        url: "controller/dashboard/actualizarAgendaCita.controlador.php",
        data: {
            cod_med: cod_med,
            cod_consulta: cod_consulta,
            id: id

        },
        success: function(data) {
            alert(data);
            window.location = "dashboard";
        }
    });

}

function enviarWhatsApp(id) {


    alert("hoa");




}


function enviarCorreo(id) {

    $.ajax({
        type: "POST",
        url: "controller/dashboard/correo.controlador.php",
        data: {
            id: id,

        },
        success: function(data) {

            alert(data);

        }
    });



}

function updateRoom(id) {

    $.ajax({
        type: "POST",
        url: "controller/dashboard/upVideoConf.controlador.php",
        data: {
            id: id
        },
        success: function(data) {
            alert(data);
            window.location = "dashboard";

        }
    });
};


function updatePresencialCita() {


    var type = $('#update-presencial-cita').attr('method');
    var url = $('#update-presencial-cita').attr('action');
    var formType = $('#update-presencial-cita').attr('data-form');


    $.ajax({
        type: type,
        url: url,
        data: $('#update-presencial-cita').serialize(),
        success: function(data) {
            alert(data);
            window.location = "dashboard";

        }
    });
};


function AbrirAgenda(fecha, hora) {

    $.ajax({
        type: 'POST',
        url: 'controller/dashboard/abrirAgenda.controlador.php',
        data: {
            fecha: fecha,
            hora: hora
        },
        success: function(data) {

            $('#cuerpo_crear_agenda').html(data);
            $('#crear_agenda').modal('show');

        }
    });
}

function CrearAgenda(fecha, hora, token) {
    var tipo = $("input[type='radio'][name='radio']:checked").val();


    $.ajax({
        type: 'POST',
        url: 'controller/dashboard/crearAgenda.controlador.php',
        data: {
            fecha: fecha,
            hora: hora,
            tipo: tipo
        },
        success: function(data) {


            $('#crear_agenda').modal('hide');
            cargaCalendar("cal-" + token, token, 8, "med");

        }
    });
}

function elimAgenda(id, token) {

    Swal.fire({
        title: '¿Seguro que desea Eliminar?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `SI`,
        denyButtonText: `NO ELIMINAR`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {

            $.ajax({
                type: 'POST',
                url: 'controller/dashboard/elimAgenda.controlador.php',
                data: {
                    id: id
                },
                success: function(data) {

                    Swal.fire({
                        title: 'ELIMINADO CON EXITO',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    cargaCalendar("cal-" + token, token, 8, "med");

                }
            });

        } else if (result.isDenied) {
            Swal.fire('NO ELIMINADO', '', 'error')
        }
    });

}

function abrirDetallesCli(id, cod_agenda) {

    $.ajax({
        type: 'POST',
        url: 'controller/dashboard/modalDetCli.controlador.php',
        data: {
            id: id,
            cod_agenda: cod_agenda
        },
        success: function(data) {

            $('#cuerpo_detalles_cli_agenda').html(data);
            $('#detalles_cli_agenda').modal('show');

        }
    });

}