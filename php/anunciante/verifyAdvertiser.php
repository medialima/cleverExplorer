<?php
require 'cleverApi/Sign.php';
$sign = new Sign();
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/activate?code='.$_GET["code"]);

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
  $obj = json_decode( $resp);
  if($obj->internal_code=="0"){
            session_start();
            //include('php/getDashboard.php');
            
            $ch2 = curl_init();

            // Set url
            curl_setopt($ch2, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/influencers/get_top_notifications?uuid='.$obj->response_object->advertiser_id);
            
            // Set method
            curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, 'GET');
            
            // Set options
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
            
            // Set headers
            curl_setopt($ch2, CURLOPT_HTTPHEADER, [
              'Authorization:'.$sign->signAuth().'',
             ]
            );
            
            
            // Send the request & save response to $resp
            $resp2 = curl_exec($ch2);
            
            if(!$resp2) {
              die('Error: "' . curl_error($ch2) . '" - Code: ' . curl_errno($ch2));
            } else {
               
               
               // Close request to clear up some resources
               
              $_SESSION['notificaciones']=$resp2;
              $_SESSION['UUID']=$obj->response_object->advertiser_id;
              $_SESSION['name']=$obj->response_object->username;
              $_SESSION['LAST_ACTIVITY'] = time();
              curl_close($ch2);
              curl_close($ch);
              header('Location: '.'dashboard-an.php');
              
            }
            
            
            
    }else{
      print_r($obj->message);
      }
  
}

// Close request to clear up some resources

