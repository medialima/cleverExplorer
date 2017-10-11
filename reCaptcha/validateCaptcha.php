<?
require 'config.php';
require_once 'src/autoload.php';

if (isset($_POST['g-recaptcha-response'])){
    //var_export($_POST);
    //$recaptcha = new \ReCaptcha\ReCaptcha($secret);
   $captcha=$_POST['g-recaptcha-response'];
   // $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        
        $resp=json_decode($response,true);
        if(isset($resp["error-codes"]))
        {
          echo 0;
        }else
        {
          echo 1;
        }
    // print_r($resp);
    //if ($resp->isSuccess()){
    //    
    //    echo 1;
    //}else{
    //    foreach ($resp->getErrorCodes() as $code) {
    //            echo '<tt>' , $code , '</tt> ';
    //        }
    //    echo 0;
    //}
}