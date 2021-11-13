<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php';
require_once '../vendor/autoload.php';
require_once '../model/credencialesLog.php';
use PHPMailer\PHPMailer\PHPMailer;

$correo = $_POST['correo-forgot'];

 

$verMed = ejecutarSQL::consultar("SELECT `medicos`.`correo`
FROM `medicos`
WHERE `medicos`.`correo` = '$correo'");

$verPaciente = ejecutarSQL::consultar("SELECT `pacientes`.`correo`
FROM `pacientes`
WHERE `pacientes`.`correo` = '$correo'");

$countMed = mysqli_num_rows($verMed);
$countPac = mysqli_num_rows($verPaciente);

$valor_codigo = generate_string(md5(time()), 8);

if ($countMed == 1) { 

    $new_pass = md5($valor_codigo);
    consultasSQL::UpdateSQL("medicos", "correo='$correo', pass='$new_pass' ", "correo='$correo'");

    include 'plantillaCorreoFP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mail.medicosendirecto.com';
        $mail->SMTPAuth = true;
        $mail->Username = "not_reply@medicosendirecto.com";
        $mail->Password = "=8G%3)^-P+&4";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('not_reply@medicosendirecto.com', 'Medicos En Directo ');
        $mail->addAddress($correo, 'Externo');

        //Content
        $mail->isHTML(true);
        $mail->Subject = "Confirmacion de mail ";
        $mail->Body = $body;
        $mail->AltBody = "Enviado desde Medicos en Directo.";

        $mail->send();

    } catch (Exception $e) {

    }
    echo '<script> 	window.location = "../loginMed"; </script>';

} elseif ($countPac == 1) {

    $new_pass = md5($valor_codigo);

    consultasSQL::UpdateSQL("pacientes", "correo='$correo', pass='$new_pass' ", "correo='$correo'");

    include 'plantillaCorreoFP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mail.medicosendirecto.com';
        $mail->SMTPAuth = true;
        $mail->Username = "not_reply@medicosendirecto.com";
        $mail->Password = "=8G%3)^-P+&4";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('not_reply@medicosendirecto.com', 'Medicos En Directo ');
        $mail->addAddress($correo, 'Externo');

        //Content
        $mail->isHTML(true);
        $mail->Subject = "Confirmacion de mail ";
        $mail->Body = $body;
        $mail->AltBody = "Enviado desde Medicos en Directo.";

        $mail->send();

    } catch (Exception $e) {

    }  
}else {
    echo "<script> alert('Correo Invalido') </script>";
    echo "<script> window.location = '../passForgot'; </script>";
}

echo "<script> window.location = '../resetPassMessage'; </script>";

