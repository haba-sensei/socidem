<?php
session_start();
// error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 
$id_cita = $_POST['valor'];
$codigo_referido = $_POST['secur'];
$opcion = $_POST['opcion'];
$fecha_start = $_POST['fecha_start'];
$fecha_end = $_POST['fecha_end'];

$verPr = ejecutarSQL::consultar("SELECT `perfil`.`codigo_referido`, `perfil`.`precio_consulta` FROM `perfil` WHERE `perfil`.`codigo_referido` = '$codigo_referido' ");

while($d=mysqli_fetch_assoc($verPr)){
    $precio_consulta=$d['precio_consulta'];
} 
session_reset(); 

$_SESSION['valor'] = $id_cita;
$_SESSION['secur'] = $codigo_referido;
$_SESSION['opcion'] = $opcion;
$_SESSION['fecha_start'] = $fecha_start;
$_SESSION['fecha_end'] = $fecha_end;
$_SESSION['precio_consulta'] = $precio_consulta;

 