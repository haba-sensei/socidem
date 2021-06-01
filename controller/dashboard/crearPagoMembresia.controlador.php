<?php
session_start();
// error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; 


// header('Content-Type: application/json'); 

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
//    var_dump($result);
   curl_close($ch);
    
$obj_json =(json_decode($result, true));

$membresia_array= array(
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

$membresia_obj = (json_encode($membresia_array, true));

 
 
$get_pago_id = $obj_json['id'];
$estado = $obj_json['status'];
$tipo_membresia = "Profesional";
 
 switch ($obj_json['status']) {
     case "approved":

    $varInsert = consultasSQL::InsertSQL("pagos_membresias", "pagoMembresia, token_medico, cod_pago, estado ", " '$membresia_obj', '$codigo_referido_', '$get_pago_id', '$estado' "); 
    $tiempo_membresia = $periodo_membresia_ + 12;
    
    consultasSQL::UpdateSQL("medicos", "membresia='$tipo_membresia', periodo_membresia='$tiempo_membresia' ", "correo='$correo_'");
     
    session_reset(); 
    $_SESSION["membresia"] = $tipo_membresia;  
    $_SESSION["periodo_membresia"] = $tiempo_membresia;

    break;
    case "pending":

        $varInsert = consultasSQL::InsertSQL("pagos_membresias", "pagoMembresia, token_medico, cod_pago, estado ", " '$membresia_obj', '$cod_medico', '$get_pago_id', '$estado' "); 
        // $tiempo_membresia = $periodo_membresia_ + 12;
        
        // consultasSQL::UpdateSQL("medicos", "membresia='Profesional', periodo_membresia='$tiempo_membresia' ", "correo='$correo_'");
         
 
    break;

    case "404":
        $varInsert = consultasSQL::InsertSQL("pagos_membresias", "pagoMembresia, token_medico, cod_pago, estado ", " '$membresia_obj', '$cod_medico', '$get_pago_id', '$estado' "); 
      
    break;

} 

header('Location: ../../dashboard');
exit;
   