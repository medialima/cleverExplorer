<?php

class Sign{
    public $cleverSecret ="e97f5c23a3e6c56c5b2a1d5198bd3382";
    public $clevertoken = "0a621001f74207fc9de4015de7d93329";
    
    function getTimeStamp(){
        $start_date = new DateTime("1969-07-21 02:56:00",new DateTimeZone('UTC'));
        $end_date = new DateTime("", new DateTimeZone('UTC'));
        $interval = $start_date->diff($end_date);    
        $days = $interval->days;
        $hours = $interval->format('%h'); 
        $minutes = $interval->format('%i');
        $timeStamp=(($days*24*60)+($hours * 60) + $minutes);
        return $timeStamp;
        
    }
    function signAuth(){
        
        $timestamp = $this->getTimeStamp();
        $first = substr($timestamp, 0, 3);
        $last = substr($timestamp, -3);
        $str = $first.$this->cleverSecret.$this->clevertoken.$last ;
        $auth=md5($str);
        $sign =$this->clevertoken.'&'.$timestamp.'&'.$auth;
        
        return $sign;
        
        
    }


}

