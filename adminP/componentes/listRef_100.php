<?php 
if($routes[1] == "referidos100"){
    echo '<div class="col-md-12 d-flex">';
}else {
    echo '<div class="col-md-6 d-flex">';
}
$count = 0;
?> 

     <!-- Feed Activity -->
     <div class="card card-table flex-fill">
         <div class="card-header">
             <h4 class="card-title">Lista de Referidos al 100%
             <a class="btn btn-sm bg-info-light" style="<?= $routes[1] == "referido100" ? 'margin-left: 70%;' : 'margin-left: 63%;' ?>" href="adminP/controller/ref100Excel.controlador.php">
            <i class="fe fe-vector"></i> Exportar
            </a>
             </h4>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table mb-0 table-hover table-center" id="referidos-interno-table">
                     <thead>
                         <tr> 
                             <th>Codigo</th>  
                             <th>Cantidad</th>
                             <th>Porcentaje</th>
                             <th>Estado</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php  
                    while( $datos_listaRefInterno =mysqli_fetch_assoc($refPorcentajeConsProf)){ 
                    $codigo = $datos_listaRefInterno['codigo'];
                    $tipo = $datos_listaRefInterno['tipo'];  
                    $cantidad = $datos_listaRefInterno['cantidad'];  
                    $porcentaje = $datos_listaRefInterno['porcentaje']; 
                    $status = $datos_listaRefInterno['status']; 
                    $count++;
                    if($status == 1){
                        $estado_ = "";
                        // <span class='badge badge-pill bg-danger inv-badge'>Usado</span>
                    }else {
                        $estado_ = "checked";
                        // <span class='badge badge-pill bg-success inv-badge'>Libre</span>
                    }
                     
                    echo '
                    <tr> 
                    <td> '.$codigo.' </td> 
                    <td>'. $cantidad.' </td> 
                    <td>'. $porcentaje.'</td>
                    
                    <td> 

                        <div class="status-toggle">
                            <input type="checkbox" value="'.$codigo.'" id="status_'.$count.'" class="check" '.$estado_.'>
                            <label for="status_'.$count.'" class="checktoggle" onclick=" cambioEstado('.$count.') ">checkbox</label>
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