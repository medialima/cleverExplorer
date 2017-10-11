<?php

require 'vendor/autoload.php';
use MetzWeb\Instagram\Instagram;
//$instagram = new Instagram(array(
//    'apiKey'      => 'c0e4c06581b8475097633536c5e0ffe1',
//    'apiSecret'   => 'd62835da5679498783065ece7c79aee6',
//    'apiCallback' => 'http://localhost/cleveres/instagram/callbackIns.php'
//));

$instagram = new Instagram(array(
    'apiKey'      => 'fca33c8d85c84faca044bee00c2eb2a0',
    'apiSecret'   => '621c7ab076ff4873bdf6d9d8bbf8edb8',
    'apiCallback' => 'http://cleverflow.es/cleveres/instagram/callbackIns.php'
));

//echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";