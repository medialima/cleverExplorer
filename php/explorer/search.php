<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/metadata/search?meta_data_id=61784767-31b1-4b56-99dd-179003211abd');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [

  'Authorization:'.$sign->signAuth().'',
  "Content-Type: application/json; charset=utf-8",
 ]
);
// Create body
$json_array = [
            "admin_id" => "jcespinosa",
            "birth_date" => "1987-02-10",
            "gender_id" => 1,
            "influencer_type_id" => 1,
            "full_name" => "Juan Carlos Espinosa",
            "country_id" => 114,
            "residence_state_id" => 503
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
echo $resp;
}

// Close request to clear up some resources
curl_close($ch);


