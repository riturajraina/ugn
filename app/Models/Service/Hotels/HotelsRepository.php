<?php

namespace App\Models\Service\Hotels;

use App\Models\BaseRepository;

use App\Helpers\Curl;


class HotelsRepository extends BaseRepository {

    protected $_dbHtlHotelsUrlMaster;
    
    protected $_dbHtlHotelsSearchLog;
    
    protected $_dbHtlCityList;
    
    protected $goIbiboApi;
    
    protected $goIbiboBaseUrl;
    
    protected $goIbiboAppId;
    
    protected $goIbiboAppKey;
    
    protected $clearTripApi;
    
    protected $happyEasyGoApi;
    
    protected $headers;
    
    protected $searchKeyReplaceArray;

    protected $searchValueReplaceArray;

    protected $curl;

    public function __construct() {
        
        parent::__construct();
        
        $this->curl                     =   new Curl();
        
        $this->_dbHtlHotelsUrlMaster    =   new DbHtlHotelsUrlMaster();
        
        $this->_dbHtlHotelsSearchLog    =   new DbHtlHotelsSearchLog();
        
        $this->_dbHtlCityList           =   new DbHtlCityList();
        
        $this->goIbiboBaseUrl           =   'http://developer.goibibo.com';
    
        $this->goIbiboAppId             =   '9918a4cf';
    
        $this->goIbiboAppKey            =   '0c8705043f264bc0e1581f5f3a174a41';
        
        
        $this->goIbiboApi               =   $this->goIbiboBaseUrl . '/api/search'
                                            . '/?app_id=' . $this->goIbiboAppId
                                            . '&app_key=' . $this->goIbiboAppKey 
                                            . '&format=json'
                                            . '&source=#SOURCECITY&destination='
                                            . '#DESTINATIONCITY'
                                            . '&dateofdeparture=#DEPARTUREDATE'
                                            . '&dateofarrival=#ARRIVALDATE'
                                            . '&seatingclass=#SEATINGCLASS'
                                            . '&adults=#ADULTS'
                                            . '&children=#CHILDREN&infants=#INFANTS'
                                            . '&counter=100';
        
        
        /*$this->clearTripApi             =   'http://apistaging.cleartrip.com/'
                                            . 'hotels/1.0/search?check-in=2014-04-01'
                                            . '&check-out=2014-04-03&no-of-rooms=2'
                                            . '&adults-per-room=1,1&children-per-room=2,1'
                                            . '&ca1=4&ca1=6&ca2=9&city=Bangalore'
                                            . '&state=Karnataka&country=IN&scr=INR&sct=IN';

         * 
         *  Sample Request for search with age of children : 2 Rooms, 1st room - 1 adult,
         *  2 children(age 4 and 6 yrs), 2nd room - 1 adult, 
         *  1 child(age 9 yrs)
         *  , 2 Nights:
         * 
         * 
         *          */
        
        $this->clearTripApi             =   'https://apistaging.cleartrip.com/'
                                            . 'hotels/1.0/search?check-in=#CHECKINDATE'
                                            . '&check-out=#CHECKOUTDATE'
                                            . '&no-of-rooms=#NOR'
                                            . '&adults-per-room=#ADULTSPERROOM'
                                            . '&children-per-room=#CHILDRENPERROOM'
                                            . '#CHILDRENAGES&city=#CITY'
                                            . '&state=#STATE'
                                            . '&country=IN&scr=#CURRENCY'
                                            . '&sct=#SOURCECOUNTRYCODE';
        /**
         * Note : Always use https in cleartrip api. In their docs its given 
         * as http which is not working...Rituraj
         */
        
        $this->headers                  =   [
            'cleartrip'                 =>      [
                                                    'X-CT-API-KEY: 62079c76896cd9e1eb861a88ebdc1ffb',
                                                    'Accept-Encoding: gzip',
                                                    'X-CT-SOURCETYPE: API',
                                                    'Content-Type: application/json',
                                                ],
                                            ];
        
        $this->searchKeyReplaceArray    =   [
            'cleartrip'                 =>   [
                    'checkinDate'       =>  'check-in=#CHECKINDATE',
                    'checkOutDate'      =>  '&check-out=#CHECKOUTDATE',
                    'noOfRooms'         =>  '&no-of-rooms=#NOR',
                    'adultsPerRoom'     =>  '&adults-per-room=#ADULTSPERROOM',
                    'childrenPerRoom'   =>  '&children-per-room=#CHILDRENPERROOM',
                    'childrenAges'      =>  '#CHILDRENAGES',
                    'city'              =>  '&city=#CITY',
                    'state'             =>  '&state=#STATE',
                    'country'           =>  '&country=#COUNTRY',
                    'sourceCurrency'    =>  '&scr=#CURRENCY',
                    'sourceCountry'     =>  '&sct=#SOURCECOUNTRYCODE',
            ],
            
            'goibibo'                   =>  [
                    'checkinDate'       =>  'check-in=#CHECKINDATE',
                    'checkOutDate'      =>  '&check-out=#CHECKOUTDATE',
                    'noOfRooms'         =>  '&no-of-rooms=#NOR',
                    'adultsPerRoom'     =>  '&adults-per-room=#ADULTSPERROOM',
                    'childrenPerRoom'   =>  '&children-per-room=#CHILDRENPERROOM',
                    'childrenAges'      =>  '#CHILDRENAGES',
                    'city'              =>  '&city=#CITY',
                    'state'             =>  '&state=#STATE',
                    'country'           =>  '&country=#COUNTRY',
                    'sourceCurrency'    =>  '&scr=#CURRENCY',
                    'sourceCountry'     =>  '&sct=#SOURCECOUNTRYCODE',
            ],
        ];
        
        $this->searchValueReplaceArray  =   [
                    'checkinDate'       =>  '#CHECKINDATE',
                    'checkOutDate'      =>  '#CHECKOUTDATE',
                    'noOfRooms'         =>  '#NOR',
                    'adultsPerRoom'     =>  '#ADULTSPERROOM',
                    'childrenPerRoom'   =>  '#CHILDRENPERROOM',
                    'childrenAges'      =>  '#CHILDRENAGES',
                    'city'              =>  '#CITY',
                    'state'             =>  '#STATE',
                    'country'           =>  '#COUNTRY',
                    'sourceCurrency'    =>  '#CURRENCY',
                    'sourceCountry'     =>  '#SOURCECOUNTRYCODE',
        ];
    }

