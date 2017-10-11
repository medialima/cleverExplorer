<?php

session_start();
//include('php/getDashboard.php');

include 'getTopNotificationsA.php';
$_SESSION['UUID']=$_POST["UUID"];
$_SESSION['name']=$_POST["name"];
$_SESSION['offset']=$_POST["offset"];
$_SESSION['mail']=$_POST["mail"];
$_SESSION['LAST_ACTIVITY'] = time(); 
header('Location: '.'../../dashboard-an.php');


?>  