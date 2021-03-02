<?php require_once 'views/models/seguridad/payment.php'; ?> 

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Checkout </h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="card">
                    <div class="card-body">

                        <!-- Checkout Form -->
						<form action="controller/dashboard/checkoutPaciente.controlador.php" method="post" role="form"
                                class="theme-form checkout-Form" id="checkout_form">


                            <div class="info-widget">
                                <h4 class="card-title">Información del paciente</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Primer Nombre</label>
                                            <input class="form-control" name="nombre_paciente" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Apellido</label>
                                            <input class="form-control" name="apellido_paciente" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email_paciente"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Telefono</label>
                                            <input class="form-control" name="telefono_paciente" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group card-label">

                                            <textarea placeholder="Detalles medicos de la consulta..." name="detalles_paciente" class="form-control" rows="4"
                                                cols="50" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 submit-section">
                                    <?php require_once 'controller/dashboard/mercadoPago.controlador.php'; ?>
                                </div>
                            </div>



                        </form>
                        <!-- /Checkout Form -->

                    </div>
                </div>

            </div>

            <div class="col-md-5 col-lg-4 ">

                <!-- Booking Summary -->
                <div class="card booking-card">
                    <div class="card-header">
                        <h4 class="card-title">Resumen de pago</h4>
                    </div>
                    <div class="card-body">
						<?php 
						$token_v = $_SESSION['secur'];				
						$checkMed = ejecutarSQL::consultar("SELECT `medicos`.`nombre_completo`, `perfil`.`codigo_referido`, `perfil`.`foto`, `perfil`.`nombre_clinica`, `perfil`.`direccion_clinica`, `perfil`.`correo` FROM `medicos`, `perfil` WHERE `perfil`.`codigo_referido` = '$token_v' AND `perfil`.`correo` = `medicos`.`correo`");

						while($d=mysqli_fetch_assoc($checkMed)){
						$nombre_completo=$d['nombre_completo'];
						$foto=$d['foto'];
						$nom_clinica=$d['nombre_clinica'];
						$dir_clinica=$d['direccion_clinica'];
						
						?>
                        <!-- Booking Doctor Info -->
                        <div class="booking-doc-info">
                            <a href="<?="perfil-".$_SESSION['secur']; ?>" class="booking-doc-img">
                                <img src="views/assets/images/medicos/<?=$foto ?>" alt="User Image">
                            </a>
                            <div class="booking-info">
                                <h4 style="text-transform: capitalize"><a href="<?="perfil-".$_SESSION['secur']; ?>"><?="Dr ".$nombre_completo ?></a></h4>
								<div class="clini-infos">
                                    <ul>
                                        <li><i class="far fa-thumbs-up"></i> 98%</li>
                                        <li><i class="far fa-comment"></i> 17 Comentarios</li>
                                        <li><i class="fas fa-certificate"></i> Perfil Verificado</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Booking Doctor Info -->
				<?php }  ?> 
                        <div class="booking-summary">
                            <div class="booking-item-wrap">
                                <ul class="booking-date">
                                    <li>Fecha <span><?php 
									 
									echo $_SESSION['fecha'];
									
									?> </span></li>
                                    <li>Hora <span><?php 
									  
									echo $_SESSION['hora'];

									?> </span></li>
                                </ul>



                                <ul class="booking-fee">
                                    <li>Consulta <span>S/ <?=$_SESSION['precio_consulta'] ?></span></li>
                                    <li>Tipo de consulta <span><?=$_SESSION['tipo'] ?> </span></li>

                                </ul>
                                <div class="booking-total">
                                    <ul class="booking-total-list">
                                        <li>
                                            <span>Total</span>
                                            <span class="total-cost">S/ <?=$_SESSION['precio_consulta'] ?></span>
                                        </li>
                                    </ul>
                                </div>


								<div class="res-checkout animated fadeInDown"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Summary -->
				
            </div>
        </div>

    </div>

</div>
<!-- /Page Content -->