<?php

require '../../cleverApi/advertiser.php';

$clever= new CleverflowAd();

return json_decode($clever->validateUser($_GET['user']));