<?php include 'views/admin/breadcrumb_med.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <?php include 'views/admin/sidebar.php'; ?>

            <div class="col-md-7 col-lg-8 col-xl-9">
                <?php include 'views/admin/promo.php';

                if ($membresia_ == "Gratuito") {
                    echo '<img src="views/assets/images/clientes.png" >';
                } else {

                ?>
                    

                            <div class="col-md-12" style="margin-bottom: -80px;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3 input-group">
                                            <div class="input-group-prepend">
                                                <span class="text-white input-group-text bg-info" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="weeklyDatePicker">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3 input-group">
                                            <div class="input-group-prepend">
                                                <span class="text-white input-group-text bg-info" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="weeklyDatePicker">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3 input-group" style="margin-top: 5px;">
                                            <button class="btn btn-success btn-sm" style="margin-right: 5px;" onclick="table_row()">Buscar</button>
                                            <button onclick="table_export()" style="margin-right: 5px;"  class="btn btn-info btn-sm">Exportar</button>
                                            <button onclick="remove_table()" class="btn btn-danger btn-sm">Limpiar</button>
                                        </div>
                                    </div>
                                    
                                    <div id="tabla_exp"></div>

                                    <div style="margin-right: 87px;">
                                    <canvas id="myChart" width="400" height="400"></canvas>  
                                    </div>
 
                                    <div> 
                                    <canvas id="myChart2" width="400" height="400"></canvas> 
                                    </div>
                                   
                                </div>

                                

                            </div>
                        </div>


                    
        <?php } ?>

        </div>
    </div>
</div>
</div>