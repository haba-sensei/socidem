<?php 
error_reporting(E_ALL ^ E_NOTICE); 
 

    $id_ = $_SESSION['id'];
    $usuario_ = $_SESSION['usuario'];
    $nombre_ = $_SESSION['nombre'];
    $apellido_ = $_SESSION["apellido"];
    $correo_ = $_SESSION['correo'];
    $rol_ = $_SESSION["rol"]; 
    $telefono_  = $_SESSION["telefono"];
    $pais_ = $_SESSION["pais"];
    $ciudad_ = $_SESSION["ciudad"];
    $estado_ = $_SESSION["estado"];
    $imgPerfil_ = $_SESSION['imagen_perfil'];
    $imgBanPerfil_ = $_SESSION['ban_perfil'];
    $last_login_ = $_SESSION["last_login"];
 


?>