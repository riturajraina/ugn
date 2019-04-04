<?php
namespace App\Http\Controllers\Service;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Service\Cabs\CabsRepository;

class CabsController extends Controller {

    protected $cabsRepository;
    
    protected $showUnavailableOlaRides;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct() {
        //$this->middleware('auth');
        parent::__construct();
        $this->cabsRepository           =   new CabsRepository();
        $this->showUnavailableOlaRides  =   true;        
    }
    
    public function cabSearchForm()
    {
        $isMobileDevice     =   $this->checkIfMobileDevice();

        if ($isMobileDevice) {
            $deviceType     =   $this->deviceDetector->isMobile() ? 'Mobile' 
                                : ($this->deviceDetector->isTablet() ? 'Tablet' 
                                : 'Unknown device');
        }
        
        $viewArray          =   [
                'serviceType'          =>  !empty(Input::old('serviceType'))
                                        ? Input::old('serviceType') : null,

                'pickupLocation'    =>  !empty(Input::old('pickupLocation'))
                                        ? Input::old('pickupLocation') : null,

                'pickupLatitude'    =>  !empty(Input::old('pickupLatitude'))
                                        ? Input::old('pickupLatitude') : null,

                'pickupLongitude'   =>  !empty(Input::old('pickupLongitude'))
                                        ? Input::old('pickupLongitude') : null,

                'dropLocation'      =>  !empty(Input::old('dropLocation'))
                                        ? Input::old('dropLocation') : null,

                'dropLatitude'      =>  !empty(Input::old('dropLatitude'))
                                        ? Input::old('dropLatitude') : null,

                'dropLongitude'     =>  !empty(Input::old('dropLongitude'))
                                        ? Input::old('dropLongitude') : null,
        ];
        
        $view               =   'cabsearch_mob';
            
        if (!$isMobileDevice) {
            $view           =   'cabsearch_mob';
            //As of now we are doing only mobile ui
        }
        
        return view($view, $viewArray);
    }
    
    public function addressListAjax($searchText, $elementId, $ajaxContainerId, 
            $latitudeFieldId, $longitudeFieldId)
    {        
        $html           =   '<div class="card-body p-0 airportAjaxList">
                               <div class="py-2 px-3 d-flex justify-content-between' 
                                . ' align-items-center bg-primary text-white">'
                                . '<h2>Address List</h2>'
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
        
        $addressListArray = $this->cabsRepository->getAddressList(['address' => $searchText]);
        
        if (!$addressListArray) {
            /*echo $this->cabsRepository->getError();
            return false;*/
            echo $html . '</ul></div>';exit;
        }
        
        
        
        foreach ($addressListArray as $row) {
            $address = trim(addslashes(stripslashes($row['address'])));
            
            $html .=    '<li class="list-group-item d-flex justify-content-between'
                        . ' align-items-center border-bottom mt-0">'
                        . '<a href="javascript:void(0);" '
                        . 'onclick="javascript:document.getElementById(\''
                        . $elementId . '\').value=\'' . $address . '\';'
                        . 'document.getElementById(\'' . $ajaxContainerId . '\').style.'
                        . 'display = \'none\';document.getElementById(\'' 
                        . $latitudeFieldId . '\').value=\'' 
                        . $row['latitude'] . '\';document.getElementById(\'' 
                        . $longitudeFieldId . '\').value=\'' 
                        . $row['longitude'] . '\';saveAddress(\'' 
                        . urlencode($address) . '\', \'' . urlencode($row['latitude']) . '\', \'' 
                        . urlencode($row['longitude']) . '\', \'' . csrf_token() . '\');">' 
                        . $address . '</a>'
                        . '</li>';
        }
        
        $html   .=   '</ul></div>';
        
        echo $html;
    }
    
    public function saveAddress($address, $latitude, $longitude)
    {
        
        $saveData = [
            'address'   =>  urldecode($address),
            'lat'       =>  urldecode($latitude),
            'long'      =>  urldecode($longitude),
        ];
        
        $result = $this->cabsRepository->saveAddress($saveData);
        
        if (!$request) {
            echo $this->cabsRepository->getError();
        } else {
            echo 'Address saved successfully';
        }
    }
    
