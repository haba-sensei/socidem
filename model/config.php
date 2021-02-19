<?php 
    $enviroment = 'LOCAL';
    /* FILTRO SEGUN EL TIPO DE ENTORNO */
    switch ($enviroment) {
        case 'LIVE':
            /* FILTRO SEGUN EL TIPO DE ELEMENTO */
            switch ($type) {
                case 'LOGIN':
                   
                    /* FACEBOOK ENV */
                    $fb = new Facebook\Facebook([
                        'app_id' => '170568131242133',
                        'app_secret' => '2058350975fdcb641245bc2cba3af3a3',
                        'default_graph_version' => 'v9.0',
                    ]);
                    /* LOGIN FACEBOOK CREDENCIALES PACIENTES*/
                    $url_face_login_pacientes = 'https://medicos.stampiza2.com/controller/login_pac_face.controlador.php';
                    
                    /* LOGIN FACEBOOK CREDENCIALES MEDICOS*/
                    $url_face_login_medicos = 'https://medicos.stampiza2.com/controller/login_med_face.controlador.php';
                    
                    /* GOOGLE ENV */
                    
                    $clientID = '603911200914-ellpcvv7oq5udaqvlv3rsa061tt1lpke.apps.googleusercontent.com';
                    $clientSecret = 'hTYH2tgPkblehXzAf-CD7o63';
                    $redirectUri_login_paciente = 'https://medicos.stampiza2.com/controller/login.controlador.php';
                    $redirectUri_login_medico = 'https://medicos.stampiza2.com/controller/login_med.controlador.php';
                    
                break;
                
                case 'REGISTER':
                   
                    $fb = new Facebook\Facebook([
                        'app_id' => '170568131242133',
                        'app_secret' => '2058350975fdcb641245bc2cba3af3a3',
                        'default_graph_version' => 'v9.0',
                    ]);

                    /* REGISTRO FACEBOOK CREDENCIALES MEDICOS*/
                    $url_face_reg_pacientes = 'https://medicos.stampiza2.com/controller/registro_face.controlador.php';

                     /* GOOGLE ENV */
                    $clientID = '603911200914-ellpcvv7oq5udaqvlv3rsa061tt1lpke.apps.googleusercontent.com';
                    $clientSecret = 'hTYH2tgPkblehXzAf-CD7o63';  
                    $redirectUri_registro_paciente = 'https://medicos.stampiza2.com/controller/registro.controlador.php';
 

                break;

                case 'MP_AGENDA':
                    
                    $preference->back_urls = array(
                        "success" => "https://medicos.stampiza2.com/controller/dashboard/crearPagoCita.controlador.php",
                        "failure" => "https://medicos.stampiza2.com/controller/dashboard/crearPagoCita.controlador.php", 
                        "pending" => "https://medicos.stampiza2.com/controller/dashboard/crearPagoCita.controlador.php"
                    );

                break;
            }
           
            

        break;
        
        case 'LOCAL':
            /* FILTRO SEGUN EL TIPO DE ELEMENTO */
            switch ($type) {
                case 'LOGIN':
                   
                    /* FACEBOOK ENV */

                    $fb = new Facebook\Facebook([
                        'app_id' => '279795450213447',
                        'app_secret' => 'b85df09a5102c240f71707acb1625e9f',
                        'default_graph_version' => 'v9.0',
                    ]);
                     /* LOGIN FACEBOOK CREDENCIALES PACIENTES*/
                    $url_face_login_pacientes = 'http://localhost/socidem/controller/login_pac_face.controlador.php';
                        
                     /* LOGIN FACEBOOK CREDENCIALES MEDICOS*/
                     $url_face_login_medicos = 'http://localhost/socidem/controller/login_med_face.controlador.php';


                    /* GOOGLE ENV */
                    
                    $clientID = '603911200914-ellpcvv7oq5udaqvlv3rsa061tt1lpke.apps.googleusercontent.com';
                    $clientSecret = 'hTYH2tgPkblehXzAf-CD7o63';
                    $redirectUri_login_paciente = 'http://localhost/socidem/controller/login.controlador.php';
                    $redirectUri_login_medico = 'http://localhost/socidem/controller/login_med.controlador.php';

                break;
                
                case 'REGISTER':
                   
                    $fb = new Facebook\Facebook([
                        'app_id' => '279795450213447',
                        'app_secret' => 'b85df09a5102c240f71707acb1625e9f',
                        'default_graph_version' => 'v9.0',
                    ]);

                    /* REGISTRO FACEBOOK CREDENCIALES MEDICOS*/
                    $url_face_reg_pacientes = 'http://localhost/socidem/controller/registro_face.controlador.php';

                    /* GOOGLE ENV */
                    $clientID = '603911200914-ellpcvv7oq5udaqvlv3rsa061tt1lpke.apps.googleusercontent.com';
                    $clientSecret = 'hTYH2tgPkblehXzAf-CD7o63';  
                    $redirectUri_registro_paciente = 'http://localhost/socidem/controller/registro.controlador.php';

                break;

                case 'MP_AGENDA':
                
                    $preference->back_urls = array(
                        "success" => "http://localhost/socidem/controller/dashboard/crearPagoCita.controlador.php",
                        "failure" => "http://localhost/socidem/controller/dashboard/crearPagoCita.controlador.php", 
                        "pending" => "http://localhost/socidem/controller/dashboard/crearPagoCita.controlador.php"
                    );

                break;
            }

        break;

        
    }








  



?>