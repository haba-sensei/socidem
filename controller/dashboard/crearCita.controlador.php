<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';
 
$id_cita = $_POST['valor'];
$codigo_referido = $_POST['secur'];
$opcion = $_POST['opcion'];

session_reset(); 

$_SESSION['valor'] = $id_cita;
$_SESSION['secur'] = $codigo_referido;
$_SESSION['opcion'] = $opcion;