<?php
session_start(); 
include '../../model/consulSQL.php';
include '../../model/sessiones.php'; 
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); 
date_default_timezone_set('America/Lima');
setlocale(LC_TIME, 'es_ES');
setlocale(LC_TIME, 'spanish');
  
    $fecha_dia = $_POST['tracking']; 
    $dia_letra = $_POST['dia_letra'];  
    $dia_con_letras = ucwords($dia_letra);
    $token = $codigo_referido_;  
    $valor_unico = md5(uniqid(rand(), true));

   $agenda_medica_horarios = ejecutarSQL::consultar("SELECT `agenda_medica`.*, `exepciones`.*, `agenda_medica`.`cod_medico`, `agenda_medica`.`cod_medico` FROM `agenda_medica` , `exepciones` WHERE `agenda_medica`.`cod_medico` = '$token' AND `agenda_medica`.`cod_medico` = `exepciones`.`cod_med`");
    
   while($dato_medico_horarios=mysqli_fetch_assoc($agenda_medica_horarios)){
   $objAgenda=$dato_medico_horarios['agenda']; 
   $agenda = json_decode($objAgenda, true); 

   $objExepciones =$dato_medico_horarios['exepciones']; 
   $exepciones = json_decode($objExepciones, true); 
   }   
 
  
  if($fecha_dia == ""){
      
  }else {
          
  foreach ($agenda as $key => $value) {
     

    if($value['dia'] == $dia_con_letras){
        
       $carga_hora = array(
         'hora_start' => $value['startHour'],
         'hora_end' => $value['endHour'],
       );
       
       $aca_cargaH[] = $carga_hora;
      
    } 
 
} 

                     echo '
                  <div id="carga_exepcion-'.$valor_unico.'" style="margin-left: 22%; margin-right: 20%; display: table; width: 70%;">

                  <div class="row" >

                  <div class="col-md-4">
                     <select class="form-control" name="startHour[]" id=""> 
                     <option value=""  selected disabled hidden>Desde</option>
                   ';
                   foreach ($aca_cargaH as $key1 => $value2) { 

                     echo '<option value="'.$value2['hora_start'].'">'.$value2['hora_start'].'</option>';
                     
                  }
                  echo '           
                     </select>
                  </div>
                  <div class="col-md-2">
                     <span class="" style="margin-left: auto; margin-right: auto; display: table; margin-top: 11px;">A</span>
                  </div>
                  <div class="col-md-4">
                  <select class="form-control" name="endHour[]" id="">   
                  <option value=""  selected disabled hidden>Hasta</option>
                  ';
                  foreach ($aca_cargaH as $key2 => $value3) { 

                     echo '<option value="'.$value3['hora_end'].'">'.$value3['hora_end'].'</option>';
                     
                  }
                  echo ' 
                   
                  </select>
                  <div class="" style="position: absolute; right: -33px; top: 8px;">
                  <button type="button" class="btn btn-sm bg-danger-light" onclick="quitarEx(&quot;'.$valor_unico.'&quot;)"><i class="fa fa-trash"></i></button>
                  </div>
                  </div>

                  </div>
                  <br>
                  </div>
                  ';

            
   }
       