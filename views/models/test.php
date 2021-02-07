<?php
  require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

  MercadoPago\SDK::setAccessToken('TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826');

 
$preference = new MercadoPago\Preference();

 
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>