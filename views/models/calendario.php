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
                <h2 class="breadcrumb-title">Dashboard </h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <?php include 'views/admin/sidebar.php'; ?>

            <div class="col-md-7 col-lg-8 col-xl-9"> 
                 <style>
                .move_to_tomorrow {
                position: relative;
                left: 48.6rem;
                top: 6px;
                } 
                tbody {
                display: block;
                max-height: 100%;
                overflow-y: scroll;
                }
                 </style>
                <?php   

                $track = $codigo_referido_;
                echo '
                <div class="doc-info-right "wrapper" style="margin-bottom: 105px;">
                <div class="rescalendar" id="cal-'.$track.'"></div>
                </div>

                <script> cargaCalendar("cal-'.$track.'","'.$codigo_referido_.'", 8, "paciente") </script>
                ';

                ?>

            </div>
        </div>

    </div>

</div> 