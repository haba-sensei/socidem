<?php 

$enviroment = 'LOCAL';


    /* FILTRO SEGUN EL TIPO DE ENTORNO */
    switch ($enviroment) {
        case 'LIVE':
            /* FILTRO SEGUN EL TIPO DE ELEMENTO */
            switch ($type) {
                case 'LOGIN':
                   
                    $fb = new Facebook\Facebook([
                        'app_id' => '170568131242133',
                        'app_secret' => '2058350975fdcb641245bc2cba3af3a3',
                        'default_graph_version' => 'v9.0',
                    ]);
                    /* LOGIN FACEBOOK CREDENCIALES PACIENTES*/
                    $url_face_login_pacientes = 'https://medicos.stampiza2.com/controller/login_pac_face.controlador.php';
                    
                    /* LOGIN FACEBOOK CREDENCIALES MEDICOS*/
                    $url_face_login_medicos = 'https://medicos.stampiza2.com/controller/login_med_face.controlador.php';

                break;
                
                case 'REGISTER':
                   
                    $fb = new Facebook\Facebook([
                        'app_id' => '170568131242133',
                        'app_secret' => '2058350975fdcb641245bc2cba3af3a3',
                        'default_graph_version' => 'v9.0',
                    ]);


                    $url_face_reg_pacientes = 'https://medicos.stampiza2.com/controller/registro_face.controlador.php';


                    break;
            }
           
            

            break;
        
        case 'LOCAL':
            /* FILTRO SEGUN EL TIPO DE ELEMENTO */
            switch ($type) {
                case 'LOGIN':
                   
                    $fb = new Facebook\Facebook([
                        'app_id' => '279795450213447',
                        'app_secret' => 'b85df09a5102c240f71707acb1625e9f',
                        'default_graph_version' => 'v9.0',
                    ]);
                     /* LOGIN FACEBOOK CREDENCIALES PACIENTES*/
                    $url_face_login_pacientes = 'http://localhost/socidem/controller/login_pac_face.controlador.php';
                        
                     /* LOGIN FACEBOOK CREDENCIALES MEDICOS*/
                     $url_face_login_medicos = 'http://localhost/socidem/controller/login_med_face.controlador.php';

                break;
                
                case 'REGISTER':
                   
                    $fb = new Facebook\Facebook([
                        'app_id' => '279795450213447',
                        'app_secret' => 'b85df09a5102c240f71707acb1625e9f',
                        'default_graph_version' => 'v9.0',
                    ]);


                    $url_face_reg_pacientes = 'http://localhost/socidem/controller/registro_face.controlador.php';


                    break;
            }




            break;

        
    }








  



?>