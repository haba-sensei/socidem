<script>
$(document).ready(function() {
 
    $.ajax({
        type: "POST",
        url: "controller/dashboard/consulPerfil.controlador.php",
        dataType: "json",
        success: function(data) {
            
            document.getElementById("preview").src = "views/assets/images/medicos/"+data['foto'];
            
           $('#nombre').val(data['nombre_completo']);
           $('#correo').val(data['correo']);
           $('#documento').val(data['documento']);
           $('#num_colegiatura').val(data['num_colegiatura']);
           $('#especialidad').val(data['especialidad']);
           $('#telefono').val(data['telefono']);
           $('#ubicacion').val(data['ubicacion']);
           $('#sobre_mi').val(data['sobre_mi']);
           $('#nombre_clinica').val(data['nombre_clinica']);
           $('#direccion_clinica').val(data['direccion_clinica']);
           $('#precio_consulta').val(data['precio_consulta']);
           $('#services').tagsinput('add', data['servicios']);
           $('#titulo').val(data['titulo']);
           $('#universidad').val(data['universidad']);
           $('#anio_exp').val(data['años']);
           $('#membresia').val(data['membresia']);

            function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
            }

            $("#foto").change(function() {
            readURL(this);
            });
        }
    });

});  
$(document).ready(function() {
    $('.update-Form').submit(function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        var type = $(this).attr('method');
        var url = $(this).attr('action');
        var formType = $(this).attr('data-form');
       
        
        $.ajax({
            type: type,
            url: url,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                    $(".res-update").html('<div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: 100%">Iniciando sesion</div></div>');
                },
                error: function() {
                    $(".res-update").html("Ha ocurrido un error en el sistema");
                },
                success: function(data) {
                    
                    $(".res-update").html(data);
                }
        }); 
             
    });              
              
                    
           
    });


</script>