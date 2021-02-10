<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php';

$nombre_doc = $_POST['nombre_doc'];
$correo_doc = $_POST['email_doc'];
$especialidad_doc = $_POST['especialidad'];
$pass_doc = md5($_POST['pass_doc']);
$rol_doc = "1";
$foto_doc = "1.jpg";
$estado_doc = 0;
date_default_timezone_set('America/Lima');
setlocale(LC_TIME, 'es_ES.UTF-8');
setlocale(LC_TIME, 'spanish');       
$last_login_doc = date('l jS F Y h:i:s A');

if (!$correo_doc == "" && !$pass_doc == "" &&  !$nombre_doc == "" &&  !$foto_doc == ""  && !$especialidad_doc == "" && !$rol_doc == "" && !$last_login_doc == "") {
     
    $BuscaAfil = ejecutarSQL::consultar("select * from medicos where correo='$correo_doc' ");
   
    $AfilC = mysqli_num_rows($BuscaAfil);
         
        if ($AfilC > 0 ) {
            echo '<script> alert("Este correo ya esta registrado"); 	window.location = "../registroDoc"; </script>';
        }
         
        else {

            $regAfil = consultasSQL::InsertSQL("medicos", "nombre_completo, correo, pass, last_login, rol, estado", "'$nombre_doc', '$correo_doc', '$pass_doc', '$last_login_doc', '$rol_doc', '$estado_doc' "); 
            $regPerfil = consultasSQL::InsertSQL("perfil", "correo, documento, foto, telefono, num_colegiatura, especialidad, servicios, titulo, universidad, años, ubicacion, sobre_mi, nombre_clinica, direccion_clinica, precio_consulta", "'$correo_doc', '', '$foto_doc', '',  NULL, '$especialidad_doc', '', '', '', '', '', '', '', '', ''"); 



            $verAfil = ejecutarSQL::consultar("SELECT `medicos`.*, `medicos`.`correo`, `medicos`.`pass` FROM `medicos` WHERE `medicos`.`correo` = '$correo_doc' AND `medicos`.`pass` = '$pass_doc';");
    
            while($datos_usuario=mysqli_fetch_assoc($verAfil)){
               
                $nombre=$datos_usuario['nombre_completo'];
                $correo=$datos_usuario['correo'];
                $rol=$datos_usuario['rol'];
                $estado=$datos_usuario['estado']; 
                $last_login=$datos_usuario['last_login'];

                $_SESSION["iniciarSesion"] = "ok";
                
                $_SESSION['nombre'] = $nombre;
                $_SESSION['correo'] = $correo;
                $_SESSION["rol"] = $rol;
                $_SESSION['estado'] = $estado;
                $_SESSION['last_login'] = $last_login;
            } 
            
           
            if (isset($_GET['code'])){ 
                echo '<script> 	window.location = "../inicio"; </script>';
            }else{
                echo '<script> 	window.location = "inicio"; </script>';
            }
            
        }
    } else {
    echo '<script> alert("Campos Vacios"); 	window.location = "registroDoc"; </script>';
}