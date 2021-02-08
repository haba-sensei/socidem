<?php
  require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

//   MercadoPago\SDK::setAccessToken('TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826');

 
// $preference = new MercadoPago\Preference();

 
// $item = new MercadoPago\Item();
// $item->title = 'Mi producto1';
// $item->quantity = 1;
// $item->unit_price = 75.56;

// $item1 = new MercadoPago\Item();
// $item1->title = "Item de Prueba 1";
// $item1->quantity = 2;
// $item1->unit_price = 111.96;

// $item2= new MercadoPago\Item();
// $item2->title = "Item de Prueba 2";
// $item2->quantity = 1;
// $item2->unit_price = 11.96;

// $preference->items = array($item,$item1,$item2);

// $preference->save();
// Crea un ítem en la preferencia
// $item = new MercadoPago\Item();
// $item->title = 'Mi producto2';
// $item->quantity = 1;
// $item->unit_price = 75.56;

// $item2 = new MercadoPago\Item();
// $item2->title = 'Mi producto2331212';
// $item2->quantity = 1;
// $item2->unit_price = 75.56;

// $preference->items = array($item, $item2);
// $preference->save();
 
?>
<!-- <script
src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
data-preference-id="<?php echo $preference->id; ?>">
</script> -->



<?php 
 
use AppleSignIn\ASDecoder;

$clientUser = "example_client_user";
$identityToken = "example_encoded_jwt";

$appleSignInPayload = ASDecoder::getAppleSignInPayload($identityToken);

/**
 * Obtain the Sign In with Apple email and user creds.
 */
$email = $appleSignInPayload->getEmail();
$user = $appleSignInPayload->getUser();

/**
 * Determine whether the client-provided user is valid.
 */
$isValid = $appleSignInPayload->verifyUser($clientUser);

?>





?>