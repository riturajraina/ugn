<?php

namespace App\Helpers;

class GeneralHelper extends ValidatorBase {

    public function __construct() {
        
    }

    public function getHourArray()
    {
        $hours  =   array();

        for ($i=0;$i <= 23;$i++) {
             $i = $i < 10 ? '0' . $i : $i;
             $hours[$i] = $i;
        }
        
        return $hours;
    }
    
    public function getMinuteArray()
    {
        $minutes = array();
        for ($i=0;$i <= 59;$i++) {
            $i = $i < 10 ? '0' . $i : $i;
            $minutes[$i] = $i;
        }
        return $minutes;
    }
    
    public function stripSlashesFromImagesOnly($text)
    {
        $textArray  =   explode('<img', $text);
        
        
        
        if (count($textArray)) {
            
            $updatedTextArray   =   [];
            
            foreach ($textArray as $text) {
                $imgString  =   substr($text, 0, strpos($text, '>'));
                $text   =   str_ireplace($imgString, '', $text);
                $imgString  = stripslashes($imgString);
                $text   =   $imgString . $text;
                $updatedTextArray[] =   $text;
            }
            
            if (count($updatedTextArray)) {
                $text   =   implode('<img', $updatedTextArray);
            }
        }
        
        /*if (stristr($text, '<img')) {
            echo '<br>textArray : <pre>' . print_r($textArray, true) . '</pre>';
            echo '<br>Text String : ' . $text;exit;
        }*/
        
        return $text;
    }
}
