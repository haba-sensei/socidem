<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';


$nombre_paciente = "nombre";
$correo_paciente = "";
$url_cita = "url";
$medico_cita = "medico";
$estado_cita = "aprobado";
$fecha_hora ="123123";

 


	$subject = "Estado de su Cita: APROBADO";
        
	include 'plantillaCorreo.controler.php';
	$mail = new PHPMailer(true);
	try {
		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
		$mail->isSMTP();                                            
		$mail->Host       = 'mail.stampiza2.com';                 
		$mail->SMTPAuth   = true;                                 
		$mail->Username = "haba@stampiza2.com";  
		$mail->Password = "m3#H5!Y[vsYE";                           
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
		$mail->Port       = 587;                                    
	
		//Recipients
		$mail->setFrom('haba@stampiza2.com', 'Medicos En Directo ');
		$mail->addAddress($correo_paciente, 'Paciente');      
		 
	 
		//Content
		$mail->isHTML(true);                                   
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AltBody = "Enviado desde Medicos en Directo.";
	
		$mail->send();
		echo 'El Correo fue enviado con exito';
	} catch (Exception $e) {
		echo "El Correo no fue enviado. Mailer Error: {$mail->ErrorInfo}";
	}












	// $emailCliente="lycantroponatural@gmail.com";
	// $mail = new PHPMailer(true);
	// $mail->IsSMTP();                                     
	// $mail->Host = "mail.stampiza2.com";  
	// $mail->SMTPAuth = true;     
	// $mail->SMTPSecure = ''; 
	// $mail->Port = 25;  
	// $mail->Username = "haba@stampiza2.com";  
	// $mail->Password = "m3#H5!Y[vsYE";  
	// $mail->setFrom($emailCliente, "contacto");  
	// $mail->AddAddress($emailCliente, "Notificaciones"); 
	// $mail->WordWrap = 400;                                  
	// $mail->IsHTML(true);                                  
	// $mail->Subject = $subject;
	// $mail->Body    = $body;
	// $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
	// $mail->send();

	// echo "Enviado";