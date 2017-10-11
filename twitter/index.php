<?php
session_start();
require '../vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', getenv('nBtmvGQMwyCkQTjYsWLoPw5Ps'));
define('CONSUMER_SECRET', getenv('WxN19tb8zQGmHebjo9kCP40PYSKSpefhpJnQbWAp6u21sPB2fd'));
define('OAUTH_CALLBACK', getenv('desarrollo.cleverflow.es/twitter/callback.php'));


$connection = new TwitterOAuth('nBtmvGQMwyCkQTjYsWLoPw5Ps','WxN19tb8zQGmHebjo9kCP40PYSKSpefhpJnQbWAp6u21sPB2fd');

$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => 'desarrollo.cleverflow.es/twitter/callback.php'));

$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

echo '<a href="' . $url . '">Log in with twiter!</a>';
