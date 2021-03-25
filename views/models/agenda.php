<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Dashboard</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <?php include 'views/admin/sidebar.php'; ?>

            <div class="col-md-7 col-lg-8 col-xl-9">
                <form action="" method="post" id="form_cita">
                    <style>
                    .control-me-primer_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;
                    }

                    .control-me-primer_toggle:hover,
                    .control-me-primer_toggle:focus,
                    .control-me-primer_toggle.active,
                    .control-me-primer_toggle:active,
                    .open>.dropdown-toggle.control-me-primer_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;

                    }

                    .control-me-segundo_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;
                    }

                    .control-me-segundo_toggle:hover,
                    .control-me-segundo_toggle:focus,
                    .control-me-segundo_toggle.active,
                    .control-me-segundo_toggle:active,
                    .open>.dropdown-toggle.control-me-segundo_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;

                    }

                    .control-me-tercer_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;
                    }

                    .control-me-tercer_toggle:hover,
                    .control-me-tercer_toggle:focus,
                    .control-me-tercer_toggle.active,
                    .control-me-tercer_toggle:active,
                    .open>.dropdown-toggle.control-me-tercer_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;

                    }

                    .control-me-cuarto_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;
                    }

                    .control-me-cuarto_toggle:hover,
                    .control-me-cuarto_toggle:focus,
                    .control-me-cuarto_toggle.active,
                    .control-me-cuarto_toggle:active,
                    .open>.dropdown-toggle.control-me-cuarto_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;

                    }

                    .control-me-quinto_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;
                    }

                    .control-me-quinto_toggle:hover,
                    .control-me-quinto_toggle:focus,
                    .control-me-quinto_toggle.active,
                    .control-me-quinto_toggle:active,
                    .open>.dropdown-toggle.control-me-quinto_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;

                    }

                    .control-me-sexto_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;
                    }

                    .control-me-sexto_toggle:hover,
                    .control-me-sexto_toggle:focus,
                    .control-me-sexto_toggle.active,
                    .control-me-sexto_toggle:active,
                    .open>.dropdown-toggle_toggle.control-me-sexto_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;

                    }

                    .control-me-septimo_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;
                    }

                    .control-me-septimo_toggle:hover,
                    .control-me-septimo_toggle:focus,
                    .control-me-septimo_toggle.active,
                    .control-me-septimo_toggle:active,
                    .open>.dropdown-toggle.control-me-septimo_toggle {
                        background-color: #e0dfdf !important;
                        border: 1px solid #000000 !important;
                        color: black !important;

                    }

                    #primer_toggle:checked~.control-me-primer_toggle {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #segundo_toggle:checked~.control-me-segundo_toggle {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #tercer_toggle:checked~.control-me-tercer_toggle {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #cuarto_toggle:checked~.control-me-cuarto_toggle {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #quinto_toggle:checked~.control-me-quinto_toggle {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #sexto_toggle:checked~.control-me-sexto_toggle {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }


                    #septimo_toggle:checked~.control-me-septimo_toggle {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    /* sadsadasd */

                    #primer_toggle:checked~.blue_class_primer {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #segundo_toggle:checked~.blue_class_segundo {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #tercer_toggle:checked~.blue_class_tercer {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #cuarto_toggle:checked~.blue_class_cuarto {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #quinto_toggle:checked~.blue_class_quinto {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    #sexto_toggle:checked~.blue_class_sexto {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }


                    #septimo_toggle:checked~.blue_class_septimo {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    /* asdasd */

                    #primer_toggle:checked~.orange_class_primer {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }

                    #segundo_toggle:checked~.orange_class_segundo {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }

                    #tercer_toggle:checked~.orange_class_tercer {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }

                    #cuarto_toggle:checked~.orange_class_cuarto {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }

                    #quinto_toggle:checked~.orange_class_quinto {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }

                    #sexto_toggle:checked~.orange_class_sexto {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }


                    #septimo_toggle:checked~.orange_class_septimo {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }

                    .ocult {
                        display: none
                    }

                    .tipo_class_online {
                        background-color: #15558d !important;
                        border: 1px solid #15558d !important;
                        color: white !important;
                    }

                    .tipo_class_presencial {
                        background-color: #ff7c00 !important;
                        border: 1px solid #ff7c00 !important;
                        color: white !important;
                    }

                    .error-box {
                        margin: 0 auto;
                        max-width: 480px;
                        padding: 1.875rem 0;
                        text-align: center;
                        width: 100%;
                    }

                    .error-box h1 {
                        color: #00d0f1;
                        font-size: 10em;
                    }
                    .time-slot li {
                        float: left;
                        padding-left: 5px;
                        padding-right: 6px;
                        width: 25%;
                        padding-bottom: 15px;
                    }  

                    .time-slot ul {
                        list-style: none;
                        margin-right: 20px;
                        margin-left: 20px;
                        margin-bottom: 0;
                        padding: 0;
                    }

                    .time-slot li .timing {
                        background-color: #fff;
                    }

                    input[type=checkbox]:checked + label{
                    background-color: #42c0fb;
                    border: 1px solid #42c0fb;
                    color: #fff;
                    }

                    input[type=checkbox]:checked + label:hover{
                    background-color: #42c0fb;
                    border: 1px solid #42c0fb;
                    color: #fff;
                    }
                    input[type=checkbox]:checked + .timing::before {
                    color: #fff;
                    content: "\f00c";
                    font-family: "Font Awesome 5 Free";
                    font-size: 12px;
                    font-weight: 900;
                    position: absolute;
                    right: 6px;
                    top: 6px;
                    }
                    
                    </style>
                    <div class="mb-0 card card-table">
                        <div class="card-body" style="text-align: center;">

                            <h3>Elige el Tipo de Cita </h3>
                            <br>
                            <div class="" style="text-align: center;">
                                <input type="radio" name="tipo" value="online" class="ocult" id="online_t" onclick="changeColor('online')" checked>
                                <label for="online_t" class="btn btn-primary btn-rounded online_t"
                                    style="background: #e0dfdf;  border-color: #e0dfdf;">Online</label>

                                <input type="radio" name="tipo" value="presencial" class="ocult" id="presencial_t"
                                    onclick="changeColor('presencial')">
                                <label for="presencial_t" class="btn btn-primary btn-rounded presencial_t"
                                    style="background: #e0dfdf;  border-color: #e0dfdf;">Presencial</label>


                                <br> <br> <strong id="precio_cita"></strong> <br> <br>

                            </div>
                        </div>
                    </div>

                    <div class="mb-0 card card-table" style="text-align: center">
                        <br>


                        <h3>Selecciona el dia </h3>
                        <br>
                        <div class="card-body" style="margin-left: 5%;  margin-right: 5%;">
                            <?php 
                            date_default_timezone_set('America/Lima');
                            setlocale(LC_TIME, 'es_ES');
                            setlocale(LC_TIME, 'spanish'); 
                              
                            $fecha_date = date('d-m-Y');
                            $indice = array('primer_toggle', 'segundo_toggle', 'tercer_toggle' , 'cuarto_toggle' , 'quinto_toggle', 'sexto_toggle', 'septimo_toggle');  
                              $cont = -1;
                            for ($i=0; $i < 7; $i++) { 
                                $cont = $cont + 1 ;
                               
                                $nuevafecha_init = strtotime ( $cont.' day', strtotime ( $fecha_date ) );
                                $fecha_actual_f = date("d-m-Y", $nuevafecha_init); 
                                $newDate_1 = strtotime($cont.' day', strtotime ( $fecha_date ));
                                $newDate = strftime("%A %d <br> %B", $newDate_1);
                                 
                                $date_1 = utf8_encode($newDate);


                                echo '
                                <input class="ocult" type="checkbox" name="check_date" id="'.$indice[$i].'"
                                onclick="validate(&quot;'.$indice[$i].'&quot;, &quot;'.$fecha_actual_f.'&quot;);">
                                 <label for="'.$indice[$i].'" class="btn btn-primary submit-btn control-me-'.$indice[$i].' "> '.$date_1 .'  </label>
                                ';
                            }
                            ?>

                            <div class="card-body " style="text-align: center; " id="box_cita">

                            </div>
                            <br>
                            <br>
                            <div style="text-align: center;">
                                <button type="button" class="btn btn-block btn-info" style="background: #15558d;" onclick="subir();"> REGISTRAR CITAS
                                </button>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </form> 
                            
            </div>
 
        </div>

    </div>

