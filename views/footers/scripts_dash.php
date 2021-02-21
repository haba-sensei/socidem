<script>

function modalCred(id) {
   

 $.ajax({
     type: "POST",
     url: "controller/dashboard/credenciales.controlador.php",
     data: {
       id: id,
        
     },            
     success: function(data) {
         $('#cuerpo_cred').html(data);
         $('#credenciales').modal('show');
     }
 });

}
function modalDetalle(id) {
   

    $.ajax({
        type: "POST",
        url: "controller/dashboard/agendaMedListPacient.controlador.php",
        data: {
          id: id,
           
        },            
        success: function(data) {
            $('#cuerpo_detalles_paciente').html(data);
            $('#detalles_med_paciente').modal('show');
        }
    });
    
   
   }


 

</script>