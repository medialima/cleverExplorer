<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();

// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/take_money_from_credit_line?advertiser_id='.$_SESSION["UUID"].'&amount='.$_POST["amount"]);

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 2);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:'.$sign->signAuth().'',
            'Content-Type: application/json' )                                                                  
            );  


// Create body
$json_array = [
            "advertiser_id" => $_SESSION["UUID"],
            "amount" => $_POST["amount"],
        ]; 
//$body = json_encode($json_array);
$body="";

// Set body
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $body);



// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
  print_r ($resp);
}

// Close request to clear up some resources
curl_close($ch);
