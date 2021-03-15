<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';

$especialidad = $_POST['especialidad'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$correo_old = $correo_;
$documento = $_POST['documento'];
$num_colegiatura = $_POST['num_colegiatura'];
$telefono = $_POST['telefono'];
$ubicacion = $_POST['ubicacion'];
$sobre_mi = $_POST['sobre_mi'];
$nombre_clinica = $_POST['nombre_clinica'];
$direccion_clinica = $_POST['direccion_clinica'];
$precio_consulta = $_POST['precio_consulta_presencial'];
$precio_consulta_online = $_POST['precio_consulta_online'];
$services = $_POST['services'];
$titulo = $_POST['titulo'];
$universidad = $_POST['universidad'];
$años = $_POST['anio_exp'];

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
    $foto_vacia = 1;
 }
 

 
  
if (!$correo == "" && !$especialidad == "" && !$nombre == "" && !$documento == "" && !$num_colegiatura == "" && !$telefono == "" && !$ubicacion == "" && !$sobre_mi == "" && !$nombre_clinica == ""  ) {
     
    $BuscaAfil = ejecutarSQL::consultar("select * from medicos where correo='$correo' ");
   
    $AfilC = mysqli_num_rows($BuscaAfil);
         
        if ($AfilC == 1 && $correo == $correo_old) {

             
            consultasSQL::UpdateSQL("medicos", "
            correo='$correo', 
            nombre_completo='$nombre',
            estado='1'
            ",
            "correo='$correo'");

            consultasSQL::UpdateSQL("perfil", "
            correo='$correo',
            documento='$documento',
            foto='$foto',
            telefono='$telefono',
            num_colegiatura='$num_colegiatura',
            especialidad='$especialidad',
            servicios='$services',
            titulo='$titulo',
            universidad='$universidad',
            años='$años',
            ubicacion='$ubicacion',
            sobre_mi='$sobre_mi',
            nombre_clinica='$nombre_clinica',
            direccion_clinica='$direccion_clinica',
            precio_consulta='$precio_consulta',
            precio_online='$precio_consulta_online'
            ",
            "correo='$correo'");

            session_reset(); 
            $_SESSION["correo"] = $correo;  
            $_SESSION["nombre"] = $nombre;
            $_SESSION["foto"] = $foto;
            $_SESSION["especialidad"] = $especialidad;
            $_SESSION["codigo_referido"] =  $codigo_referido_;
            $_SESSION["num_colegiatura"] = $num_colegiatura;
            $_SESSION["estado"] = 1;
            echo ' <script> window.location = "dashboard";  </script>';
           
        }elseif ($AfilC == 0 && $correo !== $correo_old) {

           
            
            consultasSQL::UpdateSQL("medicos", "
            correo='$correo', 
            nombre_completo='$nombre',
            estado='1'
            ",
            "correo='$correo_'");

            consultasSQL::UpdateSQL("perfil", "
            correo='$correo',
            documento='$documento',
            foto='$foto',
            telefono='$telefono',
            num_colegiatura='$num_colegiatura',
            especialidad='$especialidad',
            servicios='$services',
            titulo='$titulo', 
            universidad='$universidad',
            años='$años',
            ubicacion='$ubicacion',
            sobre_mi='$sobre_mi',
            nombre_clinica='$nombre_clinica',
            direccion_clinica='$direccion_clinica',
            precio_consulta='$precio_consulta',
            precio_online='$precio_consulta_online'
            ",
            "correo='$correo_'");
 

            session_reset(); 
            $_SESSION["correo"] = $correo;  
            $_SESSION["nombre"] = $nombre;
            $_SESSION["foto"] = $foto;
            $_SESSION["codigo_referido"] =  $codigo_referido_;
            $_SESSION["especialidad"] = $especialidad;
            $_SESSION["num_colegiatura"] = $num_colegiatura;
            $_SESSION["estado"] = 1; 

           
              
            echo '<script> 	window.location = "dashboard"; </script>';
           
                  
        }
         
        else {
                    echo "Este correo ya se encuentra registrado ";        
            
        }
    } else {
    echo 'Campos Vacios';
}