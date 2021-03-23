<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
date_default_timezone_set('America/Lima');


$id = $_POST['id'];   
$cod_agenda = $_POST['cod_agenda']; 

$verAgenda = ejecutarSQL::consultar("SELECT `agenda`.*, `agenda`.`cod_consulta` FROM `agenda` WHERE `agenda`.`cod_consulta` = '$cod_agenda'; ");

while($datos_agenda_paciente=mysqli_fetch_assoc($verAgenda)){
    
    $cod_medico =$datos_agenda_paciente['cod_medico']; 
    $especialidad =$datos_agenda_paciente['especialidad']; 
    $tipo_cita =$datos_agenda_paciente['tipo_cita']; 
    $precio_cita =$datos_agenda_paciente['precio_consulta']; 
    $estado =$datos_agenda_paciente['estado']; 
    $objCita_de = json_decode($datos_agenda_paciente['cita'], true); 
    $email_usuario =$datos_agenda_paciente['email_usuario']; 
    $foto_medico =$datos_agenda_paciente['foto']; 
    $cod_consulta =$datos_agenda_paciente['cod_consulta']; 
    $fecha_start = $datos_agenda_paciente['fecha_start'];
    $fecha_hora = $datos_agenda_paciente['fecha_hora'];
    $namePac = ejecutarSQL::consultar("SELECT `pacientes`.`correo`, `pacientes`.`nombre` FROM `pacientes` WHERE `pacientes`.`correo` = '$email_usuario';");
    while($dato_paciente_dash=mysqli_fetch_assoc($namePac)){ 
    $nombre_paciente =$dato_paciente_dash['nombre']; 
    }  

    setlocale(LC_TIME, 'es_ES.UTF-8');
    setlocale(LC_TIME, 'spanish');

    $dia= date("d", strtotime($fecha_start)); 	
    $anio = strftime("%Y", strtotime($fecha_start));  
    $init_hora_min =date('h:i A', strtotime($fecha_start));

    $mes_texto = strftime("%B", strtotime($fecha_start) ); 

    $fecha_format = $fecha_start;
    $hora_format = $init_hora_min." - ".$end_hora_min;
     
} 
 

echo '
        <div class="table-responsive">
            <table class="table mb-0 table-hover table-center">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Fecha y Hora</th>
                        <th>Tipo de Cita</th>
                        <th>Info Paciente</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                <td style="text-transform: capitalize">
                    <h2 class="table-avatar">'.$nombre_paciente.'</h2>
                </td>
                <td>'.$fecha_format.'<span class="d-block text-info"> '.$fecha_hora.' </span>
                </td>
                <td style="text-transform: capitalize">'.$tipo_cita.'</td>
                <td> <a href="javascript:" onclick="modalDetalle(&quot;'.$cod_consulta.'&quot;)"
                        class="btn btn-sm bg-success-light">
                        <i class="fas fa-id-card-alt"></i> Ver Info
                    </a></td>

                <td>
                  ';
                        switch ($objCita_de['status']) {
                            case "pending":
                        echo "<span class='badge badge-pill bg-warning-light'>PENDIENTE  </span>";
                        break;

                            case "approved":
                                if($estado == 2){
                                    echo "<span class='badge badge-pill bg-danger-light'>CERRADO </span>";
                                }else {
                                    echo "<span class='badge badge-pill bg-success-light'>APROBADO </span>";
                                }
                            
                        break;

                            case "404":
                            echo "<span class='badge badge-pill bg-danger-light'>RECHAZADO </span>";
                        break;
                        }  
                echo '    
                <td class="text-left" style="white-space: nowrap;">
                    <div class="table-action">

                        ';

                        switch ($tipo_cita) {
                        case 'online':
                        if($estado == 2){
                        echo "
                        <a href='javascript:' class='btn btn-sm bg-danger-light'>
                        <i class='fa fa-eye-slash' aria-hidden='true'></i> Sala Cerrada  </a>
                        ";
                        }else {

                        $nuevafecha_init = strtotime ( '- 5 minutes' , strtotime ( $fecha_hora ) );
                        $hora_actual_f = date("h:i A", $nuevafecha_init);
                        $hora_actual = date("h:i A");
                        $nuevafecha_end = strtotime ($hora_actual);
 
                        if($nuevafecha_end  >=  $nuevafecha_init ){
                        echo " <a href='lobby-".$cod_consulta."' onclick='' class='btn btn-sm bg-info-light'>
                        <i class='far fa-eye'></i> Sala Abierta  </a>
                        
                        ";
                        }else {
                        echo " <a href='javascript:' onclick='' class='btn btn-sm bg-warning-light'>
                        <i class='far fa-eye-slash'></i> Sala en Espera </a>
                        ";
                        }
                        }

                        break;

                        case 'presencial':
                        echo "
                        <a href='factura-".$cod_consulta."' target='_blank' class='btn btn-sm bg-info-light'>
                        <i class='fas fa-print'></i> Imprimir </a>";
                        break;


                        }

                        echo ' 
                    </div>
                </td>
                </tr>
                </tbody>
            </table>
         </div> 
';


 


?>