<?php
namespace App\Http\Controllers\Service;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Service\Hotels\HotelsRepository;

class HotelsController extends Controller {

    protected $hotelsRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct() {
        //$this->middleware('auth');
        parent::__construct();
        $this->hotelsRepository    =   new HotelsRepository();
        
    }
    
    
    public function hotelSearchForm(Request $request)
    {
        $data               =   $request->all();
        
        //echo '<br>Data : <pre>' . print_r($data, true) . '</pre>';exit;
        
        $isMobileDevice     =   $this->checkIfMobileDevice();

        if ($isMobileDevice) {
            $deviceType     =   $this->deviceDetector->isMobile() ? 'Mobile' 
                                : ($this->deviceDetector->isTablet() ? 'Tablet' : 'Unknown mobile device');
        }
        //echo '<br>Data after device type : <pre>' . print_r($data, true) . '</pre>';exit;
        $viewArray          =   [
            
            'sourceCity'    =>  !empty($data['sourceCity']) 
                                ? $data['sourceCity']
                                : (!empty(Input::old('sourceCity')) 
                                ? Input::old('sourceCity') : null),
            
            
            'checkInDate'   =>  !empty($data['checkInDate']) 
                                ? $data['checkInDate']
                                : (!empty(Input::old('checkInDate')) 
                                ? Input::old('checkInDate') : null),
            
            'checkOutDate'   =>  !empty($data['checkOutDate']) 
                                ? $data['checkOutDate']
                                : (!empty(Input::old('checkOutDate')) 
                                ? Input::old('checkOutDate') : null),
            
            
            'adults'        =>  !empty($data['adults']) 
                                ? $data['adults']
                                : (!empty(Input::old('adults')) 
                                ? Input::old('adults') : null),
            
            'children'      =>  !empty($data['children']) 
                                ? $data['children']
                                : (!empty(Input::old('children')) 
                                ? Input::old('children') : null),
            
            'infants'       =>  !empty($data['infants']) 
                                ? $data['infants']
                                : (!empty(Input::old('infants')) 
                                ? Input::old('infants') : null),
            
            'exampleTravellerInput' =>  !empty($data['exampleTravellerInput']) 
                                ? $data['exampleTravellerInput']
                                : (!empty(Input::old('exampleTravellerInput')) 
                                ? Input::old('exampleTravellerInput') : null),
            
            'rooms'         =>  !empty($data['rooms']) 
                                ? $data['rooms']
                                : (!empty(Input::old('rooms')) 
                                ? Input::old('rooms') : null),
        ];
        
        $view               =   'hotelsearch_mob';
            
        if (!$isMobileDevice) {
            $view           = 'hotelsearch_mob';
            //As of now we are doing only mobile ui
        }
        
        return view($view, $viewArray);
    }
    
    public function cityListAjax($searchText, $elementId, $ajaxContainerId)
    {
        
        $html           =   '<div class="card-body p-0 airportAjaxList">
                               <div class="py-2 px-3 d-flex justify-content-between' 
                                . ' align-items-center bg-primary text-white">'
                                . '<h2>City List</h2>'
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
                                </div><ul class="list-group">';
        
        $cityListArray = $this->hotelsRepository->getCityList(['cname' => $searchText]);
        
        if (!$cityListArray) {
            /*echo $this->hotelsRepository->getError();
            return false;*/
            echo $html . '</ul></div>';exit;
        }
        
        foreach ($cityListArray as $row) {
            
            $html .=    '<li class="list-group-item d-flex justify-content-between'
                        . ' align-items-center border-bottom mt-0">'
                        . '<a href="javascript:void(0);" '
                        . 'onclick="javascript:document.getElementById(\''
                        . $elementId . '\').value=\'' . $row['city_name'] . '\';'
                        . 'document.getElementById(\'' . $ajaxContainerId . '\').style.'
                        . 'display = \'none\';">' . $row['city_name'] . ' - ' 
                        . $row['country_code'] . '</a>'
                        . '</li>';
        }
        
        $html   .=   '</ul></div>';
        
        echo $html;
    }
    
    public function bookNow(Request $request)
    {
        echo '<br>Page under construction. <br>Talks in progress with vendors '
        . 'for redirect url. Please wait till that time.'
        . '<a href="javascript:history.go(-1);">Click here</a> to go back';
    }
    
