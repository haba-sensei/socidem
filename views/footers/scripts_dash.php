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

   function modalConfirm(id) {
   

   $.ajax({
       type: "POST",
       url: "controller/dashboard/confirmarCita.controlador.php",
       data: {
         id: id,
          
       },            
       success: function(data) {
           $('#cuerpo_confirm_paciente').html(data);
           $('#confirm_cita_paciente').modal('show');
       }
   });
   
  
  }


  function modalReasignar(id){

    $.ajax({
       type: "POST",
       url: "controller/dashboard/reAsignarCita.controlador.php",
       data: {
         id: id,
          
       },            
       success: function(data) {
           $('#cuerpo_citas_medico').html(data);
           $('#example_id').DataTable({"destroy": true, "iDisplayLength": "5", "aLengthMenu": [5, 10, 15, 20, 50, 100], "lengthMenu": true});
           $('#re_asig_cita_paciente').modal('show');
       }
   });
        
  }
/* AQUI ME QUEDE */ 
  // function actualizarAgenda(id){

  //     $.ajax({
  //       type: "POST",
  //       url: "controller/dashboard/actualizarAgendaCita.controlador.php",
  //       data: {
  //         id: id,
            
  //       },            
  //       success: function(data) {
  //           $('#cuerpo_citas_medico').html(data);
  //           $('#example_id').DataTable({"destroy": true, "iDisplayLength": "5", "aLengthMenu": [5, 10, 15, 20, 50, 100], "lengthMenu": true});
  //           $('#re_asig_cita_paciente').modal('show');
  //       }
  //   });

  // }

  function enviarWhatsApp(id) {

    
     alert("hoa");
  



  }


  function enviarCorreo(id) {
 
    $.ajax({
       type: "POST",
       url: "controller/dashboard/correo.controlador.php",
       data: {
         id: id,
          
       },            
       success: function(data) {

        alert(data);
         
       }
   });



  }
 
  function updateRoom() {
        
        
        var type = $('#update-video-conf').attr('method');
        var url = $('#update-video-conf').attr('action');
        var formType = $('#update-video-conf').attr('data-form');
       
        
        $.ajax({
            type: type,
            url: url,
            data: $('#update-video-conf').serialize(),
            success: function(data) {
              alert(data);
              window.location = "dashboard";
                   
            }
        }); 
      };     

      
  function updatePresencialCita() {
        
        
        var type = $('#update-presencial-cita').attr('method');
        var url = $('#update-presencial-cita').attr('action');
        var formType = $('#update-presencial-cita').attr('data-form');
       
        
        $.ajax({
            type: type,
            url: url,
            data: $('#update-presencial-cita').serialize(),
            success: function(data) {
              alert(data);
              window.location = "dashboard";
                   
            }
        }); 
      };     


     
     
 

</script>