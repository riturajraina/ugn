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
    
    //function dom_xml_to_array($xml)
    function dom_xml_to_array($root)
    {   
        try {
            /*$root = new \DOMDocument();

            $root->loadXML($xml);*/

            $result = array();

            if ($root->hasAttributes()) {
                $attrs = $root->attributes;
                foreach ($attrs as $attr) {
                    //$result['@attributes'][$attr->name] = $attr->value;
                    $result['attributes'][$attr->name] = $attr->value;
                }
            }

            if ($root->hasChildNodes()) {
                $children = $root->childNodes;
                if ($children->length == 1) {
                    $child = $children->item(0);
                    if ($child->nodeType == XML_TEXT_NODE) {
                        $result['_value'] = $child->nodeValue;
                        return count($result) == 1
                            ? $result['_value']
                            : $result;
                    }
                }
                $groups = array();
                foreach ($children as $child) {
                    if (!isset($result[$child->nodeName])) {
                        $result[$child->nodeName] = self::dom_xml_to_array($child);
                    } else {
                        if (!isset($groups[$child->nodeName])) {
                            $result[$child->nodeName] = array($result[$child->nodeName]);
                            $groups[$child->nodeName] = 1;
                        }
                        $result[$child->nodeName][] = self::dom_xml_to_array($child);
                    }
                }
            }

            return $result;
            
        } catch (\Exception $ex) {
            $this->error    =   'Error while converting XML to array. '
                    . 'Please contact administrator';
            
            if (env('APP_DEBUG')) {
                $this->error    =   'XML to array error : ' . $ex->getMessage();
            }
            
            return false;

        }
        
    }
    
    public function convertIntoHoursAndMinutes($time, $type='secs')
    {
        $type       =   strtolower($type);
        
        
        
        if ($type == 'secs') {
            

            $remainigSeconds = $time % 3600;
            
            $hours = ($time - $remainigSeconds) / 3600;

            $mins   =   $remainigSeconds/60;
            
            //return number_format(($time/3600), 2, '.', '');
            
            return ['hours' =>  $hours, 'mins' => $mins];
        }
        
        if ($type== 'mins') {
            $mins   =   $time % 60;
            
            $hours  =   ($time - $mins) / 60;
            //return number_format(($time/60), 2, '.', '');
        }
        
        return ['hours' =>  $hours, 'mins' => $mins];
        
        /*
         * $hours      =   0;
        
            $minutes    =   0;
         * 
         * if ($type == 'secs') {
            $hours      =   $time/3600;
            $minutes    =   $time%3600;
        }
        
        if ($type== 'mins') {
            $hours      =   $time/60;
            $minutes    =   $time%60;
        }
        
        return [
            'hours'     =>  $hours,
            'mins'      =>  $minutes,
        ];*/
    }

      public function checkIfValidUrl($url)
      {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
        return true;
        } else {
           return false;
         
            }
    }

}
