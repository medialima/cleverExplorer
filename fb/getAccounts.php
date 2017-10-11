<?php
require '../cleverApi/Sign.php';
// Get cURL resource
     $sign = new Sign();

    $ch = curl_init();

    // Set url
    curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/facebook/get_accounts/?access_token='.$_GET['access_tokenFB'].'');
    
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
      //print_r ("respuesta  ".$resp);
      print_r ($resp);
    }
    
    // Close request to clear up some resources
    curl_close($ch);

    
    