</div>

<script>
function changeColor(tipo) {

    $('input[type=checkbox]').prop('checked', false);
    var tipo_cita = tipo;

    $.ajax({
        type: "POST",
        url: "controller/dashboard/buscaPrecio.controlador.php",
        data: {
            tipo_cita: tipo_cita
        },
        success: function(data) {

            $('#precio_cita').html(data);


        }
    });

    if (tipo == 'online') {

        $(".online_t").addClass('tipo_class_online');
        $(".presencial_t").removeClass('tipo_class_presencial');


        $(".control-me-primer_toggle").addClass('blue_class_primer');
        $(".control-me-segundo_toggle").addClass('blue_class_segundo');
        $(".control-me-tercer_toggle").addClass('blue_class_tercer');
        $(".control-me-cuarto_toggle").addClass('blue_class_cuarto');
        $(".control-me-quinto_toggle").addClass('blue_class_quinto');
        $(".control-me-sexto_toggle").addClass('blue_class_sexto');
        $(".control-me-septimo_toggle").addClass('blue_class_septimo');

        $(".control-me-primer_toggle").removeClass('orange_class_primer');
        $(".control-me-segundo_toggle").removeClass('orange_class_segundo');
        $(".control-me-tercer_toggle").removeClass('orange_class_tercer');
        $(".control-me-cuarto_toggle").removeClass('orange_class_cuarto');
        $(".control-me-quinto_toggle").removeClass('orange_class_quinto');
        $(".control-me-sexto_toggle").removeClass('orange_class_sexto');
        $(".control-me-septimo_toggle").removeClass('orange_class_septimo');
    } else {

        $(".presencial_t").addClass('tipo_class_presencial');
        $(".online_t").removeClass('tipo_class_online');



        $(".control-me-primer_toggle").addClass('orange_class_primer');
        $(".control-me-segundo_toggle").addClass('orange_class_segundo');
        $(".control-me-tercer_toggle").addClass('orange_class_tercer');
        $(".control-me-cuarto_toggle").addClass('orange_class_cuarto');
        $(".control-me-quinto_toggle").addClass('orange_class_quinto');
        $(".control-me-sexto_toggle").addClass('orange_class_sexto');
        $(".control-me-septimo_toggle").addClass('orange_class_septimo');

        $(".control-me-primer_toggle").removeClass('blue_class_primer');
        $(".control-me-segundo_toggle").removeClass('blue_class_segundo');
        $(".control-me-tercer_toggle").removeClass('blue_class_tercer');
        $(".control-me-cuarto_toggle").removeClass('blue_class_cuarto');
        $(".control-me-quinto_toggle").removeClass('blue_class_quinto');
        $(".control-me-sexto_toggle").removeClass('blue_class_sexto');
        $(".control-me-septimo_toggle").removeClass('blue_class_septimo');
    }


    $("#box_cuerpo-primer_toggle").remove();
    $("#box_cuerpo-segundo_toggle").remove();
    $("#box_cuerpo-tercer_toggle").remove();
    $("#box_cuerpo-cuarto_toggle").remove();
    $("#box_cuerpo-quinto_toggle").remove();
    $("#box_cuerpo-sexto_toggle").remove();
    $("#box_cuerpo-septimo_toggle").remove();


}



function validate(id, fecha) {

    $.ajax({
        type: "POST",
        url: "controller/dashboard/horarios.controlador.php",
        data: {
            id: id,
            fecha: fecha
        },
        success: function(data) {

            var cuerpo = data;
            var tracking = document.getElementById(id).checked;

            if (document.getElementById(id).checked) {



                $("#box_cita").append(cuerpo);


            } else {
                var track_cuerpo = "#box_cuerpo-" + id;

                $("#box_cuerpo-" + id).remove();
            }
        }

    });

}


function subir() {
    var data1 = $('#form_cita').serialize();

    console.log(data1);

    $.ajax({
        type: "POST",
        url: "controller/dashboard/crearAgenda.controlador.php",
        data: data1,
        success: function(data) {

            
            if (data == "ok") {
                Swal.fire({
                    title: 'AGREGADO CON EXITO',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {

                    if (result.isConfirmed) {

                    } else {
                        window.location = "agenda";
                    }
                });

            } else {
                Swal.fire({
                    title: 'ERROR NO AGREGADO',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {

                    
                });
            }



        }
    });
}


function selectall(id) {

    $("#selectall-" + id).change(function() {
        $(".horario-" + id).prop('checked', $(this).prop("checked"));
    });

}
</script>