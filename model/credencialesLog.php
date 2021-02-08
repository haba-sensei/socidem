<?php 
 // create Client Request to access Google API
 $clientID = '603911200914-ellpcvv7oq5udaqvlv3rsa061tt1lpke.apps.googleusercontent.com';
 $clientSecret = 'hTYH2tgPkblehXzAf-CD7o63';
 $redirectUri = 'http://localhost/socidem/controller/login.controlador.php';
 
 $client = new Google_Client();
 $client->setClientId($clientID);
 $client->setClientSecret($clientSecret);
 $client->setRedirectUri($redirectUri);
 $client->addScope("email");
 $client->addScope("profile");



?>