    public function searchHotelsParallelly(Request $request)
    {
        $data               =   $request->all();
        
        $validatorArray     =   [
            'checkInDate'   =>  'required',
            'checkOutDate'  =>  'required',
            'sourceCity'    =>  'required',
            'adults'        =>  'required',
            'rooms'         =>  'required',
        ];
        
        $validator          =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/hotelsearch')->withInput()->withErrors($validator);
        }
        
        $errors             =   [];
        
        $checkInDateValue   =   $this->dateValidator->getDateValue($data['checkInDate']);
        
        if (!$this->dateValidator->dateValidate($data['checkInDate'])) {
            $errors[]       =   'Invalid check-in date';
        } elseif ($checkInDateValue < $this->dateValidator->getDateValue(date('Y-m-d'))) {
            $errors[]       =   'Check-In date cannot be less than current date';
        }
        
        if (empty($data['checkOutDate'])) {
            $errors[]       =   'Check-out date cannot be empty';
        }
        
        if (!empty($data['checkOutDate'])) {
            
            $checkOutDateValue   =   $this->dateValidator->getDateValue($data['checkOutDate']);
            
            if (!$this->dateValidator->dateValidate($data['checkOutDate'])) {
                $errors[]   =   'Invalid check-out date';
            } elseif ($checkOutDateValue < $this->dateValidator->getDateValue(date('Y-m-d'))) {
                $errors[]   =   'check-out date cannot be less than current date';
            }
            
            if ($checkInDateValue > $checkOutDateValue) {
                $errors[]   =   'Check-in date cannot be greater than check-out date';
            }
        }
        
        if (count($errors)) {
            return redirect('/hotelsearch')->withInput()->withErrors($errors);
        } /*else {
            return redirect('/hotelsearch')->withInput()->withErrors(['All Well']);
        }//For testing purpose...Rituraj*/
        
        $dateArray      =   explode('-', $data['checkInDate']);
        
        $monthText      =   $this->dateValidator->getMonthText($dateArray['1']);
        
        
        //$vendorArray    =   ['cleartrip', 'goibibo'];
        
        $vendorArray    =   ['cleartrip'];
        
        $vendorData     =   [];
        
        $app            =   app();
        
        $sessionId      =   $app['encrypter']->decrypt($_COOKIE[$app['config']['session.cookie']]);
        
        $userId         =   null;
        
        $ipAddress      =   !empty($_SERVER['REMOTE_ADDR']) 
                            ? $_SERVER['REMOTE_ADDR'] : null;
            
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
        
        foreach ($vendorArray as $vendor) {
               
            $searchData     =   [
                
                'checkinDate'       =>  $data['checkInDate'],
                'checkOutDate'      =>  $data['checkOutDate'],
                'noOfRooms'         =>  $data['rooms'],
                'adultsPerRoom'     =>  $data['adults'],
                'childrenPerRoom'   =>  !empty($data['children']) 
                                        ? $data['children'] : 0,
                'childrenAges'      =>  null,
                'city'              =>  urlencode($data['sourceCity']),
                'infants'           =>  !empty($data['infants']) 
                                        ? $data['infants']: 0,
                
            ];
            
            $searchArray['searchData'][$vendor] =  $searchData;
            
            $searchArray['fk_user_id']  =   $userId;
            
            $searchArray['session_id']  =   $sessionId;
            
            $searchArray['device_type'] =   $deviceType;
            
            $searchArray['ip_address']  =   $ipAddress;
        }
        
        $hotelsDataArray            =   $this->hotelsRepository->getHotelsDataParallelly($searchArray);
        //echo '<br>$hotelsDataArray : <pre>' . print_r($hotelsDataArray, true) . '</pre>';exit;    
        if (!$hotelsDataArray) {
            $errors[]                   =   $this->hotelsRepository->getError();
        } else {
            foreach ($hotelsDataArray as $vendor => $hotelsData) {
                if ($vendor == 'cleartrip') {
                    
                    $hotelsData         =   gzdecode($hotelsData);

                    $root               =   new \DOMDocument();

                    $root->loadXML($hotelsData);

                    //$hotelsData      =  $this->generalHelper->dom_xml_to_array(gzdecode($root));
                    $hotelsData         =  $this->generalHelper->dom_xml_to_array($root);

                    if (!$hotelsData) {
                        $errors[]               =  $this->generalHelper->getError();
                    } else {
                        $vendorData[$vendor]    =  $hotelsData;
                    }

                } else {
                    $vendorData[$vendor] =  json_decode($hotelsData);
                }
            }
        }
        
