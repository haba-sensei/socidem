<?php 
$clientID = '603911200914-irofrgv1c68mm8v6n6v4ilk3cjpc7ptd.apps.googleusercontent.com';
$clientSecret = 'Or2TaIG7Rxy7fCQkfnIL5wUS';
$redirectUri = 'https://medicos.stampiza2.com/controller/registro.controlador.php';
 
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");



?>