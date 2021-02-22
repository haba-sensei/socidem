<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';

$nombre_sala = $_POST['nombre_sala'];
$pass_sala = $_POST['pass_sala'];
$id_sala = $_POST['id_sala'];

    consultasSQL::UpdateSQL("agenda", "
    nombre_room='$nombre_sala', 
    pass_room='$pass_sala',
    estado='2'
    ",
    "cod_consulta='$id_sala'");
 
    echo "Aprobado";

?>