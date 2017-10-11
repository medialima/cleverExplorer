<?php
session_start();
require '../vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
define('CONSUMER_KEY', getenv('nBtmvGQMwyCkQTjYsWLoPw5Ps'));
define('CONSUMER_SECRET', getenv('WxN19tb8zQGmHebjo9kCP40PYSKSpefhpJnQbWAp6u21sPB2fd'));
require '../cleverApi/Sign.php';
$sign = new Sign();

$request_token = [];
$request_token['oauth_token'] = $_SESSION['oauth_token'];
$request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
    // Abort! Something is wrong.
}
if(isset($_REQUEST['denied']) ){
    
    header('Location: ../cuentas.php');
}else{
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
    $access_token = $connection->oauth("oauth/access_token", array("oauth_verifier" => $_REQUEST['oauth_verifier']));
 

        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/twitter/is_profile_available/?twitter_id='.$access_token['user_id']);
        
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
        $obj = json_decode($resp);
       
        curl_close($ch);
        if($obj->internal_code==0){
            $_SESSION['oauthToken']= $access_token['oauth_token'];
            $_SESSION['oauthSecret'] = $access_token['oauth_token_secret'];
            $_SESSION['twitterId'] = $access_token['user_id'];
            $_SESSION['screen_name'] = $access_token['screen_name'];           
            header('Location: ../redes.php');
        }else{
            
            header('Location: ../cuentas.php?error=1&usr='.$access_token['screen_name']);
        }
        
        // Close request to clear up some resources
      



    
}

