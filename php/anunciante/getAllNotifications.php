<?php
session_start();
require '../../cleverApi/Sign.php';

$sign = new Sign();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/get_notifications?advertiser_id='.$_SESSION["UUID"].'&notification_type='.$_GET["notType"].'&read_status='.$_GET["readStatus"]);

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization:'.$sign->signAuth().'',
 ]
);


// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
 //$allNot=json_decode($resp);
  print_r ($resp);
}

// Close request to clear up some resources
curl_close($ch);
