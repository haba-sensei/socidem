<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
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
        <style>
        .circulo {
            width: 7rem;
            height: 7rem;
            border-radius: 50%;
            background: #008298;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 0px auto;
            padding: 3%;
        }

        .circulo>h2 {
            font-family: sans-serif;
            color: white;
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 0;
        }
        </style>
        <div class="row">

            <!-- Profile Sidebar -->
            <div class="col-md-5 col-lg-4 col-xl-2 theiaStickySidebar">
                <div class="profile-sidebar">
                    <div class="widget-profile pro-widget-content">
                        <div class="profile-info-widget">
                            <a href="#" class="booking-doc-img">
                                <label class="circulo">
                                    <h2><?php 
                                    $words = explode(' ', $nombre_);
                                    $paa = strtoupper(substr($words[0], 0, 1) . substr(end($words), 0, 1));
                                    echo $paa;
                                    ?></h2>
                                    
                                </label>
                            </a>
                            <div class="profile-det-info">
                                <h3 style="text-transform: capitalize;"><?=$nombre_?></h3>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        <nav class="dashboard-menu">
                            <ul>
                                <li class="active">
                                    <a href="dashboard">
                                        <i class="fas fa-columns"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="salir">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- / Profile Sidebar -->

            <div class="col-md-7 col-lg-8 col-xl-10">
                <div class="card">
                    <div class="pt-0 card-body">

                        <!-- Tab Menu -->
                        <nav class="mb-4 user-tabs">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Reservaciones</a>
                                </li>

                            </ul>
                        </nav>
                        <!-- /Tab Menu -->

                        <!-- Tab Content -->
                        <div class="pt-0 tab-content">
<style>
.ajust_celda {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

</style>
                            <!-- Appointment Tab -->
                            <div id="pat_appointments" class="tab-pane fade show active">
                                <div class="mb-0 card card-table">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-hover table-center">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 35%;">Doctor</th>
                                                        <th style="width: 15%;">Fecha y Hora</th>
                                                        <th >Tipo</th>
                                                        <th>Precio</th>

                                                        <th>Estatus</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="max-height: fit-content;">
                                                    <?php 
                                                    
                                                while($datos_agenda_paciente=mysqli_fetch_assoc($listConsultas)){

                                                $cod_medico =$datos_agenda_paciente['cod_medico']; 
                                                $especialidad =$datos_agenda_paciente['especialidad']; 
                                                $tipo_cita =$datos_agenda_paciente['tipo_cita']; 
                                                $precio_cita =$datos_agenda_paciente['precio_consulta']; 
                                                $estado =$datos_agenda_paciente['estado']; 
                                                $correo_med =$datos_agenda_paciente['correo']; 
                                                $foto_medico =$datos_agenda_paciente['foto']; 
                                                $cod_consulta =$datos_agenda_paciente['cod_consulta']; 
                                                $fecha_start = $datos_agenda_paciente['fecha_start'];
                                                $fecha_hora = $datos_agenda_paciente['fecha_hora'];
                                                
                                                $objCita_de = json_decode($datos_agenda_paciente['cita'], true); 
                                                
                                                
                                                $nameMed = ejecutarSQL::consultar("SELECT `medicos`.`correo`, `medicos`.`nombre_completo` FROM `medicos` WHERE `medicos`.`correo` = '$correo_med';");
                                                while($dato_med_dash=mysqli_fetch_assoc($nameMed)){ 
                                                    $nombre_completo_med_dash =$dato_med_dash['nombre_completo']; 
                                                }  
                                                // date_default_timezone_set('America/Lima');
                                                // setlocale(LC_TIME, 'es_ES.UTF-8');
                                                // setlocale(LC_TIME, 'spanish');
                                                
                                                // $dia= date("d", strtotime($fecha_start)); 	
                                                // $anio = strftime("%Y", strtotime($fecha_start));   
                                                // $mes_texto = strftime("%B", strtotime($fecha_start) ); 

                                                $fecha_format = $fecha_start;
                                                 
                                                ?>

                                                    <tr>
                                                        <td  style="width: 35%;">
                                                            <h2 class="table-avatar ajust_celda" >
                                                                <a href="perfil-<?=$cod_medico?>" class="mr-2 avatar avatar-sm">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="views/assets/images/medicos/<?=$foto_medico ?>" alt="User Image">
                                                                </a>
                                                                <a href="perfil-<?=$cod_medico?>"><?=$nombre_completo_med_dash ?>
                                                                    <span><?=$especialidad ?></span></a>
                                                            </h2>
                                                        </td>
                                                        <td   style="width: 15%; text-transform: capitalize;">
                                                        <?= $fecha_format ?> 
                                                        <span class="d-block text-info"><?=$fecha_hora ?> </span>
                                                        </td>
                                                        <td style="text-transform: capitalize"> <?= $tipo_cita ?> </td>
                                                        <td>S/ <?= $precio_cita ?> </td>

                                                        <td>
                                                            <?php 
                                                
                                                switch ($objCita_de['status']) {
                                                    case "pending":
                                                    echo "<span class='badge badge-pill bg-warning-light'>PENDIENTE ";
                                                    break;

                                                    case "approved":
                                                        if($estado == 2){
                                                            echo "<span class='badge badge-pill bg-danger-light'>CONCLUIDO";
                                                        }else {
                                                            echo "<span class='badge badge-pill bg-success-light'>APROBADO";
                                                        }
                                                    break;

                                                    case "404":
                                                     echo "<span class='badge badge-pill bg-danger-light'>RECHAZADO";
                                                    break;
                                                }
                                                
                                                
                                                ?>

                                                            </span>
                                                        </td>
                                                        <td class="text-left">
                                                            <div class="table-action">

                                                                <?php 

                                                            switch ($tipo_cita) {
                                                            case "presencial":
                                                                if ($objCita_de['status'] == "404"){
                                                                    echo "<a href='javascript:' class='btn btn-sm bg-danger-light'>
                                                                    <i class='fas fa-minus'></i> Pago Rechazado
                                                                    </a>";
                                                                }else {
                                                                    echo "<a href='factura-$cod_consulta' class='btn btn-sm bg-primary-light'>
                                                                    <i class='fas fa-print'></i> Imprimir
                                                                    </a>";
                                                                }
                                                            
                                                            break;

                                                            case "online":
                                                                if($estado == 2){
                                                                    echo "<span class='badge badge-pill bg-danger-light'>CONCLUIDO";
                                                                }else {
                                                                    
                                                               
                                                                if ($objCita_de['status'] == "404"){
                                                                    echo "<a href='javascript:' class='btn btn-sm bg-danger-light'>
                                                                    <i class='fas fa-minus'></i> Pago Rechazado
                                                                    </a>";
                                                                }else {
                                                                    echo " <a href='lobby-$cod_consulta' onclick='' class='btn btn-sm bg-info-light'>
                                                                    <i class='far fa-eye'></i> Ir al Lobby </a>
                                                                    <br> <br>
                                                                    <a href='javascript:' onclick='modalCred(&apos;$cod_consulta&apos;)' class='btn btn-sm bg-warning-light'>
                                                                    <i class= 'fa fa-lock'></i>
                                                                    Password
                                                                    </a> 
                                                                    ";
                                                                }
                                                            }
                                                            break;

                                                            
                                                            }


                                                            ?>



                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php 

                                            }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Tab Content -->

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>