
<?php 
 //Errors Reporting
 ini_set('display_errors', 'On');
 error_reporting(E_ALL);

 include './connect.php';
 include './includes/functions/functions.php';

 // Routes 

 $tpl 	= 'includes/templates/';

 // include important Files


 include $tpl.'header.php';
if (!isset($noNavbar)) {
    include $tpl . 'navbar.php';
 }

 