    <script src="views/assets/js/popper.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script src="views/assets/js/slick.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="views/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="views/assets/js/circle-progress.min.js"></script>
    <script src="views/assets/plugins/select1/js/select2.min.js"></script>
    <script src="views/assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="views/assets/plugins/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="views/assets/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <script src="views/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
    <script src="views/assets/js/profile-settings.js"></script>
    <script src="views/assets/js/jplist/jplist.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0/cropper.min.js"></script>
    <script src="views/assets/js/scripts/ajax.js"></script>
    <script src="views/assets/js/scripts/init.js"></script>
    <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="views/assets/plugins/datatables/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/es.js"></script> 
    <script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
    <script src="views/assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script> 

$("#weeklyDatePicker").datetimepicker({
    format: 'YYYY-MM-DD',
    locale: 'es',

});

var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var ctx2 = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});



$('#sandbox-container').datepicker({
    language: "es", 
    orientation: "bottom left",
    autoclose: true,
    todayHighlight: true,
    toggleActive: true
});

var clipboard = new ClipboardJS('.btna');

clipboard.on('success', function(e) {
    alert("Perfil Copiado");

});

var clipboard2 = new ClipboardJS('.btn_pass');

clipboard2.on('success', function(e) {
    alert("Password Copiado");

});


var clipboard3 = new ClipboardJS('.link_compartir');

clipboard3.on('success', function(e) {
    Swal.fire({
        title: 'PERFIL COPIADO',
        icon: 'success',
        showConfirmButton: false,
        timer: 1500
    });

});


function cambio() {

    $('.caja1').addClass('caja2').removeClass('caja1');

    $('.caja3').addClass('caja1').removeClass('caja3');


}
    </script>
    <?php 
  
  switch ($rol_) {
    case 1:
        if($estado_ == 0){
          echo '
          <script>
            $(document).ready(function(){
             $("#perfilMed").modal("show");
            });
          </script>
          ';
           
        }else {
            
        }
    break;

    
     
  }
  
  
  
  
  ?>