    public function searchCabsParallelly(Request $request)
    {
        $data               =   $request->all();
        
        $validatorArray     =   [
            'serviceType'       =>  'required',
            'pickupLocation'    =>  'required',
            'pickupLatitude'    =>  'required',
            'pickupLongitude'   =>  'required',
            'dropLocation'      =>  'required',
            'dropLatitude'      =>  'required',
            'dropLongitude'     =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/cabsearch')->withInput()->withErrors($validator);
        }
        
        $errors                 =   [];
        
        $data['pickupLocation'] =   trim(addslashes(stripslashes($data['pickupLocation'])));
        
        $data['dropLocation']   =   trim(addslashes(stripslashes($data['dropLocation'])));
        
        if ($data['pickupLocation'] == $data['dropLocation']) {
            $errors[]           =   'Pickup and drop locations shall be different';
        }
        
        if (count($errors)) {
            return redirect('/cabsearch')->withInput()->withErrors($errors);
        } 
        
        $vendorArray    =   ['ola', 'olaauto', 'uber'];
        
        //$vendorArray    =   ['ola'];
        
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
        
        $searchData         =   [
            'pickup_lat'        =>  $data['pickupLatitude'],
            'pickup_lng'        =>  $data['pickupLongitude'],
            'drop_lat'          =>  $data['dropLatitude'],
            'drop_lng'          =>  $data['dropLongitude'],
            'service_type'      =>  $data['serviceType'],
        ];
        
        foreach ($vendorArray as $vendor) {
            
            $searchArray['searchData'][$vendor] =  $searchData;
            
            $searchArray['fk_user_id']          =   $userId;
            
            $searchArray['session_id']          =   $sessionId;
            
            $searchArray['device_type']         =   $deviceType;
            
            $searchArray['ip_address']          =   $ipAddress;
            
            $searchArray['pickupLocation']      =   $data['pickupLocation'];
            
            $searchArray['pickup_lat']          =   $data['pickupLatitude'];
            
            $searchArray['pickup_lng']          =   $data['pickupLongitude'];
            
            $searchArray['dropLocation']        =   $data['dropLocation'];
            
            $searchArray['drop_lat']            =   $data['dropLatitude'];
            
            $searchArray['drop_lng']            =   $data['dropLongitude'];
        }
        
        $cabsDataArray            =   $this->cabsRepository->getCabsDataParallelly($searchArray);

        if (!$cabsDataArray) {
            $errors[]               =   $this->cabsRepository->getError();
        } else {
            foreach ($cabsDataArray as $vendor => $cabsData) {
                $vendorData[$vendor] =  json_decode($cabsData);
            }
        }
        
        if (count($errors)) {
            return redirect('/cabsearch')->withInput()->withErrors($errors);
        }
        
        //echo '<br>Unextracted cabs data : <pre>' . print_r($vendorData, true) . '</pre>';
        //file_put_contents('d:\vendordata.txt', print_r($vendorData, true));
        $vendorData     =   $this->extractCabsData($vendorData);
        
        if (!$vendorData) {
            $errors[]   =   $this->error;
        }
        
        if (count($errors)) {
            return redirect('/cabsearch')->withInput()->withErrors($errors);
        } /*else {
            echo '<br>vendor Data : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        }*/
        
        //echo '<br>Extracted cabs data : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        
        $queryString=   '?_token=' . $data['_token']
                         . '&pickupLocation=' . $data['pickupLocation']
                         . '&pickupLatitude=' . $data['pickupLatitude']
                         . '&pickupLongitude=' . $data['pickupLongitude']
                         . '&dropLocation=' . $data['dropLocation']
                         . '&dropLatitude=' . $data['dropLatitude']
                         . '&dropLongitude=' . $data['dropLongitude']
                         . '&serviceType=' . $data['serviceType'];
            
         
        $viewArray          =   [
                'serviceType'          =>  !empty($data['serviceType'])
                                        ? $data['serviceType'] : null,

                'pickupLocation'    =>  !empty($data['pickupLocation'])
                                        ? $data['pickupLocation'] : null,

                'pickupLatitude'    =>  !empty($data['pickupLatitude'])
                                        ? $data['pickupLatitude'] : null,

                'pickupLongitude'   =>  !empty($data['pickupLongitude'])
                                        ? $data['pickupLongitude'] : null,

                'dropLocation'      =>  !empty($data['dropLocation'])
                                        ? $data['dropLocation'] : null,

                'dropLatitude'      =>  !empty($data['dropLatitude'])
                                        ? $data['dropLatitude'] : null,

                'dropLongitude'     =>  !empty($data['dropLongitude'])
                                        ? $data['dropLongitude'] : null,
            
                'vendorData'        =>  $vendorData,
        ];
        
        $view               =   'cabsearch_mob';
            
        if (!$isMobileDevice) {
            $view           =   'cabsearch_mob';
            //As of now we are doing only mobile ui
        }
        
        return view($view, $viewArray);
    }
    
