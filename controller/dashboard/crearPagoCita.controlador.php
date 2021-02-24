<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';


    $respuesta = array(
        'Payment' => $_GET['payment_id'],
        'Status' => $_GET['status'],
        'MerchantOrder' => $_GET['merchant_order_id']        
    ); 

 
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_URL, 'https://api.mercadopago.com/v1/payments/'.$respuesta['Payment']);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
   
   
   $headers = array();
   $headers[] = 'Authorization: Bearer TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826';
   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   
   $result = curl_exec($ch);

   if (curl_errno($ch)) {
       echo 'Error:' . curl_error($ch);
   }
   
   curl_close($ch);

$nombre_paciente_p = $_SESSION['nombre_']; 
$apellido_paciente_p = $_SESSION['apellido_']; 
$email_paciente_p = $_SESSION['email_']; 
$telefono_paciente_p = $_SESSION['telefono_']; 
$detalles_paciente_p = $_SESSION['detalles_']; 

$estado = 1;
$cod_id_json_cita = $_SESSION['valor'];
$cod_medico = $_SESSION['secur'];
$tipo_cita  = $_SESSION['opcion'];
$precio_consulta = $_SESSION['precio_consulta'];
$fecha_init = $_SESSION['fecha_start'];
$fecha_fin = $_SESSION['fecha_end'];
 

$paciente_array = array(
    'nombre_paciente' => $nombre_paciente_p,
    'apellido_paciente' => $apellido_paciente_p,       
    'email_paciente' => $email_paciente_p,
    'telefono_paciente' => $telefono_paciente_p,
    'detalles_paciente' => $detalles_paciente_p,
); 

$paciente_obj = (json_encode($paciente_array, true));

$obj_json =(json_decode($result, true));

$cita_array = array(
    'pagoID' => $obj_json['id'],
    'status' => $obj_json['status'],
    'status_detail' => $obj_json['status_detail'],
    'identificacion_number' => $obj_json['card']['cardholder']['identification']['number'],
    'identificacion_type' => $obj_json['card']['cardholder']['identification']['type'],
    'identificacion_nombre' => $obj_json['card']['cardholder']['name'],
    'fecha_created' => $obj_json['card']['date_created'],
    'fecha_aproved' => $obj_json['date_approved'],
    'order_number' => $obj_json['order']['id'],
    'order_type' => $obj_json['order']['type']

); 

$cita_obj = (json_encode($cita_array, true));

 
$get_pago_id = md5($obj_json['id']);

$cod_consulta  =  md5(uniqid(rand(), true));

$varInsert = consultasSQL::InsertSQL("agenda", "id, cod_medico, cod_consulta, email_usuario, nombre_room, pass_room, pagoID, precio_consulta, fecha_start, fecha_end, cita, paciente, tipo_cita, estado", "'', '$cod_medico', '$cod_consulta', '$correo_', '', '', '$get_pago_id', '$precio_consulta',  '$fecha_init', '$fecha_fin', '$cita_obj', '$paciente_obj', '$tipo_cita', '$estado'"); 

  
if ($obj_json['status'] == "approved") {
 
    $verAgendaMedica = ejecutarSQL::consultar("SELECT `agenda_medica`.`agenda`, `agenda_medica`.`cod_medico`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$cod_medico'");

    while($datos_agenda_medica=mysqli_fetch_assoc($verAgendaMedica)){
    
    $objAgenda=$datos_agenda_medica['agenda'];
     
    $agenda_full = json_decode($objAgenda, true); 
     

    foreach ($agenda_full as $key => $entry) {
        
       
        if ($entry['id'] == $cod_id_json_cita) {
             
            $agenda_full[$key]['extendedProps']['status']="agendado";
            $agenda_full[$key]['extendedProps']['status'];
            $newJsonString = json_encode($agenda_full, JSON_UNESCAPED_UNICODE);

        }

    } 
}    


    consultasSQL::UpdateSQL("agenda_medica", "agenda='$newJsonString'", "cod_medico='$cod_medico'");

    




}


header('Location: ../../checkProcess-'.$get_pago_id);
exit;
   