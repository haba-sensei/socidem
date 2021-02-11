<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Agenda una Cita</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Agenda una Cita</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<?php 
$codigoRef = $routes[1];

$consMedico = ejecutarSQL::consultar("");


 while($datos_med_C=mysqli_fetch_assoc($consMedico)){
    $foto_med = $datos_med_C['foto'];


?>
<!-- Page Content -->
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="booking-doc-info">
                            <a href="perfilMed" class="booking-doc-img">
                                <img src="views/assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                            </a>
                            <div class="booking-info">
                                <h4><a href="perfilMed">Dr. Darren Elder</a></h4>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">35</span>
                                </div>
                                <p class="mb-0 text-muted"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-6">
                        <h4 class="mb-1">11 November 2019</h4>
                        <p class="text-muted">Monday</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 text-sm-right">
                        <div class="mb-3 bookingrange btn btn-white btn-sm">
                            <i class="mr-2 far fa-calendar-alt"></i>
                            <span></span>
                            <i class="ml-2 fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
                <!-- Schedule Widget -->
                <div class="card booking-schedule schedule-widget">

                    <!-- Schedule Header -->
                    <div class="schedule-header">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Day Slot -->
                                <div class="day-slot">
                                    <ul>
                                        <li class="left-arrow">
                                            <a href="#">
                                                <i class="fa fa-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <span>Mon</span>
                                            <span class="slot-date">11 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Tue</span>
                                            <span class="slot-date">12 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Wed</span>
                                            <span class="slot-date">13 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Thu</span>
                                            <span class="slot-date">14 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Fri</span>
                                            <span class="slot-date">15 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Sat</span>
                                            <span class="slot-date">16 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li>
                                            <span>Sun</span>
                                            <span class="slot-date">17 Nov <small class="slot-year">2019</small></span>
                                        </li>
                                        <li class="right-arrow">
                                            <a href="#">
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Day Slot -->

                            </div>
                        </div>
                    </div>
                    <!-- /Schedule Header -->

                    <!-- Schedule Content -->
                    <div class="schedule-cont">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Time Slot -->
                                <div class="time-slot">
                                    <ul class="clearfix">
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing selected" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="timing" href="#">
                                                <span>9:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>10:00</span> <span>AM</span>
                                            </a>
                                            <a class="timing" href="#">
                                                <span>11:00</span> <span>AM</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Time Slot -->

                            </div>
                        </div>
                    </div>
                    <!-- /Schedule Content -->

                </div>
                <!-- /Schedule Widget -->

                <!-- Submit Section -->
                <div class="text-right submit-section proceed-btn">
                    <a href="checkout" class="btn btn-primary submit-btn">Pagar Cita</a>
                </div>
                <!-- /Submit Section -->

            </div>
        </div>
    </div>
<?php } ?>
</div>