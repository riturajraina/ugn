@extends('layouts.mobile')
@section('content')
@include('errors.register')

<section class="pdt54">
    <?php
        require_once(env('APP_ROOT') . '/resources/views/service/service_nav.php');
        require_once(env('APP_ROOT') . '/resources/views/service/cabs/commonPhpScripts.php');
    ?>
    
    <form name="cabSearchForm" method="post" action="{{ url('/cabsearch') }}">
        {!! csrf_field() !!}    
        <div class="card pl-3 pr-3 pb-3 mb-3 service-form">
            <div class="text-center pt-2">
               <h1 class="font-raleway">Travel With OSS</h1>
               <p class="pt-2 pb-2 mb-0">All Travel Plans At OSS Place</p>
            </div>
            <div class="d-flex">
               <?php
                    $serviceType = !empty($serviceType) ? $serviceType : null;
                    
                    echo renderTaxiRadio($serviceType);
               ?>
            </div>

            <div class="mt-2">
                <div class="input-group mb-3 mb-sm-0 form-group">
                    <label for="exampleInputName2" class="bmd-label-floating">
                        * Enter pickup location
                    </label>
                    
                    <input type="text" class="form-control" name="pickupLocation"
                    id="pickupLocation"
                    oninput="javascript:fetchAddressList(this.value, 'pickupLocation', 'ajaxContainerPickupLocation', 
                    'pickupLatitude', 'pickupLongitude');"
                    value="<?php echo !empty($pickupLocation) ? $pickupLocation : '';?>"
                    autocomplete="off">
                    
                    <div id="ajaxContainerPickupLocation"></div>
                    
                    <input type="hidden" name="pickupLatitude" 
                    id="pickupLatitude" 
                    value="<?php echo !empty($pickupLatitude) ? $pickupLatitude : null;?>">
                    
                    <input type="hidden" name="pickupLongitude" 
                    id="pickupLongitude" 
                    value="<?php echo !empty($pickupLongitude) ? $pickupLongitude : null;?>">
                    
                    <div class="input-group-addon border-0 bg-transparent map-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary bmd-btn-icon ml-2 mr-2"
                            onclick="javascript:swapLocations();" 
                            title="Click here to Swap Locations">
                        <i class="fa fa-random replace rotate" aria-hidden="true"></i>
                    </button>
                </div>
                <script language="javascript" type="text/javascript">
                    function swapLocations()
                    {
                        var pickupLocation  =   document.getElementById('pickupLocation').value;
                        var pickupLatitude  =   document.getElementById('pickupLatitude').value;
                        var pickupLongitude =   document.getElementById('pickupLongitude').value;
                        
                        document.getElementById('pickupLocation').value 
                                = document.getElementById('dropLocation').value;
                        document.getElementById('pickupLatitude').value 
                                = document.getElementById('dropLatitude').value;
                        document.getElementById('pickupLongitude').value 
                                = document.getElementById('dropLongitude').value;
                        
                        document.getElementById('dropLocation').value = pickupLocation;
                        document.getElementById('dropLatitude').value = pickupLatitude;
                        document.getElementById('dropLongitude').value = pickupLongitude;
                    }
                </script>
                <div class="input-group mb-3 mb-sm-0 form-group">
                    <label for="exampleInputName2" class="bmd-label-floating">
                        Enter drop location for ride estimate
                    </label>
                    
                    <input type="text" class="form-control" name="dropLocation"
                    id="dropLocation"
                    oninput="javascript:fetchAddressList(this.value, 'dropLocation', 'ajaxContainerDropLocation', 
                    'dropLatitude', 'dropLongitude');"
                    value="<?php echo !empty($dropLocation) ? $dropLocation : '';?>"
                    autocomplete="off" >
                    
                    <div id="ajaxContainerDropLocation"></div>
                    
                    <input type="hidden" name="dropLatitude" 
                    id="dropLatitude" 
                    value="<?php echo !empty($dropLatitude) ? $dropLatitude : null;?>">
                    
                    <input type="hidden" name="dropLongitude" 
                    id="dropLongitude" 
                    value="<?php echo !empty($dropLongitude) ? $dropLongitude : null;?>">
                    
                    <div class="input-group-addon border-0 bg-transparent map-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                </div>
                <a href="javascript:void(0);" 
                   onclick="javascript:document.cabSearchForm.submit();"
                   class="btn btn-primary text-uppercase pl-3 pr-3 mb-0 btn-block">
                    Submit
                </a>
            </div>
        </div>
    </form>   
    <?php
        if (!empty($vendorData)) {
    ?>
            <div>
                <ul class="nav nav-pills nav-fill bg-primary text-white">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);">
                            AVAILABLE RIDES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">
                            FARE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">
                            &nbsp;
                            <!--<span> 
                                <i class="fa fa-long-arrow-up" aria-hidden="true"></i> 
                            </span>-->
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-white">
                <div class="container">
    <?php
                    //echo '<br>$vendorData : <pre>' . print_r($vendorData, true) . '</pre>';exit;
                    foreach ($vendorData as $cabData) {
                        $vendor = 'Uber';
                        
                        $vendorImage = '/images/cabs/uber.png';
                        
                        $cabImage = '/images/cabs/taxi.svg';
                        
                        if ($cabData['vendor'] == 'ola' || $cabData['vendor'] == 'olaauto') {
                            
                            $vendor = 'Ola';
                            
                            $vendorImage = 'images/cabs/ola.jpg';
                            
                            switch ($cabData['category']) {
                                case 'share' :
                                    $cabImage = '/images/cabs/ola-share-active.svg';
                                    break;
                                
                                case 'micro' :
                                    $cabImage = '/images/cabs/ola-micro-active.svg';
                                    break;
                                
                                case 'mini' :
                                    $cabImage = '/images/cabs/ola-mini-active.svg';
                                    break;
                                
                                case 'prime_play' :
                                    $cabImage = '/images/cabs/ola-prime-play-active.svg';
                                    break;
                                
                                case 'prime' :
                                    $cabImage = '/images/cabs/ola-prime-suv-active.svg';
                                    break;
                                
                                case 'sedan' :
                                    $cabImage = '/images/cabs/ola-prime-sedan-active.svg';
                                    break;
                                
                                case 'lux' :
                                    $cabImage = '/images/cabs/ola-lux-active.svg';
                                    break;
                                
                                default :
                                    $cabImage = '/images/cabs/ola-kaali-peeli-active.svg';
                                    break;
                                
                            }
                        }
                        
                        if ($cabData['vendor'] == 'uber') {
                            
                            switch ($cabData['category']) {
                                case 'MOTO' :
                                    $cabImage = '/images/cabs/ola-bike-active.svg';
                                    break;
                                
                                case 'Auto GGN' :
                                    $cabImage = '/images/cabs/ola-e-rick-active.svg';
                                    break;
                                
                                case 'Pool' :
                                    break;
                                
                                case 'UberGo' :
                                    break;
                                
                                case 'Premier' :
                                    break;
                                
                                case 'Hire Go' :
                                    break;
                                
                                case 'Premier Intercity' :
                                    break;
                                
                                case 'Hire Premier' :
                                    break;
                                
                                case 'UberXL' :
                                    break;
                                
                                case 'XL Intercity' :
                                    break;
                                
                                case 'Hire XL' :
                                    break;
                                
                                case 'XL Intercity' :
                                    break;
                            }
                        }
                        
                        $category   =   $vendor . ' ' . $cabData['category'];
                        
                        $waitTime   =   !empty($cabData['eta']) && $cabData['eta'] <> -1 
                                        ? $cabData['eta'] . ' mins' : 'N/A';
                        
                        $priceRange =   '₹' . $cabData['minAmount'] 
                                        . ' - ' . '₹' . $cabData['maxAmount'];
                        
    ?>                  <a href="javascript:void(0);">
                            <div class="border-bottom pt-1 pb-1 row align-items-center">
                                <div class="col-2 text-center pr-0">
                                    <div>
                                        <img class="align-self-center img-fluid" 
                                         src="<?php echo $cabImage;?>" 
                                         alt="" width="44">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h5><?php echo $category;?></h5>
                                    <small class="">(<?php echo $waitTime;?>)</small>
                                </div>
                                <div class="col-3 p-0">
                                    <h5 class=""><?php echo $priceRange;?></h5>
                                </div>
                                <div class="text-right col-3">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <div>
                                            <img class="align-self-center img-fluid" 
                                            src="<?php echo $vendorImage;?>" 
                                            width="52" alt="">
                                        </div>
                                        <i class="fa fa-angle-right text-secondary ml-2" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
    <?php
                    }
    ?>      
                </div>
            </div>
            
    <?php
        }
    ?>
</section>
<?php
    require_once(env('APP_ROOT') . '/resources/views/service/cabs/commonJsScripts.php');
?>
@endsection