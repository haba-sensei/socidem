<?php

MercadoPago\SDK::setAccessToken('TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826');

$preference = new MercadoPago\Preference();
  
$item = new MercadoPago\Item();
$item->title = 'Agenda de Cita';
$item->quantity = 1;
$item->unit_price = $_SESSION['precio_consulta'];

$preference->items = array($item);

$preference->back_urls = array(
    "success" => "https://medicos.stampiza2.com/controller/dashboard/crearPagoCita.controlador.php",
    "failure" => "https://medicos.stampiza2.com/controller/dashboard/crearPagoCita.controlador.php", 
    "pending" => "https://medicos.stampiza2.com/controller/dashboard/crearPagoCita.controlador.php"
);
$preference->auto_return = "approved"; 

$preference->save();
 
echo "<a style='width: 100%;' onclick='return proPat()'  href='$preference->init_point' class='btn btn-primary submit-btn'  >Confirmar y Pagar</a>";