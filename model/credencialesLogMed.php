<?php 
 // create Client Request to access Google API
 $clientID = '603911200914-2uj7fdllhkn7ld6svdtdttqacds5ook8.apps.googleusercontent.com';
 $clientSecret = 'k6nbI06E9vMawpertAWcD99-';
 $redirectUri = 'https://medicos.stampiza2.com/controller/login_med.controlador.php';
 
 $client = new Google_Client();
 $client->setClientId($clientID);
 $client->setClientSecret($clientSecret);
 $client->setRedirectUri($redirectUri);
 $client->addScope("email");
 $client->addScope("profile");



?>