<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 
 
$id_cod_medico = $_POST['id'];
 
$verAgendaMedica = ejecutarSQL::consultar("SELECT `agenda_medica`.`agenda`, `agenda_medica`.`cod_medico`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$id_cod_medico';");

while($datos_agenda_medica=mysqli_fetch_assoc($verAgendaMedica)){
    
    $objAgenda=$datos_agenda_medica['agenda'];
     
    $agenda_full = json_decode($objAgenda, true); 
     
    
    
}    
 

