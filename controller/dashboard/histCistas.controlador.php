<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php';

$elemento1 = $_POST['elemento1'];
$elemento2 = $_POST['elemento2'];

$BuscaElementos = ejecutarSQL::consultar("SELECT `agenda`.*, `agenda`.`cod_medico`, `agenda`.`fecha_start`
FROM `agenda`
WHERE `agenda`.`cod_medico` = '$codigo_referido_' AND `agenda`.`fecha_start` BETWEEN '$elemento1' AND '$elemento2' ORDER BY `id` ASC ");






