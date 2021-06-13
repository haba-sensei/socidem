<?php include 'views/admin/breadcrumb_med.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <?php include 'views/admin/sidebar.php'; ?>

            <div class="col-md-7 col-lg-8 col-xl-9">
            <?php include 'views/admin/promo.php'; ?>
                <?php    
                if($membresia_ == "Gratuito") {
                echo '<img src="views/assets/images/clientes.png" >';
                }else { 

                ?>
                
                <div class="mb-0 card card-table">
                
                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="datatable_med_general" class="table mt-0 mb-0 table-hover table-center">
                                <thead>
                                    <tr>

                                        <th>Paciente</th>
                                        <th>Numero de Citas</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody style="max-height: fit-content;">

                                    <?php 

                                                        while($datos_pacientes_med =mysqli_fetch_assoc($listPacientesMed)){

                                                        $cod_medico =$datos_pacientes_med['cod_medico'];  
                                                        $email_usuario =$datos_pacientes_med['email_usuario']; 
                                                        
                                                        $consCitas = ejecutarSQL::consultar("SELECT `agenda`.`email_usuario` FROM `agenda` WHERE `agenda`.`email_usuario` = '$email_usuario'");
                                                        $numCitas = mysqli_num_rows($consCitas);
                                                        $namePac = ejecutarSQL::consultar("SELECT `pacientes`.`correo`, `pacientes`.`nombre` FROM `pacientes` WHERE `pacientes`.`correo` = '$email_usuario';");
                                                        while($dato_paciente_dash=mysqli_fetch_assoc($namePac)){ 
                                                            $nombre_paciente =$dato_paciente_dash['nombre']; 
                                                            
                                                        }  
                                                        
                                                        ?>

                                    <tr>
                                        <td style="text-transform: capitalize">

                                            <h2 class="table-avatar">

                                                <?=$nombre_paciente ?>

                                            </h2>
                                        </td>
                                        <td style="text-transform: capitalize">
                                            <h2 class="table-avatar">
                                                <?=$numCitas ?>
                                            </h2>
                                        </td>
                                        <td>
                                            <a href="historial-<?=md5($email_usuario)?>" class='btn btn-sm bg-info-light'>
                                                <i class='fas fa-file-invoice'></i> Ver Historial Medico </a>
                                        </td>

                                    </tr>
                                    <?php 

                                    }
                                    ?>
                                    <br>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>

    </div>

</div>