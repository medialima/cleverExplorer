<?php
session_start();
require 'Instagram.php';
use MetzWeb\Instagram\Instagram;
require '../cleverApi/Sign.php';
$sign = new Sign();
$instagram = new Instagram(array(
    'apiKey'      => 'fca33c8d85c84faca044bee00c2eb2a0',
    'apiSecret'   => '621c7ab076ff4873bdf6d9d8bbf8edb8',
    'apiCallback' => 'http://cleverflow.es/cleveres/instagram/callbackIns.php'
));
//$instagram = new Instagram(array(
//    'apiKey'      => 'c0e4c06581b8475097633536c5e0ffe1',
//    'apiSecret'   => 'd62835da5679498783065ece7c79aee6',
//    'apiCallback' => 'http://localhost/cleveres/instagram/callbackIns.php'
//));
// grab OAuth callback code
$code = $_GET['code'];
$data = $instagram->getOAuthToken($code);
   //print_r ($data);
    // $code= $data->code;
$user= $data->user->username;
$access_token = $data->access_token;
$profilepic =  $data->user->profile_picture;
$name = $data->user->full_name;
$id = $data->user->id;


// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/instagram/is_profile_available?instagram_id='.$id);

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
   'Authorization:'.$sign->signAuth().'',
 ]
);
// Create body
$json_array = [

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
  $obj = json_decode($resp);
}

// Close request to clear up some resources

curl_close($ch);



if($obj->internal_code==0){
            $_SESSION['oauthTokenIns']= $access_token;
            $_SESSION['screen_name'] = $user;
            $_SESSION['profilePic'] = $profilepic;
            $_SESSION['insId'] = $id;
            
            header('Location: ../addInstagram.php');
        }else{
            
            header('Location: ../cuentas.php?error=1&usr='.$user);
        }