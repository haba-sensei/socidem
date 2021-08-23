<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';

$especialidad = $_POST['especialidad'];
 
$correo_old = $correo_;
 
$num_colegiatura = $_POST['num_colegiatura'];
$otros_num_colegiatura = $_POST['otros_nro_colegiatura'];
$otras_especialidades = $_POST['otras_especialidades'];
$telefono = $_POST['telefono'];
$ubicacion = $_POST['ubicacion'];
$sobre_mi = $_POST['sobre_mi'];
$idiomas = $_POST['idiomas'];
$nombre_clinica = $_POST['nombre_clinica'];
$direccion_clinica = $_POST['direccion_clinica'];
$precio_consulta = $_POST['precio_consulta'];
$precio_consulta_online = $_POST['precio_online'];
$services = $_POST['services'];
$titulo = $_POST['titulo'];
$universidad = $_POST['universidad'];
$años = $_POST['anio_exp'];

$check_tel_format = $_POST['check_tel'];

if($check_tel_format == "on"){
   $check_tel = 1;
}else {
   $check_tel = 0;
}

$check_correo_format = $_POST['check_correo'];

if($check_correo_format == "on"){
   $check_correo = 1;
}else {
   $check_correo = 0;
}

$img =  $_FILES['foto']['name'];

 


if( strlen($img) > 0){
    $errors= array();
    $foto= date('dmYHis').str_replace(" ", "", basename($_FILES['foto']['name']));
    $file_name = $_FILES['foto']['name'];
    $file_size =$_FILES['foto']['size'];
    $file_tmp =$_FILES['foto']['tmp_name'];
    $file_type=$_FILES['foto']['type'];
    
    
    $extensions= array("jpeg","jpg","png");
    
    if(($extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"../../views/assets/images/medicos/".$foto);
       
    }else{
       echo ($errors);
    }
 }else {
    $foto = "";
 } 
    $BuscaAfil = ejecutarSQL::consultar("select * from medicos where correo='$correo_' ");
   
    $AfilC = mysqli_num_rows($BuscaAfil);
         
 

        if ($AfilC == 1) {
            consultasSQL::UpdateSQL("medicos", "estado='1'", "correo='$correo_'");
            consultasSQL::UpdateSQL("secretarias", "estado='1'", "cod_med='$codigo_referido_'");
            if(strlen($img) > 0){

               consultasSQL::UpdateSQL("perfil", " 
               foto='$foto',
               telefono='$telefono',
               num_colegiatura='$num_colegiatura',
               especialidad='$especialidad',
               otros_nro_colegiatura='$otros_num_colegiatura',
               otras_especialidades='$otras_especialidades',
               servicios='$services',
               titulo='$titulo',
               universidad='$universidad',
               años='$años',
               ubicacion='$ubicacion',
               sobre_mi='$sobre_mi',
               idiomas='$idiomas',
               nombre_clinica='$nombre_clinica',
               direccion_clinica='$direccion_clinica',
               precio_consulta='$precio_consulta',
               precio_online='$precio_consulta_online',
               check_tel='$check_tel',
               check_correo='$check_correo'
               ",
               "correo='$correo_'");
               
               session_reset();  
               $_SESSION["foto"] = $foto;
               $_SESSION["especialidad"] = $especialidad;
               $_SESSION["ubicacion"] = $ubicacion;
               $_SESSION["codigo_referido"] =  $codigo_referido_;
               $_SESSION["num_colegiatura"] = $num_colegiatura;
               $_SESSION["estado"] = 1;

            }else {
               consultasSQL::UpdateSQL("perfil", "  
               telefono='$telefono',
               num_colegiatura='$num_colegiatura',
               especialidad='$especialidad',
               otros_nro_colegiatura='$otros_num_colegiatura',
               otras_especialidades='$otras_especialidades',
               servicios='$services',
               titulo='$titulo',
               universidad='$universidad',
               años='$años',
               ubicacion='$ubicacion',
               sobre_mi='$sobre_mi',
               idiomas='$idiomas',
               nombre_clinica='$nombre_clinica',
               direccion_clinica='$direccion_clinica',
               precio_consulta='$precio_consulta',
               precio_online='$precio_consulta_online',
               check_tel='$check_tel',
               check_correo='$check_correo'
               ",
               "correo='$correo_'");

               session_reset();   
               $_SESSION["especialidad"] = $especialidad;
               $_SESSION["ubicacion"] = $ubicacion;
               $_SESSION["codigo_referido"] =  $codigo_referido_;
               $_SESSION["num_colegiatura"] = $num_colegiatura;
               $_SESSION["estado"] = 1;
            }
           

          
            echo ' <script> window.location = "referidos";  </script>';
           
        } 
         
        else {
                    echo "Este correo ya se encuentra registrado ";        
            
        }
   