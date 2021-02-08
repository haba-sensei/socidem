<?php
require_once __DIR__ . '/vendor/autoload.php'; 

$fb = new Facebook\Facebook([
    'app_id' => '170568131242133',
    'app_secret' => '2058350975fdcb641245bc2cba3af3a3',
    'default_graph_version' => 'v2.10',
    ]);
  
  $helper = $fb->getRedirectLoginHelper();
  
  $permissions = ['email']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('https://localhost/socidem/controller/login_med.controlador.php', $permissions);
  
  echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';