<div class="main-wrapper">


<header class="text-center header ">
    <nav class="text-center navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="index-2" class="navbar-brand logo">
                <img src="views/assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index-2" class="menu-logo">
                    <img src="views/assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="has-submenu active">
                    <a href="inicio">inicio </a>

                </li>
                <li class="has-submenu">
                    <a href="servicios">Nuestros Servicios</a>

                </li>
                <li class="has-submenu">
                    <a href="faqs">Preguntas Frecuentes</a>

                </li>
                <li class="has-submenu">
                    <a href="busqueda">Encuentra un Doctor</a>

                </li>
                <li class="has-submenu">
                    <a href="contacto">Contacto</a>

                </li>

                <li class="login-link">
                    <a href="loginMed">¿Es Usted Médico?</a>
                </li>
            </ul>
        </div>
            <?php 

            switch ($rol_) {
            case 1:
                echo '<ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-user"></i>
                    </div>

                
                    <div class="header-contact-detail">
                        <a href="javascript:">
                            <p href="login" class="contact-header">'.$nombre_.'</p>
                        </a>
                        <a href="salir">
                            <p class="contact-header">Cerrar Session</p>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link header-login" href="dashboard">Dashboard Med</a>
                </li>
                </ul>';
            break;

            case 2:
                echo '<ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-user"></i>
                    </div>

                
                    <div class="header-contact-detail">
                        <a href="javascript:">
                            <p href="login" class="contact-header">'.$nombre_.'</p>
                        </a>
                        <a href="salir">
                            <p class="contact-header">Cerrar Session</p>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link header-login" href="dashboard">Dashboard </a>
                </li>
                </ul>';
            break;
            default:  
                echo '<ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-hospital"></i>
                    </div>

                
                    <div class="header-contact-detail">
                        <a href="login">
                            <p href="login" class="contact-header">INGRESAR</p>
                        </a>
                        <a href="registro">
                            <p class="contact-header">REGISTRARSE</p>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link header-login" href="loginMed">¿Es Usted Médico? </a>
                </li>
                </ul>';
            break;
            }





            ?>

        
        
    </nav>
</header>