<?php

namespace App\Models\Service\Cabs;

use App\Models\BaseRepository;

use App\Helpers\Curl;

use App\Helpers\Geolocation;


class CabsRepository extends BaseRepository {

    protected $curl;
    
    protected $headers;
    
    protected $_dbCbAddressMaster;
    
    protected $_dbCbCabsSearchLog;
    
    protected $_dbCbCabsUrlMaster;
    
    protected $olaApi;
    
    protected $olaCategories;
    
    protected $olaServiceTypes;
    
    protected $uberApi;
    
    protected $geoLocation;
    

    public function __construct() {
        
        parent::__construct();
        
        $this->curl                 =   new Curl();
        
        $this->geoLocation          =   new Geolocation();
        
        $this->headers              =   [
            
            'ola'                   =>  [
                                            'Authorization: '
                                            . 'Bearer b1147fb057784a4e8a6ffa3211c1e928',
                                            'x-app-token: '
                                            . '2fcf5064190447d983839ea1747336cf',
            ],
            
            'olaauto'               =>  [
                                            'Authorization: '
                                            . 'Bearer b1147fb057784a4e8a6ffa3211c1e928',
                                            'x-app-token: '
                                            . '2fcf5064190447d983839ea1747336cf',
            ],
            
            'uber'                  =>  [
                                            'Authorization: '
                                            . 'Bearer JA.VUNmGAAAAAAAEgASAAAAB'
                                            . 'wAIAAwAAAAAAAAAEgAAAAAA'
                                            . 'AAG8AAAAFAAAAAAADgAQAAQAAAAIAAw'
                                            . 'AAAAOAAAAkAAAABwAAAAEAAAAEAAAADckWCPf'
                                            . 'dMaDO1Hu3WwzBoBsAAAAnVt6DYnRtejs0'
                                            . 'VqRj6qWo514e38gmV8CufsuAlpiZqoh8Y'
                                            . 'KXcgWqDYQE8tE4Nc8UGGYqX'
                                            . 'mJZRCoT5PTANFt0gd2BrLd'
                                            . 'GLc2X7HnYtqTOTQBQ1gs'
                                            . '57uTYZXuMg9Zp4dUUvtO'
                                            . 'br7GA9yQFZHdZDAAAAK_SMA5mkU'
                                            . 'JKHQFjKiQAAABiMGQ4NTgwMy'
                                            . '0zOGEwLTQyYjMtODA2ZS03YTRjZjhl'
                                            . 'MTk2ZWU',
                                            
                                            'Accept-Language: en_US',
                                            'Content-Type: application/json',
            ],
        ];
        
        $this->_dbCbAddressMaster   =   new DbCbAddressMaster();
        
        $this->_dbCbCabsSearchLog   =   new DbCbCabsSearchLog();
        
        $this->_dbCbCabsUrlMaster   =   new DbCbCabsUrlMaster();
        
        $this->olaApi               =   'https://devapi-stg.olacabs-dev.in'
                                        . '/mock/v1/products?'
                                        . 'pickup_lat=#PICKUPLATITUDE'
                                        . '&pickup_lng=#PICKUPLONGITUDE'
                                        . '&drop_lat=#DROPLATITUDE'
                                        . '&drop_lng=#DROPLONGITUDE'
                                        . '&service_type=#SERVICETYPE&category=#OLACATEGORY';
        
        $this->olaCategories        =   [
                                            'micro'             =>  'micro',
                                            'mini'              =>  'mini',
                                            'share'             =>  'share',
                                            'prime'             =>  'prime',
                                            'suv'               =>  'suv',
                                            'prime_play'        =>  'prime_play',
                                            'auto'              =>  'auto',
                                            'lux'               =>  'lux',
                                            'rental'            =>  'rental',
                                            'outstation'        =>  'outstation',
                                            'sedan'             =>  'sedan',
                                            'exec'              =>  'exec',
                                            'bike'              =>  'bike',
                                            'erick'             =>  'erick',
                                            'kp'                =>  'kp',
                                            'electric_vehicle'  =>  'electric_vehicle',
                                            'cool_cab'          =>  'cool_cab',
                                        ];
        
        $this->olaServiceTypes      =   [
                                            'p2p'               =>  'p2p',
                                            'rental'            =>  'rental',
                                            'outstation'        =>  'outstation',
                                        ];
        
        $this->uberApi              =   'https://api.uber.com/v1.2/estimates'
                                        . '/price?start_latitude=#PICKUPLATITUDE'
                                        . '&start_longitude=#PICKUPLONGITUDE'
                                        . '&end_latitude=#DROPLATITUDE'
                                        . '&end_longitude=#DROPLONGITUDE';
        
        
        $this->searchKeyReplaceArray    =   [
            'ola'                       =>   [
                    'pickup_lat'        =>  'pickup_lat=#PICKUPLATITUDE',
                    'pickup_lng'        =>  '&pickup_lng=#PICKUPLONGITUDE',
                    'drop_lat'          =>  '&drop_lat=#DROPLATITUDE',
                    'drop_lng'          =>  '&drop_lng=#DROPLONGITUDE',
                    'service_type'       => '&service_type=#SERVICETYPE',
            ],
            
            'uber'                      =>  [
                    'pickup_lat'        =>  'start_latitude=#PICKUPLATITUDE',
                    'pickup_lng'        =>  '&start_longitude=#PICKUPLONGITUDE',
                    'drop_lat'          =>  '&end_latitude=#DROPLATITUDE',
                    'drop_lng'          =>  '&end_longitude=#DROPLONGITUDE',
                    'service_type'      =>  '&service_type=#SERVICETYPE',
            ],
        ];
        
        $this->searchValueReplaceArray  =   [
            'pickup_lat'        =>  '#PICKUPLATITUDE',
            'pickup_lng'        =>  '#PICKUPLONGITUDE',
            'drop_lat'          =>  '#DROPLATITUDE',
            'drop_lng'          =>  '#DROPLONGITUDE',
            'service_type'      =>  '#SERVICETYPE',
        ];
    }

