<?php
session_start(); 
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
date_default_timezone_set('America/Lima'); 
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
setlocale(LC_TIME, 'es_ES');
setlocale(LC_TIME, 'spanish');  

  $dia = $_POST['dia'];
  $id_track = $_POST['id'];
  $token = $codigo_referido_;
  
  $agenda_medica_horarios = ejecutarSQL::consultar("SELECT `agenda_medica`.*, `agenda_medica`.`cod_medico`
  FROM `agenda_medica`
  WHERE `agenda_medica`.`cod_medico` = '$token';");
 
  while($dato_medico_horarios=mysqli_fetch_assoc($agenda_medica_horarios)){
        $objAgenda=$dato_medico_horarios['agenda']; 
        $agenda = json_decode($objAgenda, true); 

        
  } 

   $contador = mysqli_num_rows($agenda_medica_horarios);

  
  echo '
    <div  id="box_cuerpo-'.$id_track.'" style="background:#ececec; border-radius: 10px; margin-top: 32px; width: 100%;">
    <form action="" method="post" id="form_'.$id_track.'">
    
    <br> 
    <div class="row" style="margin-right: 5px;">
    
        <div class="col-md-3" style="position: relative; top: 30px;">
        <span class="">'.$dia.'</span>
        <input type="hidden" name="dia_name[]" value="'.$dia.'">
        </div>
';



foreach ($agenda as $key => $value) {
    
    $valor_unico = md5(uniqid(rand(), true));
    
    if($dia == $value['dia'] ){ 
            echo '
            <div class="row" id="row_hora_'.$valor_unico.'" style="    margin-left: 156px; margin-right: 46px; padding-bottom: 21px;">
              
                <div class="col-md-3">
                    <input type="text" name="horario_name[]" autocomplete="off" onclick="cleanRange(&quot;'.$valor_unico.'&quot;)" id="hora-'.$valor_unico.'" style="cursor: pointer;" value="'.$value['startHour'].'" class="form-control aca-'.$valor_unico.'" placeholder="Elige un Horario">
                    
                </div>

                <div class="col-md-3">
                <select class="form-control" name="rango[]" id="rango-'.$valor_unico.'" onchange="getComboA(this, &quot;'.$valor_unico.'&quot;)"  placeholder="Horario Agendado"> 
                ';
                switch ($value['time']) {
                    case 30:
                    echo ' 
                <option value="30">
                    30 Min
                </option> 
                <option value="45">
                    45 Min 
                </option>
                <option value="60">
                60 Min
                </option>
                <option value=""  disabled hidden>Duración</option>
                ';
                    break;
                    case 45:
                    echo ' 
                    <option value="45">
                    45 Min 
                </option>
                <option value="30">
                    30 Min
                </option>
                
                <option value="60">
                    60 Min
                </option>
                <option value=""  disabled hidden>Duración</option>
                ';
                    break;
                    case 60:
                    echo ' 
                    <option value="60">
                    60 Min
                </option>        
                    <option value="30">
                    30 Min
                </option>
                <option value="45">
                    45 Min 
                </option>
                <option value=""  disabled hidden>Duración</option>
                ';
                    break;
                    
                }
            echo '

                </select>
                
                </div>

                <div class="col-md-3">
                
                <input type="text" name="horario_final[]"  class="form-control" id="'.$valor_unico.'" value="'.$value['endHour'].'" readonly>
                            
                </div>  
            
                <div class="col-md-3">
                
                    <select class="form-control" name="tipoCita[]"  >
                    ';
                    switch ($value['tipo']) {

                        case 'Online':
                        echo '
                        <option value="Online">
                        Online
                        </option>
                        <option value="Presencial">
                    Presencial
                    </option>
                    <option value=""  disabled hidden>Tipo Cita</option>
                        ';
                        break;
                        case 'Presencial':
                        echo '<option value="Presencial">
                        Presencial
                        </option>
                        <option value="Online">
                        Online
                        </option>
                        <option value=""  disabled hidden>Tipo Cita</option>
                        ';
                        break;


                    }

                    echo '  
                    </select>
                    <div class="" style="position: absolute; right: -33px; top: 8px;">
                    <button type="button" class="btn btn-sm bg-danger-light" onclick="quitarHorario(&quot;'.$valor_unico.'&quot;)"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
            <script >
        $(".aca-'.$valor_unico.'").timepicker();
        </script>
            ';
    }
     
   

}
 
 

echo ' 
    </div>
    <div id="carga_horario_'.$valor_unico.'"></div>
    </form>
    ';
    
    echo ' 
    <br>
    <br>
    
    <div class="row">
<div class="col-md-4"><button type="button" class="btn btn-new btn-info btn-block" style="background: #008298; border: 1px solid #ececec;"  onclick="agregarMas(&quot;'.$dia.'&quot; , &quot;'.$id_track.'&quot; , &quot;'.$valor_unico.'&quot; )" ><i class="fas fa-plus"></i> Agregar mas Horarios</button></div>
<div class="col-md-4"><button type="button" class="btn btn-new btn-info btn-block" style="background: #008298; border: 1px solid #ececec; "  onclick="subir(&quot;'.$id_track.'&quot;)" ><i class="fas fa-save"></i>  Guardar Agenda del dia </button></div>
<div class="col-md-4"><button type="button" class="btn btn-new btn-info btn-block" style="background: #008298; border: 1px solid #ececec;" onclick="replicar(&quot;'.$id_track.'&quot;)"><i class="fas fa-clone"></i> Replicar Resto de dias </button></div>
</div>
    
 </div>

 
 
    ';
 