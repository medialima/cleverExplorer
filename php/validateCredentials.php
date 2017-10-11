<?php

require '../cleverApi/Influencers.php';

$clever= new Cleverflow();

return json_decode($clever->validateCredentials($_POST['mail_address'],md5($_POST['password'])));