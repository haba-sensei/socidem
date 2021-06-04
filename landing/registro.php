<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php'; 
require '../vendor/autoload.php';

$valor_documento = $_POST['documento'];
$valor_email = $_POST['email'];
$valor_razon = $_POST['razon'];
$valor_cci = $_POST['cci']; 
  
$verReferido = ejecutarSQL::consultar("SELECT `referidos_externos`.*, `referidos_externos`.`documento` FROM `referidos_externos` WHERE `referidos_externos`.`documento` = '$valor_documento';");

$count = mysqli_num_rows($verReferido);
 
if($count == 0){ 

    $valor_codigo = generate_string($valor_documento, 8); 

    $varInsert = consultasSQL::InsertSQL("referidos_externos", 
                                        "documento, 
                                        codigo,
                                        correo, 
                                        razon, 
                                        cci, 
                                        status", 
                                        "'$valor_documento', 
                                        '$valor_codigo', 
                                        '$valor_email', 
                                        '$valor_razon', 
                                        '$valor_cci ', '1'"); 


    $varInsert = consultasSQL::InsertSQL("codigos_promo", 
    "codigo, 
    tipo,
    cantidad, 
    porcentaje,  
    status", 
    "'$valor_codigo', 
    'externo', 
    '0', 
    '20',
    '0'
    "); 

    $subject = "Codigo de Referido: Medicos en Directo";
        
	include 'plantillaCorreo.php';
	$mail = new PHPMailer(true);
	try {
		                    
		$mail->isSMTP();                                            
		$mail->Host       = 'mail.stampiza2.com';                 
		$mail->SMTPAuth   = true;                                 
		$mail->Username = "medicos@stampiza2.com";  
        $mail->Password = "V&rdmTt0uDp^";                          
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
		$mail->Port       = 587;                                    
	
		//Recipients
		$mail->setFrom('haba@stampiza2.com', 'Medicos En Directo ');
		$mail->addAddress($valor_email, 'Externo');      
		 
	 
		//Content
		$mail->isHTML(true);                                   
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AltBody = "Enviado desde Medicos en Directo.";
	
		$mail->send();
        echo "Registro Exitoso";
	} catch (Exception $e) {
		echo "El Correo no fue enviado. Error interno";
	}
    
   
}else {
    echo "Disculpe estos datos ya se encuentran registrados";
}



?>