        if (count($errors)) {
            return redirect('/hotelsearch')->withInput()->withErrors($errors);
        }
        
        //echo '<br>Unextracted hotel data : <pre>' . print_r($vendorData, true) . '</pre>';
        //file_put_contents('d:\vendordata.txt', print_r($vendorData, true));
        $vendorData     =   $this->extractHotelsComparisonData($vendorData);
        
        if (!$vendorData) {
            $errors[]   =   $this->error;
        }
        
        /*$vendorData     =   $this->finalClubbedData($vendorData);
        
        if (!$vendorData) {
            $errors[]   =   $this->error;
        }*/
        
        if (count($errors)) {
            return redirect('/hotelsearch')->withInput()->withErrors($errors);
        } /*else {
            echo '<br>vendor Data : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        }*/
        
        //echo '<br>Extracted hotel data : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        
        $vendorData     =   $vendorData['cleartrip'];
        
        /*
         * As of now since only cleartrip api is available, 
         * hence showing only cleartrip results...Rituraj
         */
        
        $queryString=   '?_token=' . $data['_token']
                         . '&checkInDate=' . $data['checkInDate']
                         . '&checkOutDate=' . $data['checkOutDate']
                         . '&rooms=' . $data['rooms']
                         . '&adults=' . $data['adults']
                         . (!empty($data['children']) ? '&children=' . $data['children'] : '') 
                         . '&sourceCity=' . $data['sourceCity']
                         . (!empty($data['infants']) ? '&infants=' . $data['infants'] : '')
                         . '&exampleTravellerInput' . $data['exampleTravellerInput'];
        
        $dateArray      =   explode('-', $data['checkInDate']);
        
        $monthText      =   $this->dateValidator->getMonthText($dateArray['1']);
         
        $viewArray  =   [
            'masterHeaderText' => '<div class="">
                                    <h3>
                                        ' . $data['sourceCity'] . ' <i 
                                        class="fa fa-plane text-white mr-1 ml-1"
                                        aria-hidden="true"></i> 
                                    </h3>
                                    <p class="text-truncate">
                                    <small>' . $dateArray['2'] . ' ' . $monthText 
                                    . ' | ' . $data['exampleTravellerInput'] 
                                    . '</small>
                                    </p>
                                   </div>',
            
            
            'backButtonUrl'     =>  env('APP_URL') . '/hotelsearch' . $queryString,
            
            'vendorData'        =>  $vendorData,
            
            'sourceCity'        =>  $data['sourceCity'],
        ];
        
