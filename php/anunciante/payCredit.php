<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();
//********
// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/make_payment_to_credit_line?advertiser_id='.$_SESSION['UUID'].'&amount='.$_POST['amount']);

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, 2); 

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Cookie: ai_user=0b514a9eaa0f4acc999af988fb655808|2016-03-01T15:37:04.2554121+00:00; ai_session=2b87df0de97046ac8e9549cf48d71039|2016-04-07T23:38:23.4811945+00:00|2016-04-07T23:38:23.5684623+00:00; ARRAffinity=1a37986c07af4e2fe485710dcf7806e917ffe8d51069507c6d5bd8235653213b",
  "Authorization: 527b6bfea41071d297cbd30be83c0a29&24130705&4c9458b62937c4c2bfd42846fc47c707",
 ]
);


// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
  print($resp); 
}

// Close request to clear up some resources
curl_close($ch);


//************
// Get cURL resource
