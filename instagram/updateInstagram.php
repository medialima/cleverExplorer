<?php
require '../cleverApi/Sign.php';
$sign = new Sign();

// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/instagram/update_profile');

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
            "interest_id_2" => $_POST['int2'],
            "infl_per_women" => $_POST['fem'],
            "infl_per_u18" => $_POST['edad1'],
            "interest_id_3" => $_POST['int3'],
            "own_description" => $_POST['desc'],
            "gender_id" => $_POST['genero'],
            "instagram_id" => $_POST['InstagramId'],
            "infl_per_o35" => $_POST['edad4'],
            "infl_per_2635" => $_POST['edad3'],
            "infl_per_men" => $_POST['masc'],
            "infl_per_1825" => $_POST['edad2'],
            "interest_id_1" => $_POST['int1'],
             "profile_type" => intval($_POST['tipoCuenta'])
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
  header('Location: '.'../editInstagram.php?insId='.$_POST['InstagramId']);
}

// Close request to clear up some resources
curl_close($ch);
