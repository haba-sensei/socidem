<?php
$fb = new Facebook\Facebook([
    'app_id' => '170568131242133',
    'app_secret' => '2058350975fdcb641245bc2cba3af3a3',
    'default_graph_version' => 'v2.10',
    ]);
  
  $helper = $fb->getRedirectLoginHelper();
  
  $permissions = ['email']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('https://medicos.stampiza2.com/controller/login_pac_face.controlador.php', $permissions);
   

