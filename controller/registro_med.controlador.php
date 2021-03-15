<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../model/consulSQL.php';
date_default_timezone_set('America/Lima');
setlocale(LC_ALL,"es_ES"); 
setlocale(LC_TIME, 'spanish'); 

    $nombre_doc = $_POST['nombre_doc'];
    $ciudad_doc = $_POST['ciudad_doc'];
    $telefono_doc = $_POST['telefono_doc'];
    $num_colegiado_doc = $_POST['num_colegiado_doc'];
    $correo_doc = $_POST['email_doc'];
    $especialidad_doc = $_POST['especialidad'];
    $pass_doc = md5($_POST['pass_doc']);
    $cod_referido = md5($correo_doc.$nombre_doc.$pass_doc);
    $rol_doc = "1";
    $foto_doc = "1.jpg";
    $estado_doc = 0;
    $time = time();
    $fecha = (($time+date('Z'))%86400 < 43200 ? 'AM' : 'PM');
    $last_login_doc_f = strftime('%A %d de %B del %Y %I:%M:%S');
    $last_login_doc = $last_login_doc_f." ".$fecha;
    

  


if (!$correo_doc == "" && !$pass_doc == "" &&  !$nombre_doc == "" &&  !$ciudad_doc == "" &&  !$num_colegiado_doc == "" &&  !$telefono_doc == "" &&  !$foto_doc == ""  && !$especialidad_doc == "" && !$rol_doc == "" && !$last_login_doc == ""  && !$cod_referido == "") {
     
    $BuscaAfil = ejecutarSQL::consultar("select * from medicos where correo='$correo_doc' ");
   
    $AfilC = mysqli_num_rows($BuscaAfil);
         
        if ($AfilC > 0 ) {
            echo '<script> alert("Este correo ya esta registrado"); 	window.location = "registroDoc"; </script>';
        }
         
        else {

            $regAfil = consultasSQL::InsertSQL("medicos", "nombre_completo, correo, pass, last_login, rol, estado", "'$nombre_doc', '$correo_doc', '$pass_doc', '$last_login_doc', '$rol_doc', '$estado_doc' "); 
            $regPerfil = consultasSQL::InsertSQL("perfil", "correo, documento, foto, telefono, num_colegiatura, especialidad, servicios, titulo, universidad, años, ubicacion, sobre_mi, nombre_clinica, direccion_clinica, precio_consulta, codigo_referido", "'$correo_doc', '', '$foto_doc', '$telefono_doc', '$num_colegiado_doc', '$especialidad_doc', '', '', '', '', '$ciudad_doc', '', '', '', '', '$cod_referido'"); 
            $regAgenda = consultasSQL::InsertSQL("agenda_medica", "cod_medico, agenda, estado", "'$cod_referido', '[]', '1'"); 
            $verAfil = ejecutarSQL::consultar("SELECT `medicos`.*, `medicos`.`correo`, `medicos`.`pass` FROM `medicos` WHERE `medicos`.`correo` = '$correo_doc' AND `medicos`.`pass` = '$pass_doc';");
            
    
            while($datos_usuario=mysqli_fetch_array($verAfil)){
                $rol = $datos_usuario['rol'];
                $nombre = $datos_usuario['nombre_completo'];
                $correo = $datos_usuario['correo'];
                $estado = $datos_usuario['estado']; 
                $last_login = $datos_usuario['last_login'];
                
                $verPerfil = ejecutarSQL::consultar("SELECT `perfil`.`correo`, `perfil`.`codigo_referido`, `perfil`.`especialidad`, `perfil`.`num_colegiatura`, `perfil`.`foto`  FROM `perfil` WHERE `perfil`.`correo` = '$correo' ");
    
                while($perfil_usuario=mysqli_fetch_array($verPerfil)){ 

                $codigo_referido_new=$perfil_usuario['codigo_referido'];
                $especialidad=$perfil_usuario['especialidad'];
                $foto=$perfil_usuario['foto'];
                $num_colegiatura=$perfil_usuario['num_colegiatura'];


                }
                $_SESSION["iniciarSesion"] = "ok";
                
                $_SESSION['nombre'] = $nombre;
                $_SESSION['correo'] = $correo;
                $_SESSION["codigo_referido"] = $codigo_referido_new;
                $_SESSION["especialidad"] = $especialidad;
                $_SESSION["foto"] = $foto;
                $_SESSION["num_colegiatura"] = $num_colegiatura;
                $_SESSION["rol"] = $rol;
                $_SESSION['estado'] = $estado;
                $_SESSION['last_login'] = $last_login; 

                
            } 
            
           
            if (isset($_GET['code'])){ 
                echo '<script> 	window.location = "../perfilMed"; </script>';
            }else{
                echo '<script> 	window.location = "perfilMed"; </script>';
            }
            
        }
    } else {
    echo '<script> alert("Campos Vacios"); 	window.location = "registroDoc"; </script>';
}