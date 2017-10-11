<?php

require 'Sign.php';

class Catalogues {
    function getGenero(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=1');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    
    function getOcupacion(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=6');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    
    function getEstado(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=11');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getCiudad($estado){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_parent?parent_id='.$estado.'');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getNivelAcademico(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=5');
        
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
          print_r("Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE));
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    
    function getCarrera(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=8');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getCarreraMedia(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=121');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getCarreraSuperior(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=122');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getCarreraAlta(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=123');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getIntereses(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=3');
        
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
          //echo "\nResponse HTTP Body : " . $resp;
         return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

        
    }
    function getRedes($UUID,$id){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/influencers/get_social_networks_abstract?uuid='.$UUID.'&social_network_id='.$id.'');
        
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
          //echo "\nResponse HTTP Body : " . $resp;
         return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

        
    }
    function getTipoNotificaciones(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=106');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getNotificacionesStatus(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=124');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getPaymentsScope(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=128');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getPaymentPeriod(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=130');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getPaymentStatus(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=127');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getOtherSocialNetworks(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=111');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getAdvertisersType(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=105');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
    function getIndustry(){
        $sign = new Sign();
        // Get cURL resource
        $ch = curl_init();
        
        // Set url
        curl_setopt($ch, CURLOPT_URL, 'http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id?catalogue_id=139');
        
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
          return $resp;
        }
        
        // Close request to clear up some resources
        curl_close($ch);

    }
}

