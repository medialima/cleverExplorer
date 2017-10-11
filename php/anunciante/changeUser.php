<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();

// Get cURL resource
$ch = curl_init();
//echo($sign->signAuth());
// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/set_new_username/');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization:'.$sign->signAuth().'',
  "Content-Type: application/json",
 ]
);
// Create body
$json_array = [
            "new_username" => $_POST['user'],
            "password_recovery_code" => $_POST['codeMail']
        ]; 
$body = json_encode($json_array);

// Set body
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
  $_SESSION["name"]=$_POST['user'];
  print_r($resp);
}

// Close request to clear up some resources
curl_close($ch);
