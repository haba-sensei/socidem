<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 
$token = $codigo_referido_;

 
 

$verAgendaMedica = ejecutarSQL::consultar("SELECT `agenda_medica`.`agenda`, `agenda_medica`.`cod_medico`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$token'");

while($datos_agenda_medica=mysqli_fetch_assoc($verAgendaMedica)){

    $objAgenda=$datos_agenda_medica['agenda'];
    
    $agenda_full = json_decode($objAgenda, true); 
    

    foreach ($agenda_full as $key => $entry) { 
        
    } 
     
            $hora = $_POST['horario'];

            $agenda_carga = json_encode($hora, true); 

            $nuevo_ID = $entry['id'];
            foreach ($hora as $key => $obj_horario) { 

            $words = explode('-', $obj_horario);
                $tipo = $_POST['tipo']; 
                $nuevo_ID = $nuevo_ID + 1;
                
                $nueva_agenda[] = array(
                    'id' =>  $nuevo_ID,
                    'token' =>  $token,
                    'agenda' => md5(uniqid(rand(), true)),
                    'name' =>  $words[2],
                    'startDate' =>  $words[1],
                    'customClass' =>  'blueClass',
                    'title' =>  $words[2],
                    'estado' =>  'libre',
                    'tipo' =>  $tipo,
                    'precio' => '' 
                ); 
                
                
                
            } 

            
 
        $resultado =  array_merge($agenda_full, $nueva_agenda);
        $insertar_data = json_encode($resultado, JSON_UNESCAPED_UNICODE);
            
        echo "ok";
        consultasSQL::UpdateSQL("agenda_medica", "agenda='$insertar_data'", "cod_medico='$token'");
           
}     
 
  