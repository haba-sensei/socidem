 function cargaCalendar(id_cal, id_ref, size, type) {
     var id_calendar = "#" + id_cal;
     $.ajax({
         type: 'POST',
         url: 'controller/dashboard/calendarioBusqueda.controlador.php',
         dataType: 'json',
         data: {
             id_ref: id_ref
         },
         success: function(data) {

             var fecha_init = data['fecha_adelantada'];
             var agenda = data['agenda'];



             $(id_calendar).rescalendar({
                 id: id_cal,
                 format: 'DD/MM/YYYY',
                 jumpSize: 1,
                 calSize: size,
                 locale: 'es',
                 refDate: fecha_init,
                 lang: {
                     'today': 'Hoy',
                     'init_error': 'Error al inicializar',
                     'no_data_error': 'No se encontraron datos para mostrar'
                 },

                 data: agenda,
                 dataKeyField: 'name',
                 dataKeyValues: data['indices'],
                 type: type

             });





         }
     });

 }