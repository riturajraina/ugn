<?php
namespace App\Http\Controllers\Service;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Service\Flights\FlightsRepository;

//use Cookie;


class FlightsController extends Controller {

    protected $flightsRepository;
    
    protected $vendorArray;
    
    protected $vendorToSearchArray;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct() {
        //$this->middleware('auth');
        parent::__construct();
        
        $this->flightsRepository    =   new FlightsRepository();
        
        $this->vendorArray          =   ['cleartrip', 'goibibo', 'happyeasygo'];
        
        //$this->vendorToSearchArray  =   ['cleartrip', 'happyeasygo'];

        $this->vendorToSearchArray  =   ['happyeasygo'];
        
        //$this->vendorToSearchArray  =   ['cleartrip'];
        
    }
    
    public function sortVendorData($vendorData, $sortParam='price', $sortType='asc')
    {
        switch ($sortParam) {
            case 'price' :
                /*if ($sortType == 'asc') {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['fare'][$vendor])) {
                                return $a['fare'][$vendor] - $b['fare'][$vendor];
                            }
                        }
                    });
                } else {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['fare'][$vendor])) {
                                return $b['fare'][$vendor] - $a['fare'][$vendor];
                            }
                        }
                    });
                }*/
                
                if ($sortType == 'asc') {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['sortFare'])) {
                                return $a['sortFare'] - $b['sortFare'];
                            }
                        }
                    });
                } else {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['sortFare'])) {
                                return $b['sortFare'] - $a['sortFare'];
                            }
                        }
                    });
                }
                
                //
                
                break;
                
            case 'arrival' :
                if ($sortType == 'asc') {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['arrival_time'])) {
                                return $this->dateValidator->getDateValue($a['arrival_time']) 
                                        - $this->dateValidator->getDateValue($b['arrival_time']);
                            }
                        }
                    });
                } else {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['arrival_time'])) {
                                return $this->dateValidator->getDateValue($b['arrival_time']) 
                                        - $this->dateValidator->getDateValue($a['arrival_time']);
                            }
                        }
                    });
                }
                
                break;
                
                
            case 'departure' :
                if ($sortType == 'asc') {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['departure_time'])) {
                                return $this->dateValidator->getDateValue($a['departure_time']) 
                                        - $this->dateValidator->getDateValue($b['departure_time']);
                            }
                        }
                    });
                } else {
                    uasort($vendorData, function($a, $b) {
                        foreach ($this->vendorToSearchArray as $vendor) {
                            if (!empty($a['departure_time'])) {
                                return $this->dateValidator->getDateValue($b['departure_time']) 
                                        - $this->dateValidator->getDateValue($a['departure_time']);
                            }
                        }
                    });
                }
                
                break;
        };
        
        return $vendorData;
    }
    
    public function fetchfirstRecordPrice($data)
    {
        foreach ($data as $flightCode => $flightData) {
            foreach ($this->vendorToSearchArray as $vendor) {
                if (!empty($flightData['fare'][$vendor])) {
                    return $flightData['fare'][$vendor];
                }
            }
        }
        
        return false;
    }
    
    
    public function searchFlightsParallelly(Request $request)
    {
        $data               =   $request->all();
        
        //echo '<br>Data : <pre>' . print_r($data, true) . '</pre>';exit;
        
        $validatorArray     =   [
            'sourceCity'        =>  'required',
            'destinationCity'   =>  'required',
            'departureDate'     =>  'required',
            'way'               =>  'required',
            'adults'            =>  'required',
            'seatingClass'      =>  'required',
        ];
        
        if (!empty($data['way']) && $data['way'] == 2) {
            $validatorArray['arrivalDate']   =   'required';
        }
        
        $validator          =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/flightsearch')->withInput()->withErrors($validator);
        }
        
        $errors             =   [];
        
        if ($data['sourceCity'] == $data['destinationCity']) {
            $errors[]       =   'Departure City & Arrival City cannot be same';
        }
        
        $departureDateValue =   $this->dateValidator->getDateValue($data['departureDate']);
        
        if (!$this->dateValidator->dateValidate($data['departureDate'])) {
            $errors[]       =   'Invalid departure date';
        } elseif ($departureDateValue < $this->dateValidator->getDateValue(date('Y-m-d'))) {
            $errors[]       =   'Departure date cannot be less than current date';
        }
        
        if ($data['way'] == 2 && empty($data['arrivalDate'])) {
            $errors[]       =   'Arrival date cannot be empty for a two way trip';
        }
        
        if (!empty($data['arrivalDate'])) {
            $arrivalDateValue   =   $this->dateValidator->getDateValue($data['arrivalDate']);
            
            if (!$this->dateValidator->dateValidate($data['arrivalDate'])) {
                $errors[]   =   'Invalid arrival date';
            } elseif ($arrivalDateValue < $this->dateValidator->getDateValue(date('Y-m-d'))) {
                $errors[]   =   'Arrival date cannot be less than current date';
            }
            
            if ($departureDateValue > $arrivalDateValue) {
                $errors[]   =   'Departure date cannot be greater than arrival date';
            }
        }
        
        
        if (count($errors)) {
            return redirect('/flightsearch')->withInput()->withErrors($errors);
        }
        
        //echo '<br>Data before set cookie : <pre>' . print_r($data, true) . '</pre>';
        /*$response = new Response();
        
        $response->withCookie(cookie()->forever('sourceCity', $data['sourceCity']));
        
        $response->withCookie(cookie()->forever('destinationCity', $data['destinationCity']));*/
        
        /*$sourceCityCookie = \Cookie::forever('sourceCity', $data['sourceCity']);
        
        $destinationCityCookie = \Cookie::forever('destinationCity', $data['destinationCity']);
        
        /*$cookies = \Cookie::get();
        
        echo '<br>Cookies : <pre>' . print_r($cookies, true) . '</pre>';exit;

        time()+60*60*24*30
                  */
        
        setcookie('sourceCity', $data['sourceCity'], (time()+60*60*24*365));
        
        setcookie('destinationCity', $data['destinationCity'], (time()+60*60*24*365));
        
        setcookie('way', $data['way'], (time()+60*60*24*365));
        
        //$request->cookie();
        
        $dateArray      =   explode('-', $data['departureDate']);
        
        $monthText      =   $this->dateValidator->getMonthText($dateArray['1']);
        
        $arrivalDateArray = !empty($data['arrivalDate']) 
                            ? explode('-', $data['arrivalDate']) : null;
        
        $arrivalMonthText = !empty($arrivalDateArray) 
                            ? $this->dateValidator->getMonthText($arrivalDateArray['1']) : null;
        
        $vendorArray    =   $this->vendorToSearchArray;
        
        $vendorData     =   [];
        
        $app            =   app();
        
        $sessionId      =   $app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]);
        
        $userId         =   null;
            
        if (!empty(session('userDetails')))
        {
            $userDetails    =   session('userDetails');
            //echo '<br>UserDetails : <pre>' . print_r($userDetails, true) . '</pre>';exit;
            $userId         =   $userDetails['0']['pk_user_id'];
        }

        $deviceType         =   'Desktop';

        $isMobileDevice     =   $this->checkIfMobileDevice();

        if ($isMobileDevice) {
            $deviceType     =   $this->deviceDetector->isMobile() ? 'Mobile' 
                                : ($this->deviceDetector->isTablet() ? 'Tablet' : 'Unknown mobile device');
        }
        
        $searchArray        =   [];
        
        $searchArraySingleTraveller = [];
        
        foreach ($vendorArray as $vendor) {
               
            $searchData     =   [
                
                'sourceCity'        =>  $data['sourceCity'],
                'destinationCity'   =>  $data['destinationCity'],
                'dateofdeparture'   =>  $data['departureDate'],
                'dateofarrival'     =>  (!empty($data['arrivalDate'])
                                        ? $data['arrivalDate'] : null),
                'seatingclass'      =>  $data['seatingClass'],
                'adults'            =>  $data['adults'],
                'children'          =>  (!empty($data['children'])
                                        ? $data['children'] : null),
                'infants'           =>  (!empty($data['infants'])
                                        ? $data['infants'] : null),
            ];
            
            $searchArray['searchData'][$vendor] =   $searchData;
            
            $searchArray['fk_user_id']          =   $userId;
            
            $searchArray['session_id']          =   $sessionId;
            
            $searchArray['device_type']         =   $deviceType;
            
            
            /******From here for single traveller search***********/
            
            
            
            $searchData     =   [
                
                'sourceCity'        =>  $data['sourceCity'],
                'destinationCity'   =>  $data['destinationCity'],
                'dateofdeparture'   =>  $data['departureDate'],
                'dateofarrival'     =>  (!empty($data['arrivalDate'])
                                        ? $data['arrivalDate'] : null),
                'seatingclass'      =>  $data['seatingClass'],
                'adults'            =>  1,
            ];
            
            $searchArraySingleTraveller['searchData'][$vendor] = $searchData;
            
            $searchArraySingleTraveller['searchData'][$vendor] =   $searchData;
            
            $searchArraySingleTraveller['fk_user_id']          =   $userId;
            
            $searchArraySingleTraveller['session_id']          =   $sessionId;
            
            $searchArraySingleTraveller['device_type']         =   $deviceType;
        }
        
        //echo '<br>$searchData : <pre>' . print_r($searchData, true) . '</pre>';exit;
        
        /*$advancedUrlIds             =   $this->flightsRepository->getAdvancedDateUrlIds($searchArray, null, $this->vendorArray);
        
        if (!$advancedUrlIds) {
            //echo '<br>Error : ' . $this->flightsRepository->getError();exit;
            return redirect('/flightsearch')->withInput()->withErrors([$this->flightsRepository->getError()]);
        }
        
        //echo '<br>Advanced Url Ids : <pre>' . print_r($advancedUrlIds, true) . '</pre>';exit;*/
        
        $advancedSearchParamIds     =   $this->flightsRepository->getAdvancedSearchParamIds($searchArray);
        
        
        $advancedSearchParamIdsSingleTraveller = $this->flightsRepository->getAdvancedSearchParamIds($searchArraySingleTraveller);
        
        if (!$advancedSearchParamIds) {
            //echo '<br>Error : ' . $this->flightsRepository->getError();exit;
            return redirect('/flightsearch')->withInput()->withErrors([$this->flightsRepository->getError()]);
        }
        
        //echo '<br>Advanced search param Ids : <pre>' . print_r($advancedSearchParamIds, true) . '</pre>';//exit;
        
        $flightDataArray            =   $this->flightsRepository->getFlightDataParallelly($searchArray);
        
        $currentUrlIds              =   $this->flightsRepository->getCurrentUrlIds();
        
        $currentSearchParamId       =   $this->flightsRepository->getCurrentSearchParamId();
            
        if (!$flightDataArray) {
            $errors[]               =   $this->flightsRepository->getError();
        } else {
            foreach ($flightDataArray as $vendor => $flightData) {
                
                if ($vendor == 'cleartrip') {
                    
                    $flightDataUncompressed         =   @gzdecode($flightData);
                    
                    if ($flightDataUncompressed) {
                        $flightData = $flightDataUncompressed;
                    }
                    
                    /**the above check added as sometimes the cleartrip data is
                     * coming in gzip compressed format & sometimes its coming
                     * in uncompressed xml format...Rituraj 11 March 2019
                     */

                    $root = new \DOMDocument();

                    $root->loadXML($flightData);

                    //$flightData      =  $this->generalHelper->dom_xml_to_array(gzdecode($root));
                    $flightData      =  $this->generalHelper->dom_xml_to_array($root);

                    if (!$flightData) {
                        $errors[]    =  $this->generalHelper->getError();
                    } else {
                        $vendorData[$vendor] =  $flightData;
                    }

                } else {
                    $vendorData[$vendor] =  json_decode($flightData);
                }
            }
        }
        
        //echo '<br>Unextracted flight data : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        //file_put_contents('d:\vendordata.txt', print_r($vendorData, true));
        $vendorData     =   $this->extractFlightComparisonData($vendorData);
        
        if (!$vendorData) {
            $errors[]   =   $this->error;
        }
        //echo '<br>Extracted flight data : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        $vendorData     =   $this->finalClubbedData($vendorData);
        
        if (!$vendorData) {
            $errors[]   =   $this->error;
        }
        
        if (count($errors)) {
            return redirect('/flightsearch')->withInput()->withErrors($errors);
        } else {
            //echo '<br>vendor Data : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        }
        
        $minPriceDeparture  =   $this->fetchfirstRecordPrice($vendorData['departureData']);
        
        $minPriceArrival    =   !empty($vendorData['arrivalData']) 
                                ? $this->fetchfirstRecordPrice($vendorData['arrivalData']) 
                                : null;
        
        $minPriceStoreArray = [
            'fk_search_param_id' => $currentSearchParamId,
            'minPriceDeparture' =>  $minPriceDeparture,
            'minPriceArrival'   =>  $minPriceArrival,
        ];
        
        if (!$this->flightsRepository->storeMinimumPrice($minPriceStoreArray)) {
            return redirect('/flightsearch')->withInput()->withErrors([$this->flightsRepository->getError()]);
        }
        
        $futurePriceArray       =   $this->flightsRepository
                                    ->fetchFutureDatesPrice($advancedSearchParamIds, $currentSearchParamId);
        
        /*$futurePriceArray       =   $this->flightsRepository
                                    ->fetchFutureDatesPrice($advancedSearchParamIds);*/
        
        /*if (!$futurePriceArray) {
            echo '<br>Error : ' . $this->flightsRepository->getError();exit;
        }
        
        echo '<br>futurePriceArray : <pre>' . print_r($futurePriceArray, true) . '</pre>';exit;*/
        
        if (!is_array($futurePriceArray)) {
            $futurePriceArray = [];
        }
        
        
        
        $futurePriceArraySingleTraveller    =    $this->flightsRepository
                                                 ->fetchFutureDatesPrice($advancedSearchParamIdsSingleTraveller, 
                                                 $currentSearchParamId);
        
        if (!is_array($futurePriceArraySingleTraveller)) {
            $futurePriceArraySingleTraveller = [];
        }
        
        
        if (!empty($data['sortParam'])) {
            
            $vendorData['departureData']    =  $this->sortVendorData($vendorData['departureData'],
                                                $data['sortParam'], $data['sortType']);
                
            //echo '<br>Inside if, data : <pre>' . print_r($data, true) . '</pre>';exit;
            //$vendorData = $this->sortVendorData($vendorData, $data['sortParam'], $data['sortType']);
            
            /*if ($data['sortParam'] == 'price') {
                $vendorData['departureData'] =  $this->sortVendorData($vendorData['departureData'],
                                                $data['sortParam'], $data['sortType']);
                
                $vendorData['arrivalData'] =  $this->sortVendorData($vendorData['arrivalData'],
                                                $data['sortParam'], $data['sortType']);
            }
            
            if ($data['sortParam'] == 'arrival') {
                
                $vendorData['arrivalData'] =  $this->sortVendorData($vendorData['arrivalData'],
                                                $data['sortParam'], $data['sortType']);
            }
            
            if ($data['sortParam'] == 'departure') {
                $vendorData['departureData'] =  $this->sortVendorData($vendorData['departureData'],
                                                $data['sortParam'], $data['sortType']);
                
            }*/
            
            //echo '<br>vendorData after sorting : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        }
        
        if (!empty($data['sortParamReturn'])) {
                
            $vendorData['arrivalData']      =  $this->sortVendorData($vendorData['arrivalData'],
                                                $data['sortParamReturn'], $data['sortTypeReturn']);
        }
        
        
        $queryString =   '?_token=' . $data['_token']
                         . '&sourceCity=' . $data['sourceCity']
                         . '&destinationCity=' . $data['destinationCity']
                         . '&way=' . $data['way']
                         . '&adults=' . $data['adults']
                         . '&seatingClass=' . $data['seatingClass']
                         . '&departureDate=' . $data['departureDate']
                         . '&exampleTravellerInput=' . $data['exampleTravellerInput']
                         . '&children=' . $data['children']
                         . '&infants=' . $data['infants']
                         . '&arrivalDate=' 
                         . (!empty($data['arrivalDate']) ? $data['arrivalDate'] : null)
                         . '&dateFrom='
                         . (!empty($data['dateFrom']) ? urlencode($data['dateFrom']) : null)
                         . '&dateTo='
                         . (!empty($data['dateTo']) ? urlencode($data['dateTo']) : null);
        
        
        $masterHeaderText = '<p class="text-truncate">'
            . $data['sourceCity'] . ' <img src="/images/right-arrow.svg" alt=""> '
            . $data['destinationCity'] . '  | ' 
            . $dateArray['2'] . ' ' . $monthText 
            . ' | ' . $data['exampleTravellerInput'] . ' </p>';
        
        
        if ($data['way'] == '2') {
            
            $masterHeaderText = '<p class="text-truncate">'
                            . $data['sourceCity'] . ' <img src="/images/swipe.svg" alt=""> '
                            . $data['destinationCity'] . '  | ' 
                            . $dateArray['2'] . ' ' . $monthText 
                            . ' - ' . $arrivalDateArray['2'] . ' ' . $arrivalMonthText 
                            . ' | ' . $data['exampleTravellerInput'] . ' </p>';
        }
        
        /*********From here sorting display logic****************/
        
        $sortParam          =   !empty($data['sortParam']) ? $data['sortParam'] : 'price';
    
        $sortType           =   !empty($data['sortType']) ? $data['sortType'] : null;
        
        $sortParamReturn    =   !empty($data['sortParamReturn']) ? $data['sortParamReturn'] : 'price';
    
        $sortTypeReturn     =   !empty($data['sortTypeReturn']) ? $data['sortTypeReturn'] : null;
        
        
        $departureSortHintMessage   =   'Click here to sort in descending order of '
                                        . 'departure time';
        
        $departureSortArrow         =   'down';
        
        $departureSortParam         =   'desc';
        
        if ($sortParam == 'departure' && $sortType == 'desc') {
            
            $departureSortHintMessage = 'Click here to sort in ascending order of '
                                . 'departure time';
            
            $departureSortArrow     =   'up';
            
            $departureSortParam     =   'asc';
        }
        
        /**********/
        
        $departureSortReturnHintMessage   =     'Click here to sort in descending order of '
                                                . 'departure time';
        
        $departureSortReturnArrow         =     'down';
        
        $departureSortReturnParam         =     'desc';
        
        if ($sortParamReturn == 'departure' && $sortTypeReturn == 'desc') {
            
            $departureSortReturnHintMessage =   'Click here to sort in ascending order of '
                                                . 'departure time';
            
            $departureSortReturnArrow       =   'up';
            
            $departureSortReturnParam       =   'asc';
        }
        
        /**********/
        
        $arrivalSortHintMessage     =   'Click here to sort in descending order of '
                                        . 'arrival time';
        
        $arrivalSortArrow           =   'down';
        
        $arrivalSortParam           =   'desc';
        
        if ($sortParam == 'arrival' && $sortType == 'desc') {
            
            $arrivalSortHintMessage =   'Click here to sort in ascending order of '
                                        . 'arrival time';
            
            $arrivalSortArrow       =   'up';
            
            $arrivalSortParam       =   'asc';
        }
        
        /****************/
        
        $arrivalSortHintReturnMessage       =   'Click here to sort in descending order of '
                                                . 'arrival time';
        
        $arrivalSortReturnArrow             =   'down';
        
        $arrivalSortReturnParam             =   'desc';
        
        if ($sortParamReturn == 'arrival' && $sortTypeReturn == 'desc') {
            
            $arrivalSortHintReturnMessage   =   'Click here to sort in ascending order of '
                                                . 'arrival time';
            
            $arrivalSortReturnArrow         =   'up';
            
            $arrivalSortReturnParam         =   'asc';
        }
        
        /****************/
        
        
        $priceSortHintMessage       =   'Click here to sort in descending order of '
                                        . 'price';
        
        $priceSortArrow             =   'down';
        
        $priceSortParam             =   'desc';
        
        if ($sortParam == 'price' && $sortType == 'desc') {
            
            $priceSortHintMessage   =   'Click here to sort in ascending order of '
                                        . 'price';
            
            $priceSortArrow         =   'up';
            
            $priceSortParam         =   'asc';
        }
        
        /******************/
        
        $priceSortHintReturnMessage =   'Click here to sort in descending order of '
                                        . 'price';
        
        $priceSortReturnArrow       =   'down';
        
        $priceSortReturnParam       =   'desc';
        
        if ($sortParamReturn == 'price' && $sortTypeReturn == 'desc') {
            
            $priceSortHintReturnMessage   =     'Click here to sort in ascending order of '
                                                . 'price';
            
            $priceSortReturnArrow         =     'up';
            
            $priceSortReturnParam         =     'asc';
        }
        
        /*********Till here sorting display logic***************/
         
        $viewArray  =   [
            
            'masterHeaderText'  =>  $masterHeaderText,
            
            'futurePriceArray'  =>  $futurePriceArray,
            
            'futurePriceArraySingleTraveller' => $futurePriceArraySingleTraveller,
            
            'backButtonUrl'     =>  env('APP_URL') . '/flightsearch' . $queryString,
            
            'headerTextLink'    =>  env('APP_URL') . '/flightsearch' . $queryString,
            
            'vendorData'        =>  $vendorData,
            
            'sourceCity'        =>  $data['sourceCity'],
            
            'destinationCity'   =>  $data['destinationCity'],
            
            'way'               =>  $data['way'],
            
            'data'              =>  $data,
            
            /***From here sort params***/
            
            'sortParam'         =>  $sortParam,
            
            'sortType'          =>  $sortType,
        
            'sortParamReturn'   =>  $sortParamReturn,
    
            'sortTypeReturn'    =>  $sortTypeReturn,
        
        
            'departureSortHintMessage'  =>  $departureSortHintMessage,
        
            'departureSortArrow'        =>  $departureSortArrow,
        
            'departureSortParam'        =>  $departureSortParam,
            
            
            'departureSortReturnHintMessage'    =>  $departureSortReturnHintMessage,
        
            'departureSortReturnArrow'          =>  $departureSortReturnArrow,
        
            'departureSortReturnParam'          =>  $departureSortReturnParam,
            
            
            'arrivalSortHintMessage'            =>  $arrivalSortHintMessage,
        
            'arrivalSortArrow'                  =>  $arrivalSortArrow,
        
            'arrivalSortParam'                  =>  $arrivalSortParam,
            
            
            'arrivalSortHintReturnMessage'      =>  $arrivalSortHintReturnMessage,
        
            'arrivalSortReturnArrow'            =>  $arrivalSortReturnArrow,
        
            'arrivalSortReturnParam'            =>  $arrivalSortReturnParam,
            
            
            'priceSortHintMessage'              =>  $priceSortHintMessage,
        
            'priceSortArrow'                    =>  $priceSortArrow,
        
            'priceSortParam'                    =>  $priceSortParam,
            
            'priceSortHintReturnMessage'        =>  $priceSortHintReturnMessage,
        
            'priceSortReturnArrow'              =>  $priceSortReturnArrow,
        
            'priceSortReturnParam'              =>  $priceSortReturnParam,
            
            /*******Till here sort params******/
            
        ];
        
        return view('flightlist_mob', $viewArray);
    }
    
    
    
    public function getVendorDurationTimeType($vendor)
    {
        $timeTypeArray  =   [
            'goibibo'       =>  'secs',
            'cleartrip'     =>  'secs',
            'happyeasygo'   =>  'mins',
        ];
        
        return $timeTypeArray[strtolower($vendor)];
    }
    
    public function clubData($finalData, $flightArray, $vendor)
    {
        try {
            foreach ($flightArray as $flightCode => $flightData) {
                        
                if (!empty($finalData[$flightCode])) {
                    $fareArray  =   $finalData[$flightCode]['fare'];
                    $fareArray[$vendor]  =  $flightData['total_fare'];   
                    $finalData[$flightCode]['fare']    =   $fareArray;
                    $finalData[$flightCode]['stops']   =   empty($finalData[$flightCode]['stops'])
                                                                  ? (!empty($flightData['stops']) ? $flightData['stops']
                                                                    : 0) 
                                                                  : $finalData[$flightCode]['stops'];
                    $finalData[$flightCode]['sortFare'] =   $flightData['total_fare'];
                } else {
                    $timeType   =   $this->getVendorDurationTimeType($vendor);
                    $finalData[$flightCode]    =   [
                        'fare'              =>  [$vendor => $flightData['total_fare']],
                        'departure_time'    =>  $flightData['departure_time'],
                        'arrival_time'      =>  $flightData['arrival_time'],
                        'duration'          =>  $this->generalHelper
                                                ->convertIntoHoursAndMinutes($flightData['duration'], $timeType),
                        'timeType'          =>  $timeType,
                        'stops'             =>  (!empty($flightData['stops']) ? $flightData['stops'] : 0),
                        'sortFare'          =>  $flightData['total_fare'],
                    ];
                }
            }
            
            return $finalData;
            
        } catch (\Exception $ex) {
            $this->error    =   'Got error during final clubbing of flight data. '
                    . 'Please contact administrator';
            
            if (env('APP_DEBUG')) {
                $this->error    =   'Got error this exception during final '
                                    . 'clubbing of flight data. '
                                    . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    public function finalClubbedData($vendorData)
    {   //echo '<br>$vendorData : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        try {
            
            $vendorArray            =   array_keys($vendorData);
            
            $finalDataDeparture     =   [];

            $finalDataArrival       =   [];
            
            foreach ($vendorArray as $vendor) {
                
                if (!empty($vendorData[$vendor]['departureData'])) {
                    
                    $flightArray   =   $vendorData[$vendor]['departureData'];
                    
                    $finalDataDeparture = $this->clubData($finalDataDeparture, $flightArray, $vendor);
                    
                    if (!$finalDataDeparture) {
                        return false;
                    }
                }
                
                if (!empty($vendorData[$vendor]['arrivalData'])) {
                    $flightArray   =   $vendorData[$vendor]['arrivalData'];
                    
                    $finalDataArrival = $this->clubData($finalDataArrival, $flightArray, $vendor);
                    
                    if (!$finalDataArrival) {
                        return false;
                    }
                }
            }

            return [
                'departureData' =>  $finalDataDeparture,
                'arrivalData'   =>  $finalDataArrival,
            ];
            
        } catch (\Exception $ex) {
            $this->error    =   'Unable to fetch final clubbed data. '
                                . 'Please contact administrator';
            
            if (env('APP_DEBUG')) {
                $this->error    =   'Unable to fetch final clubbed data due to '
                                    . ' this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    
    
    public function extractFlightComparisonData($vendorData)
    {
        try {
            
            $vendorArray        =   array_keys($vendorData);
            
            $clearTripData      =   in_array('cleartrip', $vendorArray) 
                                    ? $vendorData['cleartrip'] : null;
            
            $goIbiboData        =   in_array('goibibo', $vendorArray) 
                                    ? $vendorData['goibibo'] : null;
            
            $happyEasyGoData    =   in_array('happyeasygo', $vendorArray) 
                                    ? $vendorData['happyeasygo'] : null;
            //echo '<br>clear trip data before refine : <pre>' . print_r($clearTripData, true) . '</pre>';exit;
            if (!empty($clearTripData)) {
                
                $clearTripData  =   $this->refineClearTripData($clearTripData);
                
                if (!$clearTripData) {
                    return false;
                }
                //echo '<br>clear trip data after refine : <pre>' . print_r($clearTripData, true) . '</pre>';exit;
                $vendorData['cleartrip']    =   $clearTripData;
            }

            if (!empty($goIbiboData)) {
                $goIbiboData    =   $this->refineGoIbiboData($goIbiboData);
                
                $vendorData['goibibo']    =   $goIbiboData;
            }

            if (!empty($happyEasyGoData)) {
                $happyEasyGoData            =   $this->refineHappyEasygoData($happyEasyGoData);
                
                $vendorData['happyeasygo']  =   $happyEasyGoData;
            }
            
            return $vendorData;
            
        } catch (\Exception $ex) {
            $this->error = 'Unable to extract flight comparison data due to an exception.'
                            . ' Please contact administrator';
            
            if (env('APP_DEBUG') == true) {
                $this->error = 'Unable to extract flight comparison data due to '
                                . 'this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    public function refineHappyEasygoData($data)
    {
        try {
            $departure  =   [];
            
            $arrival    =   [];
            
            $results    =   $data->results;
            
            foreach ($results as $flightObject) {
                
                $flightCode         =   strtoupper($flightObject->flights['0']->fn);

                $departure[$flightCode]    =   [
                    'base_fare'     =>  $flightObject->fare->bf,
                    'tex'           =>  $flightObject->fare->tf,
                    'total_fare'    =>  $flightObject->fare->t,
                    //'terminal'      =>  null,//Not available in HEG
                    'departure_time'=>  str_ireplace('T', ' ', $flightObject->flights['0']->ddt),
                    'arrival_time'  =>  str_ireplace('T', ' ', $flightObject->flights['0']->adt),
                    'duration'      =>  $flightObject->flights['0']->fd,
                ];
                
                /*if (!empty($flightObject->flights['1']->fn) && $flightObject->fare->r == true) {
                    $departure[$flightCode]['duration'] = $departure[$flightCode]['duration'] 
                                                            +
                                                          $flightObject->flights['1']->fd;
                    
                    $departure[$flightCode]['stops']    =   1;
                }*/
                
                if (!empty($flightObject->flights['1']->fn)) {
                    if ($flightObject->flights['0']->aac <> $flightObject->flights['1']->dac 
                        || 
                    $flightObject->flights['0']->dac <> $flightObject->flights['1']->aac) {
                        $departure[$flightCode]['duration'] = $departure[$flightCode]['duration'] 
                                                                +
                                                              $flightObject->flights['1']->fd;

                        $departure[$flightCode]['stops']    =   1;
                        
                        $departure[$flightCode]['arrival_time'] = str_ireplace('T', ' ', $flightObject->flights['1']->adt);
                    }

                    //if (!empty($flightObject->flights['1']->fn) && $flightObject->fare->r == false) {
                        if ($flightObject->flights['0']->aac == $flightObject->flights['1']->dac
                                &&
                            $flightObject->flights['0']->dac == $flightObject->flights['1']->aac
                           ) 
                            {
                            $arrival[$flightCode]      =   [
                                'base_fare'     =>  $flightObject->fare->bf,
                                'tex'           =>  $flightObject->fare->tf,
                                'total_fare'    =>  $flightObject->fare->t,
                                //'terminal'      =>  null,//Not available in HEG
                                'departure_time'=>  str_ireplace('T', ' ', $flightObject->flights['1']->ddt),
                                'arrival_time'  =>  str_ireplace('T', ' ', $flightObject->flights['1']->adt),
                                'duration'      =>  $flightObject->flights['1']->fd,
                            ];
                        }

                    //}
                }
            }
            
            return  [
                        'departureData' =>  $departure,
                        'arrivalData'   =>  $arrival,
                    ];
            
        } catch (\Exception $ex) {
            $this->error    =   'Unable to refine flight comparison data due to '
                                . 'an exception. Please contact administrator';
            
            if (env('APP_DEBUG') == true) {
                $this->error = 'Unable to refine HappyEasyGo flight comparison data due to '
                                . 'this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    public function refineGoIbiboData($data)
    {
        try {
            $departure  =   $data->data->onwardflights;
        
            $arrival    =   $data->data->returnflights;

            if (!empty($departure)) {
                $departure  =   $this->extractGoIbiboDataFromArray($departure);
            }

            if (!empty($arrival)) {
                $arrival    =   $this->extractGoIbiboDataFromArray($arrival, 'arrival');
            }

            return      [
                            'departureData' =>  $departure,
                            'arrivalData'   =>  $arrival,
                        ];
        } catch (\Exception $ex) {
            $this->error    =   'Unable to refine flight comparison data due to '
                                . 'an exception. Please contact administrator';
            
            if (env('APP_DEBUG') == true) {
                $this->error = 'Unable to refine GoIibo flight comparison data due to '
                                . 'this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    public function extractGoIbiboDataFromArray($dataArray, $type='departure')
    {
        $returnData             =   [];
        
        foreach ($dataArray as $flightObject) {
            
            $flightNumber       =   $flightObject->flightno;

            $airLine            =   $flightObject->platingcarrier;

            $flightCode         =   strtoupper($airLine . $flightNumber);
            
            $arrivalTime        =   $flightObject->ArrivalTime;
            
            if (count($flightObject->onwardflights) 
                    && is_array($flightObject->onwardflights)) {
                foreach ($flightObject->onwardflights as $onwardFlights) {
                    $arrivalTime    =   $onwardFlights->ArrivalTime;
                }
            }

            $returnData[$flightCode]    =   [
                'base_fare'     =>  $flightObject->PricingSolution->BasePrice,
                'tex'           =>  $flightObject->PricingSolution->Taxes,
                'total_fare'    =>  $flightObject->PricingSolution->TotalPrice,
                'terminal'      =>  ($type=='departure' 
                                    ? $flightObject->arrterminal : $flightObject->depterminal),
                'departure_time'=>  $flightObject->DepartureTime,
                'arrival_time'  =>  $arrivalTime,
                'duration'      =>  $flightObject->duration,
            ];
        }
            
        return $returnData;
    }
    
    public function extractClearTripDataFromArray($dataArray) {
        //echo '<br>$dataArray : <pre>' . print_r($dataArray, true) . '</pre>';exit;
        try {
            $returnData  =   [];
        
            foreach ($dataArray as $array) {
                
                $segmentCount   =   0;
                
                $baseFare       =   $array['pricing-summary']['base-fare'];
                    
                $tax            =   $array['pricing-summary']['taxes'];

                $totalFare      =   $array['pricing-summary']['total-fare'];
                
                $departureTime  =   null;
                
                $arrivalTime    =   null;
                
                $duration       =   0;
                
                if (empty($array['flights']['flight']['segments']
                    ['segment']['flight-number']) || 
                    empty($array['flights']['flight']['segments']
                          ['segment']['airline'])
                   ) {
                        if (empty($array['flights']['flight']['segments']
                        ['segment']['0'])) {
                            continue;
                        } else {
                            $segmentCount   =   count($array['flights']['flight']
                                                        ['segments']['segment']);
                            
                            /*echo '<br>segmentCount : ' . $segmentCount;
                            
                            echo '<br>Array : <pre>' . print_r($array, true) . '</pre>';
                             
                            exit;*/
                            
                            $departureTime  =   $array['flights']['flight']['segments']
                                                ['segment']['0']['departure-date-time'];
                            
                            $departureTime  =   str_ireplace('T', ' ', $departureTime);
                            
                            $arrivalTime    =   $array['flights']['flight']['segments']
                                                ['segment'][($segmentCount-1)]['arrival-date-time'];
                            
                            $arrivalTime    =   str_ireplace('T', ' ', $arrivalTime);
                            
                            $segmentArray   =   $array['flights']['flight']['segments']
                                                ['segment'];
                            
                            foreach ($segmentArray as $innerArray) {
                                $duration   +=  $innerArray['duration'];
                            }
                            
                            /*$array              =   $array['flights']['flight']['segments']
                                                    ['segment'][($segmentCount-1)];*/
                            
                            $array          =   $array['flights']['flight']['segments']
                                                ['segment']['0'];
                            
                        }
                    
                } else {
                    
                    $array          =   $array['flights']['flight']['segments']
                                        ['segment'];
                    
                    $departureTime  =   str_ireplace('T', ' ', $array['departure-date-time']);

                    $arrivalTime    =   str_ireplace('T', ' ', $array['arrival-date-time']);
                    
                    $duration       =   $array['duration'];
                }
                
                $flightNumber       =   $array['flight-number'];

                $airLine            =   $array['airline'];

                $flightCode         =   strtoupper($airLine . $flightNumber);
                
                $terminal           =   !empty($array['departure-terminal'])
                                        ? $array['departure-terminal'] 
                                        : (
                                        !empty($array['arrival-terminal']) ?
                                        $array['arrival-terminal'] : null
                                        );

                $returnData[$flightCode]    =   [
                    'base_fare'     =>  $baseFare,
                    'tax'           =>  $tax,
                    'total_fare'    =>  $totalFare,
                    'terminal'      =>  $terminal,
                    'departure_time'=>  $departureTime,
                    'arrival_time'  =>  $arrivalTime,
                    //'duration'      =>  $array['duration'],
                    'duration'      =>  $duration,
                    'stops'         =>  ($segmentCount <> 0 ? $segmentCount - 1 : 0),
                ];
            }
            /*if ($segmentCount <> 0) {
                echo '<br>returnData : <pre>' . print_r($returnData, true) . '</pre>';exit;
            }*/
            return $returnData;
        } catch (\Exception $ex) {
            $this->error    =   'Unable to fetch flight comparison data from array '
                                . 'due to '
                                . 'an exception. Please contact administrator';
            
            if (env('APP_DEBUG') == true) {
                $this->error = 'Unable to fetch cleartrip flight comparison data'
                                . ' from array due to '
                                . 'this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    public function refineClearTripData($data)
    {   //echo '<br>Cleartrip data from refine : <pre>' . print_r($data, true) . '</pre>';exit;
        try {
            $departure  =   $data['air-search-result']['onward-solutions']['solution'];
            
            $arrival    =   !empty($data['air-search-result']['return-solutions']) 
                            ? $data['air-search-result']['return-solutions']['solution']
                            : null;
            /*echo '<br>departure : <pre>' . print_r($departure, true) . '</pre>';
            echo '<br>arrival : <pre>' . print_r($arrival, true) . '</pre>';exit;*/
            $departureData  =   $this->extractClearTripDataFromArray($departure);
            
            if (!$departureData) {
                return false;
            }
            
            $arrivalData    =   null;
            
            if (is_array($arrival) && count($arrival)) {
                
                $arrivalData = $this->extractClearTripDataFromArray($arrival);
                
                if (!$arrivalData) {
                    return false;
                }
            }
            
            return  [
                        'departureData' =>  $departureData,
                        'arrivalData'   =>  $arrivalData,
                    ];
        } catch (\Exception $ex) {
            $this->error    =   'Unable to refine flight comparison data due to '
                                . 'an exception. Please contact administrator';
            
            if (env('APP_DEBUG') == true) {
                $this->error = 'Unable to refine cleartrip flight comparison data due to '
                                . 'this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    public function flightSearchForm(Request $request)
    {
        $data               =   $request->all();
        
        $isMobileDevice     =   $this->checkIfMobileDevice();
        
        $deviceType         =   'Desktop';

        if ($isMobileDevice) {
            $deviceType     =   $this->deviceDetector->isMobile() ? 'Mobile' 
                                : ($this->deviceDetector->isTablet() ? 'Tablet' 
                                : 'Unknown mobile device');
        }
        
        $sourceCityCookie       =   !empty($_COOKIE['sourceCity']) 
                                    ? $_COOKIE['sourceCity'] : null;
        
        $destinationCityCookie  =   !empty($_COOKIE['destinationCity']) 
                                    ? $_COOKIE['destinationCity'] : null;
        
        $wayCookie              =   !empty($_COOKIE['way']) 
                                    ? $_COOKIE['way'] : null;
        
        /*$way                    =   !empty($data['way']) 
                                    ? $data['way']
                                    : (!empty(Input::old('way')) 
                                    ? Input::old('way') : $wayCookie);*/
        
        $way                    =   !empty($data['way']) 
                                    ? $data['way']
                                    : (!empty(Input::old('way')) 
                                    ? Input::old('way') : null);
            
        $sourceCity             =   !empty($data['sourceCity']) 
                                    ? $data['sourceCity']
                                    : (!empty(Input::old('sourceCity')) 
                                    ? Input::old('sourceCity') 
                                    : $sourceCityCookie);
            
        $destinationCity        =   !empty($data['destinationCity']) 
                                    ? $data['destinationCity']
                                    : (!empty(Input::old('destinationCity')) 
                                    ? Input::old('destinationCity') 
                                    : $destinationCityCookie);
        
        $app            =   app();
        
        $sessionId      =   !empty($app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]))
                            ? $app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]) : null;
        
        $userId         =   null;
            
        if (!empty(session('userDetails')))
        {
            $userDetails    =   session('userDetails');
            //echo '<br>UserDetails : <pre>' . print_r($userDetails, true) . '</pre>';exit;
            $userId         =   $userDetails['0']['pk_user_id'];
        }
        
                
        $searchData             =   [
            'sourceCity'        =>  $sourceCity,
            'destinationCity'   =>  $destinationCity,
            'dateofdeparture'   =>  date('Y-m-d'),
            'dateofarrival'     =>  null,
            'seatingclass'      =>  'economy',
            'adults'            =>  '1',
            'children'          =>  null,
            'infants'           =>  null,
        ];

        $searchArraySingleTraveller['searchData'][$this->vendorToSearchArray['0']] =    $searchData;

        $searchArraySingleTraveller['searchData'][$this->vendorToSearchArray['0']] =    $searchData;

        $searchArraySingleTraveller['fk_user_id']          =    $userId;

        $searchArraySingleTraveller['session_id']          =    $sessionId;

        $searchArraySingleTraveller['device_type']         =    $deviceType;
        
        $advancedSearchParamIdsSingleTraveller             =    $this->flightsRepository
                                                                ->getAdvancedSearchParamIds($searchArraySingleTraveller);
        
        /*echo '<br>$advancedSearchParamIdsSingleTraveller : <pre>' 
        . print_r($advancedSearchParamIdsSingleTraveller, true)
        . '</pre>';*/
        
        $futurePriceArray       =   $this->flightsRepository
                                    ->fetchFutureDatesPrice($advancedSearchParamIdsSingleTraveller);
        
        //echo '<br>$futurePriceArray : <pre>' . print_r($futurePriceArray, true) . '</pre>';exit;
        
        
        $viewArray              =   [
            
            'way'               =>  $way,
            
            'sourceCity'        =>  $sourceCity,
            
            'destinationCity'   =>  $destinationCity,
            
            'departureDate'     =>  !empty($data['departureDate']) 
                                    ? $data['departureDate']
                                    : (!empty(Input::old('departureDate')) 
                                    ? Input::old('departureDate') : null),
            
            'arrivalDate'       =>  !empty($data['arrivalDate']) 
                                    ? $data['arrivalDate']
                                    : (!empty(Input::old('arrivalDate')) 
                                    ? Input::old('arrivalDate') : null),
            
            'exampleTravellerInput'   =>    !empty($data['exampleTravellerInput']) 
                                            ? $data['exampleTravellerInput']
                                            : (!empty(Input::old('exampleTravellerInput')) 
                                            ? Input::old('exampleTravellerInput') : null),
            
            'adults'            =>  !empty($data['adults']) 
                                    ? $data['adults']
                                    : (!empty(Input::old('adults')) 
                                    ? Input::old('adults') : null),
            
            'children'          =>  !empty($data['children']) 
                                    ? $data['children']
                                    : (!empty(Input::old('children')) 
                                    ? Input::old('children') : null),
            
            'infants'           =>  !empty($data['infants']) 
                                    ? $data['infants']
                                    : (!empty(Input::old('infants')) 
                                    ? Input::old('infants') : null),
            
            'seatingClass'      =>  !empty($data['seatingClass']) 
                                    ? $data['seatingClass']
                                    : (!empty(Input::old('seatingClass')) 
                                    ? Input::old('seatingClass') : null),
            
            'dateTo'            =>  !empty($data['dateTo']) 
                                    ? $data['dateTo']
                                    : (!empty(Input::old('dateTo')) 
                                    ? Input::old('dateTo') : null),
            
            'dateFrom'          =>  !empty($data['dateFrom']) 
                                    ? $data['dateFrom']
                                    : (!empty(Input::old('dateFrom')) 
                                    ? Input::old('dateFrom') : null),
            
            'masterHeaderText'  => '<div class="">
                                        <h4>
                                            Search Flights
                                        </h4>
                                    </div>',
            
            'futurePriceArray' =>  $futurePriceArray,
        ];
        
        $view               =  'flightsearch_mob';
            
        if (!$isMobileDevice) {
            $view           = 'flightsearch_mob';
            //As of now we are doing only mobile ui
        }
        //echo '<br>view Array : <pre>' . print_r($viewArray , true) . '</pre>';exit;
        return view($view, $viewArray);
    }
    
    public function createAirportListAjaxHtml($searchText, $elementId, $ajaxContainerId)
    {
        $airportListArray = $this->flightsRepository->getAirportList(['aname' => $searchText]);
        
        /*$html           =   '<div class="card-body p-0 airportAjaxList">
                               <div class="py-2 px-3 d-flex justify-content-between' 
                                . ' align-items-center bg-primary text-white">'
                                . '<h2>Flight List</h2>'
                                . '<span '
                                . 'style="background-color:white;width:70%;'
                                . 'color:black;" '
                                . 'onclick="javascript:document.getElementById(\'' 
                                . $elementId . '\').focus();">' 
                                . $searchText . '</span>'
                                . '<a href="javascript:void(0);"'
                                .  'onclick="javascript:document.getElementById'
                                . '(\'' . $ajaxContainerId . '\').style.'
                                . 'display = \'none\';"'
                                . 'class="btn text-uppercase bg-theme px-3 py-2 mb-0 text-white">'
                                . 'Cancel</a>
                             </div><ul class="list-group">';*/
        
        $jsCode         =   '<script language="javascript" type="text/javascript">'
                            . 'setTimeout("document.getElementById(\'ajaxSearchTextBox\').focus();",200);'
                            . '</script>';
        
        $html           =   '<div class="card-body p-0 airportAjaxList">
                               <div class="py-2 px-3 d-flex justify-content-between' 
                                . ' align-items-center bg-primary text-white">'
                                . '<h2>Flight List</h2>'
                                . '<input type="text" id="ajaxSearchTextBox" autocomplete = "off" '
                                . 'value="' . $searchText . '"'
                                . 'oninput="javascript:fetchAirportList(this.value,'
                                . ' \'destinationCity\', \'ajaxContainerDestinationCity\');">'
                                . '<a href="javascript:void(0);"'
                                .  'onclick="javascript:document.getElementById'
                                . '(\'' . $ajaxContainerId . '\').style.'
                                . 'display = \'none\';"'
                                . 'class="btn text-uppercase bg-theme px-3 py-2 mb-0 text-white">'
                                . 'Cancel</a>
                             </div><ul class="list-group">';
        
        //oninput="javascript:fetchAirportList(this.value, 'destinationCity', 'ajaxContainerDestinationCity');"
        
        if (!$airportListArray) {
            /*echo $this->flightsRepository->getError();
            return false;*/
            echo $html . '</ul></div>' . $jsCode;exit;
        }
        
        foreach ($airportListArray as $row) {
            
            $html .=    '<li class="list-group-item d-flex justify-content-between'
                        . ' align-items-center border-bottom mt-0">'
                        . '<a href="javascript:void(0);" '
                        . 'onclick="javascript:document.getElementById(\''
                        . $elementId . '\').value=\'' . $row['IATA_Code'] . '\';'
                        . 'document.getElementById(\'' . $ajaxContainerId . '\').style.'
                        . 'display = \'none\';">' . $row['airport_name'] . '</a>'
                        . '</li>';
            
        }
        
        $html   .=   '</ul></div>' . $jsCode;
        
        echo $html;
    }
    
    public function bookNow(Request $request)
    {
        /*echo '<br>Page under construction. <br>Talks in progress with vendors '
        . 'for redirect url. Please wait till that time.'
        . '<a href="javascript:history.go(-1);">Click here</a> to go back';*/
        
        return redirect('/success/' . base64_encode('<br>Page will redirect to cleartrip'));
        
        //return redirect('/flight-form.php');
    }
    
}

