<?php 
if($routes[1] == "pacientes"){
    echo '<div class="col-md-12 d-flex">';
}else {
    echo '<div class="col-md-6 d-flex">';
}

?> 
     <!-- Feed Activity -->
     <div class="card card-table flex-fill">
         <div class="card-header">
             <h4 class="card-title">Lista de Pacientes
             <a class="btn btn-sm bg-info-light" style="<?= $routes[1] == "pacientes" ? 'margin-left: 70%;' : 'margin-left: 37%;' ?>" href="adminP/controller/pacientesExcel.controlador.php">
            <i class="fe fe-vector"></i> Exportar
            </a>
             
             </h4>
             
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table mb-0 table-hover table-center" id="paciente-table">
                     <thead>
                         <tr>
                             <th>Pac. Nombre</th>
                             <th>Tel.</th>
                             <th>Correo</th>
                             <th>Ver</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php  
                    while( $datos_listaPac =mysqli_fetch_assoc($pacConsProf)){ 
                    $id = $datos_listaPac['id'];
                    $correo = $datos_listaPac['correo'];  
                    $nombre = $datos_listaPac['nombre'];  
                    $telefono = $datos_listaPac['telefono'];  
                    
                    
                    echo '
                    <tr>
                    <td>
                    <h2 class="table-avatar"> 
                        <a href="adminDash-paciente-'.$id.'" style="text-transform: capitalize;"> '.$nombre .' </a>
                    </h2>
                    </td>
                    <td>'.$telefono.'</td>
                    <td>'. $correo.'</td>
                    <td class="text-center">
                    <div class="actions">
                        <a class="btn btn-sm bg-success-light" href="adminDash-paciente-'.$id.'">
                        <i class="fe fe-eye"></i> 
                        </a>
                        </div>
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
     <!-- /Feed Activity -->

 </div>