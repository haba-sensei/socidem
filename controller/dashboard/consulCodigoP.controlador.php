<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../model/consulSQL.php';
include '../../model/sessiones.php'; 
require_once '../../vendor/autoload.php';

$valor_token = $_POST['cod'];

if($valor_token != $codigo_referido_){
  
$verCodigo = ejecutarSQL::consultar("SELECT `codigos_promo`.*, `codigos_promo`.`codigo`, `codigos_promo`.`status` FROM `codigos_promo` WHERE `codigos_promo`.`codigo` = '$valor_token' AND `codigos_promo`.`status` = '0' LIMIT 1");


while($datos_codigo=mysqli_fetch_assoc($verCodigo)){ 
    $porcentaje=$datos_codigo['porcentaje'];  
    
}  
  
}else {
    $porcentaje = NULL;
}

$val = 750;

if($porcentaje == NULL || $porcentaje == 0 || $porcentaje == "" ){
    $valor = $val;
    $estatus = "nulo";
    $porcentaje_f = "0 %";

}else {

    $res = $val * $porcentaje / 100;
    $valor = $val - $res;
    $estatus = "activo";
    $porcentaje_f = $porcentaje." %";
    session_reset(); 
    $_SESSION["cod_promocion"] = $valor_token;  

}

    MercadoPago\SDK::setAccessToken('TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826');

    $preference = new MercadoPago\Preference(); 
    $item = new MercadoPago\Item();
    $item->title = 'Pago de Membresia';
    $item->quantity = 1;

    $item->unit_price = $valor;
    

    $preference->items = array($item);


    $type = 'MP_MEMBRESIA';
    include '../../model/config.php';

    $preference->auto_return = "approved"; 

    $preference->save(); 

    $output = array(
        'precio' => $valor,
        'href' => $preference->init_point,
        'porcentaje' => $porcentaje_f,
        'status' => $estatus
    );

    echo json_encode( $output );

?>