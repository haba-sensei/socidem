<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 

$id_cod_agenda = $_POST['id'];

$verAgenda = ejecutarSQL::consultar("SELECT `agenda`.`cod_consulta`, `agenda`.`paciente` FROM `agenda` WHERE `agenda`.`cod_consulta` = '$id_cod_agenda'");

while($datos_agenda_paciente=mysqli_fetch_assoc($verAgenda)){
    $objPaciente=$datos_agenda_paciente['paciente'];
    
    $paciente = json_decode($objPaciente, true); 
    $var_nombre = $paciente['nombre_paciente'];
    $var_apellido = $paciente['apellido_paciente'];
    $var_email = $paciente['email_paciente'];
    $var_telefono = $paciente['telefono_paciente'];
    $var_detalle = $paciente['detalles_paciente'];
} 




echo '
  
<div class="row form-row">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label>Nombre Paciente</label>
            <input type="text" class="form-control" value="'.$var_nombre.'">
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label>Apellido Paciente</label>
            <input type="text"  class="form-control" value="'.$var_apellido.'">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Email Paciente</label>
           
                <input type="text" class="form-control" value="'.$var_email.'">
            
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <label>Telefono Paciente</label>
            <input type="email" class="form-control" value="'.$var_telefono.'">
        </div>
    </div>
    <div class="col-12 ">
        <div class="form-group">
            <label>Detalles</label>
            <textarea  class="form-control">'.$var_detalle.'</textarea>
        </div>
    </div>
    
</div>
 
    
';