    public function extractCabsData($vendorData)
    {
        $clubbedData    =   [];
        
        foreach ($vendorData as $vendor => $data) {
            
            if ($vendor == 'ola' || $vendor == 'olaauto') {
                /*
                 * If a particular category is not available near the pickup 
                 * location selected, the ‘eta’ field will have a value of -1. 
                 * You can choose to either not display that category or 
                 * mention it is unavailable. 
                 */
                if (!empty($data->ride_estimate)) {
                        
                    if (count($data->ride_estimate)) {
                        //echo '<br>ride estimate : <pre>' . print_r($data->ride_estimate, true) . '</pre>';exit;
                        foreach ($data->ride_estimate as $key => $ride) {
                            if (strtolower($ride->category) == 'share') {
                                $clubbedData[]  =   [
                                    'vendor'    =>  $vendor,
                                    'category'  =>  $ride->category,
                                    //'distance'  =>  $ride->distance,
                                    'time'      =>  $ride->travel_time_min,
                                    'minAmount' =>  $ride->fares['0']->cost,
                                    'maxAmount' =>  $ride->fares['0']->actual_cost,
                                    'eta'       =>  null,
                                    'currency'  =>  null,
                                    'avgPrice'  =>  ($ride->fares['0']->cost + $ride->fares['0']->actual_cost)/2,
                                ];
                            } else {
                                if ($this->showUnavailableOlaRides) {
                                    $clubbedData[]  =   [
                                        'vendor'    =>  $vendor,
                                        'category'  =>  $ride->category,
                                        'distance'  =>  $ride->distance,
                                        'time'      =>  $ride->travel_time_in_minutes,
                                        'minAmount' =>  $ride->amount_min,
                                        'maxAmount' =>  $ride->amount_max,
                                        'eta'       =>  $data->categories[$key]->eta,
                                        'currency'  =>  $data->categories[$key]->currency,
                                        'avgPrice'  =>  ($ride->amount_max + $ride->amount_min)/2,
                                    ];
                                } elseif ($data->categories[$key]->eta <> -1) {
                                    $clubbedData[]  =   [
                                        'vendor'    =>  $vendor,
                                        'category'  =>  $ride->category,
                                        'distance'  =>  $ride->distance,
                                        'time'      =>  $ride->travel_time_in_minutes,
                                        'minAmount' =>  $ride->amount_min,
                                        'maxAmount' =>  $ride->amount_max,
                                        'eta'       =>  $data->categories[$key]->eta,
                                        'currency'  =>  $data->categories[$key]->currency,
                                        'avgPrice'  =>  ($ride->amount_max + $ride->amount_min)/2,
                                    ];
                                }
                            }
                        }
                    }
                } 
            }
            
            if ($vendor == 'uber') {
                
                if (!empty($data->prices)) {
                        
                    if (count($data->prices)) {//for php 7.2
                        foreach ($data->prices as $ride) {
                            $clubbedData[]  =   [
                                'vendor'    =>  $vendor,
                                'category'  =>  $ride->display_name,
                                'distance'  =>  $ride->distance,
                                'time'      =>  $ride->duration/60,
                                'minAmount' =>  $ride->low_estimate,
                                'maxAmount' =>  $ride->high_estimate,
                                'currency'  =>  $ride->currency_code,
                                'productId' =>  $ride->product_id,
                                'avgPrice'  =>  ($ride->low_estimate + $ride->high_estimate)/2,
                            ];
                        }
                    }
                }
            }
        }
        
        if (count($clubbedData)) {
            usort($clubbedData, "self::cmpByAvgPrice");
            //usort($clubbedData, ['CabsController', 'cmpByAvgPrice']);
            return $clubbedData;
        }
        
        return false;
    }
    
    public function cmpByAvgPrice($a, $b) {
        return $a["avgPrice"] - $b["avgPrice"];
    }
}

