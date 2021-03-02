<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
date_default_timezone_set('America/Lima');
header("Content-Type: application/json", true);

$id_ref_med = $_POST['id_ref'];

$verAgendaMed = ejecutarSQL::consultar("SELECT `agenda_medica`.`cod_medico`, `agenda_medica`.`agenda`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$id_ref_med' AND `agenda_medica`.`estado` = '1';");

while($datos_agenda_medica =mysqli_fetch_assoc($verAgendaMed)){
    
    $objAgenda = json_decode($datos_agenda_medica['agenda'], true);
 
    $results = array();

    $fecha_hoy = date('d/m/Y');
    
    foreach( $objAgenda as $key=> $val){
         
        if(strtotime($val['startDate']) >= date('d/m/Y')) {
 
            $agenda_array = array(
                'id' => $val['id'],
                'token' => $val['token'],
                'name' => $val['name'],
                'startDate' => $val['startDate'],
                'customClass' => $val['customClass'],
                'title' => $val['title'],
                'url' => $val['url'],
                'estado' => $val['estado'],
                'tipo' => $val['tipo'],
                'precio' => $val['precio']
            ); 

        }else {
            $agenda_array = array(
                'id' => '',
                'token' => '',
                'name' => '',
                'startDate' => '',
                'customClass' => '',
                'title' => '',
                'url' => '',
                'estado' => '',
                'tipo' => '',
                'precio' => ''
            );
        }
        $results[] = $agenda_array;
    }

        $indices = array_column($objAgenda, 'name'); 
        $fecha = date('Y/m/j');
        $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'd/m/Y' , $nuevafecha );

        $cita_array = array(
        'fecha_adelantada' => $nuevafecha,
        'agenda' => $results,
        'indices' => $indices,
        ); 

        $cita_obj = (json_encode($cita_array, true));

         echo $cita_obj;

}