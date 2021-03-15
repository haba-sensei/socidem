<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Dashboard</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<style>
.doc-info-right {
    margin-left: 0 !important;
    -ms-flex: 0 0 200px;
    flex: 0 0 400px;
    max-width: 100%;
    margin-right: 3.6% !important;
    padding-top: 15px;
}

.move_to_tomorrow {
    position: relative;
    left: 51rem !important;
    top: 6px;
}

.blueClass {

    width: 10.3%;

}

tbody {
    display: block;
    max-height: 398px !important;
    overflow-y: none !important;
}

.firstColumn {
    display: table-cell !important;
}

.rescalendar_table .firstColumn {
    width: 80px;
    text-align: left;
    background: white;
    border: none;
}

.move_to_yesterday {
    position: relative;
    left: -28px;
    top: 6px;
}

.ajust_indice {
    background: #15558d !important;
    color: white;
    padding-left: 5px;
    font-weight: 600;
}

.tipo_cita_ul {
    list-style: none;
    display: contents;
}

.tipo_cita_ul li {
    padding-right: 96px; 
    display: -webkit-inline-box;
}

.ajust_tipo_cita {
    margin-left: 10px;
    width: 73%;
    height: 9px;
    border-radius: 4px;
    margin-top: 7px;
}

</style>
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <?php include 'views/admin/sidebar.php'; ?>

            <div class="col-md-7 col-lg-8 col-xl-9">

            <div class="col-m-12">
            <h2>Crear Agendas </h2>
      
                <ul class="tipo_cita_ul"> 
                    <li style=" padding-right: 74px;">Cita Online
                    <div class="progress-bar ajust_tipo_cita" style="background: #008292;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </li>
                    <li>Cita Presencial
                    <div class="progress-bar ajust_tipo_cita" style="background: #ff7c00;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                   
                    </li>
                    <li>Cita Agendada
                    <div class="progress-bar ajust_tipo_cita" style="background: #a0a0a0;" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                   
                    </li>
                </ul>
            </div>
                <?php  
                        $track = $codigo_referido_;
                        echo '
                        <div class="doc-info-right "wrapper">
                        <div class="rescalendar" id="cal-'.$track.'"></div>
                        </div>
                    
                        <script> cargaCalendar("cal-'.$track.'","'.$codigo_referido_.'", 8, "med") </script>
                        ';
                    
                ?>

            </div>



        </div>

    </div>

</div>