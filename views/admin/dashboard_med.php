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
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                <!-- Profile Sidebar -->
                <div class="profile-sidebar">
                    <div class="widget-profile pro-widget-content">
                        <div class="profile-info-widget">
                            <a href="#" class="booking-doc-img">
                                <img src="views/assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                            </a>
                            <div class="profile-det-info">
                                <h3>Dr. Darren Elder</h3>

                                <div class="patient-details">
                                    <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                                </div>
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
                                    <a href="agenta">
                                        <i class="fas fa-calendar-check"></i>
                                        <span>Agenta</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat-doctor">
                                        <i class="fas fa-comments"></i>
                                        <span>Mensajes</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="perfilMed">
                                        <i class="fas fa-comments"></i>
                                        <span>perfilMed</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="chat-doctor">
                                        <i class="fas fa-comments"></i>
                                        <span>opcion 2</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="chat-doctor">
                                        <i class="fas fa-comments"></i>
                                        <span>opcion 3</span>

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
                <!-- /Profile Sidebar -->

            </div>

            <div class="col-md-7 col-lg-8 col-xl-9">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card dash-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="dash-widget dct-border-rht">
                                            <div class="circle-bar circle-bar1">
                                                <div class="circle-graph1" data-percent="75">
                                                    <img src="views/assets/img/icon-01.png" class="img-fluid" alt="patient">
                                                </div>
                                            </div>
                                            <div class="dash-widget-info">
                                                <h6>Total Pacientes</h6>
                                                <h3><?= $totalPacientes  ?></h3>
                                                <p class="text-muted">Lista General</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-4">
                                        <div class="dash-widget dct-border-rht">
                                            <div class="circle-bar circle-bar2">
                                                <div class="circle-graph2" data-percent="65">
                                                    <img src="views/assets/img/icon-02.png" class="img-fluid" alt="Patient">
                                                </div>
                                            </div>
                                            <div class="dash-widget-info">
                                                <h6>Agenda del Dia</h6>
                                                <h3><?= $totalPacientes  ?></h3>
                                                <p class="text-muted">06, Nov 2019</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-4">
                                        <div class="dash-widget">
                                            <div class="circle-bar circle-bar3">
                                                <div class="circle-graph3" data-percent="50">
                                                    <img src="views/assets/img/icon-03.png" class="img-fluid" alt="Patient">
                                                </div>
                                            </div>
                                            <div class="dash-widget-info">
                                                <h6>Agenda total</h6>
                                                <h3><?= $totalPacientes  ?></h3>
                                                <p class="text-muted">06, Apr 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Agenda de Pacientes</h4>
                        <div class="appointment-tab">

                            <!-- Appointment Tab -->
                            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Agenda del dia</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#today-appointments" data-toggle="tab">Agenda General</a>
                                </li> -->
                            </ul>
                            <!-- /Appointment Tab -->

                            <div class="tab-content">

                                <!-- Upcoming Appointment Tab -->
                                <div class="tab-pane show active" id="upcoming-appointments">
                                    <div class="mb-0 card card-table">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-hover table-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Paciente</th>
                                                            <th>Fecha y Hora</th>
                                                            <th>Tipo de Cita</th>
                                                            <th>Detalles</th>
                                                            <th>Estado</th>
                                                            <th>Acciones </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php 

                                                        while($datos_agenda_paciente=mysqli_fetch_assoc($listaConsultasMed)){

                                                        $cod_medico =$datos_agenda_paciente['cod_medico']; 
                                                        $especialidad =$datos_agenda_paciente['especialidad']; 
                                                        $tipo_cita =$datos_agenda_paciente['tipo_cita']; 
                                                        $precio_cita =$datos_agenda_paciente['precio_consulta']; 
                                                        $estado =$datos_agenda_paciente['estado']; 
                                                        $email_usuario =$datos_agenda_paciente['email_usuario']; 
                                                        $foto_medico =$datos_agenda_paciente['foto']; 
                                                        $cod_consulta =$datos_agenda_paciente['cod_consulta']; 
                                                        $fecha_start = $datos_agenda_paciente['fecha_start'];
                                                        $fecha_end = $datos_agenda_paciente['fecha_end'];
                                                        $namePac = ejecutarSQL::consultar("SELECT `pacientes`.`correo`, `pacientes`.`nombre` FROM `pacientes` WHERE `pacientes`.`correo` = '$email_usuario';");
                                                        while($dato_paciente_dash=mysqli_fetch_assoc($namePac)){ 
                                                            $nombre_paciente =$dato_paciente_dash['nombre']; 
                                                        }  

                                                        setlocale(LC_TIME, 'es_ES.UTF-8');
                                                        setlocale(LC_TIME, 'spanish');

                                                        $dia= date("d", strtotime($fecha_start)); 	
                                                        $anio = strftime("%Y", strtotime($fecha_start));  
                                                        $init_hora_min =date('h:i A', strtotime($fecha_start));
                                                        $end_hora_min = date('h:i A', strtotime($fecha_end));
                                                        $mes_texto = strftime("%B", strtotime($fecha_start) ); 

                                                        $fecha_format = $dia." ".$mes_texto." ".$anio;
                                                        $hora_format = $init_hora_min." - ".$end_hora_min;
                                                            ?>

                                                            <tr>
                                                                <td>

                                                                    <h2 class="table-avatar">

                                                                        <?=$nombre_paciente ?>

                                                                    </h2>
                                                                </td>
                                                                <td><?= $fecha_format ?> <span class="d-block text-info"><?=$hora_format ?> </span>
                                                                </td>
                                                                <td> <?= $tipo_cita ?> </td>
                                                                <td> <a href="javascript:" onclick="modalDetalle('<?=$cod_consulta ?>')"
                                                                        class="btn btn-sm bg-warning-light">
                                                                        <i class="fas fa-id-card-alt"></i> Ver Mas
                                                                    </a></td>

                                                                <td>
                                                                    <?php 

                                                                    switch ($estado) {
                                                                        case 1:
                                                                        echo "<span class='badge badge-pill bg-warning-light'>Procesado";
                                                                        break;

                                                                        case 2:
                                                                        echo "<span class='badge badge-pill bg-success-light'>Aprobado";
                                                                        break;

                                                                        case 3:
                                                                        echo "<span class='badge badge-pill bg-success-light'>Re Asignado";
                                                                        break;
                                                                    }


                                                                    ?>

                                                                    </span>
                                                                <td class="text-left">
                                                                    <div class="table-action">

                                                                        <a href='javascript:void(0);' onclick="modalConfirm('<?=$cod_consulta ?>')" class='btn btn-sm bg-success-light'>
                                                                            <i class='fas fa-check'></i> </a>
                                                                        <a href='javascript:void(0);' onclick="modalReasignar('<?=$cod_medico ?>')" class='btn btn-sm bg-danger-light'>
                                                                            <i class='fas fa-window-restore'></i> </a>



                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php 

                                                            }
                                                            ?>

                                                        <!-- <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                   
                                                                    Richard Wilson
                                                                         
                                                                </h2>
                                                            </td>
                                                            <td>11 Nov 2019 <span class="d-block text-info">10.00
                                                                    AM</span></td>
                                                            <td>General</td>
                                                            <td>New Patient</td>
                                                            <td class="text-center">$150</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>

                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-success-light">
                                                                        <i class="fas fa-check"></i> Accept
                                                                    </a>
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-sm bg-danger-light">
                                                                        <i class="fas fa-times"></i> Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr> -->

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 
                                <!-- /Upcoming Appointment Tab -->

                                <!-- Today Appointment Tab -->
                                <!-- <div class="tab-pane" id="today-appointments">
                                    <div class="mb-0 card card-table">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-hover table-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Patient Name</th>
                                                            <th>Appt Date</th>
                                                            <th>Purpose</th>
                                                            <th>Type</th>
                                                            <th class="text-center">Paid Amount</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile" class="mr-2 avatar avatar-sm"><img
                                                                            class="avatar-img rounded-circle"
                                                                            src="views/assets/img/patients/patient6.jpg" alt="User Image"></a>
                                                                    <a href="patient-profile">Elsie Gilley
                                                                        <span>#PT0006</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2019 <span class="d-block text-info">6.00
                                                                    PM</span></td>
                                                            <td>Fever</td>
                                                            <td>Old Patient</td>
                                                            <td class="text-center">$300</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>

                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                        <i class="fas fa-check"></i> Accept
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                        <i class="fas fa-times"></i> Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile" class="mr-2 avatar avatar-sm"><img
                                                                            class="avatar-img rounded-circle"
                                                                            src="views/assets/img/patients/patient7.jpg" alt="User Image"></a>
                                                                    <a href="patient-profile">Joan Gardner
                                                                        <span>#PT0006</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2019 <span class="d-block text-info">5.00
                                                                    PM</span></td>
                                                            <td>General</td>
                                                            <td>Old Patient</td>
                                                            <td class="text-center">$100</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>

                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                        <i class="fas fa-check"></i> Accept
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                        <i class="fas fa-times"></i> Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile" class="mr-2 avatar avatar-sm"><img
                                                                            class="avatar-img rounded-circle"
                                                                            src="views/assets/img/patients/patient8.jpg" alt="User Image"></a>
                                                                    <a href="patient-profile">Daniel Griffing
                                                                        <span>#PT0007</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2019 <span class="d-block text-info">3.00
                                                                    PM</span></td>
                                                            <td>General</td>
                                                            <td>New Patient</td>
                                                            <td class="text-center">$75</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>

                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                        <i class="fas fa-check"></i> Accept
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                        <i class="fas fa-times"></i> Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile" class="mr-2 avatar avatar-sm"><img
                                                                            class="avatar-img rounded-circle"
                                                                            src="views/assets/img/patients/patient9.jpg" alt="User Image"></a>
                                                                    <a href="patient-profile">Walter Roberson
                                                                        <span>#PT0008</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2019 <span class="d-block text-info">1.00
                                                                    PM</span></td>
                                                            <td>General</td>
                                                            <td>Old Patient</td>
                                                            <td class="text-center">$350</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>

                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                        <i class="fas fa-check"></i> Accept
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                        <i class="fas fa-times"></i> Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile" class="mr-2 avatar avatar-sm"><img
                                                                            class="avatar-img rounded-circle"
                                                                            src="views/assets/img/patients/patient10.jpg" alt="User Image"></a>
                                                                    <a href="patient-profile">Robert Rhodes
                                                                        <span>#PT0010</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2019 <span class="d-block text-info">10.00
                                                                    AM</span></td>
                                                            <td>General</td>
                                                            <td>New Patient</td>
                                                            <td class="text-center">$175</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>

                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                        <i class="fas fa-check"></i> Accept
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                        <i class="fas fa-times"></i> Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile" class="mr-2 avatar avatar-sm"><img
                                                                            class="avatar-img rounded-circle"
                                                                            src="views/assets/img/patients/patient11.jpg" alt="User Image"></a>
                                                                    <a href="patient-profile">Harry Williams
                                                                        <span>#PT0011</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>14 Nov 2019 <span class="d-block text-info">11.00
                                                                    AM</span></td>
                                                            <td>General</td>
                                                            <td>New Patient</td>
                                                            <td class="text-center">$450</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>

                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                        <i class="fas fa-check"></i> Accept
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                        <i class="fas fa-times"></i> Cancel
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- /Today Appointment Tab -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>