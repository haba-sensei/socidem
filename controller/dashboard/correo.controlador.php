<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; 

$id_codigo_agenda = $_POST['id'];

$verAgenda = ejecutarSQL::consultar("SELECT `agenda`.`cod_consulta`, `agenda`.`estado`, `agenda`.`fecha_start`, `agenda`.`fecha_end`, `agenda`.`paciente` FROM `agenda` WHERE `agenda`.`cod_consulta` = '$id_codigo_agenda'");

while($datos_agenda_paciente=mysqli_fetch_assoc($verAgenda)){
    $objPaciente=$datos_agenda_paciente['paciente'];
	$estado_cita_dato =$datos_agenda_paciente['estado'];

	$fecha_start_dato =$datos_agenda_paciente['fecha_start'];
	$fecha_end_dato =$datos_agenda_paciente['fecha_end'];
    
    $paciente = json_decode($objPaciente, true); 
    $var_nombre = $paciente['nombre_paciente'];
    $var_apellido = $paciente['apellido_paciente'];
    $var_email = $paciente['email_paciente'];
    $var_telefono = $paciente['telefono_paciente'];
    $var_detalle = $paciente['detalles_paciente'];
} 


switch ($estado_cita_dato) {
	case 1:
		$estado_cita = "PROCESADO";
	break;

	case 2:
		$estado_cita = "APROBADO";
	break;
	case 3:
		$estado_cita = "RE ASIGNADO";
	break;
}

$nombre_paciente =  $var_nombre." ".$var_apellido; 
$correo_paciente = $var_email;
$url_cita = "https://medicos.stampiza2.com/lobby-".$id_codigo_agenda;
$medico_cita = "nombre_test_medico";

$fechaEntera = strtotime($fecha_start_dato);
    $fecha_anual_format = date("Y/m/d", $fechaEntera);
    $fecha_init = strtotime($fecha_start_dato);
    $fecha_fin = strtotime($fecha_end_dato);

    $init = date("g:ia", $fecha_init);
    $end = date("g:ia", $fecha_fin);


$fecha_hora = $fecha_anual_format." ".$init." - ".$end;

 


	$subject = "Estado de su Cita: ".$estado_cita;
        
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