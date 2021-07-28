<?php 
use PHPMailer\PHPMailer\PHPMailer;
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php';  
require_once '../vendor/autoload.php';
date_default_timezone_set('America/Lima');
setlocale(LC_ALL,"es_ES"); 
setlocale(LC_TIME, 'spanish'); 

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

   

    $nombre_doc = $_POST['nombre_doc'];
    $ciudad_doc = $_POST['ciudad_doc'];
    $telefono_doc = $_POST['telefono_doc'];
    $num_colegiado_doc = $_POST['num_colegiado_doc'];
    $correo_doc = $_POST['email_doc'];
    $especialidad_doc = $_POST['especialidad'];
    $pass_doc = md5($_POST['pass_doc']);
    $cod_referido = generate_string($correo_doc.$nombre_doc.$pass_doc, 8);
    $rol_doc = "1";
    $foto_doc = "1.jpg";
    $estado_doc = 0;
    $time = time();
    $fecha = (($time+date('Z'))%86400 < 43200 ? 'AM' : 'PM');
    $last_login_doc_f = strftime('%A %d de %B del %Y %I:%M:%S');
    $last_login_doc = $last_login_doc_f." ".$fecha;
    

  


if (!$correo_doc == "" && !$pass_doc == "" &&  !$nombre_doc == "" &&  !$ciudad_doc == "" &&  !$num_colegiado_doc == "" &&  !$telefono_doc == "" &&  !$foto_doc == ""  && !$especialidad_doc == "" && !$rol_doc == "" && !$last_login_doc == ""  && !$cod_referido == "") {
     
    $BuscaAfil = ejecutarSQL::consultar("SELECT `medicos`.*, `medicos`.`correo`
    FROM `medicos`
    WHERE `medicos`.`correo` = '$correo_doc' ");
   
    $AfilC = mysqli_num_rows($BuscaAfil);
          
        if ($AfilC > 0 ) {
            echo '<script> alert("Este correo ya esta registrado"); 	window.location = "registroDoc"; </script>';
        }
         
        else {
            $code = md5(time());

            $regAfil = consultasSQL::InsertSQL("medicos", "nombre_completo, correo, pass, last_login, rol, estado, membresia, periodo_membresia, token_confirm, mail_confirm", "'$nombre_doc', '$correo_doc', '$pass_doc', '$last_login_doc', '$rol_doc', '$estado_doc', 'Gratuito', 0, '$code', 0"); 
            $regPerfil = consultasSQL::InsertSQL("perfil", "correo, foto, telefono, num_colegiatura, especialidad, servicios, titulo, universidad, años, ubicacion, sobre_mi, nombre_clinica, direccion_clinica, precio_consulta, codigo_referido", "'$correo_doc', '$foto_doc', '$telefono_doc', '$num_colegiado_doc', '$especialidad_doc', '', '', '', '', '$ciudad_doc', '', '', '', '', '$cod_referido'"); 
            $regCodigosPromo = consultasSQL::InsertSQL("codigos_promo", "codigo, tipo, cantidad, porcentaje, status", "'$cod_referido', 'medico', 0, 20, 0"); 
            $regAgenda = consultasSQL::InsertSQL("agenda_medica", "cod_medico, agenda, estado", "'$cod_referido', '[]', '1'"); 
            $regExepciones = consultasSQL::InsertSQL("exepciones", "cod_med, exepciones, estado", "'$cod_referido', '[]', '1'"); 
            
            
            
            $valor_codigo = "http://localhost/socidem/controller/mail_med_confirm.controlador.php?code=".$code;
            
            if (isset($_GET['code'])){ 
                echo '<script> 	window.location = "../perfilMed"; </script>';
            }else { 

            include 'plantillaCorreo.php';
            
            $mail = new PHPMailer(true);
            
            try {
                    
                $mail->isSMTP();                                            
                $mail->Host       = 'mail.insitesoluciones.com';                 
                $mail->SMTPAuth   = true;                                 
                $mail->Username = "medico@insitesoluciones.com";  
                $mail->Password = "IFUMRjx;go8L";                          
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                $mail->Port       = 587;                                    

                //Recipients
                $mail->setFrom('medico@insitesoluciones.com', 'Medicos En Directo ');
                $mail->addAddress($correo_doc, 'Externo');      


                //Content
                $mail->isHTML(true);                                   
                $mail->Subject = "Confirmacion de mail ";
                $mail->Body    = $body;
                $mail->AltBody = "Enviado desde Medicos en Directo.";

                $mail->send();
                echo "Registro Exitoso Revise su Correo";
            } catch (Exception $e) {
                echo "El Correo no fue enviado. Error interno";
            }
            
           
            }
            
        }
    } else {
    echo '<script> alert("Campos Vacios"); 	window.location = "registroDoc"; </script>';
}