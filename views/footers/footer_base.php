    
    <script src="views/assets/js/popper.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script src="views/assets/js/slick.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="views/assets/js/circle-progress.min.js"></script>
    <script src="views/assets/plugins/select2/js/select2.min.js"></script>
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
 
 