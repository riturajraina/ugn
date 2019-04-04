<?php

namespace App\Models\Service\Flights;

use App\Models\BaseRepository;

use App\Helpers\FileManager;

use App\Helpers\Curl;


class FlightsRepository extends BaseRepository {

    protected $_dbSrvFlightsUrlMaster;
    
    protected $_dbSrvSearchParamsLog;
    
    protected $_dbSrvMinPriceCacheMaster;
    
    protected $_dbSrvFlightsSearchLog;
    
    protected $_dbSrvAirportList;
    
    protected $_dbSrvCache;
    
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
    
    protected $fileManager;
    
    protected $urlIds;
    
    protected $currentSearchParamId;

    public function __construct() {
        
        parent::__construct();
        
        $this->curl                     =   new Curl();
        
        $this->fileManager              =   new FileManager();
        
        $this->_dbSrvFlightsUrlMaster   =   new DbSrvFlightsUrlMaster();
        
        $this->_dbSrvSearchParamsLog    =   new DbSrvSearchParamsLog();
        
        $this->_dbSrvMinPriceCacheMaster    =   new DbSrvMinPriceCacheMaster();
        
        $this->_dbSrvFlightsSearchLog   =   new DbSrvFlightsSearchLog();
        
        $this->_dbSrvAirportList        =   new DbSrvAirportList();
        
        $this->_dbSrvCache              =   new DbSrvCache();
        
        $this->goIbiboBaseUrl           =   'http://developer.goibibo.com';
    
        $this->goIbiboAppId             =   '9918a4cf';
    
        $this->goIbiboAppKey            =   '0c8705043f264bc0e1581f5f3a174a41';
        
        /*$this->goIbiboBaseUrl           =   'https://goibibo.3scale.net';
    
        $this->goIbiboAppId             =   '1e6859d9';
    
        $this->goIbiboAppKey            =   '621f18f2bb6daff04dd25dec15bbd0e1';*/
        
        
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
        
        
        
        $this->clearTripApi             =   'https://apistaging.cleartrip.com'
                                            . '/air/1.0/'
                                            . 'search?currency=INR&from=#SOURCECITY'
                                            . '&to=#DESTINATIONCITY'
                                            . '&depart-date=#DEPARTUREDATE'
                                            . '&return-date=#ARRIVALDATE'
                                            . '&adults=#ADULTS&children=#CHILDREN'
                                            . '&infants=#INFANTS'
                                            . '&country=IN&cabin-type=#SEATINGCLASS';
        
        
        $this->happyEasyGoApi           =   'http://t.happyeasygo.com/redirect-api-test/'
                                            . 'api/search/#SOURCECITY-#DESTINATIONCITY/'
                                            . '#DEPARTUREDATE-#ARRIVALDATE/'
                                            . '#SEATINGCLASS-#ADULTS-#CHILDREN-#INFANTS/';
        
        
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
                    'sourceCity'        =>  'from=#SOURCECITY',
                    'destinationCity'   =>  '&to=#DESTINATIONCITY',
                    'dateofdeparture'   =>  '&depart-date=#DEPARTUREDATE',
                    'dateofarrival'     =>  '&return-date=#ARRIVALDATE',
                    'seatingclass'      =>  '&cabin-type=#SEATINGCLASS',
                    'adults'            =>  '&adults=#ADULTS',
                    'children'          =>  '&children=#CHILDREN',
                    'infants'           =>  '&infants=#INFANTS',
            ],
            
            'goibibo'                   =>  [
                    'sourceCity'        =>  '&source=#SOURCECITY',
                    'destinationCity'   =>  '&destination=#DESTINATIONCITY',
                    'dateofdeparture'   =>  '&dateofdeparture=#DEPARTUREDATE',
                    'dateofarrival'     =>  '&dateofarrival=#ARRIVALDATE',
                    'seatingclass'      =>  '&seatingclass=#SEATINGCLASS',
                    'adults'            =>  '&adults=#ADULTS',
                    'children'          =>  '&children=#CHILDREN',
                    'infants'           =>  '&infants=#INFANTS',
            ],
            
