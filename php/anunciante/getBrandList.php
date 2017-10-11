<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/get_brands_list?advertiser_id='.$_SESSION["UUID"]);

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

$obj = json_decode($resp);

//print_r ($gen);
$gen = $obj->{'response_object'}->{'values'};

//print_r ($gen);
     echo '<option value="">Seleccina la marca</option>';
foreach ($gen as &$valor) {
     echo '<option value="'.$valor->{'id'}.'">' . $valor->{'value'} . "</option>";
    //print_r ($valor->{'value'});
}
  
}

// Close request to clear up some resources
curl_close($ch);
