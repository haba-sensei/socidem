<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include '../../model/consulSQL.php';

$num_ref = $_POST['num_ref']; 

if($num_ref != 0 && $num_ref != NULL && $num_ref != ""){

    for ($i=0; $i < $num_ref; $i++) { 
        $uuid = uniqid(); 
        $cod_referido = generate_string($uuid , 8); 
        consultasSQL::InsertSQL("codigos_promo", "codigo, tipo, cantidad, porcentaje, status, usado", "'$cod_referido', 'porcentaje', '0', '100', '0', '0' "); 
    }
   
}
