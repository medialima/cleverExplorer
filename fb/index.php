<?php

require_once 'vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '507492779418788',
  'app_secret' => '1115008601b0799cff9330ff2709621f',
  'default_graph_version' => 'v2.5',
  ]);

$helper = $fb->getRedirectLoginHelper();
$permissions2 = ['email', 'user_likes','ads_management','ads_read','email','manage_pages','publish_actions','publish_pages','read_custom_friendlists','read_insights','read_page_mailboxes','rsvp_event','tab_added','user_about_me','user_birthday','user_education_history','user_events','user_friends','user_games_activity','user_hometown','user_likes','user_location','user_managed_groups','user_photos','user_posts','user_relationship_details','user_relationships','user_religion_politics','user_status','user_tagged_places','user_videos','user_website','user_work_history']; // optional
$permissions =['user_friends','email', 'user_likes','manage_pages','publish_actions','read_insights','user_posts','ads_management','ads_read','user_relationships','publish_pages','user_status','user_website','user_birthday','user_hometown','user_location','user_education_history','user_work_history'];
$loginUrlFB = $helper->getLoginUrl('http://cleverflow.es/cleveres/fb/callback.php', $permissions);

