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
        margin-bottom: 7vh;
    }
</style>

<?php $codigoRef = $routes[1]; ?>
<div class="content">
    <section style="float: right;
    margin-right: 84px;">



    </section>
    <div class="container-fluid" style="text-align: -webkit-center; " id="meet">


    </div>
    <div class="col-md-12 col-lg-12 col-xl-12" style="margin-bottom: 33vh; padding-left: 40px; padding-right: 40px;">
        <center><h3>HISTORIAL DEL PACIENTE</h3></center>
        <br><br>
        <nav class="mb-4 user-tabs">

            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="#historial" data-toggle="tab">Historia Clínica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#analisis_lab" data-toggle="tab">Análisis de Laboratorio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#imagenes_digitales" data-toggle="tab">Imágenes Digitales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#imagenes_recetas" data-toggle="tab">Recetas Medicas</a>
                </li>
            </ul>
        </nav>

        <div class="tab-content ">

            <?php
            $ConsEmailUser = ejecutarSQL::consultar("SELECT `agenda`.`cod_consulta`, `agenda`.`email_usuario` FROM `agenda` WHERE `agenda`.`cod_consulta` = '$codigoRef';");
            while ($datos_email_pac = mysqli_fetch_assoc($ConsEmailUser)) { 
                $cod_correo_usuario = $datos_email_pac['email_usuario'];
            }
           
            $get_mail = md5($cod_correo_usuario);
             
           
            $ConsHistorial = ejecutarSQL::consultar("SELECT `historial_medico`.*, `historial_medico`.`correo` FROM `historial_medico` WHERE `historial_medico`.`correo` = '$get_mail';");
            while ($datos_historial_med = mysqli_fetch_assoc($ConsHistorial)) {

                $cod_correo = $datos_historial_med['correo'];

                $objHistoria_clinica = $datos_historial_med['historia_clinica'];
                $objAnalisis_lab = $datos_historial_med['analisis_lab'];
                $objImg_digitales = $datos_historial_med['img_digitales'];
                $objRecetas = $datos_historial_med['recetas_med'];

            ?>

                <div class="tab-pane show active" id="historial">


                    <?php
                    $historia_clinica = json_decode($objHistoria_clinica, true);
                    $count = 0;

                    foreach ($historia_clinica as $key => $entry) {
                        $count = $count + 1;

                        echo '
                           <button type="button" class="btn btn-block" style="margin-bottom: 15px; background:#008298; color:white;" data-toggle="collapse" data-target="#h' . $count . '">' . $entry['fecha'] . '</button>
                           <div id="h' . $count . '" class="collapse" style="margin-top: 15px; margin-bottom: 15px;">
                                ' . $entry['texto'] . '
                                <br><br> 
                           </div>
                         
                           ';
                    }

                    ?>



                </div>

                <div class="tab-pane" id="analisis_lab">

                    <?php
                    $analisis_lab = json_decode($objAnalisis_lab, true);
                    $count = 0;

                    foreach ($analisis_lab as $key => $entry) {
                        $count = $count + 1;

                        echo '
                           <button type="button" class="btn btn-block" style="margin-bottom: 15px; background:#008298; color:white;" data-toggle="collapse" data-target="#a' . $count . '">' . $entry['fecha'] . '</button>
                           <div id="a' . $count . '" class="collapse" style="margin-top: 15px; margin-bottom: 15px;">
                           ';

                        foreach ($entry['analisis'] as $key => $entry) {

                            echo '
                               <img class="img_data" src="views/assets/images/historial/analisis_lab/' . $entry['pictures'] . '" alt="" >
                               ';
                        }
                        echo ' 
                           </div>
                           ';
                    }

                    ?>

                </div>

                <div class="tab-pane" id="imagenes_digitales">

                    <?php
                    $img_digitales = json_decode($objImg_digitales, true);
                    $count = 0;

                    foreach ($img_digitales as $key => $entry) {
                        $count = $count + 1;

                        echo '
                           <button type="button" class="btn btn-block" style="margin-bottom: 15px; background:#008298; color:white;" data-toggle="collapse" data-target="#i' . $count . '">' . $entry['fecha'] . '</button>
                           <div id="i' . $count . '" class="collapse" style="margin-top: 15px; margin-bottom: 15px;">
                           ';

                        foreach ($entry['digitales'] as $key => $entry) {

                            echo '
                               <img class="img_data" src="views/assets/images/historial/img_digitales/' . $entry['pictures'] . '" alt="" >
                               ';
                        }

                        echo '
                           </div>
                           ';
                    }

                    ?>
                </div>

                <div class="tab-pane" id="imagenes_recetas">


                    <?php
                    $recetas = json_decode($objRecetas, true);
                    $count = 0;

                    foreach ($recetas as $key => $entry) {
                        $count = $count + 1;

                        echo '
                           <button type="button" class="btn btn-block" style="margin-bottom: 15px; background:#008298; color:white;" data-toggle="collapse" data-target="#r' . $count . '">' . $entry['fecha'] . '</button>
                           <div id="r' . $count . '" class="collapse" style="margin-top: 15px; margin-bottom: 15px;">
                           ';

                        foreach ($entry['recetas'] as $key => $entry) {

                            echo '
                               <img class="img_data" src="views/assets/images/historial/recetas_med/' . $entry['pictures'] . '" alt="" >
                               ';
                        }

                        echo '
                           
                           </div>
                           
                           ';
                    }

                    ?>
                </div>


            <?php } ?>

        </div>



    </div>

</div>



<script src="views/assets/js/scripts/conference.js"></script>
<script>
    lobby('<?= $codigoRef ?>', '<?= $rol_ ?>');
</script>