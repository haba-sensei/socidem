<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
date_default_timezone_set('America/Lima'); 
setlocale(LC_TIME, 'es_ES');
setlocale(LC_TIME, 'spanish'); 
// header('Content-Type: application/json'); 

  $fecha = $_POST['fecha'];
  $id = $_POST['id'];
  $token = $codigo_referido_; 
  $nuevafecha_init = strtotime('+0 day', strtotime($fecha) );
  $fecha_actual_f = date("d/m/Y", $nuevafecha_init); 

  $new_vaina = strftime("%A %d %B", strtotime($fecha));
 
  $date_1 = utf8_encode($new_vaina);
 

 echo '
 
 <div class="row" id="box_cuerpo-'.$id.'" style="background:#ececec; border-radius: 10px; margin-top: 32px; width: 90%;">
        
       
    <div class="col-md-12" style="padding-top: 12px; ">
     <label for="selectall-'.$id.'" style="position: absolute; right: 31px; top: 18px;" onclick="selectall(&quot;'.$id.'&quot;)"> Select All  <input type="checkbox" id="selectall-'.$id.'">  </label>
        <strong>Horarios Disponibles</strong><br>
        <strong>'. $date_1.' </strong>
        
    </div>
     ';
     
     $verAgendaMedica = ejecutarSQL::consultar("SELECT `agenda_medica`.`agenda`, `agenda_medica`.`cod_medico`, `agenda_medica`.`estado` FROM `agenda_medica` WHERE `agenda_medica`.`cod_medico` = '$token'");

    while($datos_agenda_medica=mysqli_fetch_assoc($verAgendaMedica)){

        $objAgenda=$datos_agenda_medica['agenda'];
        
        $agenda_full = json_decode($objAgenda, true); 
        
        $count = 0;
        $date_init = "04:30 AM";
        $nuevaHora_init = strtotime('0 minutes', strtotime($date_init) );
        $hora_actual_f = date("h:i A", $nuevaHora_init); 
        
        for ($i=0; $i < 38; $i++) { 

          $nuevaHora_init = strtotime('+30 minutes', strtotime($hora_actual_f) );
          $hora_actual_f = date("h:i A", $nuevaHora_init);  

          $agenda_libre_carga[] = array(
            'name' =>  $hora_actual_f,
            'startDate' =>  $fecha_actual_f,
          );
        }

        foreach ($agenda_full as $key => $value) {
          
          if($value['startDate'] == $fecha_actual_f ){

            $agenda_full_carga[] = array(
              'name' =>  $value['name'],
              'startDate' =>  $value['startDate'],
            ); 

          } 

         }  
        if($agenda_full_carga == NULL){
          $zones_array3[] = NULL;
        }else { 
          foreach ($agenda_full_carga as $arr1){
            $check_array[] = $arr1['name'];
        } 
        } 

      foreach ($agenda_libre_carga as $arr2){ 
        if($check_array == NULL){ 

        }else {

          if (!in_array($arr2['name'], $check_array))
          {
            $zones_array3[] = $arr2; 
          }  
          
        } 
      }

      if($zones_array3 !== NULL){
        foreach ( $zones_array3  as $key => $value) {
          
          $count = $count + 1; 
          if($value['name'] !== NULL){
  
            $nuevaHora_row = strtotime('+30 minutes', strtotime($value['name']) );
            $hora_row_new = date("h:i A", $nuevaHora_row); 
            // background-color: #42c0fb; border: 1px solid #42c0fb; color: #fff; 
            echo'
            <div class="col-md-4 " style="padding-top: 12px;     text-align: left; ">
            <input type="checkbox" class="horario-'.$id.'" name="horario[]" value="'.$id.'-'.$value['startDate'].'-'.$value['name'].'"  id="date_'.$count.'_'.$id.'"> 
            <label for="date_'.$count.'_'.$id.'">'.$value['name'].' a '.$hora_row_new.'</label>
            </div>
            '; 
          }
            
          
  
         } 
      }else {
        echo '
        
        <div class="error-box ">
         
        <h3 class="mb-3 h2"><i class="fa fa-check"></i> Horarios no Disponibles </h3>
        <br>
        <p class="h4 font-weight-normal">Todos los horarios estan registrados.</p>
         
        </div>
        
        ';
      }

       
      echo "</div>";  

    }
    


 