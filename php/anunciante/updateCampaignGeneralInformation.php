<?php
session_start();
require '../../cleverApi/Sign.php';
$sign = new Sign();
$imgId = "";
//*******************Media
if(isset($_FILES['file'])){
  $string = basename($_FILES['file']['name']);
$string = preg_replace('/\s+/', '', $string);
$string.=$_SESSION["UUID"].rand(10,10000);
$url2 = "http://cleverflowcoreapi.azurewebsites.net/api/media/upload_media?custom_name=".$string; // e.g. http://localhost/myuploader/upload.php // request URL
//$filename = $_FILES['file']['name'];
//$filedata = $_FILES['file']['tmp_name'];
//$filesize = $_FILES['file']['size'];
//$fileContents = file_get_contents($filedata);


//$fileName = $_SERVER["DOCUMENT_ROOT"]."/cleveres/anexos.pdf";
//$fileSize = filesize($fileName);


//echo $_FILES['file']['type'];
//$finfo = finfo_open(FILEINFO_MIME_TYPE);
//$finfo = finfo_file($finfo, basename($_FILES['file']['name']));

$cFile = new CURLFile($_FILES['file']['tmp_name'], $_FILES['file']['type'], basename($_FILES['file']['name']));
$data = array( "filedata" => $cFile, "filename" => $cFile->postname);

   // echo basename($_FILES['file']['name']);
   
    //$headers = array("Content-Type:multipart/form-data"); // cURL headers for file uploading
    //$postfields = array("filedata" => "@$filedata", "filename" => $filename, )
    $ch2 = curl_init();
     curl_setopt($ch2, CURLOPT_HTTPHEADER, array(
            'Authorization:'.$sign->signAuth().'')                                                                  
            );
     curl_setopt($ch2, CURLOPT_URL, $url2                                                           
            );
     curl_setopt($ch2, CURLOPT_HEADER, false                                                               
            );
     curl_setopt($ch2, CURLOPT_POST,1);
                 
     curl_setopt($ch2, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    
   
    $resp2 = curl_exec($ch2);
    $obj2 = json_decode( $resp2);
    
    $imgId = $obj2->{"response_object"}->{"media_id"};
    curl_close($ch2);
    
    
  
}

$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/campaigns/update_general_information');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization:'.$sign->signAuth().'',
  "Content-Type: application/json",
 ]
);
// Create body
$json_array = [
            "cover_media_id" => $imgId,
            "campaign_id" => $_POST["campaign_id"],
            "campaign_name" => $_POST["campaign_name"]
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
  echo $resp;
}

// Close request to clear up some resources
curl_close($ch);
