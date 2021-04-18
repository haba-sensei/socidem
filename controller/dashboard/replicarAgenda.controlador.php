<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 
$token = $codigo_referido_;
$horario_final = $_POST['horario_final'];  
$horario_inicial = $_POST['horario_name']; 
$horario_time = $_POST['rango']; 
$dia = $_POST['dia_name'];

$dia_array = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$separado_por_comas = implode(",", $dia);
$tipo = $_POST['tipoCita'];
 
$verAgendaMedica = ejecutarSQL::consultar("SELECT `agenda_medica`.`agenda`, `agenda_medica`.`cod_medico`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$token'");

while($datos_agenda_medica=mysqli_fetch_assoc($verAgendaMedica)){

    $objAgenda=$datos_agenda_medica['agenda'];
    
    $agenda_full = json_decode($objAgenda, true); 
    

    foreach ($agenda_full as $key => $entry) {   
            unset($agenda_full[$key]);   
    }  

    $valor = json_encode( $agenda_full );
    

        if($_POST['horario_final'] == NULL){

            echo "vacio"; 
        }else{
             echo "ok"; 
                $nuevo_ID = $entry['id']; 
                $array_num = count($horario_final); 

                for ($i = 0; $i < $array_num; ++$i){

                    $nuevo_ID = $nuevo_ID + 1; 

                         $arreglo_horas[] = array(
                             'id' =>  $nuevo_ID,
                             'token' =>  $token, 
                             'name' =>  $horario_inicial[$i],
                             'dia' =>  $separado_por_comas,
                             'startHour' =>  $horario_inicial[$i],
                             'endHour' =>  $horario_final[$i],
                             'time' =>  $horario_time[$i],
                             'customClass' =>  'blueClass', 
                             'estado' =>  'libre',
                             'tipo' =>  $tipo[$i] 
                         );   

                }  
 
               

                 
            $resultado =  array_merge($agenda_full, $arreglo_horas);
            
            $id_count = 0;
                foreach ($dia_array as $key1 ) {
                 
                   

            foreach ($resultado as $key2 => $val) {
                
                $id_count = $id_count + 1;
                

                $arreglo_replica[] = array(
                    'id' =>  $id_count,
                    'token' =>  $token, 
                    'name' =>  $val['startHour'],
                    'dia' =>  $key1,
                    'startHour' =>  $val['startHour'],
                    'endHour' =>  $val['endHour'],
                    'time' =>  $val['time'],
                    'customClass' =>  'blueClass', 
                    'estado' =>  'libre',
                    'tipo' =>  $val['tipo'] 
                );   


            }
    
        }

           
               $resultado =  array_merge($agenda_full, $arreglo_replica);
               $insertar_data = json_encode($resultado, JSON_UNESCAPED_UNICODE);
              
                consultasSQL::UpdateSQL("agenda_medica", "agenda='$insertar_data'", "cod_medico='$token'");
}     
 
}