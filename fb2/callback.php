<?php
session_start();
require_once '../vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '499654656860832',
  'app_secret' => '231369a38f24c2306bd356d82c0f5736',
  'default_graph_version' => 'v2.4',
  ]);

 $helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
//echo ("access  ".$accessToken);
if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  
  $fb->setDefaultAccessToken($accessToken);
  
  
try {
  $response = $fb->get('/me?fields=picture');
  
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$_SESSION['URLFB']=$userNode->getPicture()->getUrl();

   header('Location: ../add-facebook.php');
  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}