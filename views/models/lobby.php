<?php require_once 'views/models/seguridad/payment.php'; ?>
<style>
@media only screen and (max-width: 575.98px) {
    .call-window {
        display: table;
        height: 40%;
        table-layout: fixed;
        width: 100%;
        background-color: #fff;
        border: 1px solid #f0f0f0;
    }

    .call-wrapper {
        height: calc(100vh - 115px);
    }


}

@media only screen and (max-width: 767.98px) {
    .call-content-wrap {
        height: 100%;
        position: relative;
        width: 100%;
        top: -5px;
    }

    .call-wrapper {
        height: calc(100vh - 150px);
    }

}

@media (orientation: landscape) {
    .call-wrapper {
        height: calc(100vh - 145px)
    }
}

.ajust_height {
    height: 77vh;
}
</style>

<?php  $codigoRef = $routes[1]; ?>
<div class="content">
    <div class="container-fluid" style="text-align: -webkit-center; " id="meet">
        <!-- <div class="row" style="height: 77vh;" id="meet">
           span
        </div> -->


        <div class="call-wrapper">
            <div class="call-main-row">
                <div class="call-main-wrapper">
                    <div class="call-view">
                        <div class="call-window">

                            <!-- Call Header -->
                            <div class="fixed-header">
                                <h3 style="text-align: -webkit-center;">LOBBY EN DIRECTO</h3>

                            </div>
                            <!-- /Call Header -->

                            <div class='call-contents'>
                                <div class='call-content-wrap'>
                                    <div class='voice-call-avatar'>
                                        <img src='views/assets/img/doctors/doctor-thumb-02.jpg' alt='User Image' class='call-avatar'>
                                        <span class='username'><?php   ?></span>
                            <?php 

                            $estado_cons = ejecutarSQL::consultar("SELECT `agenda`.`cod_consulta`, `agenda`.`estado` FROM `agenda` WHERE `agenda`.`cod_consulta` = '$codigoRef';");
                            while($dato_estado=mysqli_fetch_assoc( $estado_cons)){ 
                                $estado_dash =$dato_estado['estado']; 

                              
                                switch ($estado_dash) {
                                    case 1:
                                    echo " 
                                        <span class='call-timing-count'>No Disponible</span>
                                    </div>
                                    <div class='call-icons'>

                                        <ul class='call-items'>
                                            <li class='call-item'>
                                                <a href='javascript:' style='background: red;'>
                                                    <i class='fas fa-lock camera' style='color: white;'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>

                                </div>
                            </div>";
                                    break;

                                    case 2:
                                    echo "   <span class='call-timing-count'>Disponible</span>
                                    </div>
                                    <div class='call-icons'>

                                        <ul class='call-items'>
                                            <li class='call-item'>
                                                <a href='javascript:' onclick='lobby(&apos;$codigoRef&apos;)' style='background: green;'>
                                                    <i class='fas fa-video camera' style='color: white;'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>

                                </div>
                            </div>";
                                    break;
                                    case 3:
                                    echo "<span class='call-timing-count'>Disponible Re Asignado</span>
                                    </div>
                                    <div class='call-icons'>

                                        <ul class='call-items'>
                                            <li class='call-item'>
                                                <a href='javascript:' onclick='lobby(&apos;$codigoRef&apos;)' style='background: green;'>
                                                    <i class='fas fa-video camera' style='color: white;'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>

                                </div>
                            </div>";
                                    break;
                                }


                                
                            }  


                            ?>




                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


</div>

<script src="views/assets/js/scripts/conference.js"></script>