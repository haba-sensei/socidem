<?php 
$clientID = '827932495421-oicdl783p1jk8s3vkkfbpm28s5ldntij.apps.googleusercontent.com';
$clientSecret = 'oN6XxeR-PbiJ-JZAwDRZ8tMh';
$redirectUri = 'http://localhost/FashionStore3/back-end/controller/registro.controlador.php';
 
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");



?>