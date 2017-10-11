<?php
session_start();
require '../cleverApi/Sign.php';
$sign = new Sign();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/facebook/link_profile');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:'.$sign->signAuth().'',
            'Content-Type: application/json' )                                                                  
            );  


// Create body
$json_array = [
            "uuid" => $_SESSION['UUID'],
            "infl_per_women" => doubleval($_POST['infl_per_women']),
            "interest_id_2" => intval($_POST['interest_id_2']),
            "is_external" => 0,
            "facebook_id" => $_POST['facebook_id'],
            "infl_per_u18" => doubleval($_POST['infl_per_u18']),
            "interest_id_3" => intval($_POST['interest_id_3']),
            "gender_id" => intval($_POST['gender_id']),
            "infl_per_o35" => doubleval($_POST['infl_per_o35']),
            "own_description" => $_POST['own_description'],
            "infl_per_2635" => doubleval($_POST['infl_per_2635']),
            "infl_per_men" =>doubleval($_POST['infl_per_men']),
            "infl_per_1825" => doubleval($_POST['infl_per_1825']),
            "interest_id_1" => intval($_POST['interest_id_1']),
            "access_token" => $_POST['access_token'],
            "account_type_id" => intval($_POST['account_type_id'])
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
