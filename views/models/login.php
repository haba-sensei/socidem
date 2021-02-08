<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="views/assets/img/login.png" class="img-fluid" alt="Doccure Login">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Ingreso Pacientes</h3>
                            </div>
                            <form action="controller/login.controlador.php" method="post" role="form"
                                class="theme-form Login-Form" data-form="login">
                                <div class="form-group form-focus">

                                    <input type="email" class="form-control floating" id="correo-login"
                                        name="correo-login" placeholder="Ingresa tu Correo" required>

                                    <label class="focus-label">Email</label>
                                </div>
                                <div class="form-group form-focus">

                                    <input type="password" class="form-control floating" id="clave-login"
                                        name="clave-login" placeholder="Ingresa tu Contraseña" required>

                                    <label class="focus-label">Password</label>
                                </div>
                                <div class="text-right">
                                    <a class="forgot-link" href="forgot-password.html">Perdida de Password?</a>
                                </div>
                                
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Ingresar</button>
                                <div class="res-Login animated fadeInDown"></div>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">o</span>
                                </div>
                                <div class="row form-row social-login">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-facebook btn-block"><i
                                                class="mr-1 fab fa-facebook-f"></i> Facebook</a>
                                    </div>
                                    <div class="col-6">
                                    <?php 
                                    require_once 'model/credencialesLog.php';
                                    echo "<a href='".$client->createAuthUrl()."' class='btn btn-google btn-block'><i class='mr-1 fab fa-google'></i>
                                        Gmail</a>
                                        ";
                                        ?>
                                    </div>
                                </div>
                                
<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>
                                <div class="text-center dont-have">No tengo una cuenta? <a
                                        href="registro">Registro</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->

            </div>
        </div>

    </div>


    
<script>

    


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '170568131242133',
      cookie     : true,
      xfbml      : true,
      version    : 'v9.0'
    });
      
    FB.AppEvents.logPageView();   
    
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



</div>


