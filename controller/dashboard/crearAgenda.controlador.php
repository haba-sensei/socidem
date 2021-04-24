<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 
$token = $codigo_referido_;
$horario_init = $_POST['horario_init'];  
$horario_end = $_POST['horario_end']; 
$horario_rango = $_POST['rango_gen']; 
$dia = $_POST['dia_name'];
$separado_por_comas = implode(",", $dia);
$tipo = $_POST['tipoCita'];
  
$verAgendaMedica = ejecutarSQL::consultar("SELECT `agenda_medica`.`agenda`, `agenda_medica`.`cod_medico`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$token'");

while($datos_agenda_medica=mysqli_fetch_assoc($verAgendaMedica)){

    $objAgenda=$datos_agenda_medica['agenda'];
    
    $agenda_full = json_decode($objAgenda, true); 
    

    foreach ($agenda_full as $key => $entry) {   
       

        if ($entry['dia'] == $separado_por_comas) { 

            unset($agenda_full[$key]); 
             
         } 
       


    }  

    $valor = json_encode( $agenda_full );
    

        if($_POST['horario_end'] == NULL){

            echo "vacio"; 
        }else{
          echo "ok"; 
          $nuevo_ID = $entry['id'];  
          $count_horarios = count($horario_init);

          for ($i=0; $i < $count_horarios; $i++) {  
                         
                    $fecha1 = new DateTime($horario_init[$i]);//fecha inicial
                    $fecha2 = new DateTime($horario_end[$i]);//fecha de cierre

                    $intervalo = $fecha1->diff($fecha2);  

                    $minutes += $intervalo->h * 60;
                    $minutes += $intervalo->i; 

                    $rango_dividido_horario = $minutes / $horario_rango; 
                    
                    $nuevaHora_init = strtotime($horario_init[$i]);

                    $saltos = 0;

                    for ($j=0; $j < $rango_dividido_horario; $j++) { 

                         $nuevaHora_format = strtotime('+'.$saltos.' minutes', $nuevaHora_init); 
                         $nuevaHora_saltos = date('H:i', $nuevaHora_format); 
                         
                         if($nuevaHora_saltos < $horario_end[$i]){ 

                              $nuevo_ID = $nuevo_ID + 1; 

                              $arreglo_horas[] = array(
                                   'id' =>  $nuevo_ID,
                                   'token' =>  $token, 
                                   'name' =>  $nuevaHora_saltos,
                                   'dia' =>  $separado_por_comas,
                                   'startHour' =>  $nuevaHora_saltos,
                                   'endHour' =>  $horario_end[$i],
                                   'time' =>  $horario_rango,
                                   'customClass' =>  'blueClass', 
                                   'estado' =>  'libre',
                                   'tipo' =>  $tipo[$i] 
                               );    
                             
                         }
                         
                         $saltos_sum = $saltos += $horario_rango; 
                         
                    }
                   

          } 
                 
            $resultado =  array_merge($agenda_full, $arreglo_horas);
            $insertar_data = json_encode($resultado, JSON_UNESCAPED_UNICODE);
            consultasSQL::UpdateSQL("agenda_medica", "agenda='$insertar_data'", "cod_medico='$token'");
}     
 
}