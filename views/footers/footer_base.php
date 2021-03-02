    <script src="views/assets/js/popper.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script src="views/assets/js/slick.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="views/assets/js/circle-progress.min.js"></script>
    <script src="views/assets/plugins/select1/js/select2.min.js"></script>
    <script src="views/assets/js/moment.min.js"></script>
    <script src="views/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="views/assets/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="views/assets/plugins/dropzone/dropzone.min.js"></script>
    <script src="views/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
    <script src="views/assets/js/profile-settings.js"></script>
    <script src="views/assets/js/jplist/jplist.min.js"></script>
    <script src="views/assets/js/script.js"></script>
    <script src="views/assets/js/scripts/ajax.js"></script>
    <script src="views/assets/js/scripts/init.js"></script>
    <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="views/assets/plugins/datatables/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
   
   
    <script>
    var clipboard = new ClipboardJS('.btna');

    clipboard.on('success', function(e) {
       alert("Perfil Copiado");
      
    });

    var clipboard2 = new ClipboardJS('.btn_pass');

    clipboard2.on('success', function(e) {
      alert("Password Copiado");
      
    });

   

function cambio() {

    $('.caja1').addClass('caja2').removeClass('caja1');

    $('.caja3').addClass('caja1').removeClass('caja3');


}
    </script>
    <?php 
  
  switch ($rol_) {
    case 1:
        if($estado_ == 0){
          echo '
          <script>
            $(document).ready(function(){
             $("#perfilMed").modal("show");
            });
          </script>
          ';
           
        }else {
            
        }
    break;

    
     
  }
  
  
  
  
  ?>