<?php

session_start();
//include('php/getDashboard.php');
$_SESSION['UUID']=$_POST["UUID"];
$_SESSION['name']=$_POST["name"];
$_SESSION['LAST_ACTIVITY'] = time(); 
header('Location: '.'../dashboard.php');


?>