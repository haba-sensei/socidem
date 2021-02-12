<script src="views/assets/plugins/calendario/main.js"></script>
<script src='views/assets/plugins/calendario/locales-all.js'></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode = 'es';
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'listWeek'
        },
        eventClick: function(info) {
            var eventObj = info.event;
            var token = eventObj.extendedProps.token;
            var id = eventObj.id;
            
            modalCita(id, token);
            info.jsEvent.preventDefault(); // prevents browser from following link in current tab.
         },
        // hiddenDays: [ ] ,
        timeZone: 'UTC',
        initialDate: '2020-09-09',
        initialView: 'listWeek',
        editable: false,
        locale: initialLocaleCode,
        eventTimeFormat: { // like '14:30:00'
            hour: '2-digit',
            minute: '2-digit',
            hour12: true
        },
        eventDidMount: function(info) {

            switch (info.event.extendedProps.status) {
                case "libre":
                    info.el.style.cssText = "background-color: green;";
                    info.event.backgroundColor = "green";
                     
                    break;
                case "agendado":
                    info.el.style.cssText = "background-color: red;";
                    info.event.backgroundColor = "red";
                    
                    break;
            }



        },

        nowIndicator: true,
        navLinks: false, // can click day/week names to navigate views
        dayMaxEvents: true, // allow "more" link when too many events
        events: {
            url: 'php/get-events.php',
            failure: function() {

            }
        },
        loading: function(bool) {
            document.getElementById('loading').style.display =
                bool ? 'block' : 'none';
        },

    });

    calendar.render();
});


function modalCita(id, token) {
 

        $.ajax({
            type: "POST",
            url: "controller/dashboard/agenda.controlador.php",
            data: {
              valor: id,
              secur: token
            },            
            success: function(data) {
                $('#cuerpo_cita').html(data);
                $('#agenda_cita').modal('show');
            }
        });

}

function procesoCita(id, token) {
    var opcion = $('input:radio[name=radio]:checked').val();

    $.ajax({
            type: "POST",
            url: "controller/dashboard/CrearCita.controlador.php",
            data: {
              valor: id,
              secur: token,
              opcion: opcion
            },            
            success: function(data) {
                window.location = "checkout";
            }
        });

   
}


</script>


