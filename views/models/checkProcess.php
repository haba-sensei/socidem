	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content success-page-cont">
				<div class="container-fluid">
				
					<div class="row justify-content-center">
						<div class="col-lg-6">
						<?php
						
						$codigoRef = $routes[1];
						 
						$consAgendaNew = ejecutarSQL::consultar("SELECT `agenda`.*, `agenda`.`pagoID` FROM `agenda` WHERE `agenda`.`pagoID` = '$codigoRef' ");


						while($datos_agenda_C=mysqli_fetch_assoc($consAgendaNew)){
						$cita_array = $datos_agenda_C['cita'];
						$fecha_start = $datos_agenda_C['fecha_start'];
						$fecha_end = $datos_agenda_C['fecha_end'];
						$jsonCitaObj = json_decode($cita_array, TRUE);
						 
					 	
						
						?>
							<!-- Success Card -->
							<div class="card success-card">
								<div class="card-body">
									<div class="success-cont">
										<i class="fas fa-check"></i>

										<?php 
										 
											switch ($jsonCitaObj['status']) {
												case "aproved":
												echo '<h3>Cita agendada con Exito!</h3>';
													break;
												case "in_process":
													echo '<h3>Cita en Espera!</h3>';
														break;
												 
											}
											
											setlocale(LC_TIME, 'es_ES.UTF-8');
											setlocale(LC_TIME, 'spanish');
											
											$dia= date("d", strtotime($fecha_start)); 	
											$anio = strftime("%Y", strtotime($fecha_start));  
											$init_hora_min =date('h:i A', strtotime($fecha_start));
                                            $end_hora_min = date('h:i A', strtotime($fecha_end));
											$mes_texto = strftime("%B", strtotime($fecha_start) );  

											 $fecha_result = $dia." ".$mes_texto." del ".$anio." <br><br> ".$init_hora_min." - ".$end_hora_min;									
										?>

										
										<h4> <strong>  Cita Agendada  </strong><br> <br><strong>Codigo: <?=$codigoRef ?></strong><br><br> <strong> <?=$fecha_result ?> </strong> <br><br></h4>
										<a href="factura" class="btn btn-primary view-inv-btn">Ver Factura</a>
									</div>
								</div>
							</div>
							<!-- /Success Card -->
							
						<?php }  ?> 
						</div>
					</div>
					
				</div>
			</div>		
			<!-- /Page Content -->