    public function getTableName() {
        return $this->_dbCbCabsUrlMaster->getTable();
    }
    
    public function saveAddress($data)
    {
        //$address    =   trim(addslashes(stripslashes($data['address'])));
        $address    =   trim(stripslashes($data['address']));
        
        try {
            
            $result = $this->_dbCbAddressMaster::where(['address' => $address])
                      ->get(['pk_address_id'])
                      ->toArray();
            
            if (is_array($result)) {
                if (count($result)) {
                    return $result['0']['pk_address_id'];
                }
            }
            
            $dateTime   =   date('Y-m-d H:i:s');
            
            $this->_dbCbAddressMaster               = new DbCbAddressMaster();
            
            $this->_dbCbAddressMaster->address      = $address;
            $this->_dbCbAddressMaster->latitude     = $data['lat'];
            $this->_dbCbAddressMaster->longitude    = $data['long'];
            $this->_dbCbAddressMaster->created_at   = $dateTime;
            $this->_dbCbAddressMaster->updated_at   = $dateTime;
            
            if (!$this->_dbCbAddressMaster->save()) {
                $this->error = 'Unable to save latitude & logitude of address';
                return false;
            }
            
            return $this->_dbCbAddressMaster->pk_address_id;
            
        } catch (\Exception $ex) {
            $this->setError('save address : ' . $address, $ex);
            return false;
        }
    }
    
    public function getAddressList($data)
    {
        try {
            $result = $this->_dbCbAddressMaster::where('address', 'LIKE', '%' 
                      . $data['address'] . '%')
                      ->get(['latitude', 'longitude', 'address'])
                      ->toArray();
            
            if (is_array($result) && count($result)) {
                return $result;
            }
            
            $geoLocationArray   =   $this->geoLocation->getLatitudeLongitude($data['address']);
            
            if (!$geoLocationArray) {
                $this->error = 'Address not found';
                return false;
            }
            
            $returnArray =    [
                '0' =>  [
                   'address'        =>  $geoLocationArray['2'],
                   'latitude'       =>  $geoLocationArray['0'],
                   'longitude'      =>  $geoLocationArray['1'],
                ],
            ];
            
            return $returnArray;
        } catch (\Exception $ex) {
            $this->setError('fetch address list', $ex);
            return false;
        }
    }
    
    public function getUrlId($url)
    {
        try {
            $this->_dbCbCabsUrlMaster   =   new DbCbCabsUrlMaster();
            
            $result =   $this->_dbCbCabsUrlMaster::where(['url' => $url])
                        ->get(['pk_cabs_url_id'])->toArray();
            
            if (is_array($result) && count($result)) {
                return $result['0']['pk_cabs_url_id'];
            }
            
            $dateTime                               =   date('Y-m-d H:i:s');
            
            $this->_dbCbCabsUrlMaster->url          =   $url;
            
            $this->_dbCbCabsUrlMaster->created_at   =   $dateTime;
            
            $this->_dbCbCabsUrlMaster->updated_at   =   $dateTime;
            
            if (!$this->_dbCbCabsUrlMaster->save()) {
                $this->error    =   'Unable to fetch Url Id due to a database '
                                    . 'error. Please contact administrator';
                
                return false;
            }
            
            return $this->_dbCbCabsUrlMaster->pk_cabs_url_id;
            
        } catch (\Exception $ex) {
            $this->setError('fetch url id', $ex);
            return false;
        }
    }
    
