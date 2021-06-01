<div class="content">
    <div class="container-fluid">
<style >
.input_val {
    background: transparent;
    border: none;
    color: #20c0f3;
    font-size: 16px;
    font-weight: 600;
}

</style>
        <div class="row">
        <?php include 'views/admin/sidebar.php'; ?>

            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">

                        <!-- Checkout Form -->
                        <form action="controller/dashboard/checkoutPaciente.controlador.php" method="post" role="form"
                            class="theme-form checkout-Form" id="checkout_form">


                            <div class="info-widget">
                                <h4 class="card-title">Información General</h4>
                            <?php 
                                $token_v = $_SESSION["codigo_referido"];				
                                // $checkMembresia = ejecutarSQL::consultar("SELECT `membresias`.`precio`, `planes_membresias`.*, `planes_membresias`.`token_med`
                                // FROM `membresias`
                                //     , `planes_membresias`
                                // WHERE `planes_membresias`.`token_medico` = '$token_v' ");

                                // while($mem=mysqli_fetch_assoc($checkMembresia)){
                                //     $meses_activos=$mem['meses'];
                                //     $membresia=$mem['membresia'];
                                //     $promo=$mem['promo'];
                                //     $status=$mem['status']; 
                                //     $precio_membresia = $mem['precio'];

                                    
                                ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Codigo Promocional</label>
                                            <input class="form-control " id="codigoP" onkeyup="loaddata()" name="codigoP" type="text" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Membresia Actual</label>
                                            <input class="form-control" value="<?=$membresia_?>" type="text" disabled required>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title">Resumen de pago</h4>
                                   
                                    
                                    <ul class="booking-fee">
                                        <li>Meses Activos : <strong style="float: none;"> <?=$periodo_membresia_?> </strong></li>
                                        <li>Meses por Adquirir : <strong style="float: none;"> 12 </strong></li>
                                        <li>Tipo de Membresia Activa : <strong style="float: none;"> <?=$membresia_ ?> </strong></li>
                                        <li>Codigo Promocional : <strong style="float: none;"> <input type="text" class="input_val" id="codPromoClass"> </strong></li>
                                        <li>Meses por Promocion : <strong style="float: none;"> <?=$membresia_ == "Gratuito" ? '2 Meses' : '0 Meses' ?> </strong></li>

                                    </ul>
 
                                <div class="booking-total">
                                    <ul class="booking-total-list">
                                        <li>
                                            <span>Total</span>
                                            <span class="total-cost" style="float:none;"> S/ <input type="text" class="input_val" id="val_mem" disabled>  </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-4 submit-section">
                               
                                <?php   
                                echo "<a style='width: 100%;' id='id_btn_val' class='btn btn-primary submit-btn'  >Confirmar y Pagar</a>";                                  
                            // }   

                                // $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

                                // function generate_string($input, $strength = 16) {
                                // $input_length = strlen($input);
                                // $random_string = '';
                                // for($i = 0; $i < $strength; $i++) {
                                // $random_character = $input[mt_rand(0, $input_length - 1)];
                                // $random_string .= $random_character;
                                // }

                                // return $random_string;
                                // }       

                                // echo generate_string($permitted_chars, 8);
                                
                              ?>
                                </div>
                            </div>
                           
                        
                        </form>
                        <!-- /Checkout Form -->

                    </div>
                </div>

            </div>

            
        </div>

    </div>

</div>

<script>
    function loaddata(){ 

    $.ajax({
        type: "POST",
        url: "controller/dashboard/consulCodigoP.controlador.php", 
            dataType: "json", 
        data: {
            cod : $("#codigoP").val(),
        },
        
        success: function(data) {   
            $("#val_mem").val(data['precio']); 
            
            btn_val = document.getElementById('id_btn_val');
            btn_val.href = data['href'];
            
            input_status = document.getElementById('codigoP');
            input_codPromo = document.getElementById('codPromoClass');
            input_codPromo.value = data['porcentaje'];
            
            switch (data['status']) {
                case "activo":
                    input_status.classList.remove("is-invalid");
                    input_status.classList.add("is-valid");
                    
                    break;
                case "nulo":
                    if($("#codigoP").val() != ""){
                        input_status.classList.remove("is-valid");
                        input_status.classList.add("is-invalid");
                    }
                    
                break;
                
            }

            
           

           
        }
    });



    }

    loaddata();
    

</script>