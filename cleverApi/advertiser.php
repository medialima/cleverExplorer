<?php
require 'Sign.php';
class CleverflowAd{

function validateUser($user){
    $sign = new Sign();
    //Get cURL resource
    $ch = curl_init();
    
    // Set url
    curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/is_username_available?username='.$user);
    
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
    
    if(!$resp) {
      die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    } else {
      //echo "Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE);
      echo $resp;
    }
    
    // Close request to clear up some resources
    curl_close($ch);
    }
    function createInfluencer($influencer){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/influencers/create');
        
        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        
        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:'.$sign->signAuth().'',
            'Content-Type: application/json' )                                                                  
            );  
        
        // Create body
        
        $json_array = [
                    "phone" => $influencer['phone'],
                    "last_name_1" => $influencer['last_name_1'],
                    "academic_level_id" => $influencer['academic_level_id'],
                    "last_name_2" => $influencer['last_name_2'],
                    "gender_id" => $influencer['gender_id'],
                    "major_id" => $influencer['major_id'],
                    "cell_phone" => $influencer['cell_phone'],
                    "residence_state_id" =>$influencer['residence_state_id'],
                    "mail_address" => $influencer['mail_address'],
                    "password" => $influencer['password'],
                    "birthday" => $influencer['birthday'],
                    "occupation_id" => $influencer['occupation_id'],
                    "reference_code" => $influencer['reference_code'],
                    "residence_municipality_id" => $influencer['residence_municipality_id'],
                    "name" => $influencer['name']
                ]; 
        $body = json_encode($json_array);
        //print_r ($body);
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
    }
    
    function validateCredentials($mail,$pass){       
        $sign = new Sign();
        $params = array('username' => $mail, 'password' => $pass);

        /* Update URL to container Query String of Paramaters */
        $paramsUrl = '?' . http_build_query($params);

        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/validate_credentials'.$paramsUrl);
        
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
        
        if(!$resp) {
          die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
        } else {
          echo $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);
                
        
    }
    function getAccountSummary($uuid){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/get_account_summary?advertiser_id='.$uuid);
        
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
        
        if(!$resp) {
          die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
        } else {
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

        
        
    }
    
    function getAccount($socialId, $id){
      
         $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/influencers/get_social_profile_summary?social_network_id='.$socialId.'&social_id='.$id.'');
        
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
        
        if(!$resp) {
          die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
        } else {
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

        
    }
    function getCampaigns($uuid){
      
         $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/advertisers/get_campaigns?advertiser_id='.$uuid);
        
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
        
        if(!$resp) {
          die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
        } else {
            return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

        
    }
    
    


}