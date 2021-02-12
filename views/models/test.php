<form action="/process_payment" method="post" id="paymentForm">
   <h3>Detalles del comprador</h3>
     <div>
       <div>
         <label for="email">E-mail</label>
         <input id="email" name="email" type="text" value="test@test.com"/>
       </div>
       <div>
         <label for="docType">Tipo de documento</label>
         <select id="docType" name="docType" data-checkout="docType" type="text"></select>
       </div>
       <div>
         <label for="docNumber">Número de documento</label>
         <input id="docNumber" name="docNumber" data-checkout="docNumber" type="text"/>
       </div>
     </div>
   <h3>Detalles de la tarjeta</h3>
     <div>
       <div>
         <label for="cardholderName">Titular de la tarjeta</label>
         <input id="cardholderName" data-checkout="cardholderName" type="text">
       </div>
       <div>
         <label for="">Fecha de vencimiento</label>
         <div>
           <input type="text" placeholder="MM" id="cardExpirationMonth" data-checkout="cardExpirationMonth"
             onselectstart="return false" onpaste="return false"
             oncopy="return false" oncut="return false"
             ondrag="return false" ondrop="return false" autocomplete=off>
           <span class="date-separator">/</span>
           <input type="text" placeholder="YY" id="cardExpirationYear" data-checkout="cardExpirationYear"
             onselectstart="return false" onpaste="return false"
             oncopy="return false" oncut="return false"
             ondrag="return false" ondrop="return false" autocomplete=off>
         </div>
       </div>
       <div>
         <label for="cardNumber">Número de la tarjeta</label>
         <input type="text" id="cardNumber" data-checkout="cardNumber"
           onselectstart="return false" onpaste="return false"
           oncopy="return false" oncut="return false"
           ondrag="return false" ondrop="return false" autocomplete=off>
       </div>
       <div>
         <label for="securityCode">Código de seguridad</label>
         <input id="securityCode" data-checkout="securityCode" type="text"
           onselectstart="return false" onpaste="return false"
           oncopy="return false" oncut="return false"
           ondrag="return false" ondrop="return false" autocomplete=off>
       </div>
       <div id="issuerInput">
         <label for="issuer">Banco emisor</label>
         <select id="issuer" name="issuer" data-checkout="issuer"></select>
       </div>
       <div>
         <label for="installments">Cuotas</label>
         <select type="text" id="installments" name="installments"></select>
       </div>
       <div>
         <input type="hidden" name="transactionAmount" id="transactionAmount" value="100" />
         <input type="hidden" name="paymentMethodId" id="paymentMethodId" />
         <input type="hidden" name="description" id="description" />
         <br>
         <button type="submit">Pagar</button>
         <br>
       </div>
   </div>
 </form>



<?php
   
//   MercadoPago\SDK::setAccessToken('TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826');

 
// $preference = new MercadoPago\Preference();

 
// $item = new MercadoPago\Item();
// $item->title = 'Mi producto1';
// $item->quantity = 1;
// $item->unit_price = 75.56;
// $preference->items = array($item);
// $preference->save();
 
  
// $curl = curl_init();
// $token = "5ad1c4126a25bbabc068961e69e7d5ce";
// $installments = 1;
// $transaction_amount = 100;
// $description = "Pago desde cURL";
// $payment_method_id = "master";
// $payer = array(
// "email" => "test_user_77251776@testuser.com"
// );

// curl_setopt($curl, CURLOPT_URL,'https://api.mercadopago.com/v1/payments?access_token=TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826');
// curl_setopt($curl, CURLOPT_HEADER, 0);
// curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array(
//   "transaction_amount" => $transaction_amount,
//   "token" => $token,
//   "description" => $description,
//   "installments" => $installments,
//   "payment_method_id" => $payment_method_id,
//   "payer" => $payer
// )));
 
// $data = curl_exec($curl);
// curl_close($curl);
// echo $data;
// $payment = $mp->post("/v1/payments", $payment_data);
?>
 <!-- <script
src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
data-preference-id="<?php echo $preference->id; ?>">
</script>  -->
<script >
window.Mercadopago.setPublishableKey("TEST-1333418562298877-020706-8f12270a97bdd77d30bbc6afe10c909c-314858826");
window.Mercadopago.getIdentificationTypes();
document.getElementById('cardNumber').addEventListener('change', guessPaymentMethod);

function guessPaymentMethod(event) {
   let cardnumber = document.getElementById("cardNumber").value;
   if (cardnumber.length >= 6) {
       let bin = cardnumber.substring(0,6);
       window.Mercadopago.getPaymentMethod({
           "bin": bin
       }, setPaymentMethod);
   }
};

function setPaymentMethod(status, response) {
   if (status == 200) {
       let paymentMethod = response[0];
       document.getElementById('paymentMethodId').value = paymentMethod.id;

       getIssuers(paymentMethod.id);
   } else {
       alert(`payment method info error: ${response}`);
   }
}

</script>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

<?php 
 
// use AppleSignIn\ASDecoder;

// $clientUser = "example_client_user";
// $identityToken = "example_encoded_jwt";

// $appleSignInPayload = ASDecoder::getAppleSignInPayload($identityToken);

// /**
//  * Obtain the Sign In with Apple email and user creds.
//  */
// $email = $appleSignInPayload->getEmail();
// $user = $appleSignInPayload->getUser();

// /**
//  * Determine whether the client-provided user is valid.
//  */
// $isValid = $appleSignInPayload->verifyUser($clientUser);


// if($_SESSION['fb_id']) {
// echo "
//   <div class = 'container'>
//      <div class = 'jumbotron'>
//         <h1>Hello ".$_SESSION['fb_name']." </h1>
//         <p>Welcome to Cloudways</p>
//      </div>
//         <ul class = 'nav nav-list'>
//            <h4>Image</h4>
//            <li> ".$_SESSION['fb_pic']." </li>
//            <h4>Facebook ID</h4>
//            <li> ".$_SESSION['fb_id']." </li>
//            <h4>Facebook fullname</h4>
//            <li> ".$_SESSION['fb_name']." </li>
//            <h4>Facebook Email</h4>
//            <li> ".$_SESSION['fb_email']." </li>
//         </ul>
//     </div>
//     ";
//  }  


?>

 