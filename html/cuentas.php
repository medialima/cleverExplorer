<?php
session_start();
require 'vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', getenv('uaDU9lycxXO1LFnp2qrw'));
define('CONSUMER_SECRET', getenv('PaOEvGAcAszRpCClpXq6vSfGg4lx6wpCw6hTLtZvlZw'));
define('OAUTH_CALLBACK', getenv('127.0.0.1/clever20/twitter/callback.php'));
require 'cleverApi/Influencers.php';
if(!isset( $_SESSION['UUID']))
{
    header('Location: '.'index.html');

}
//echo $_SESSION['UUID'];
require 'fb/index.php';


$connection = new TwitterOAuth('uaDU9lycxXO1LFnp2qrw', 'PaOEvGAcAszRpCClpXq6vSfGg4lx6wpCw6hTLtZvlZw');

$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => 'http://cleverflow.com.mx/clever/twitter/callback.php'));

$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

$clever= new Cleverflow();

$dash= json_decode($clever->getAccountSummary($_SESSION['UUID']));


?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Cleverflow | México</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <script src="js/vendor/modernizr.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery.circliful.css">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.circliful.min.js"></script>
		<script src="js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="css/sweetalert.css" />

    </head>
    <body class="login-bg">

              <?include 'layout/top.php';
      include 'layout/submenu.php';
      ?>
			     

                <div class="row">
                    <div class="large-3 medium-6 small-12 columns">   
                        <div class="acc-wrap">                                   
                            <div class="accaunt-head tw">Twitter<a href="<? echo $url?>">+ </a></div>
							<? //$twitter= $dash->response_object->SocialNetworksSummary->twitter_accounts};
							
							foreach ($dash->response_object->SocialNetworksSummary->twitter_accounts as &$tw) {
									echo '
									<div class="accaunt-list">
										<div class="avatar mini"> <img src ="'.$tw->profile_picture_url.'" alt="profilePic"> </div><div class="accaunt-name">'.$tw->profile_name.'</div>
										<div class="accaunt-edit"><a href="editRedes.php?red='.$tw->social_id.'"></a></div>
										<div class="accaunt-delete"><a href="#" onclick="eraseTw('.$tw->social_id.');"></a></div>                              
									</div>';
									
								}
															
							?>
                           
													
                        </div><!--reg-wrap-->
                    </div><!--colums-->
                    <div class="large-3 medium-6 small-12 columns">   
                        <div class="acc-wrap">                                                                  
                            <?php echo '<div class="accaunt-head fb">Facebook<a href="'.$loginUrlFB.'">+</a></div>' ?>
                          <? //$twitter= $dash->response_object->SocialNetworksSummary->twitter_accounts};
							
							foreach ($dash->response_object->SocialNetworksSummary->facebook_accounts as &$fbd) {
									echo '
									<div class="accaunt-list">
										<div class="avatar mini"> <img src ="'.$fbd->profile_picture_url.'" alt="profilePic"> </div><div class="accaunt-name">'.$fbd->profile_name.'</div>
										<div class="accaunt-edit"><a href="editRedFB.php?red='.$fbd->social_id.'"></a></div>
										<div class="accaunt-delete"><a href="#" onclick="eraseFb(\''.$fbd->social_id.'\');"></a></div>                              
									</div>';
									
								}
															
							?>
							
                        </div><!--reg-wrap-->
                    </div><!--colums-->
                    <div class="large-3  medium-6 small-12 columns">   
                        <div class="acc-wrap">                                                                     
                            <div class="accaunt-head ig">Instagram<a href="#">+</a></div>
                            <!--<div class="accaunt-list">
                                <div class="avatar mini"> <img src="img/pena.jpg" alt="pena"> </div><div class="accaunt-name">RodrigoSuarez</div>
                                <div class="accaunt-edit"><a href="#"></a></div>
                                <div class="accaunt-delete"><a href="#"></a></div>                              
                            </div>   -->       
                        </div><!--reg-wrap-->
                    </div><!--colums-->
                    <div class="large-3 medium-6 small-12 columns">   
                        <div class="acc-wrap">                                                                    
                            <div class="accaunt-head ot">Otros<a href="#">+</a></div>
                           <!-- <div class="accaunt-list">
                                <div class="avatar mini"> <img src="img/pena.jpg" alt="pena"> </div><div class="accaunt-name">RodrigoSuarez</div>
                                <div class="accaunt-edit"><a href="#"></a></div>
                                <div class="accaunt-delete"><a href="#"></a></div>                              
                            </div>-->
							       
                        </div><!--reg-wrap-->
                    </div><!--colums-->
                </div><!--row-->
                      
                
                

               
            </div><!--dash-->
			<? include 'layout/footer.php' ?>
        </div><!--Wraper-->

        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/circle.js"></script>
        <script>
            $(document).foundation();
			
			function eraseTw(id) {
				
				swal({  title: "¿Estás seguro?",
					text: "Si borras cuentas puedes dejar de participar en varias campañas ",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Sí, Borrar Cuenta",
					cancelButtonText: "No, mantener cuenta",
					closeOnConfirm: false,
					closeOnCancel: false
				}, function(isConfirm){
						if (isConfirm) {
								jQuery.ajax({
									url: "twitter/deleteTW.php?twitterId="+id
								})
								.done(function(data, textStatus, jqXHR) {
									swal("Borrada!", "Tu cuenta ha sido borrada", "success");
									swal({  title: "¡Borrada!",
										text: "Tu cuenta ha sido borrada",
										type: "success",
										showCancelButton: false,
										confirmButtonColor: "#DD6B55",
										confirmButtonText: "OK",
										closeOnConfirm: true
									},function(isConfirm){
										location.reload()
										});
								})
								.fail(function(jqXHR, textStatus, errorThrown) {
									swal("Oops", "Hubo un problema al borrar tu cuenta por favor vuelve a intentar", "error");
								})
								.always(function() {
									/* ... */
										});
								
								
						} else {
								swal("Cancelado", "Tu cuenta sigue participando :)", "error");
								}
						});
			}
			function eraseFb(id) {
				
				swal({  title: "¿Estás seguro?",
					text: "Si borras cuentas puedes dejar de participar en varias campañas "+id,
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Sí, Borrar Cuenta",
					cancelButtonText: "No, mantener cuenta",
					closeOnConfirm: false,
					closeOnCancel: false
				}, function(isConfirm){
						if (isConfirm) {
								jQuery.ajax({
									url: "fb/deleteFB.php?fbId="+id
								})
								.done(function(data, textStatus, jqXHR) {
									swal("Borrada!", "Tu cuenta ha sido borrada  "+id, "success");
									swal({  title: "¡Borrada!",
										text: "Tu cuenta ha sido borrada",
										type: "success",
										showCancelButton: false,
										confirmButtonColor: "#DD6B55",
										confirmButtonText: "OK",
										closeOnConfirm: true
									},function(isConfirm){
										location.reload()
										});
								})
								.fail(function(jqXHR, textStatus, errorThrown) {
									swal("Oops", "Hubo un problema al borrar tu cuenta por favor vuelve a intentar", "error");
								})
								.always(function() {
									/* ... */
										});
								
								
						} else {
								swal("Cancelado", "Tu cuenta sigue participando :)", "error");
								}
						});
			}
			
			
        </script>   
    </body>
</html>
