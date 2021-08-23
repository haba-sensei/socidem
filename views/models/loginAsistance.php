<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center" style="margin-bottom: 10%; margin-top: 8%;">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="views/assets/img/asistance.svg" class="img-fluid" alt="Doccure Login">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Ingreso Asistentes <a href="loginMed">¿Eres un Doctor?</a></h3>
                            </div>
                            <form action="controller/login_asistance.controlador.php" method="post" role="form"
                                class="theme-form Login-Form" data-form="login">
                                <div class="form-group form-focus">

                                    <input type="text" class="form-control floating" id="user-login"
                                        name="user-login" placeholder="Ingresa tu Usuario" required autocomplete="off">

                                    <label class="focus-label">Usuario</label>
                                </div>
                                <div class="form-group form-focus">

                                    <input type="password" class="form-control floating" id="clave-login"
                                        name="clave-login" placeholder="Ingresa tu Contraseña" required>

                                    <label class="focus-label">Password</label>
                                </div> 
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Ingresar</button>
                                <div class="res-Login animated fadeInDown"></div>
                                 
                                 
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>
        </div>

    </div>

</div>