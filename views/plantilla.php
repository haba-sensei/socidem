<?php 
session_start(); 
require_once "model/consulSQL.php"; 
include 'model/sessiones.php'; 
include 'model/data.php';
require_once 'vendor/autoload.php';

$routes = array();
$routes = explode("-", $_GET["ruta"]);

	switch ($routes[0]) {
		case 'adminDash':
			include 'adminP/headers/header_base.php';
			include "adminP/headers/cabezera.php";
			
		break;
		 

		default:
			include 'views/headers/header_base.php';
			include "views/headers/cabezera.php";
		break;
	}


 
	
?>


<body class="account-page">
 

    <?php
	  
	 /*=============================================
	 RUTAS
	 =============================================*/
	
	 if(isset($_GET["ruta"])){
		 
		 if($routes[0] == "inicio" || 
			$routes[0] == "login" || 
			$routes[0] == "salir" || 
			$routes[0] == "registro" || 
			$routes[0] == "registroDoc" || 
			$routes[0] == "faqs" || 
			$routes[0] == "test" || 
			$routes[0] == "busqueda" || 
			$routes[0] == "perfilMed" || 
			$routes[0] == "cita" || 
			$routes[0] == "checkout" || 
			$routes[0] == "checkExito" || 
			$routes[0] == "factura" || 
			$routes[0] == "servicios" || 
			$routes[0] == "contacto" || 
			$routes[0] == "medico" || 
			$routes[0] == "loginMed" || 
			$routes[0] == "dashboard" || 
			 
			/*=============================================
			RUTA BASE ADMIN
			=============================================*/
			$routes[0] == "adminDash" || 
			$routes[0] == "salir" 
			){ 
				switch ($routes[0]) {
					case "adminDash":
						/*=============================================
						RUTAS INTERNAS ADMIN
						=============================================*/
						if ($routes[1] == "login" || 
							$routes[1] == "inicio" 
							 

						){
							
							include "adminP/views/models/".$routes[1].".php";
							 
						}else {
							include "adminP/views/components/404.php";
							 
						}
					break;

					 
					
					default:
					 
						
						include "models/".$routes[0].".php";
						
					 
					break;
				}
			
			
		 	}else {

		 	include "models/404.php";

	      }
	  	}else {
			include "models/inicio.php";
	  	}
		  
		 
		 
	 ?>

 

			
	<?php 


	switch ($routes[0]) {
	case 'adminDash':
		include 'adminP/footers/footer_base.php';
		include "adminP/footers/footer.php";
	break;
	 
	default:
		include 'views/footers/footer_base.php';
		include "views/footers/footer.php";
		echo "</body>";
		
		
	break;
	}

	?>
		
	 
</html>