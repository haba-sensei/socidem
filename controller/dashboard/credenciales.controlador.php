<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 

$id_cod_agenda = $_POST['id'];

echo '
    <h3 style="margin-left: auto;
    margin-right: auto;
    margin-bottom: 35px;">Credenciales de Acceso</h3>
    <div class="col-md-12">
    
        <div class="clinic-booking">
        <p class="apt-btn" >'.$id_cod_agenda.'</p>
        </div>
      
    </div>
    
';