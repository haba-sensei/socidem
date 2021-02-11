<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Busqueda</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title" data-type="info"><?= $medTotal ?> Doctores </h2>
            </div>

        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">

    <div class="container-fluid">

        <div class="row" data-jplist-control="pagination" data-group="group1" data-name="name1" data-items-per-page="3" data-range="2"
            data-current-page="0" data-disabled-class="disabled" data-selected-class="active" data-name="pagination1">

            <div class="col-md-12 col-lg-4 col-xl-3">

                <!-- Search Filter -->
                <div class="card search-filter">
                    <div class="card-header">
                        <h4 class="mb-0 card-title">Filtro de Busqueda</h4>
                    </div>
                    <div class="card-body">

                        <div class="filter-widget">
                            <h4>Busca por Especialidad</h4>
                            <select class="form-control floating" data-jplist-control="select-filter" data-group="group1" data-name="name2"  >
                                <option value="0" data-path="default">Todas las Especialidades</option>

                                <?php 
                                
                                while($datos_espe=mysqli_fetch_assoc($espeCons)){
                                    $nom_espe=$datos_espe['nombre'];
                                    $slug_espe=$datos_espe['slug'];
                                     echo '
                                    
                                    <option value="'.$nom_espe.'" data-path=".'.$slug_espe.'">'.$nom_espe.'</option>
                                    
                                    ';
                                } 
                                
                                
                                
                                ?>

                            </select>
                        </div>


                        <div class="filter-widget">
                            <h4>Busca por Nombre</h4>
                            <div class="cal-icon">
                                <div style="display: none" data-jplist-control="hidden-sort" data-group="group1" data-path=".doc-name"
                                    data-order="desc" data-type="text" data-clear-btn-id="name-clear-btn">
                                </div>
                                <input type="text" class="form-control " data-jplist-control="textbox-filter" data-group="group1"
                                    data-name="my-filter-1" data-path=".doc-name" type="text" value="" data-clear-btn-id="name-clear-btn"
                                    placeholder="Busqueda por Nombre">
                                    <div class="input-group-append">
                               
                            </div>
                            </div>
                        </div>

                        <div class="filter-widget">
                            <h4>Busca por Servicio</h4>
                            <div class="cal-icon">

                                <input type="text" class="form-control " data-jplist-control="textbox-filter" data-group="group1"
                                    data-name="my-filter-1" data-path=".doc-servicio" type="text" value="" data-clear-btn-id="name-clear-btn"
                                    placeholder="Busqueda por Servicio">
                            </div>
                        </div>

                        <div class="filter-widget">
                            <h4>Busca por Consultorio</h4>
                            <div class="cal-icon">

                                <input type="text" class="form-control " data-jplist-control="textbox-filter" data-group="group1"
                                    data-name="my-filter-1" data-path=".doc-locate" type="text" value="" data-clear-btn-id="name-clear-btn"
                                    placeholder="Busqueda por Consultorio">
                            </div>
                        </div>

                        <div class="filter-widget">
                            <h4>Rango de Precios</h4>
                            <div class="range-slider">
                                <?php  
                                while($maxPrice_C=mysqli_fetch_assoc($maximoCons)){
                                $rago_Price_C=$maxPrice_C['precio_consulta'];
                                
                                ?>
                                <div data-jplist-control="slider-range-filter" data-path=".rango_price" data-group="group1"
                                    data-name="width-range-slider" data-min="0" data-from="0" data-clear-btn-id="name-clear-btn" data-to="<?php echo $rago_Price_C; ?>"
                                    data-max="<?php echo $rago_Price_C; ?>">

                                    <span class="range-slider-value">

                                        <span data-type="value-1"></span>

                                        <span style="float:right;" class="range-slider-value" data-type="value-2"></span>
                                    </span>

                                    <div class="jplist-slider" data-type="slider"></div>
                                    <span style="float:left;">Min</span>
                                    <span style="float:right;">Max</span>

                                </div>
                                <?php 
                                    }
                                ?>
                            </div>




                        </div>



                         
                       
                    </div>
                   
                </div>
                <!-- /Search Filter -->

            </div>


            <div class="col-md-12 col-lg-8 col-xl-9" data-jplist-group="group1">
            <?php  
                while($data_medicos_C=mysqli_fetch_assoc($listMedicos)){
                    $nombre_completo_C=$data_medicos_C['nombre_completo'];
                    $foto_C=$data_medicos_C['foto'];
                    $num_colegiatura_C=$data_medicos_C['num_colegiatura'];
                    $especialidad_C=$data_medicos_C['especialidad'];

                    $espConsFilter = ejecutarSQL::consultar("SELECT `especialidades`.`nombre`, `especialidades`.`slug`  FROM `especialidades` WHERE `especialidades`.`nombre` = '$especialidad_C';");

                    while($data_esp_F_C=mysqli_fetch_assoc($espConsFilter)){ 
                        
                        $slug_C=$data_esp_F_C['slug'];
                        
                    }
                     
                    
                    $servicios_C=$data_medicos_C['servicios'];
                    $titulo_C=$data_medicos_C['titulo'];
                    $nombre_clinica_C=$data_medicos_C['nombre_clinica'];
                    $direccion_clinica_C=$data_medicos_C['direccion_clinica'];
                    $precio_consulta_C=$data_medicos_C['precio_consulta'];
                    $codigo_referido_C=$data_medicos_C['codigo_referido'];
                    $separated = explode(',', $servicios_C);

                    
                    echo '
                    <div class="card" data-jplist-item>
                    <div class="card-body">
                        <div class="doctor-widget">
                            <div class="doc-info-left">
                                <div class="doctor-img">
                                    <a href="perfil-'.$codigo_referido_C.'">
                                        <img src="views/assets/images/medicos/'.$foto_C.'" class="img-fluid" alt="User Image" style="    height: 200px!important; position: relative; left: 8px;">
                                    </a>
                                    <div class="doctor-action" style="position: absolute; bottom: -5px; left: 27px;">
										 
										<a href="chat.html" class="btn btn-white msg-btn" data-toggle="tooltip" title="Comentarios">
											<i class="fas fa-comment-medical"></i>
										</a>
                                        <a href="chat.html" class="btn btn-white msg-btn" data-toggle="tooltip" title="Citas Presenciales">
                                            <i class="fas fa-notes-medical"></i>
                                        </a>
										<a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="tooltip" title="Citas Virtuales">
											<i class="fas fa-laptop-medical"></i>
										</a>
									</div>
                                </div>
                                <div class="doc-info-cont">
                                    <h4 class="doc-name"><a href="perfil-'.$codigo_referido_C.'" style="text-transform: capitalize;">Dr. '.$nombre_completo_C.'</a></h4>
                                    <p class="doc-speciality" style="text-transform: capitalize;">'.$titulo_C.'</p>
                                    <h5 class="doc-department " style="color: #757575;">
                                        <img src="views/assets/img/especial.png" class="img-fluid" alt="especialidad"> <span class="'.$slug_C.' ">Especialidad: '.$especialidad_C.'</span>
                                    </h5>
                                    <h5 class="doc-department" style="color: #757575;">
                                        <img src="views/assets/img/estetoscopio.png" class="img-fluid" alt="colegiatura" style="margin-right: 13px;">Colegiatura: '.$num_colegiatura_C.'
                                    </h5>
                                    <div class="clinic-details">
                                        <p class="doc-department" style="color: #757575; font-weight: 500;">
                                            <img src="views/assets/img/hospital.png" class="img-fluid" alt="localizacion">
                                            Consultorio: 
                                            <span class="doc-locate" style="color: #757575; font-weight: 500; text-transform: capitalize;">'.$nombre_clinica_C.'</span> 
                                        </p>
                                    </div>
                                    <div class="clinic-details">
                                        <p class="doc-department" style="color: #757575; font-weight: 500;">
                                            <img src="views/assets/img/marcador-de-posicion.png" class="img-fluid" alt="localizacion">
                                            Dirección: 
                                            <span class="" style="color: #757575; font-weight: 500; text-transform: capitalize;">'.$direccion_clinica_C.'</span> 
                                        </p>
                                    </div>
                                    <div class="clinic-services" style="position: relative; bottom: -6px;">';
                                    foreach ($separated as $servicios) { 
                                        echo '<span class="doc-servicio" style="text-transform: capitalize;">'.$servicios.'</span>';
                                    }
                                    echo '
                                    </div>
                                </div>
                            </div>
                            <div class="doc-info-right">
                                <div class="clini-infos">
                                    <ul>
                                        <li><i class="far fa-thumbs-up"></i> 98%</li>
                                        <li><i class="far fa-comment"></i> 17 Comentarios</li>

                                        <li><i class="far fa-money-bill-alt "></i>
                                            S/ <span class="rango_price">'.$precio_consulta_C.'</span>
                                            <i class="fas fa-info-circle" data-toggle="tooltip" title="Precio Por Cita"></i>
                                        </li>
                                        <li><i class="fas fa-certificate"></i> Perfil Verificado</li>
                                    </ul>
                                </div>
                                <div class="clinic-booking">
                                    <a class="view-pro-btn" href="perfil-'.$codigo_referido_C.'">Ver Perfil</a>
                                    <a class="apt-btn" href="cita-'.$codigo_referido_C.'">Agendar Cita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            
                }
            ?>

           



                

                



                <div class="text-center col" data-jplist-control="no-results" data-group="group1" data-name="no-results"><br>
                    <h5>No se encontraron resultados</h5>
                </div>

                
            </div>
                 <div class="product-pagination" style="margin-left: auto; margin-right: auto;">
                    <div class="theme-paggination-block">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination ">


                                        <li class="page-item" data-type="prev">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <ul class="pagination justify-content-center info jplist-holder" data-type="pages">
                                            <li class="page-item" data-type="page"><a class="page-link" href="#">{pageNumber}</a></li>
                                        </ul>
                                        <li class="page-item" data-type="next">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="product-search-count-bottom">
                                    <h5 data-type="info"> Mostrando Resultados {startItem} - {endItem} De {itemsNumber}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
                
    </div>

</div>