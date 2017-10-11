<?php

require '../../cleverApi/advertiser.php';

$cleverAd= new CleverflowAd();

return json_decode($cleverAd->validateCredentials($_POST['mail_address'],md5($_POST['password'])));