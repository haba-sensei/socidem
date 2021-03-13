<?php
date_default_timezone_set('America/Lima');
$fecha_nueva = date("d/m/Y"); 
/*=============================================
CONTADOR DE MEDICOS 
=============================================*/
     $medCons = ejecutarSQL::consultar("SELECT * FROM `medicos`");
     $medTotal = mysqli_num_rows($medCons);
/*=============================================
TODAS LAS ESPECIALIDADES 
=============================================*/
     $espeCons = ejecutarSQL::consultar("SELECT * FROM `especialidades`");
/*=============================================
MINIMO Y MAXIMO RANGO DE PRECIOS CONSULTA
=============================================*/
     $maximoCons = ejecutarSQL::consultar("SELECT `perfil`.`precio_consulta` FROM `perfil` ORDER BY `perfil`.`precio_consulta` DESC LIMIT 1");
/*=============================================
BANNER FASHION TRENDS 
=============================================*/
     $listMedicos = ejecutarSQL::consultar("SELECT `medicos`.`nombre_completo`, `perfil`.*, `perfil`.`correo`, `medicos`.`estado` FROM `medicos` , `perfil` WHERE `perfil`.`correo` = `medicos`.`correo` AND `medicos`.`estado` = '1'");
/*=============================================
LISTA DE CONSULTAS PACIENTE ONLINE
=============================================*/
     $listConsultasOnline = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`email_usuario` = '$correo_' AND `agenda`.`tipo_cita` = 'online' ORDER BY `agenda`.`fecha_start` DESC");
/*=============================================
LISTA DE CONSULTAS PACIENTE PRESENCIAL
=============================================*/
     $listConsultasPresencial = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`email_usuario` = '$correo_' AND `agenda`.`tipo_cita` = 'presencial' ORDER BY `agenda`.`fecha_start` DESC");
/*=============================================
TOTAL DE PACIENTES DASH MEDICO
=============================================*/
     $ConsPacientes = ejecutarSQL::consultar("SELECT DISTINCT email_usuario FROM agenda");
     $totalPacientes = mysqli_num_rows($ConsPacientes);
/*=============================================
LISTA DE CITAS DEL DIA AGENDA DEL MEDICO
=============================================*/ 
     $consDiaAgendaMed = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`cod_medico` = '$codigo_referido_' AND `agenda`.`fecha_start` = '$fecha_nueva' ORDER BY `agenda`.`fecha_start` DESC");
/*=============================================
LISTA DE CITAS GENERALES AGENDA MEDICO
=============================================*/
     $consGenralAgendaMed = ejecutarSQL::consultar("SELECT `agenda`.`cod_medico`, `agenda`.`email_usuario`, `perfil`.*, `agenda`.* FROM `agenda`, `perfil` WHERE `agenda`.`cod_medico` = `perfil`.`codigo_referido` AND `agenda`.`cod_medico` = '$codigo_referido_' ORDER BY `agenda`.`fecha_start` DESC");
// /*=============================================
// LISTA DE MARCAS
// =============================================*/
//     $listMarc = ejecutarSQL::consultar("SELECT * FROM `marcas`");
// /*=============================================
// LISTA DE OPCIONES ORIGINAL
// =============================================*/
//     $listOri = ejecutarSQL::consultar("SELECT * FROM `original` LIMIT 2");
// /*=============================================
// LISTA DE TALLAS
// =============================================*/
//     $listTallas = ejecutarSQL::consultar("SELECT * FROM `tallas`");
// /*=============================================
// LISTA DE CATEGORIAS
// =============================================*/
//     $listCate = ejecutarSQL::consultar("SELECT * FROM `categorias`");
// /*=============================================
// LISTA DE VENDEDORES DESTACADOS
// =============================================*/
//     $listVendDest = ejecutarSQL::consultar("SELECT `usuarios`.*, `perfil`.*, `perfil`.`tipo` FROM `usuarios` LEFT JOIN `perfil` ON `perfil`.`id` = `usuarios`.`id` WHERE `perfil`.`tipo` = 'destacado';");
// /*=============================================
// LISTA DE PRODUCTOS DESTACADOS
// =============================================*/
//     $listVendID = ejecutarSQL::consultar("SELECT `usuarios`.*, `perfil`.*, `perfil`.`tipo` FROM `usuarios` LEFT JOIN `perfil` ON `perfil`.`id` = `usuarios`.`id` WHERE `perfil`.`tipo` = 'destacado';");
// /*=============================================
// LISTA DE PRODUCTOS DESTACADOS
// =============================================*/
//     $menu_orden = ejecutarSQL::consultar("SELECT * FROM `orden_menu` ");
// /*=============================================
// RANGO MAXIMO DE PRECIO ALL PROD
// =============================================*/
//     $rango_max_price = ejecutarSQL::consultar("SELECT `productos`.`precio`, `moneda`.`moneda` FROM `productos`, `moneda` WHERE `productos`.`estado` = '1' ORDER BY `precio` DESC LIMIT 1");
// /*=============================================
// PRODUCTOS COMPRAR NUEVOS SLIDE 1
// =============================================*/
//     $prodShopNew = ejecutarSQL::consultar("SELECT `productos`.*, `moneda`.`moneda`, `productos`.`id` AS idprod  FROM `productos` , `moneda` WHERE `productos`.`estado` = '1' ORDER BY `productos`.`id` DESC LIMIT 0, 3");
// /*=============================================
// PRODUCTOS COMPRAR NUEVOS SLIDE 2
// =============================================*/
//     $prodShopNew2 = ejecutarSQL::consultar("SELECT `productos`.*, `moneda`.`moneda`, `productos`.`id` AS idprod FROM `productos` , `moneda` WHERE `productos`.`estado` = '1' ORDER BY `productos`.`id` DESC LIMIT 3, 3");

   
  

?>
 