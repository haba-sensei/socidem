<script src="adminP/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="adminP/assets/js/popper.min.js"></script>
        <script src="adminP/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="adminP/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="adminP/assets/plugins/raphael/raphael.min.js"></script>    
		<script src="adminP/assets/plugins/morris/morris.min.js"></script>  
		<script src="adminP/assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="adminP/assets/js/script.js"></script>
    <script>
$(document).ready(function() {
    
    /*Ajax para Login y registro (clientes y vendedores)*/
    $('.Login-Form').submit(function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        var type = $(this).attr('method');
        var url = $(this).attr('action');
        var formType = $(this).attr('data-form');

        if (formType == "login") {
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function() {
                    $(".res-Login").html('<div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: 100%">Iniciando sesion</div></div>');
                },
                error: function() {
                    $(".res-Login").html("Ha ocurrido un error en el sistema");
                },
                success: function(data) {
                    $(".res-Login").html(data);
                }
            });
            return false;
        }  


    });
 

});

    </script>