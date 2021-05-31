<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php'; 
require_once '../../vendor/autoload.php';

$valor_token = $_POST['cod'];

$verCodigo = ejecutarSQL::consultar("SELECT `codigos_promo`.*, `codigos_promo`.`codigo`, `codigos_promo`.`status` FROM `codigos_promo` WHERE `codigos_promo`.`codigo` = '$valor_token' AND `codigos_promo`.`status` = '1' LIMIT 1");


while($datos_codigo=mysqli_fetch_assoc($verCodigo)){ 
    $porcentaje=$datos_codigo['porcentaje'];  
}  

$val = 750;

if($porcentaje == NULL || $porcentaje == 0 || $porcentaje == "" ){
    $valor = $val;
    $estatus = "nulo";

}else {

    $res = $val * $porcentaje / 100;
    $valor = $val - $res;
    $estatus = "activo";

}

    MercadoPago\SDK::setAccessToken('TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826');

    $preference = new MercadoPago\Preference(); 
    $item = new MercadoPago\Item();
    $item->title = 'Agenda de Cita';
    $item->quantity = 1;

    $item->unit_price = $valor;

    $preference->items = array($item);


    $type = 'MP_AGENDA';
    include '../../model/config.php';

    $preference->auto_return = "approved"; 

    $preference->save(); 

    $output = array(
        'precio' => $valor,
        'href' => $preference->init_point,
        'status' => $estatus
    );

    echo json_encode( $output );

?>