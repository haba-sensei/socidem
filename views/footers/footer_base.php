    <script src="views/assets/js/jquery.min.js"></script>
    <script src="views/assets/js/popper.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script src="views/assets/js/slick.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="views/assets/js/circle-progress.min.js"></script>
    <script src="views/assets/js/script.js"></script>

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
        } else {
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function() {
                    $(".res-registro").html('Procesando... <br><img src="assets/img/enviando.gif" class="center-all-contens">');
                },
                error: function() {
                    $(".res-registro").html("Ha ocurrido un error en el sistema");
                },
                success: function(data) {
                    $(".res-registro").html(data);
                }
            });
            return false;
        }


    });
 

});

    </script>