    public function getTableName() {
        return $this->_dbHtlHotelsUrlMaster->getTable();
    }
    
   
    public function getUrlId($url)
    {
        try {
            $this->_dbHtlHotelsUrlMaster   =   new DbHtlHotelsUrlMaster();
            
            $result = $this->_dbHtlHotelsUrlMaster::where(['url' => $url])->get(['pk_hotels_url_id'])->toArray();
            
            if (is_array($result) && count($result)) {
                return $result['0']['pk_hotels_url_id'];
            }
            
            $dateTime                                   =   date('Y-m-d H:i:s');
            
            $this->_dbHtlHotelsUrlMaster->url          =   $url;
            
            $this->_dbHtlHotelsUrlMaster->created_at   =   $dateTime;
            
            $this->_dbHtlHotelsUrlMaster->updated_at   =   $dateTime;
            
            if (!$this->_dbHtlHotelsUrlMaster->save()) {
                $this->error    =   'Unable to fetch Url Id due to a database '
                        . 'error. Please contact administrator';
                
                return false;
            }
            
            return $this->_dbHtlHotelsUrlMaster->pk_hotels_url_id;
            
        } catch (\Exception $ex) {
            $this->setError('fetch url id', $ex);
            return false;
        }
    }
    
    
    
    public function getCityList($data)
    {
        try {
            $result = $this->_dbHtlCityList::where('city_name', 'LIKE', '%' 
                      . $data['cname'] . '%')
                      ->get(['pk_city_id', 'city_name', 'country_code'])
                      ->toArray();
            
            if (is_array($result) && count($result)) {
                return $result;
            }
            
            $this->error = 'City data not found';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch city data', $ex);
            return false;
        }
    }
    
    public function getAdultsPerRoom($vendor, $value)
    {
        try {
            switch ($vendor) {
                case 'cleartrip' :
                    break;
            }
        } catch (\Exception $ex) {
            $this->setError('adults per room for vendor : ' . $vendor, $ex);
            return false;
        }
    }


    public function getHotelsDataParallelly($data)
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
                    case 'cleartrip' :
                        $api            =   $this->clearTripApi;
                        break;
                    
                    case 'goibibo' :
                        $api            =   $this->goIbiboApi;
                        break;
                    
                }

                $keysFound                  =   [];

                foreach ($searchData as $key => $value) {
                    
                    /*if ($key == 'adultsPerRoom') {
                        
                        $value              =   $this->getAdultsPerRoom($vendor, strtolower($value));

                        if (!$value) {
                            $this->error    =   'Unable to find seating class';
                            return false;
                        }
                    }
                    
                    
                    
                    if ($key == 'childrenAges') {
                        
                    }*/

                    if ($key == 'childrenPerRoom' && empty($value) && $vendor == 'cleartrip') {
                        
                        $api            =   str_ireplace($this->searchValueReplaceArray[$key], 
                                            0, $api);
                        
                        $keysFound[]    =   $key;
                    }

                    if (!empty($value)) {

                        $api            =   str_ireplace($this->searchValueReplaceArray[$key], 
                                            $value, $api);

                        $keysFound[]    =   $key;
                    }
                }

                $keysNotFound       = array_diff(array_keys($this->searchValueReplaceArray), $keysFound);

                if (is_array($keysNotFound) && count($keysNotFound)) {
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

                $dateTime   =   date('Y-m-d H:i:s');

                $urlId      =   $this->getUrlId($api);

                if (!$urlId) {
                    return false;
                }

                $this->_dbHtlHotelsSearchLog                        =   new DbHtlHotelsSearchLog();
                $this->_dbHtlHotelsSearchLog->fk_hotels_url_id      =   $urlId;
                $this->_dbHtlHotelsSearchLog->fk_user_id            =   !empty($data['fk_user_id']) ? $data['fk_user_id'] : null;
                $this->_dbHtlHotelsSearchLog->session_id            =   !empty($data['session_id']) ? $data['session_id'] : null;
                $this->_dbHtlHotelsSearchLog->device_type           =   !empty($data['device_type']) ? $data['device_type'] : null;
                $this->_dbHtlHotelsSearchLog->ip_address            =   !empty($data['ip_address']) ? $data['ip_address'] : null;
                $this->_dbHtlHotelsSearchLog->created_at            =   $dateTime;
                $this->_dbHtlHotelsSearchLog->updated_at            =   $dateTime;

                if (!$this->_dbHtlHotelsSearchLog->save()) {
                    $this->error =  'Unable to save hotels search log due to a '
                                    . 'database error. Please contact administrator';

                    return false;
                }

                $curlOptions    =   [];

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
            $this->setError('fetch hotels data', $ex);
            return false;
        }
    }
}




