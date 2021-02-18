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
 

</script>