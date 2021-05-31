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
                                $checkMembresia = ejecutarSQL::consultar("SELECT `membresias`.`precio`, `planes_membresias`.*, `planes_membresias`.`token_med`
                                FROM `membresias`
                                    , `planes_membresias`
                                WHERE `planes_membresias`.`token_med` = '$token_v' ");

                                while($mem=mysqli_fetch_assoc($checkMembresia)){
                                    $meses_activos=$mem['meses'];
                                    $membresia=$mem['membresia'];
                                    $promo=$mem['promo'];
                                    $status=$mem['status']; 
                                    $precio_membresia = $mem['precio'];

                                    
                                ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Codigo Promocional</label>
                                            <input class="form-control " id="codigoP" onkeyup="loaddata()" name="codigoP" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Membresia Actual</label>
                                            <input class="form-control" id="membresia" type="text" disabled required>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title">Resumen de pago</h4>
                                   
                                    
                                    <ul class="booking-fee">
                                        <li>Meses Activos : <strong style="float: none;"> <?=$meses_activos?> </strong></li>
                                        <li>Meses por Adquirir : <strong style="float: none;"> 12 </strong></li>
                                        <li>Tipo de Membresia Activa : <strong style="float: none;"> <?=$membresia ?> </strong></li>
                                        <li>Codigo Promocional : <strong style="float: none;"> <input type="text" class="input_val" id="codPromoClass"> </strong></li>
                                        <li>Meses por Promocion : <strong style="float: none;"> <?=$promo == 0 ? '2 Meses' : '0 Meses' ?> </strong></li>

                                    </ul>
 
                                <div class="booking-total">
                                    <ul class="booking-total-list">
                                        <li>
                                            <span>Total</span>
                                            <span class="total-cost" style="float:none;"> S/ <input type="text" class="input_val" id="val_mem" value="<?=$precio_membresia?>"  disabled>  </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-4 submit-section">
                               
                                <?php   
                                echo "<a style='width: 100%;' id='id_btn_val' class='btn btn-primary submit-btn'  >Confirmar y Pagar</a>";                                  
                            }          
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
            
            input_status = document.getElementById('codPromoClass');
            
            
            
            if($("#codigoP").val() !== ""){ 
                if(data['status'] == "activo"){
                    input_status.classList.remove("is-invalid");
                    input_status.classList.add("is-valid");
                    
                }else {

                    input_status.classList.remove("is-valid");
                    input_status.classList.add("is-invalid");
                }
            }

           
        }
    });



    }

    loaddata();
    

</script>