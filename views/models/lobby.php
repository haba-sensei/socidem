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
<section style="float: right;
    margin-right: 84px;">
    
    <div class="count">
    <div id="timer"></div>
        </div>
    
</section> 
    <div class="container-fluid" style="text-align: -webkit-center; " id="meet">
        
 
    </div>


</div>
 
<script src="views/assets/js/scripts/conference.js"></script>
<script>
    lobby('<?=$codigoRef ?>', '<?=$rol_ ?>');
  
</script>