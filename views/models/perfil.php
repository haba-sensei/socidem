  <?php include 'model/config.php' ?>
  <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Perfil Medico</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Perfil Medico</h2>
                </div>
            </div>
        </div>
    </div>
<!-- /Breadcrumb -->
<?php  $codigoRef = $routes[1]; 
            
            $med_cons = ejecutarSQL::consultar("SELECT `medicos`.`nombre_completo`, `perfil`.*, `perfil`.`correo`, `medicos`.`estado` FROM `medicos` , `perfil` WHERE `perfil`.`correo` = `medicos`.`correo` AND `perfil`.`codigo_referido` = '$codigoRef'");
            while($dato_med=mysqli_fetch_assoc($med_cons)){ 
                
                $nombre_completo_med =$dato_med['nombre_completo']; 
                $foto_med = $dato_med['foto']; 
                $titulo_med = $dato_med['titulo']; 
                $universidad_med = $dato_med['universidad']; 
                $especialidad_med = $dato_med['especialidad']; 
                $num_colegiatura_med = $dato_med['num_colegiatura']; 
                $nombre_clinica_med = $dato_med['nombre_clinica']; 
                $direccion_clinica_med = $dato_med['direccion_clinica']; 
                $servicios_med = $dato_med['servicios']; 
                $separated = explode(',',  $servicios_med);
                $precio_consulta_med = $dato_med['precio_consulta']; 
                $telefono_med = $dato_med['telefono']; 
                $correo_med = $dato_med['correo']; 
                $años_med = $dato_med['años']; 
                $ubicacion_med = $dato_med['ubicacion']; 
                $sobre_mi_med = $dato_med['sobre_mi']; 
                
            }
            
            
            ?>

