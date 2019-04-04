<?php

namespace App\Helpers;

class Geolocation extends ValidatorBase {

    public function __construct() {
        
    }

    public function getLatitudeLongitude($address)
    {
        try {
            
            $address    =   urlencode($address);
            
            $url        =   'https://maps.google.com/maps/api'
                            . '/geocode/json?address=' . $address 
                            . '&sensor=false'
                            . '&key=AIzaSyA8DNeFQc5eTUILB7fRsOFl4J9cvm8i_R8';
            
            $geocode    =   file_get_contents($url);
            
            $output     =   json_decode($geocode);
            
            if (is_array($output) || is_object($output)) {
                if (count($output)) {
                    $latitude   =   $output->results[0]->geometry->location->lat;
            
                    $longitude  =   $output->results[0]->geometry->location->lng;
                    
                    $address    =   trim($output->results[0]->formatted_address);

                    return [$latitude, $longitude, $address];
                }
            }
            
            $this->error        =   'Unable to find latitude & longitude';

            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch latitude & longitude', $ex);
            return false;
        }
    }
}
