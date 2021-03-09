<?php require_once 'views/models/seguridad/payment.php'; ?>
<style>
@media only screen and (max-width: 575.98px) {
    .call-window {
        display: table;
        height: 40%;
        table-layout: fixed;
        width: 100%;
        background-color: #fff;
        border: 1px solid #f0f0f0;
    }

    .call-wrapper {
        height: calc(100vh - 115px);
    }


}

@media only screen and (max-width: 767.98px) {
    .call-content-wrap {
        height: 100%;
        position: relative;
        width: 100%;
        top: -5px;
    }

    .call-wrapper {
        height: calc(100vh - 150px);
    }

}

@media (orientation: landscape) {
    .call-wrapper {
        height: calc(100vh - 145px)
    }
}

.ajust_height {
    height: 77vh;
}
</style>

<?php  $codigoRef = $routes[1]; ?>
<div class="content">
<section style="float: right;
    margin-right: 84px;">
    <p>
        <span id="days"></span> días / <span id="hours"></span> horas / <span id="minutes"></span> minutos / <span id="seconds"></span> segundos
    </p>
</section> 
    <div class="container-fluid" style="text-align: -webkit-center; " id="meet">
        
 
    </div>


</div>

<script src="views/assets/js/scripts/conference.js"></script>
<script>
    lobby('<?=$codigoRef ?>');
    document.addEventListener('DOMContentLoaded', () => { 

//===
// VARIABLES
//===
const DATE_TARGET = new Date('03/08/2021 9:00 PM');
// DOM for render
const SPAN_DAYS = document.querySelector('span#days');
const SPAN_HOURS = document.querySelector('span#hours');
const SPAN_MINUTES = document.querySelector('span#minutes');
const SPAN_SECONDS = document.querySelector('span#seconds');
// Milliseconds for the calculations
const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

//===
// FUNCTIONS
//===

/**
* Method that updates the countdown and the sample
*/
function updateCountdown() {
    // Calcs
    const NOW = new Date()
    const DURATION = DATE_TARGET - NOW;
    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
    // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

    // Render
    SPAN_DAYS.textContent = REMAINING_DAYS;
    SPAN_HOURS.textContent = REMAINING_HOURS;
    SPAN_MINUTES.textContent = REMAINING_MINUTES;
    SPAN_SECONDS.textContent = REMAINING_SECONDS;
}

//===
// INIT
//===
updateCountdown();
// Refresh every second
setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
});
</script>