            'happyeasygo'               =>  [
                    'sourceCity'        =>  '#SOURCECITY',
                    'destinationCity'   =>  '#DESTINATIONCITY',
                    'dateofdeparture'   =>  '#DEPARTUREDATE',
                    'dateofarrival'     =>  '-#ARRIVALDATE',
                    'seatingclass'      =>  '#SEATINGCLASS',
                    'adults'            =>  '#ADULTS',
                    'children'          =>  ['#CHILDREN', '0'],
                    'infants'           =>  ['#INFANTS', '0'],
            ],
        ];
        
        $this->searchValueReplaceArray  =   [
                    'sourceCity'        =>  '#SOURCECITY',
                    'destinationCity'   =>  '#DESTINATIONCITY',
                    'dateofdeparture'   =>  '#DEPARTUREDATE',
                    'dateofarrival'     =>  '#ARRIVALDATE',
                    'seatingclass'      =>  '#SEATINGCLASS',
                    'adults'            =>  '#ADULTS',
                    'children'          =>  '#CHILDREN',
                    'infants'           =>  '#INFANTS',
        ];
        
        $this->urlIds                   =   [];
        
        $this->currentSearchParamId     =   null;
        
    }

    public function getTableName() {
        return $this->_dbSrvFlightsUrlMaster->getTable();
    }
    
    public function getSeatingClass($vendor, $class)
    {
        $goIbiboArray   =   [
            'economy'           =>  'E',
            'business'          =>  'B',
            /****The below seating class 
            * not available in goIbibo***/
            'premiumeconomy'    =>  'p', 
            'first'             =>  'f',
        ];
        
        $clearTripArray =   [
            'economy'           =>  'e', 
            'first'             =>  'f', 
            'premiumeconomy'    =>  'p', 
            'business'          =>  'b',
        ];
        
        $happyEasyGo    =   [
            'economy'           =>  'E',
            'business'          =>  'B',
            'first'             =>  'F',
            'premiumeconomy'    =>  'PE',
        ];
        
        switch ($vendor) {
            case 'goibibo' :
                return $goIbiboArray[$class];
            
            case 'cleartrip' :
                return $clearTripArray[$class];
            
            case 'happyeasygo' :
                return $happyEasyGo[$class];
        }
        
        return false;
    }
    
    public function getUrlId($url)
    {
        try {
            $this->_dbSrvFlightsUrlMaster   =   new DbSrvFlightsUrlMaster();
            
            $result = $this->_dbSrvFlightsUrlMaster::where(['url' => $url])->get(['pk_flights_url_id'])->toArray();
            
            if (is_array($result) && count($result)) {
                return $result['0']['pk_flights_url_id'];
            }
            
            $dateTime                                   =   date('Y-m-d H:i:s');
            
            $this->_dbSrvFlightsUrlMaster->url          =   $url;
            
            $this->_dbSrvFlightsUrlMaster->created_at   =   $dateTime;
            
            $this->_dbSrvFlightsUrlMaster->updated_at   =   $dateTime;
            
            if (!$this->_dbSrvFlightsUrlMaster->save()) {
                $this->error    =   'Unable to fetch Url Id due to a database '
                        . 'error. Please contact administrator';
                
                return false;
            }
            
            return $this->_dbSrvFlightsUrlMaster->pk_flights_url_id;
            
        } catch (\Exception $ex) {
            $this->setError('fetch url id', $ex);
            return false;
        }
    }
    
    public function getDataFromDBCache($urlId)
    {
        try {
            $result =   $this->_dbSrvCache::where(['fk_flights_url_id' => $urlId])
                        ->get(['data_file_path', 'created_at'])->toArray();
            
            if (is_array($result)) {
                if (count($result)) {
                    
                    $result = $result['0'];
                    
                    $cacheSavedTime =   $this->getDateValue($result['created_at']);
                    
                    $currentTime    =   $this->getDateValue(date('Y-m-d H:i:s'));
                    
                    $timeDiff       =   $currentTime - $cacheSavedTime;
                    
                    if ($timeDiff <= env('FLIGHTCACHETIME')) {
                        return file_get_contents($result['data_file_path']);
                    } else {
                        unlink($result['data_file_path']);
                        $this->_dbSrvCache::where(['fk_flights_url_id' => $urlId])
                        ->delete();
                    }
                }
            }
            
            $this->error = 'Data not found in cache';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch data from DB cache', $ex);
            return false;
        }
    }
    
    public function getDataFromSolrCache($urlId)
    {
        try {
            
        } catch (\Exception $ex) {
            $this->setError('fetch data from Solr cache', $ex);
            return false;
        }
    }
    
    public function getDataFromCache ($urlId)
    {
        try {
            if (strtoupper(env('FLIGHTCACHE')) == 'DB') {
                return $this->getDataFromDBCache($urlId);
            } 
            
            if (strtoupper(env('FLIGHTCACHE')) == 'SOLR') {
                return $this->getDataFromSolrCache($urlId);
            }
            
        } catch (\Exception $ex) {
            $this->setError('fetch data from cache', $ex);
            return false;
        }
    }
    
    public function saveCacheData($saveData)
    {
        try {
            
            $dataToSave = [];
            
            $pathSeparator = $this->fileManager->getPathSeparator();
            
            foreach ($saveData as $urlId => $data) {
                $dataFilePath       =   env('FLIGHTCACHEFOLDERPATH') . $pathSeparator . $urlId;
                $dataToSave[]   =   [
                    'fk_flights_url_id' =>  $urlId,
                    'data_file_path'  =>  $dataFilePath,
                    'created_at' => date('Y-m-d H:i:s'),
                ];
                
                file_put_contents($dataFilePath, $data);
            }
            
            if (strtoupper(env('FLIGHTCACHE')) == 'DB' ) {
                $result = $this->_dbSrvCache->insert($dataToSave);
            
                if (!$result) {
                    $this->error = 'Unable to save data in cache due to an error';
                    return false;
                }
            }
            
            return true;
            
        } catch (\Exception $ex) {
            $this->setError('save cache data', $ex);
            return false;
        }
    }
    
    public function getAdvancedDateUrlIds($data, $days=30, $vendorArray=null)
    {
        try {
            
            $advancedUrlIds         =   [];
            
            $searchArray            =   $data['searchData'];
            
            if (!empty($vendorArray)) {
                
                $newSearchArray     =   [];
                
                foreach ($searchArray as $vendor=>$searchData) {
                    
                    $newSearchArray[$vendor] = $searchData;
                    
                    if (in_array($vendor, $vendorArray)) {
                        unset($vendorArray[$vendor]);
                    }
                }
                
                if (count($vendorArray)) {
                    foreach ($vendorArray as $vendor) {
                        $newSearchArray[$vendor] = $searchData;
                    }
                }
                
                $searchArray        =   $newSearchArray;
            }
            
            $i                      =   0;
            
            $arrayOfSearch          =   [];
            
            for ($i=0;$i<=$days;$i++) {
                
                $newSearchArray     =   [];
                
                foreach ($searchArray as $vendor=>$searchData) {
                    
                    $newSearchData  =   [];
                    
                    foreach ($searchData as $key => $value) {
                        if ($key == 'dateofdeparture' || $key == 'dateofarrival') {
                            $newSearchData[$key]    =    date("Y-m-d", strtotime("+" . $i . " day", strtotime($value)));
                        } else {
                            $newSearchData[$key] = $value;
                        }
                    }
                    
                    $newSearchArray[$vendor]    =   $newSearchData;
                }
                
                $arrayOfSearch[]            =   $newSearchArray;
            }
            
            if (count($arrayOfSearch)) {
                
                foreach ($arrayOfSearch as $searchArray) {
                    
                    foreach ($searchArray as $vendor=>$searchData) {
                        
                        $departureDate          =   null;
                        
                        $vendor                 =   strtolower($vendor);

                        switch ($vendor) {

                            case 'cleartrip' :
                                $api            =   $this->clearTripApi;
                                break;

                            case 'goibibo' :
                                $api            =   $this->goIbiboApi;
                                break;

                            case 'happyeasygo' :
                                $api            =   $this->happyEasyGoApi;
                                break;
                        }

                        $keysFound                  =   [];

                        foreach ($searchData as $key => $value) {

                            if ($key == 'seatingclass') {
                                $value              =   $this->getSeatingClass($vendor, strtolower($value));

                                if (!$value) {
                                    $this->error    =   'Unable to find seating class';
                                    return false;
                                }
                            }

                            if ($key == 'dateofdeparture' || $key == 'dateofarrival') {
                                if ($key == 'dateofdeparture') {
                                    $departureDate = $value;
                                }
                                
                                if ($vendor == 'happyeasygo' || $vendor == 'goibibo') {
                                    $value  = str_ireplace('-', '', $value);
                                }
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

                        $urlId      =   $this->getUrlId($api);

                        if (!$urlId) {
                            return false;
                        }
                        
                        $advancedUrlIds[$departureDate] = $urlId;
                    }
                }
            }
            
            if (count($advancedUrlIds)) {
                return $advancedUrlIds;
            }
            
            $this->error = 'Unable to fetch advanced url Ids';
            
            return false;
            
            
        } catch (\Exception $ex) {
            $this->setError('fetch advanced url ids', $ex);
            return false;
        }
    }
    
    public function getAdvancedSearchParamIds($data, $days=30)
    {
        try {
            
            $advancedSearchParamIds         =   [];
            
            $searchArray            =   $data['searchData'];
            
            $i                      =   0;
            
            $arrayOfSearch          =   [];
            
            for ($i=0;$i<=$days;$i++) {
                
                $newSearchArray     =   [];
                
                foreach ($searchArray as $vendor=>$searchData) {
                    
                    $newSearchData  =   [];
                    
                    foreach ($searchData as $key => $value) {
                        if ($key == 'dateofdeparture' || $key == 'dateofarrival') {
                            if ($key == 'dateofarrival') {
                                if (!empty($value)) {
                                    $newSearchData[$key]    =   date("Y-m-d", strtotime("+" . $i . " day", strtotime($value)));
                                } else {
                                    $newSearchData[$key]    =   null;
                                }
                            } else {
                                $newSearchData[$key]    =    date("Y-m-d", strtotime("+" . $i . " day", strtotime($value)));
                            }
                            
                        } else {
                            $newSearchData[$key] = $value;
                        }
                    }
                    
                    $newSearchArray[$vendor]    =   $newSearchData;
                }
                
                $arrayOfSearch[]            =   $newSearchArray;
            }
            
            if (count($arrayOfSearch)) {
                
                foreach ($arrayOfSearch as $searchArray) {
                    
                    foreach ($searchArray as $vendor=>$searchData) {
                        
                        $departureDate          =   $searchData['dateofdeparture'];
                        
                        $searchParamId          =   $this->getSearchParamJsonId(json_encode($searchData));
                        
                        if (!$searchParamId) {
                            return false;
                        }
                        
                        $advancedSearchParamIds[$departureDate] = $searchParamId;
                    }
                }
            }
            
            if (count($advancedSearchParamIds)) {
                return $advancedSearchParamIds;
            }
            
            $this->error = 'Unable to fetch advanced search param Ids due to'
                            . ' an error. Please contact administrator';
            
            return false;
            
            
        } catch (\Exception $ex) {
            $this->setError('fetch advanced search param Ids', $ex);
            return false;
        }
    }
    
    public function getCurrentUrlIds()
    {
        return $this->urlIds;
    }
    
    public function getSearchParamJsonId($searchJson)
    {
        try {
            $this->_dbSrvSearchParamsLog                        =   new DbSrvSearchParamsLog();
            
            $result =   $this->_dbSrvSearchParamsLog::where(['search_params_json' => $searchJson])
                        ->get(['pk_search_param_id'])->toArray();
            
            if (is_array($result)) {
                if (count($result)) {
                    return $result['0']['pk_search_param_id'];
                }
            }
            
            $dateTime   =   date('Y-m-d H:i:s');
                
            $this->_dbSrvSearchParamsLog->search_params_json    =   $searchJson;
            $this->_dbSrvSearchParamsLog->created_at            =   $dateTime;
            $this->_dbSrvSearchParamsLog->updated_at            =   $dateTime;

            if (!$this->_dbSrvSearchParamsLog->save()) {
                $this->error    =   'Unable to save search parameters log'
                                    . 'due to a database error. Please '
                                    . 'contact administrator';

                return false;
            }
            
            return $this->_dbSrvSearchParamsLog->pk_search_param_id;
            
        } catch (\Exception $ex) {
            $this->setError('save search parameters json', $ex);
            return false;
        }
    }
    
    public function fetchFutureDatesPrice($data, $currentSearchParamId=null)
    {
        try {
            
            $result         =   $this->_dbSrvMinPriceCacheMaster::whereIn('fk_search_param_id', array_values($data))
                                ->orderBy('fk_search_param_id', 'asc')
                                ->get(['minPriceDeparture', 'minPriceArrival', 'fk_search_param_id'])
                                ->toArray();
            
            $returnArray    =   [];
            
            //echo '<br>Result : <pre>' . print_r($result, true) . '</pre>';
            
            if (is_array($result)) {
                
                if (count($result)) {
                    
                    foreach ($result as $row) {
                        
                        if (!empty($currentSearchParamId)) {
                            
                            if ($currentSearchParamId <> $row['fk_search_param_id']) {
                                $returnArray[array_search($row['fk_search_param_id'], $data)] 
                                =   [
                                        'minPriceDeparture' =>  $row['minPriceDeparture'], 
                                        'minPriceArrival'   =>  $row['minPriceArrival']
                                    ];
                            }
                            
                        } else {
                            $returnArray[array_search($row['fk_search_param_id'], $data)] 
                                =   [
                                        'minPriceDeparture' =>  $row['minPriceDeparture'], 
                                        'minPriceArrival'   =>  $row['minPriceArrival']
                                    ];
                        }
                    }
                }
            }
            
            return $returnArray;
            
        } catch (\Exception $ex) {
            $this->setError('fetch future dates price', $ex);
            return false;
        }
    }
    
    public function storeMinimumPrice($data)
    {
        try {
            $this->_dbSrvMinPriceCacheMaster = new DbSrvMinPriceCacheMaster();
            
            $result = $this->_dbSrvMinPriceCacheMaster::where(['fk_search_param_id' => $data['fk_search_param_id']])
                    ->delete();
            
            $dateTime   =   date('Y-m-d H:i:s');
            
            $this->_dbSrvMinPriceCacheMaster->minPriceDeparture = $data['minPriceDeparture'];
            
            $this->_dbSrvMinPriceCacheMaster->minPriceArrival   = $data['minPriceArrival'];
            
            $this->_dbSrvMinPriceCacheMaster->fk_search_param_id= $data['fk_search_param_id'];
            
            $this->_dbSrvMinPriceCacheMaster->created_at        = $dateTime;
            
            $this->_dbSrvMinPriceCacheMaster->updated_at        = $dateTime;
            
            if (!$this->_dbSrvMinPriceCacheMaster->save()) {
                $this->error =  'Unable to save minimum price in cache due to'
                                . ' a database error. Please contact administrator';
                
                return false;
            }
            
            return $this->_dbSrvMinPriceCacheMaster->pk_min_price_cache_id;
            
        } catch (\Exception $ex) {
            $this->setError('store minimum price(s)', $ex);
            return false;
        }
    }
    
    public function getCurrentSearchParamId()
    {
        return $this->currentSearchParamId;
    }
    
    public function getFlightDataParallelly($data)
    {
        try {
            
            $searchArray            =   $data['searchData'];
            
            $searchJson             =   null;
            
            $searchJsonSaved        =   false;
            
            $i                      =   0;
            
            $multiCurlIndexArray    =   [];
            
            $multiCurlArray         =   [];
            
            $cachedDataArray        =   [];
            
            $urlIdArray             =   [];
            //echo '<br>searcharray before for loop : <pre>' . print_r($searchArray, true) . '</pre>';
            foreach ($searchArray as $vendor=>$searchData) {
            
                $vendor                 =   strtolower($vendor);
                
                //$multiCurlIndexArray[$i]=   $vendor;
                
                $searchJson             =   !empty($searchJson) 
                                            ? $searchJson : json_encode($searchData);

                switch ($vendor) {
                    case 'cleartrip' :
                        $api            =   $this->clearTripApi;
                        break;
                    
                    case 'goibibo' :
                        $api            =   $this->goIbiboApi;
                        break;

                    case 'happyeasygo' :
                        $api            =   $this->happyEasyGoApi;
                        break;
                }

                $keysFound                  =   [];

                foreach ($searchData as $key => $value) {
                    
                    if (!empty($value)) {
                        if ($key == 'seatingclass') {
                            $value              =   $this->getSeatingClass($vendor, strtolower($value));

                            if (!$value) {
                                $this->error    =   'Unable to find seating class';
                                return false;
                            }
                        }

                        if ($key == 'dateofdeparture' || $key == 'dateofarrival') {
                            if ($vendor == 'happyeasygo' || $vendor == 'goibibo') {
                                $value  = str_ireplace('-', '', $value);
                            }
                        }

                        if (!empty($value)) {

                            $api            =   str_ireplace($this->searchValueReplaceArray[$key], 
                                                $value, $api);

                            $keysFound[]    =   $key;
                        }
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
                //echo '<br>Api : ' . $api . ', urlid : ' . $urlId;
                if (!$urlId) {
                    return false;
                }
                
                $this->urlIds[]                                         =   $urlId;
                
                if (!$searchJsonSaved) {
                    
                    $searchParamId                                      =   $this->getSearchParamJsonId($searchJson);
                    
                    if (!$searchParamId) {
                        return false;
                    }
                    
                    $this->currentSearchParamId                         =   $searchParamId;
                    
                    $this->_dbSrvFlightsSearchLog                       =   new DbSrvFlightsSearchLog();
                    $this->_dbSrvFlightsSearchLog->fk_search_param_id   =   $searchParamId;
                    $this->_dbSrvFlightsSearchLog->fk_user_id           =   !empty($data['fk_user_id']) ? $data['fk_user_id'] : null;
                    $this->_dbSrvFlightsSearchLog->session_id           =   !empty($data['session_id']) ? $data['session_id'] : null;
                    $this->_dbSrvFlightsSearchLog->device_type          =   !empty($data['device_type']) ? $data['device_type'] : null;
                    $this->_dbSrvFlightsSearchLog->created_at           =   $dateTime;
                    $this->_dbSrvFlightsSearchLog->updated_at           =   $dateTime;

                    if (!$this->_dbSrvFlightsSearchLog->save()) {
                        $this->error =  'Unable to save flight search log due to a '
                                        . 'database error. Please contact administrator';

                        return false;
                    }
                    
                    $searchJsonSaved = true;
                }
                
                
                if (env('USEFLIGHTCACHE')) {
                    
                    $cacheData = $this->getDataFromCache($urlId);
                    
                    if ($cacheData) {
                        //unset($multiCurlIndexArray[$vendor]);
                        $cachedDataArray[$vendor]   =   $cacheData;
                        continue;
                    } else {
                        $urlIdArray[$vendor]        =   $urlId;
                    }
                }

                //$curlResult     =   false;

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
                
                $multiCurlIndexArray[$i]    =   $vendor;
                
                $i++;
            }
            //echo '<br>searcharray after for loop : <pre>' . print_r($searchArray, true) . '</pre>';
            
            //echo '<br>$multiCurlArray : <pre>' . print_r($multiCurlArray, true) . '</pre>';exit;
            if (count($multiCurlArray)) {
                $multiCurlResult    =   $this->curl->multiExecute($multiCurlArray, $multiCurlIndexArray);
                
                if (!$multiCurlResult) {
                    $this->error    =   $this->curl->getError();
                    return false;
                }
                
                if (env('USEFLIGHTCACHE')) {
                    
                    if (count($urlIdArray)) {
                        $saveCachedData     =   [];
                    
                        foreach ($multiCurlResult as $vendor => $data) {
                            $saveCachedData[$urlIdArray[$vendor]] = $data;
                        }
                        
                        if (!$this->saveCacheData($saveCachedData)) {
                            return false;
                        }
                    }
                    
                    if (count($cachedDataArray)) {
                        return array_merge($cachedDataArray, $multiCurlResult);
                    }
                }
                
                return $multiCurlResult;
            }
            
            if (count($cachedDataArray)) {
                return $cachedDataArray;
            }

            $this->error    =   'No data found to fetch';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch flight data', $ex);
            return false;
        }
    }
    
    public function getFlightData($data)
    {
        try {
            
            $api                    =   $this->clearTripApi;
            
            $vendor                 =   strtolower($data['vendor']);
            
            unset($data['vendor']);
            
            switch ($vendor) {
                case 'goibibo' :
                    $api            =   $this->goIbiboApi;
                    break;
                
                case 'happyeasygo' :
                    $api            =   $this->happyEasyGoApi;
                    break;
            }
            
            $searchData             =   $data['searchData'];
            
            $keysFound                  =   [];
            
            foreach ($searchData as $key => $value) {
                
                if ($key == 'seatingclass') {
                    $value              =   $this->getSeatingClass($vendor, strtolower($value));
                    
                    if (!$value) {
                        $this->error    =   'Unable to find seating class';
                        return false;
                    }
                }
                
                if ($key == 'dateofdeparture' || $key == 'dateofarrival') {
                    if ($vendor == 'happyeasygo' || $vendor == 'goibibo') {
                        $value  = str_ireplace('-', '', $value);
                    }
                }
                
                if (!empty($value)) {
                    
                    $api            =   str_ireplace($this->searchValueReplaceArray[$key], 
                                        $value, $api);
                
                    $keysFound[]    =   $key;
                }
            }
            
            $keysNotFound       = array_diff(array_keys($this->searchValueReplaceArray), $keysFound);
            
            /*echo '<br>keysFound : <pre>' . print_r($keysFound, true) . '</pre>';
            
            echo '<br>KeysNotFound : <pre>' . print_r($keysNotFound, true) . '</pre>';exit;*/
            
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
            
            $this->urlIds[]                                     =   $urlId;
            
            $this->_dbSrvFlightsSearchLog                       =   new DbSrvFlightsSearchLog();
            $this->_dbSrvFlightsSearchLog->fk_flights_url_id    =   $urlId;
            $this->_dbSrvFlightsSearchLog->fk_user_id           =   !empty($data['fk_user_id']) ? $data['fk_user_id'] : null;
            $this->_dbSrvFlightsSearchLog->session_id           =   !empty($data['session_id']) ? $data['session_id'] : null;
            $this->_dbSrvFlightsSearchLog->device_type          =   !empty($data['device_type']) ? $data['device_type'] : null;
            $this->_dbSrvFlightsSearchLog->created_at           =   $dateTime;
            $this->_dbSrvFlightsSearchLog->updated_at           =   $dateTime;

            if (!$this->_dbSrvFlightsSearchLog->save()) {
                $this->error =  'Unable to save flight search log due to a '
                                . 'database error. Please contact administrator';
                
                return false;
            }
            
            $curlResult     =   false;
            
            $curlOptions    =   null;
            
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
            //echo '<br>api : ' . $api . '<br>CurlOptions : <pre>' . print_r($curlOptions, true) . '</pre>';   
            $curlResult = $this->curl->getCurlData($api, null, $curlOptions);
            /*if (stristr($api, 'cleartrip')) {
                echo '<br>CurlResult : ' . $curlResult;exit;
                
            }*/
            if (!$curlResult) {
                $this->error = $this->curl->getError();
                return false;
            }
            
            return $curlResult;
            
        } catch (\Exception $ex) {
            $this->setError('fetch flight data', $ex);
            return false;
        }
    }
    
    public function getAirportList($data)
    {
        try {
            $result = $this->_dbSrvAirportList::where('airport_name', 'LIKE', '%' . $data['aname'] . '%')
                      ->get(['pk_airport_id', 'airport_name', 'IATA_Code'])
                      ->toArray();
            
            if (is_array($result) && count($result)) {
                return $result;
            }
            
            $this->error = 'Data not found';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch airport data', $ex);
            return false;
        }
    }
}



