<div class="col-md-5 col-lg-4 col-xl-3  "> 
    <!-- Profile Sidebar -->
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="javascript:" class="booking-doc-img">
                <?php 
                if($foto_ == ""){
                    $foto_ = "1.jpg";
                } 
                 
                ?>
                    <img src="views/assets/images/medicos/<?=$foto_?>" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>Dr. <?=$nombre_ ?></h3>

                    <div class="patient-details">
                        <h4 class="mb-2"><?=$especialidad_ ?></h4> 
                        <h4 class="mb-2">Plan <?=$membresia_?> </h4> 
                        <h4 class="mb-2">Meses Activos: <?=$periodo_membresia_ ?></h4> 
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="">
                        <a href="dashboard">
                            <i class="fas fa-columns"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <?php   

                    switch ($membresia_) {
                        case "Gratuito" :  
                            echo '<li>
                            <a href="referidos">
                                <i class="fas fa-file-invoice"></i>
                                <span>Plan de Referidos</span>

                            </a>
                            </li>
                            <li>
                            <a href="membresias">
                                <i class="fas fa-star"></i>
                                <span>Membresias</span>

                            </a>
                            </li>
                            <li>
                            <a href="perfilMed">
                                <i class="fas fa-user-cog"></i>
                                <span>Perfil</span>

                            </a>
                            </li>

                            <li>
                                <a href="faqMed">
                                    <i class="fa fa-question-circle"></i>
                                    <span>Preguntas Frecuentes</span>

                                </a>
                            </li>

                            <li>
                                <a href="cambioPass">
                                    <i class="fas fa-lock"></i>
                                    <span>Cambiar Password</span>

                                </a>
                            </li>

                            <li>
                                <a href="salir">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </li>   
                            ';   
                        break;
                        
                        case "Profesional":
                            echo ' <li>
                            <a href="agenda">
                                <i class="fas fa-calendar-check"></i>
                                <span>Configurar Horarios</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendario">
                            <i class="fas fa-address-book"></i>
                                <span>Mi Calendario</span>
                            </a>
                        </li>
                        <li>
                            <a href="exepciones">
                            <i class="fas fa-cog"></i>
                                <span>Mis Exepciones</span>
                            </a>
                        </li>
                        <li>
                            <a href="pacientes">
                                <i class="fas fa-user-injured"></i>
                                <span>Clientes Atendidos</span>
                            </a>
                        </li>
                        <li>
                            <a href="referidos">
                                <i class="fas fa-file-invoice"></i>
                                <span>Plan de Referidos</span>

                            </a>
                        </li>
                        <li>
                            <a href="membresias">
                                <i class="fas fa-star"></i>
                                <span>Membresias</span>

                            </a>
                        </li>
                        <li>
                            <a href="mensajes">
                                <i class="fas fa-comments"></i>
                                <span>Mensajes</span>

                            </a>
                        </li>
                        <li>
                            <a href="perfilMed">
                                <i class="fas fa-user-cog"></i>
                                <span>Perfil</span>

                            </a>
                        </li>
                        
                        <li>
                            <a href="faqMed">
                                <i class="fa fa-question-circle"></i>
                                <span>Preguntas Frecuentes</span>

                            </a>
                        </li>

                        <li>
                            <a href="cambioPass">
                                <i class="fas fa-lock"></i>
                                <span>Cambiar Password</span>

                            </a>
                        </li>
                    
                        <li>
                            <a href="salir">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>';
                            break;
                    }

                    ?>    
                </ul>
            </nav>
        </div>
    </div>
    <!-- /Profile Sidebar -->

</div>
 