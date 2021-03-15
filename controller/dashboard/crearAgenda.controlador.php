<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
// header('Content-Type: application/json'); 

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$token = $codigo_referido_;
$tipo = $_POST['tipo'];
 



$verAgendaMedica = ejecutarSQL::consultar("SELECT `agenda_medica`.`agenda`, `agenda_medica`.`cod_medico`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$token'");

while($datos_agenda_medica=mysqli_fetch_assoc($verAgendaMedica)){

    $objAgenda=$datos_agenda_medica['agenda'];
    
    $agenda_full = json_decode($objAgenda, true); 
    

    foreach ($agenda_full as $key => $entry) { 
        
    } 
     $nuevo_ID = $entry['id'] + 1;

        $nueva_agenda = array(
            'id' =>  $nuevo_ID,
            'token' =>  $token,
            'name' =>  $hora,
            'startDate' =>  $fecha,
            'customClass' =>  'blueClass',
            'title' =>  $hora,
            'estado' =>  'libre',
            'tipo' =>  $tipo,
            'precio' => '' 
        ); 

        $resultado =  array_merge($agenda_full, array($nueva_agenda));
        $insertar_data = json_encode($resultado, JSON_UNESCAPED_UNICODE);
 
       consultasSQL::UpdateSQL("agenda_medica", "agenda='$insertar_data'", "cod_medico='$token'");
     
}     
 
  