<!-- Page Content -->
<div class="content">
    <div class="container">

        <!-- Doctor Widget -->
        <div class="card">
            <div class="card-body">
                <div class="doctor-widget">
                    <div class="doc-info-left">
                        <div class="doctor-img">
                            <img src="views/assets/images/medicos/<?=$foto_med ?>" class="img-fluid" alt="User Image">
                        </div>

                        <div class="doc-info-cont">
                            <h4 class="doc-name"> Dr. <?=$nombre_completo_med ?></h4>
                            <p class="doc-speciality" style="text-transform: capitalize;"><?=$titulo_med ?></p>
                            <h5 class="doc-department " style="color: #757575;">
                                <img src="views/assets/img/especial.png" class="img-fluid" alt="especialidad"> <span
                                    class="'.$slug_C.' ">Especialidad: <?=$especialidad_med?></span>
                            </h5>
                            <h5 class="doc-department" style="color: #757575;">
                                <img src="views/assets/img/estetoscopio.png" class="img-fluid" alt="colegiatura"
                                    style="margin-right: 13px;">Colegiatura: <?=$num_colegiatura_med ?>
                            </h5>
                            <div class="clinic-details">
                                <p class="doc-department" style="color: #757575; font-weight: 500;">
                                    <img src="views/assets/img/hospital.png" class="img-fluid" alt="localizacion">
                                    Consultorio:
                                    <span class="doc-locate"
                                        style="color: #757575; font-weight: 500; text-transform: capitalize;"><?=$nombre_clinica_med ?></span>
                                </p>
                            </div>
                            <div class="clinic-details">
                                <p class="doc-department" style="color: #757575; font-weight: 500;">
                                    <img src="views/assets/img/marcador-de-posicion.png" class="img-fluid" alt="localizacion">
                                    Dirección:
                                    <span class=""
                                        style="color: #757575; font-weight: 500; text-transform: capitalize;"><?=$direccion_clinica_med  ?></span>
                                </p>
                            </div>
                            <div class="clinic-services" style="position: relative; bottom: -6px;">
                                <?php 
                                    foreach ($separated as $servicios) { 
                                        echo '<span class="doc-servicio" style="text-transform: capitalize;">'.$servicios.'</span>';
                                    }
                                    ?>
                            </div>


                        </div>
                    </div>
                    <div class="doc-info-right">
                        <div class="clini-infos">
                            <ul>
                                <li><i class="far fa-thumbs-up"></i> 98%</li>
                                <li><i class="far fa-comment"></i> 17 Comentarios</li>
                                <li style="text-transform: capitalize;"> <i class="fas fa-map-marker-alt"></i> <?= $ubicacion_med ?> , Perú</li>
                                <li><i class="far fa-money-bill-alt"></i>
                                    S/ <span class="rango_price"><?=$precio_consulta_med ?></span>
                                    <i class="fas fa-info-circle" data-toggle="tooltip" title="Precio Por Cita"></i>
                                </li>
                                <li><i class="fas fa-certificate"></i> Perfil Verificado</li>
                            </ul>
                        </div>

                        <div class="clinic-booking">
                            <a class="apt-btn btna" id="btna" href="javascript:"
                                data-clipboard-text="<?=$url_base?>perfil-<?=$codigoRef ?>">Compartir Link</a>
                            <a class="apt-btn" href="cita-<?=$codigoRef ?>">Agendar Cita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Doctor Widget -->
        <!-- <button class="btna" id="btna" title="Copiar Link" data-clipboard-text="Este texto sera copiado">Copiar texto</button> -->


        <!-- Doctor Details Tab -->
        <div class="card">
            <div class="pt-0 card-body">

                <!-- Tab Menu -->
                <nav class="mb-4 user-tabs">
                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" href="#doc_overview" data-toggle="tab">Visión General </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#doc_locations" data-toggle="tab">Consultorios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#doc_reviews" data-toggle="tab">Comentarios</a>
                        </li>

                    </ul>
                </nav>
                <!-- /Tab Menu -->

                <!-- Tab Content -->
                <div class="pt-0 tab-content">

                    <!-- Overview Content -->
                    <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-12 col-lg-9">

                                <!-- About Details -->
                                <div class="widget about-widget">
                                    <h4 class="widget-title">Sobre Mi</h4>
                                    <p><?=$sobre_mi_med ?></p>
                                </div>
                                <!-- /About Details -->

                                <!-- Education Details -->
                                <div class="widget education-widget">
                                    <h4 class="widget-title">Titulo y Especialidad</h4>
                                    <div class="experience-box">
                                        <ul class="experience-list">
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content" style="line-height: 3;">
                                                        <a href="javascript:" class="name"
                                                            style="text-transform: capitalize"><?= $universidad_med  ?></a>
                                                        <div style="text-transform: capitalize"><?=$titulo_med ?></div>

                                                        <span class="time"><?=$años_med ?> Años de Estudios</span>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- /Education Details -->

                                <!-- Services List -->
                                <div class="service-list">
                                    <h4>Servicios</h4>
                                    <ul class="clearfix" style="line-height: 3;">
                                        <?php 
                                                    foreach ($separated as $servicios) { 
                                                        echo '<li style="text-transform: capitalize;">'.$servicios.'</li>';
                                                    }
                                                    ?>
                                    </ul>
                                </div>
                                <!-- /Services List -->



                            </div>
                        </div>
                    </div>
                    <!-- /Overview Content -->

                    <!-- Locations Content -->
                    <div role="tabpanel" id="doc_locations" class="tab-pane fade">

                        <!-- Location List -->
                        <div class="location-list">
                            <div class="row">

                                <!-- Clinic Content -->
                                <div class="col-md-6">
                                    <div class="clinic-content">
                                        <h4 class="clinic-name"><a href="javascript:"
                                                style="text-transform: capitalize;"><?=$nombre_clinica_med ?></a></h4>
                                        <p class="doc-speciality" style="text-transform: capitalize;"><i class="fas fa-map-marker-alt"></i>
                                            <?=$direccion_clinica_med ?></p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"></span>
                                        </div>

                                    </div>
                                </div>
                                <!-- /Clinic Content -->

                                <!-- Clinic Timing -->
                                <div class="col-md-4">
                                    <div class="clinic-timing">
                                        <div>
                                            <p class="timings-days">
                                                <span> Lun - Sab </span>
                                            </p>
                                            <p class="timings-times">
                                                <span>10:00 AM - 2:00 PM</span>
                                                <span>4:00 PM - 9:00 PM</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <!-- /Clinic Timing -->

                                <div class="col-md-2">
                                    <div class="consult-price">
                                        S/ <?=$precio_consulta_med ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Location List -->



                    </div>
                    <!-- /Locations Content -->

                    <!-- Reviews Content -->
                    <div role="tabpanel" id="doc_reviews" class="tab-pane fade">

                        <!-- Review Listing -->
                        <div class="widget review-listing">
                            <ul class="comments-list">

                                <!-- Comment List -->
                                <li>
                                    <div class="comment">
                                        <img class="avatar avatar-sm rounded-circle" alt="User Image" src="views/assets/img/patients/patient.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Richard Wilson</span>


                                            </div>

                                            <p class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                Curabitur non nulla sit amet nisl tempus
                                            </p>
                                            <div class="comment-reply">
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Responder
                                                </a>
                                                <p class="recommend-btn">
                                                    <span>Recomendado?</span>
                                                    <a href="javascript:" class="like-btn">
                                                        <i class="far fa-thumbs-up"></i> SI
                                                    </a>
                                                    <a href="javascript:" class="dislike-btn">
                                                        <i class="far fa-thumbs-down"></i> NO
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Comment Reply -->
                                    <ul class="comments-reply">
                                        <li>
                                            <div class="comment">
                                                <img class="avatar avatar-sm rounded-circle" alt="User Image" src="views/assets/images/medicos/1.jpg">
                                                <div class="comment-body">
                                                    <div class="meta-data">
                                                        <span class="comment-author">Charlene Reed</span>

                                                    </div>
                                                    <p class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        Ut enim ad minim veniam.
                                                        Curabitur non nulla sit amet nisl tempus
                                                    </p>
                                                    <div class="comment-reply">
                                                        <a class="comment-btn" href="#">
                                                            <i class="fas fa-reply"></i> Responder
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- /Comment Reply -->

                                </li>
                                <!-- /Comment List -->



                            </ul>

                            <!-- Show All -->
                            <div class="text-center all-feedback">
                                <a href="#" class="btn btn-primary btn-sm">
                                    Mostrar mas comentarios <strong>(17)</strong>
                                </a>
                            </div>
                            <!-- /Show All -->

                        </div>
                        <!-- /Review Listing -->

                        <!-- Write Review -->
                        <div class="write-review">
                            <h4>Escribele un comentario al <strong>Dr. <?=$nombre_completo_med ?></strong></h4>

                            <!-- Write Review Form -->
                            <form>
                                <div class="form-group">

                                </div>

                                <div class="form-group">
                                    <label>Comentario</label>
                                    <textarea id="review_desc" maxlength="100" class="form-control"></textarea>

                                    <div class="mt-3 d-flex justify-content-between"><small class="text-muted"><span id="chars">100</span> characters
                                            remaining</small></div>
                                </div>
                                <hr>

                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Enviar Comentario</button>
                                </div>
                            </form>
                            <!-- /Write Review Form -->

                        </div>
                        <!-- /Write Review -->

                    </div>
                    <!-- /Reviews Content -->

                    <!-- Business Hours Content -->


                </div>
            </div>
        </div>
        <!-- /Doctor Details Tab -->

    </div>
</div>
<!-- /Page Content -->