    public function getCabsDataParallelly($data)
    {
        try {
            
            $searchArray            =   $data['searchData'];
            
            $i                      =   0;
            
            $multiCurlIndexArray    =   [];
            
            $multiCurlArray         =   [];
            
            foreach ($searchArray as $vendor=>$searchData) {
            
                $vendor                 =   strtolower($vendor);
                
                $multiCurlIndexArray[$i]=   $vendor;

                switch ($vendor) {
                    case 'ola' :
                        $api            =   str_ireplace('#OLACATEGORY', 'car', 
                                            $this->olaApi);
                        break;
                    
                    case 'olaauto' :
                        $api            =   str_ireplace('#OLACATEGORY', 'auto', 
                                            $this->olaApi);
                        break;
                    
                    case 'uber' :
                        $api            =   $this->uberApi;
                        break;
                }

                $keysFound              =   [];

                foreach ($searchData as $key => $value) {
                    
                    if (!empty($value)) {

                        $api            =   str_ireplace($this->searchValueReplaceArray[$key], 
                                            $value, $api);

                        $keysFound[]    =   $key;
                    }
                }

                $keysNotFound       = array_diff(array_keys($this->searchValueReplaceArray), $keysFound);

                if (is_array($keysNotFound)) {
                    if (count($keysNotFound)) {
                        foreach ($keysNotFound as $key) {
                            if (is_array($this->searchKeyReplaceArray[$vendor][$key])) {

                                list($toReplace, $replaceValue) = $this->searchKeyReplaceArray[$vendor][$key];

                                $api    =   str_ireplace($toReplace, $replaceValue, $api);

                            } else {

                                $api    =   str_ireplace($this->searchKeyReplaceArray[$vendor][$key], 
                                            '', $api);
                            }
                        }
                    }
                }

                $dateTime   =   date('Y-m-d H:i:s');

                $urlId      =   $this->getUrlId($api);

                if (!$urlId) {
                    return false;
                }
                
                $addressSaveArray   =   [
                    'address'   =>  $data['pickupLocation'],
                    'lat'       =>  $data['pickup_lat'],
                    'long'      =>  $data['pickup_lng'],
                ];
                
                
                $startAddressId =   $this->saveAddress($addressSaveArray);
                
                if (!$startAddressId) {
                    return false;
                }
                
                $addressSaveArray   =   [
                    'address'   =>  $data['dropLocation'],
                    'lat'       =>  $data['drop_lat'],
                    'long'      =>  $data['drop_lng'],
                ];
                
                $endAddressId =   $this->saveAddress($addressSaveArray);
                
                if (!$endAddressId) {
                    return false;
                }

                $this->_dbCbCabsSearchLog                        =   new DbCbCabsSearchLog();
                
                $this->_dbCbCabsSearchLog->fk_cabs_url_id        =   $urlId;
                
                $this->_dbCbCabsSearchLog->fk_address_id_start   =   $startAddressId;
                
                $this->_dbCbCabsSearchLog->fk_address_id_end     =   $endAddressId;
                
                $this->_dbCbCabsSearchLog->fk_user_id            =   !empty($data['fk_user_id']) 
                                                                     ? $data['fk_user_id'] : null;
                
                $this->_dbCbCabsSearchLog->session_id            =   !empty($data['session_id']) 
                                                                     ? $data['session_id'] : null;
                
                $this->_dbCbCabsSearchLog->device_type           =   !empty($data['device_type']) 
                                                                     ? $data['device_type'] : null;
                
                $this->_dbCbCabsSearchLog->ip_address            =   !empty($data['ip_address']) 
                                                                     ? $data['ip_address'] : null;
                
                $this->_dbCbCabsSearchLog->created_at            =   $dateTime;
                
                $this->_dbCbCabsSearchLog->updated_at            =   $dateTime;

                if (!$this->_dbCbCabsSearchLog->save()) {
                    $this->error =  'Unable to save cabs search log due to a '
                                    . 'database error. Please contact administrator';
                    return false;
                }

                $curlOptions        =   [];

                if (!empty($this->headers[$vendor])) {
                    $curlOptions    =   [
                        CURLOPT_HTTPHEADER  =>  $this->headers[$vendor],
                        CURLOPT_HEADER      =>  0,
                        CURLOPT_SSLVERSION  =>  'all',
                        CURLOPT_USERAGENT   =>  'Mozilla/5.0 (Windows NT 6.2; '
                                                . 'WOW64; rv:17.0) Gecko/20100101 '
                                                . 'Firefox/17.0',
                    ];
                }
                
                $curlOptions[CURLOPT_URL]               =   $api;
                
                $curlOptions[CURLOPT_RETURNTRANSFER]    =   true;
                
                $curlOptions[CURLOPT_PROXY]             =   null;
                
                if (stristr($api, 'https')) {
                    $curlOptions[CURLOPT_SSL_VERIFYPEER] = false;
                    $curlOptions[CURLOPT_SSL_VERIFYHOST] = false; 
                }
                
                $multiCurlArray[$i]         =   $curlOptions;
                
                $i++;
            }
            //echo '<br>$multiCurlArray : <pre>' . print_r($multiCurlArray, true) . '</pre>';exit;
            if (count($multiCurlArray)) {
                
                $multiCurlResult    =   $this->curl->multiExecute($multiCurlArray, $multiCurlIndexArray);
                
                if (!$multiCurlResult) {
                    $this->error    =   $this->curl->getError();
                    return false;
                }
                
                return $multiCurlResult;
            }

            $this->error    =   'No data found to fetch';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch cabs data', $ex);
            return false;
        }
    }
}
