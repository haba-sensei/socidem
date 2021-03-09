function lobby(id) {
    $.ajax({
        type: "POST",
        url: "controller/dashboard/conference.controlador.php",
        data: {
            id: id
        },
        beforeSend: function() {


        },
        error: function() {

        },
        success: function(data) {

            $(".cargando").remove();
            $("#meet").addClass("ajust_height");

            if (data['estado_cita'] == 2) {

                alert("conferencia concluida");

            } else {

                const domain = 'meet.jit.si';

                const options = {
                    roomName: data['room'],
                    userInfo: {
                        email: data['email'],
                        displayName: data['nombre']
                    },

                    parentNode: document.querySelector('#meet')
                };

                const api = new JitsiMeetExternalAPI(domain, options);

                api.addEventListener('participantRoleChanged', function(event) {
                    var pass = String(data['pass']);
                    if (event.role === "moderator") {
                        api.executeCommand('password', '');
                    }
                });

                api.addEventListener('participantRoleChanged', function(event) {
                    var pass = String(data['pass']);
                    if (event.role === 'moderator') {
                        api.executeCommand('password', '');
                    }
                });


            }





        }
    });



}



//