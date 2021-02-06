<?php 

switch ($rol_) {
    case 1:
        include 'views/admin/dashboard_med.php';
    break;

    case 2:
        include 'views/admin/dashboard.php';
    break;
     
    }
?>