<?php 
if($routes[1] == "doctores"){
    echo '<div class="col-md-12 d-flex">';
}else {
    echo '<div class="col-md-6 d-flex">';
}

?> 
    <style>
    
        .inv-badge {
            color: #fff;
            display: inline-flex;
            font-size: 11px;
            justify-content: center;
            min-width: 80px;
            width: fit-content;
            margin-left: 46px;
        }

    </style>
    <!-- Recent Orders -->
    <div class="card card-table flex-fill">
        <div class="card-header" style="display: inline-flex;">
            <h4 class="card-title">Nomina de Doctores</h4>
            
            
            <a class="btn btn-sm bg-info-light" style="<?= $routes[1] == "doctores" ? 'margin-left: 62%;' : 'margin-left: 17%;' ?>" href="adminP/controller/doctoresExcel.controlador.php">
            <i class="fe fe-vector"></i> Exportar
            </a>

            <a class="btn btn-sm bg-info-light" style="<?= $routes[1] == "doctores" ? '' : '' ?>" onclick="pagarNomina('<?=date('m/Y')?>')">
            <i class="fe fe-money"></i> Pagar
            </a>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0 table-hover table-center" id="doc-table">
                    <thead>
                        <tr>
                            <th>Nombre Doc.</th>  
                            <th>Estado del Mes</th> 
                        </tr>
                    </thead>
                    <tbody>
                     <?php  
                    while( $datos_listaMed =mysqli_fetch_assoc($listaMedConsProf )){ 
                    $nombre_completo = $datos_listaMed['nombre_completo'];  
                    $foto = $datos_listaMed['foto'];  
                    $codigo_referido = $datos_listaMed['codigo_referido'];  
                    $periodo_membresia = $datos_listaMed['periodo_membresia'];  
                    $membresia = $datos_listaMed['membresia']; 
                    $fecha_mes_ceros = date("m");
                    $fecha_busqueda = $fecha_mes_ceros."/".date("Y");

                    $consult_pago = ejecutarSQL::consultar("SELECT `pagos_medicos`.`cod_med`, `pagos_medicos`.`fecha` FROM `pagos_medicos` WHERE `pagos_medicos`.`cod_med` = '$codigo_referido' AND `pagos_medicos`.`fecha` = '$fecha_busqueda';");
                    $consult_pago_num = mysqli_num_rows($consult_pago);

                    if($consult_pago_num > 0){
                        $estado_pago = "Pagado";
                    }else {
                        $estado_pago = "No pagado";
                    }
                    echo '
                        <tr >
                        <td style="display: inline-grid;">
                            <h2 class="table-avatar">
                                <a href="adminDash-doctor-'.$codigo_referido.'" class="mr-2 avatar avatar-sm">
                                <img class="avatar-img rounded-circle" style="margin-top: 15px;"  src="views/assets/images/medicos/'.$foto.'" alt="User Image"></a>
                                <a href="adminDash-doctor-'.$codigo_referido.'" style="text-transform: capitalize;">'.$nombre_completo.'</a>   
                            </h2>  
                            ';
                            if($membresia != "Profesional"){
                                echo '<span class="badge badge-pill bg-danger inv-badge">Gratuito';
                            }else {
                                echo '<span class="badge badge-pill bg-info inv-badge">Profesional';
                            } 
                            echo '   
                            '.$periodo_membresia.' Meses</span>
                        </td> 
                        <td class="text-center">
                        ';
                            if($estado_pago != "Pagado"){
                                echo '<span class="badge badge-pill bg-danger inv-badge">No Pagado</span>';
                            }else {
                                echo '<span class="badge badge-pill bg-info inv-badge">Pagado</span>';
                            } 
                            echo '   
                              
                        </td>

                        </tr>
                ';
                    
                    }
                      
                     ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /Recent Orders -->

</div>