        return view('hotelslist_mob', $viewArray);
        
    }
    
    public function extractHotelsComparisonData($vendorData)
    {
        try {
            
            $vendorArray        =   array_keys($vendorData);
            
            $clearTripData      =   in_array('cleartrip', $vendorArray) 
                                    ? $vendorData['cleartrip'] : null;
            
            $goIbiboData        =   in_array('goibibo', $vendorArray) 
                                    ? $vendorData['goibibo'] : null;
            
            //echo '<br>clear trip data before refine : <pre>' . print_r($clearTripData, true) . '</pre>';
            if (!empty($clearTripData)) {
                
                $clearTripData  =   $this->refineClearTripData($clearTripData);
                
                if (!$clearTripData) {
                    return false;
                }
                //echo '<br>clear trip data after refine : <pre>' . print_r($clearTripData, true) . '</pre>';exit;
                $vendorData['cleartrip']    =   $clearTripData;
            }

            if (!empty($goIbiboData)) {
                
                $goIbiboData                =   $this->refineGoIbiboData($goIbiboData);
                
                $vendorData['goibibo']      =   $goIbiboData;
            }

            if (!empty($happyEasyGoData)) {
                
                $happyEasyGoData            =   $this->refineHappyEasygoData($happyEasyGoData);
                
                $vendorData['happyeasygo']  =   $happyEasyGoData;
            }
            
            return $vendorData;
            
        } catch (\Exception $ex) {
            $this->error = 'Unable to extract hotels comparison data due to an exception.'
                            . ' Please contact administrator';
            
            if (env('APP_DEBUG') == true) {
                $this->error = 'Unable to extract hotels comparison data due to '
                                . 'this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
    
    public function refineClearTripData($data)
    {   //echo '<br>From refineClearTripData, data : <pre>' . print_r($data, true) . '</pre>';exit;
        try {
            $dataArray  =   $data['hotel-search-response']['hotels']['hotel'];
            
            $returnData  =   [];
            
            $i = 1;
        
            foreach ($dataArray as $array) {
                
                $hotelId        =   $array['hotel-id'];
                
                $hotelName      =   $array['basic-info']['hotel-info:hotel-name'];
                
                $hotelAddress   =   $array['basic-info']['hotel-info:address'];
                
                $city           =   $array['basic-info']['hotel-info:city'];
                
                $state          =   $array['basic-info']['hotel-info:state'];
                
                $pinCode        =   !empty($array['basic-info']['hotel-info:zip'])
                                    ? $array['basic-info']['hotel-info:zip'] : null;
                
                $latitude       =   !empty($array['basic-info']['hotel-info:locality-latitude'])
                                    ? $array['basic-info']['hotel-info:locality-latitude'] : null;
                
                $longitude      =   !empty($array['basic-info']['hotel-info:locality-longitude'])
                                    ? $array['basic-info']['hotel-info:locality-longitude'] : null;
                
                $phoneNumbers   =   !empty($array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:phone']) 
                                    ? $array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:phone'] : null;
                
                $fax            =   !empty($array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:fax']) 
                                    ? $array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:fax'] : null;
                
                $email          =   !empty($array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:email']) 
                                    ? $array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:email'] : null;
                
                $website        =   !empty($array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:website'])
                                    ? $array['basic-info']['hotel-info:communication-info']
                                    ['hotel-info:website'] : null;
                
                $hotelChain     =   !empty($array['basic-info']['hotel-info:chain'])
                                    ? $array['basic-info']['hotel-info:chain'] : null;
                
                $thumbNailImage =   !empty($array['basic-info']['hotel-info:thumb-nail-image'])
                                    ? $array['basic-info']['hotel-info:thumb-nail-image'] : null;
                
                $amenities          =   null;
                
                $generalAminities   =   null;

                $foodAndBeverageAmenities   =   null;

                $businessAmenities  =   null;

                $frontDeskAmenities =   null;

                $travelAmenities    =   null;
                
                if (!empty($array['basic-info']['hotel-info:hotel-amenities']
                                    ['hotel-info:hotel-amenity'])) {
                    
                    $amenities      =   $array['basic-info']['hotel-info:hotel-amenities']
                                    ['hotel-info:hotel-amenity'];
                
                    if (!empty($array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['0']['hotel-info:amenities']
                                            ['hotel-info:amenity'])) {
                        $generalAminities =     $array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['0']['hotel-info:amenities']
                                            ['hotel-info:amenity'];
                    }
                    
                    if (!empty($array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['1']['hotel-info:amenities']
                                            ['hotel-info:amenity'])) {
                        $foodAndBeverageAmenities   =   $array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['1']['hotel-info:amenities']
                                            ['hotel-info:amenity'];
                    }
                    
                    if (!empty($array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['2']['hotel-info:amenities']
                                            ['hotel-info:amenity'])) {
                        $businessAmenities  =   $array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['2']['hotel-info:amenities']
                                            ['hotel-info:amenity'];
                    }

                    if (!empty($array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['3']['hotel-info:amenities']
                                            ['hotel-info:amenity'])) {
                        $frontDeskAmenities =   $array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['3']['hotel-info:amenities']
                                            ['hotel-info:amenity'];
                    }

                    if (!empty($array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['4']['hotel-info:amenities']
                                            ['hotel-info:amenity'])) {
                        $travelAmenities    =   $array['basic-info']['hotel-info:hotel-amenities']
                                            ['hotel-info:hotel-amenity']['4']['hotel-info:amenities']
                                            ['hotel-info:amenity'];
                    }
                }
                
                $starRating         =   !empty($array['basic-info']['hotel-info:hotel-ratings']
                                        ['hotel-info:hotel-rating'])
                                        ? $array['basic-info']['hotel-info:hotel-ratings']
                                        ['hotel-info:hotel-rating'] : null;
                
                $roomHighRate       =   !empty($array['basic-info']['hotel-info:rate-info']
                                        ['hotel-info:high-rate']) 
                                        ? $array['basic-info']['hotel-info:rate-info']
                                        ['hotel-info:high-rate'] : null;
                
                $roomLowRate        =   !empty($array['basic-info']['hotel-info:rate-info']
                                        ['hotel-info:low-rate'])
                                        ? $array['basic-info']['hotel-info:rate-info']
                                        ['hotel-info:low-rate'] : null;
                
                $currency           =   !empty($array['basic-info']['hotel-info:rate-info']
                                        ['hotel-info:currency'])
                                        ? $array['basic-info']['hotel-info:rate-info']
                                        ['hotel-info:currency'] : null;
                
                $otherRates         =   0;
                
                $otherRoomType      =   null;
                
                if (!empty($array['room-rates']['room-rate']
                                        ['rate-breakdown']['common:rate']
                                        ['common:pricing-elements']['common:pricing-element']
                                        ['0']['common:amount'])) {
                    
                    $otherRoomType      =   !empty($array['room-rates']['room-rate']['room-type-name'])
                                            ? $array['room-rates']['room-rate']['room-type-name'] : null;
                    
                    $commonPricingelement   =   !empty($array['room-rates']['room-rate']
                                                ['rate-breakdown']['common:rate']
                                                ['common:pricing-elements']['common:pricing-element'])
                                                ? 
                                                $array['room-rates']['room-rate']
                                                ['rate-breakdown']['common:rate']
                                                ['common:pricing-elements']['common:pricing-element'] 
                                                : null;
                
                    if (!empty($commonPricingelement)) {
                        $otherRates         =   $commonPricingelement['0']['common:amount']
                                                    +
                                                $commonPricingelement['1']['common:amount'];
                    }
                    
                }
                
                $inclusions         =   null;
                
                $breakFastIncluded  =   null;

                $wifiIncluded       =   null;

                $swimmingPool       =   null;

                $gymnasium          =   null;
                
                if (!empty($array['room-rates']['room-rate']
                                        ['inclusions']['inclusion'])) {
                    $inclusions         =   $array['room-rates']['room-rate']
                                        ['inclusions']['inclusion'];
                    
                    if (is_array($inclusions)) {
                        if (count($inclusions)) {
                            
                            $inclusionString    =   implode(' ', $inclusions);
                            
                            $breakFastIncluded  =   stristr($inclusionString, 'Breakfast')
                                                    ? 'Yes' : 'No';

                            $wifiIncluded       =   stristr($inclusionString, 'Free Wi-Fi')
                                                    ? 'Yes' : 'No';

                            $swimmingPool       =   stristr($inclusionString, 'swimming pool')
                                                    ? 'Yes' : 'No';

                            $gymnasium          =   stristr($inclusionString, 'gymnasium')
                                                    ? 'Yes' : 'No';
                        }
                    }
                }
                
                $rent               =   !empty($roomLowRate) 
                                        ? $roomLowRate
                                        : (!empty($roomHighRate) ? $roomHighRate : 0);
                
                if (!empty($otherRates)) {
                    $rent           =   $rent < $otherRates ? $otherRates : $rent;
                }


                $returnData[$hotelName]    =   [
                    'SNo'           =>  $i++,
                    'address'       =>  $hotelAddress,
                    'rent'          =>  $rent,
                    'wifi'          =>  $wifiIncluded,
                    'breakFast'     =>  $breakFastIncluded,
                    'swimmingPool'  =>  $swimmingPool,
                    'gymnasium'     =>  $gymnasium,
                    'image'         =>  !empty($thumbNailImage) 
                                        ? $thumbNailImage : null,
                    'starRating'    =>  $starRating,
                ];
            }
            
            if (count($returnData)) {
                return $returnData;
            }
            
            return false;
            
        } catch (\Exception $ex) {
            $this->error    =   'Unable to refine hotel comparison data due to '
                                . 'an exception. Please contact administrator';
            
            if (env('APP_DEBUG') == true) {
                $this->error = 'Unable to refine cleartrip hotel comparison data due to '
                                . 'this exception : ' . $ex->getMessage();
            }
            
            return false;
        }
    }
}

