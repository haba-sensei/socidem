<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php';
require_once '../vendor/autoload.php';
require_once '../model/credencialesReg.php';

if (isset($_GET['code'])){
    
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    
  
    $name_test =  $google_account_info->name;
    $nombre = $name_test;
    $correo =  $google_account_info->email;
    $tel = "----";
    $pass =  md5($correo);
    

}else {

    $nombre = $_POST['nombre-reg'];
    $correo = $_POST['correo-reg'];
    $tel = $_POST['tel-reg'];
    $pass = md5($_POST['pass-reg']);
    
      

} 
$rol= "2";
$estado= 1;
date_default_timezone_set('America/Lima');
setlocale(LC_TIME, 'es_ES.UTF-8');
setlocale(LC_TIME, 'spanish');       
$last_login = date('l jS F Y h:i:s A');

if (!$correo == "" && !$pass == "" &&  !$nombre == ""  && !$tel == "" && !$rol == "" && !$last_login == "") {
     
    $BuscaAfil = ejecutarSQL::consultar("select * from pacientes where correo='$correo' ");
   
    $AfilC = mysqli_num_rows($BuscaAfil);
         
        if ($AfilC > 0 ) {
            echo '<script> alert("Este correo ya esta registrado"); 	window.location = "../registro"; </script>';
        }
         
        else {

           

            $regAfil = consultasSQL::InsertSQL("pacientes", "correo, pass, nombre, telefono, rol, last_login, estado", "'$correo', '$pass', '$nombre', '$tel', '$rol', '$last_login', '$estado' "); 
            
            $correo_md5 = md5($correo);
            $regHistorial = consultasSQL::InsertSQL("historial_medico", "correo, historia_clinica, analisis_lab, img_digitales, recetas_med", "'$correo_md5', '[]', '[]', '[]', '[]' "); 


            $verAfil = ejecutarSQL::consultar("SELECT `pacientes`.*, `pacientes`.`correo`, `pacientes`.`pass` FROM `pacientes` WHERE `pacientes`.`correo` = '$correo' AND `pacientes`.`pass` = '$pass';");
    
            while($datos_usuario=mysqli_fetch_assoc($verAfil)){
                $id_usuario=$datos_usuario['id'];
                $nombre=$datos_usuario['nombre'];
                $correo=$datos_usuario['correo'];
                $rol=$datos_usuario['rol'];
                $telefono=$datos_usuario['telefono'];
                $estado=$datos_usuario['estado']; 
                $last_login=$datos_usuario['last_login'];

                $_SESSION["iniciarSesion"] = "ok";
                $_SESSION['id'] = $id_usuario;
                $_SESSION['nombre'] = $nombre;
                $_SESSION['correo'] = $correo;
                $_SESSION["rol"] = $rol;
                $_SESSION['telefono'] = $telefono;
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
    echo '<script> alert("Campos Vacios"); 	window.location = "registro"; </script>';
}