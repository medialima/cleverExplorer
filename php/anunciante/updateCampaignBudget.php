<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/campaigns/increase_campaign_budget?campaign_id='.$_POST["campaign_id"].'&budget_increment='.$_POST["budget_increment"]);

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

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
  echo $resp;
}

// Close request to clear up some resources
curl_close($ch);
