function procesoCita(id, token, fecha, hora, tipo) {

    $.ajax({
        type: "POST",
        url: "controller/dashboard/crearCita.controlador.php",
        data: {
            valor: id,
            secur: token,
            tipo: tipo,
            fecha: fecha,
            hora: hora

        },
        success: function(data) {

            window.location = "checkout";
        }
    });


}