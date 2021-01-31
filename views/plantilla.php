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
			include 'adminP/views/components/header.php';
			
		break;
		case 'dashboard':
			include 'views/headers/cabezeraAdmin.php';
			// include 'views/models/cabezera.php';
		break;

		default:
			include 'views/headers/header_base.php';
			// include 'views/models/cabezera.php';
		break;
	}


 
	
?>


<body >
 

    <?php
	  
	 /*=============================================
	 RUTAS
	 =============================================*/
	
	 if(isset($_GET["ruta"])){
		 
		 if($routes[0] == "inicio" || 
			$routes[0] == "login" || 
			 
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
							$routes[1] == "dashboard" 
							 

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
		 
	break;
	case 'dashboard':
		 
		
			
	break;
	default:
		include 'views/footers/footer_base.php';
		echo "</body>";
		
		
	break;
	}

	?>
		
	 
</html>