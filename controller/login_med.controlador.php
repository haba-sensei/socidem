<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php';
require_once '../vendor/autoload.php';
require_once '../model/credencialesLogMed.php';
 

$fb = new Facebook\Facebook([
    'app_id' => '170568131242133',
    'app_secret' => '2058350975fdcb641245bc2cba3af3a3',
    'default_graph_version' => 'v2.10',
    ]);
  
  $helper = $fb->getRedirectLoginHelper();
  
  try {
    $accessToken = $helper->getAccessToken();
  } catch(Facebook\Exception\ResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exception\SDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  
  if (! isset($accessToken)) {
    if ($helper->getError()) {
      header('HTTP/1.0 401 Unauthorized');
      echo "Error: " . $helper->getError() . "\n";
      echo "Error Code: " . $helper->getErrorCode() . "\n";
      echo "Error Reason: " . $helper->getErrorReason() . "\n";
      echo "Error Description: " . $helper->getErrorDescription() . "\n";
    } else {
      header('HTTP/1.0 400 Bad Request');
      echo 'Bad request';
    }
    exit;
  }
  
  // Logged in
  echo '<h3>Access Token</h3>';
  var_dump($accessToken->getValue());
  
  // The OAuth 2.0 client handler helps us manage access tokens
  $oAuth2Client = $fb->getOAuth2Client();
  
  // Get the access token metadata from /debug_token
  $tokenMetadata = $oAuth2Client->debugToken($accessToken);
  echo '<h3>Metadata</h3>';
  var_dump($tokenMetadata);
  
  // Validation (these will throw FacebookSDKException's when they fail)
  $tokenMetadata->validateAppId($config['app_id']);
  // If you know the user ID this access token belongs to, you can validate it here
  //$tokenMetadata->validateUserId('123');
  $tokenMetadata->validateExpiration();
  
  if (! $accessToken->isLongLived()) {
    // Exchanges a short-lived access token for a long-lived one
    try {
      $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (Facebook\Exception\SDKException $e) {
      echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
      exit;
    }
  
    echo '<h3>Long-lived</h3>';
    var_dump($accessToken->getValue());
  }
  
  $_SESSION['fb_access_token'] = (string) $accessToken;

 








// if (isset($_GET['code'])){
    
//     $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
//     $client->setAccessToken($token['access_token']);

//     // get profile info
//     $google_oauth = new Google_Service_Oauth2($client);
//     $google_account_info = $google_oauth->userinfo->get();
//     $correo =  $google_account_info->email;
//     $clave =  md5($correo);
   

      
// }else {

//     $correo = $_POST['correo-login'];
//     $clave = md5($_POST['clave-login']);

// }
  

// if (!$correo == "" && !$clave == "") {
//     if (isset($_GET['code'])){  
//         $verAfil = ejecutarSQL::consultar("SELECT `medicos`.*, `perfil`.*, `medicos`.`correo`, `medicos`.`pass` FROM `medicos` LEFT JOIN `perfil` ON `perfil`.`id` = `medicos`.`id` WHERE `medicos`.`correo` = '$correo'");
//     }else {
//         $verAfil = ejecutarSQL::consultar("SELECT `medicos`.*, `perfil`.*, `medicos`.`correo`, `medicos`.`pass` FROM `medicos` LEFT JOIN `perfil` ON `perfil`.`id` = `medicos`.`id` WHERE `medicos`.`correo` = '$correo' AND `medicos`.`pass` = '$clave';");
//     }
    
    
   
    
//     while($datos_usuario=mysqli_fetch_assoc($verAfil)){
//         $id_usuario=$datos_usuario['id'];
//         $nombre=$datos_usuario['nombre_completo'];
//         $correo=$datos_usuario['correo'];
//         $rol=$datos_usuario['rol'];
//         $estado=$datos_usuario['estado']; 
//         $last_login=$datos_usuario['last_login'];
       
//     } 
    
//     $AfilC = mysqli_num_rows($verAfil);
//         if ($AfilC > 0) {
//         $_SESSION['id'] = $id_usuario;
//         $_SESSION['nombre'] = $nombre;
//         $_SESSION['correo'] = $correo;
//         $_SESSION["rol"] = $rol;
//         $_SESSION['estado'] = $estado;
//         $_SESSION['last_login'] = $last_login;
         
//         $_SESSION["iniciarSesion"] = "ok";
       
//         date_default_timezone_set('America/Lima');
//         setlocale(LC_TIME, 'es_ES.UTF-8');
//         setlocale(LC_TIME, 'spanish');
//         $last_login_up = date('l jS F Y h:i:s A');
             
             
//             consultasSQL::UpdateSQL("medicos", "correo='$correo', last_login='$last_login_up' ", "correo='$correo'");
//             if (isset($_GET['code'])){ 
//                 echo '<script> 	window.location = "../inicio"; </script>';
//             }else{
//                 echo '<script> 	window.location = "inicio"; </script>';
//             }
           
           
           
//         } else {
//             echo '<script> alert("Usuario no registrado"); 	window.location = "../registro"; </script>';
//             // echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Usuario Incorrecto </div> </div>';
//         }
    
    
// } else {
//     echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Campos Vacios</div> </div>';
// }