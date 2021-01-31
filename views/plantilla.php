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
			if($_SESSION["nivel"]){
				
				echo "<div id='page-loader' class='fade show'><span class='spinner'></span></div>";
				include 'adminP/views/components/contenedor_ini.php';
				include 'adminP/views/components/topBar.php';
				include 'adminP/views/components/sidebar.php';
			}
		break;
		case 'dashboard':
			include 'views/headers/cabezeraAdmin.php';
			// include 'views/models/cabezera.php';
		break;

		default:
			include 'views/headers/cabezera.php';
			include 'views/models/cabezera.php';
		break;
	}


 
	
?>


<body class="page-ajust ">
 

    <?php
	  
	 /*=============================================
	 RUTAS
	 =============================================*/
	
	 if(isset($_GET["ruta"])){
		 
		 if($routes[0] == "inicio" || 
			$routes[0] == "login" || 
			$routes[0] == "registro" || 
			$routes[0] == "solicitudes" ||
			$routes[0] == "nosotros" || 
			$routes[0] == "catalogo" || 
			$routes[0] == "busqueda" || 
			$routes[0] == "vendedores" || 
			$routes[0] == "perfil" || 
			$routes[0] == "detalle" || 
			$routes[0] == "shop" || 
			$routes[0] == "cart" || 
			$routes[0] == "wishlist" || 
			$routes[0] == "checkout" ||
			$routes[0] == "payment" ||
			$routes[0] == "dashboard" || 
			$routes[0] == "contacto" ||
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
							$routes[1] == "dashboard" ||
							$routes[1] == "ordenMenu" || 
							$routes[1] == "sliderP" || 
							$routes[1] == "bannPromo" || 
							$routes[1] == "bannCol" || 
							$routes[1] == "bannParallax" || 
							$routes[1] == "ordenes" || 
							$routes[1] == "vendedores" || 
							$routes[1] == "clientes" || 
							$routes[1] == "detalleP" || 
							$routes[1] == "editCustom" || 
							$routes[1] == "contabilidad" 

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
		if($_SESSION["nivel"]){
			 
			include 'adminP/views/components/contenedor_end.php';
			 
		}
		include 'adminP/views/components/modals.php';
		include 'adminP/views/components/footer.php';
	break;
	case 'dashboard':
		// include 'views/models/footer.php';
		// echo "</body>";
		include 'views/footers/footerAdmin.php';
		// include "models/modals.php"; 
	    // include "models/widgets.php";
		
			
	break;
	default:
		include 'views/models/footer.php';
		echo "</body>";
		include 'views/footers/footer.php';
		include "models/modals.php"; 
		include "models/widgets.php";
	break;
	}

	?>
		
	 
</html>