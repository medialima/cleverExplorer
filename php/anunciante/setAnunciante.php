<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/create');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

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
            "advertiser_type" => $_POST["advertiser_type"],
            "advertiser_state_id" => $_POST["advertiser_state_id"],
            "advertiser_password" => md5($_POST["advertiser_password"]),
            "contact_1_last_name_2" => $_POST["contact_1_last_name_2"],
            "contact_1_mail_address" => $_POST["contact_1_mail_address"],
            "advertiser_name" => $_POST["advertiser_name"],
            "contact_1_first_name" => $_POST["contact_1_first_name"],
            "contact_1_phone" => $_POST["contact_1_phone"],
            "advertiser_username" => $_POST["advertiser_username"],
            "advertiser_website" => $_POST["advertiser_website"],
            "contact_1_last_name_1" => $_POST["contact_1_last_name_1"],
            "contact_1_cell_phone" => $_POST["contact_1_cell_phone"],
            "advertiser_municipality_id" => $_POST["advertiser_municipality_id"]
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
  print_r($resp);
}

// Close request to clear up some resources
curl_close($ch);
