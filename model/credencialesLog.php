<?php 
 // create Client Request to access Google API
 $clientID = '827932495421-blam0k76955rngolsec7ai3f0674dhp1.apps.googleusercontent.com';
 $clientSecret = 'cLxrL41hTdj3ES3lGzKLKaz9';
 $redirectUri = 'http://localhost/FashionStore3/back-end/controller/login.controlador.php';
 
 $client = new Google_Client();
 $client->setClientId($clientID);
 $client->setClientSecret($clientSecret);
 $client->setRedirectUri($redirectUri);
 $client->addScope("email");
 $client->addScope("profile");



?>