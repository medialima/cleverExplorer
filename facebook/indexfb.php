<?php
session_start();
require_once __DIR__ . 'autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1628261504082468',
  'app_secret' => '964fb97774bf22b07ff2c3d162245af0',
  'default_graph_version' => 'v2.2',
  ]);
  
 $helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes','ads_management','ads_read','bookmarked','email','manage_pages','publish_actions','publish_pages','read_custom_friendlists','read_insights','read_page_mailboxes','rsvp_event','tab_added','user_about_me','user_birthday','user_education_history','user_events','user_friends','user_games_activity','user_hometown','user_likes','user_location','user_managed_groups','user_photos','user_posts','user_relationship_details','user_relationships','user_religion_politics','user_status','user_tagged_places','user_videos','user_website','user_work_history']; // optional
//$loginUrl = $helper->getLoginUrl('http://localhost/clever20/login-callback.php',$permissions);
$loginUrl = $helper->getLoginUrl('http://cleverflow.com.mx/fb/login-callback.php',$permissions);


echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';