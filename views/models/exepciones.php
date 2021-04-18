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

<div class="content">
    <div class="container-fluid ajust_fluid">

        <div class="row">

            <?php include 'views/admin/sidebar.php'; ?>
            <style>
            .datepicker {
                border-radius: 4px;
                direction: ltr;
                width: 20%;
            }
            </style>
            <div class="col-md-7 col-lg-8 col-xl-9">
            <form action="" method="post" id="form_primer_toggle"> 
                <br>
                <h3 class="" style="margin-left: auto; margin-right: auto; display: table;">Crear Exepciones</h3>

                <div id="box_cuerpo-primer_toggle" style="background:#ececec; border-radius: 10px; margin-top: 32px; width: 100%;">
                   
                        <br>
                        <h3 class="" style="margin-left: auto; margin-right: auto; display: table;">Seleccionar día</h3>
                        <div style="width: 25%; margin-left: auto; margin-right: auto; margin-top: 3%;">

                            <div class="cal-icon">

                            
                                <input class="form-control " name="fecha_exep" id="sandbox-container" onchange="buscaAgenda()" type="text" placeholder="DD/MM/YYYY" autocomplete="off">
                            </div>

                        </div>


                   

                    <br>
                    <br>



                </div>

                <div style="background:#ececec; border-radius: 10px; margin-top: 32px; width: 100%;">
                    <br>
                    <h3 class="" style="margin-left: auto; margin-right: auto; display: table;">Modifique los horarios para crear la excepción </h3>
                    <br>
                    <br>
                    <div id="box_cuerpo-exep"></div>

                    <div class="row" style="margin-left: auto; margin-right: auto; display: table;">
                        <div class="col-md-12"><button onclick="AgregarHorario()" type="button"  class="btn btn-new btn-info "
                                style="background: #008298; border: 1px solid #ececec;">
                                <i class="fas fa-plus"></i> Agregar mas Horarios</button></div>

                    </div>
                    <br>

                </div>

 
                <div id="box_cuerpo-primer_toggle" style="background:#ececec; border-radius: 10px; margin-top: 32px; width: 100%;">
                    <br>
                    <h3 class="" style="margin-left: auto; margin-right: auto; display: table;">Servicios a Exceptuar</h3>
                    <br>
                    <br>

                    <div id="carga_exepcion" style="margin-left: 28%; margin-right: 20%; display: table; width: 70%;">


                    <link rel="stylesheet" href="views/assets/css/agenda.css" >


                   


                            
                        <div class="row">
                            <div class="col-md-4">
                            <input class="ocult" type="checkbox" name="check_serv[]" value="Presencial" id="primer_toggle" onclick="CambiaColor('presencial')" >
                            <label for="primer_toggle" class="btn btn-block control-me-presencial-ex "> Presencial  </label>
                                
                            </div>

                            <div class="col-md-4">
                            <input class="ocult" type="checkbox" name="check_serv[]" value="Online" id="segundo_toggle" onclick="CambiaColor('online')" >
                            <label for="segundo_toggle" class="btn btn-block control-me-online-ex "> Online  </label>
                            
                            </div>
                        </div>

                        <br><br>

                    </div>



            </form>
                </div>
<br><br>
                <div class="row" style="margin-left: 38%;   margin-right: auto; ">

                    <div class="col-md-12"><button onclick="saveEx()" type="button" class="btn btn-new btn-info "
                            style="background: #008298; border: 1px solid #ececec; "><i class="fas fa-save"></i> Guardar Exepciones </button>
                    </div>

                </div>
            </div>


        </div>

    </div>

</div>

<script>


function CambiaColor(tipo){

    if (tipo == 'online') { 
        $(".control-me-online-ex").addClass('blue_class_segundo');
    }else {
        $(".control-me-presencial-ex").addClass('orange_class_primer');
        
    }
    
}


function buscaAgenda() {

    moment.locale('es');
    let tracking = document.getElementById('sandbox-container').value;
    let info = tracking.split('/');
    let fecha_f = info[2] + '/' + info[1] + '/' + info[0];
    let dia_letra = moment(fecha_f).locale('es').format('dddd'); 
     
    

    $.ajax({
        type: "POST",
        url: "controller/dashboard/exepciones.controlador.php",
        data: {
            tracking: tracking,
            dia_letra: dia_letra 
        },
        dataType: 'json', 
        beforeSend: function(){
            document.getElementById("primer_toggle").checked = false;
            document.getElementById("segundo_toggle").checked = false;
        },
        success: function(data) {
            
            $("#box_cuerpo-exep").html(data['obj_row']); 
 
                switch (data['servicio']) {
                        case 'Presencial':
                                document.getElementById("primer_toggle").checked = true;
                                $(".control-me-presencial-ex").addClass('orange_class_primer');
                            break;
                            case 'Online':
                                document.getElementById("segundo_toggle").checked = true;
                                $(".control-me-online-ex").addClass('blue_class_segundo');
                            break;
                            case 'Mixto':
                                document.getElementById("primer_toggle").checked = true;
                                document.getElementById("segundo_toggle").checked = true;
                                $(".control-me-presencial-ex").addClass('orange_class_primer');
                                $(".control-me-online-ex").addClass('blue_class_segundo');
                            break;
                        
                    }
        }

    });

}

function AgregarHorario(){
    moment.locale('es');
    let tracking = document.getElementById('sandbox-container').value;
    let info = tracking.split('/');
    let fecha_f = info[2] + '/' + info[1] + '/' + info[0];
    let dia_letra = moment(fecha_f).locale('es').format('dddd'); 

    if(tracking == ""){
        Swal.fire({
                    title: 'ELIGE UNA FECHA',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000
                });
    }else {
        
        $.ajax({
        type: "POST",
        url: "controller/dashboard/nuevaExepcion.controlador.php",
        data: {
            tracking: tracking,
            dia_letra: dia_letra
        },
        success: function(data) {
            $("#box_cuerpo-exep").append(data); 
        }

        });
    
    }
    
}

function saveEx(){

    var serialize = $('#form_primer_toggle').serialize();

    $.ajax({
        type: "POST",
        url: "controller/dashboard/regExepcion.controlador.php",
        data:  serialize,   
        dataType: 'json',      
        success: function(data) {
           
            if(data['estado'] == "vacio"){
                Swal.fire({
                    title: 'ELIGE UN SERVICIO',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000
                });
            }else {
                Swal.fire({
                    title: 'GUARDADO CON EXITO',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000
                }); 
                 setTimeout(function(){ location.reload(); }, 2500);  
            }
            
        }

        });
}

function quitarEx(track) {
    $("#carga_exepcion-" + track).remove();
}
</script>