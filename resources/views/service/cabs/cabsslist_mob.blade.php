@extends('layouts.mobile')
@section('content')
@include('errors.register')

<section class="bg-section pdt54">
    <div class="scrollable">
        <ul>
            <li>
                <a href="#">
                    <small class="text-muted">Sat 27 Oct</small>
                    <h5>₹ 3,480 </h5>
                </a>
            </li>
            <li>
                <a href="#">
                    <small class="text-muted">Sun 28 Oct</small>
                    <h5>₹ 6,992 </h5>
                </a>
            </li>
            <li>
                <a href="#">
                    <small class="text-muted">Mon 29 Oct</small>
                    <h5>₹ 5,988 </h5>
                </a>
            </li>
            <li>
                <a href="#">
                    <small class="text-muted">Tue 30 Oct</small>
                    <h5>₹ 5,184 </h5>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <small class="text-muted">Wen 31 Oct</small>
                    <h5>₹ 5,184 </h5>
                </a>
            </li>
            <li>
                <a href="#">
                    <small class="text-muted">Thu 01 Oct</small>
                    <h5>₹ 3,944 </h5>
                </a>
            </li>
        </ul>

    </div>
    
    <div class="bg-light container pt-1 pb-1">
        <div class="d-flex justify-content-start align-items-center alerts">
            <div class="mr-auto"><h4>Alerts for </h4></div>
            <div class="switch mr-3">
                <label>
                    <input type="checkbox" checked class="p-0">
                    Low Price
                </label>
            </div>
            <div class="switch">
                <label>
                    <input type="checkbox">
                    Low Seat
                </label>
            </div>
        </div>
    </div>

    <div>
        <ul class="nav nav-pills nav-fill bg-primary text-white">
            <li class="nav-item">
                <a class="nav-link active" href="#">DEPART</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ARRIVE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PRICE <span> <i class="fa fa-long-arrow-up" aria-hidden="true"></i> </span></a>
            </li>
        </ul>
    </div>
            
    <div class="">
        <div class="container">
            <?php
                if ($way == 1) {
            ?>      <div class="row">
                        <div class="col card py-2">
                            <h6>
                                <?php echo $sourceCity . ' - ' . $destinationCity;?>
                            </h6> 
                        </div>
                    </div>
                    <script language="javascript" type="text/javascript">
                    
                    function checkBooknowForm()
                    {
                        var error = "";

                        if (document.bookNowForm.vendor.value == "" 
                           || document.bookNowForm.amount.value == "") {
                            error   +=  "Please select a flight";
                        }

                        if (document.bookNowForm.flightCodeDeparture.value == "" 
                           || document.bookNowForm.departureAmount.value == "") {
                            error   +=  "\nPlease select departure flight";
                        }

                        if (error.length > 0) {
                            alert(error);
                            return false;
                        }

                        document.bookNowForm.submit();
                    }
                    
                    var previousDepartureDiv    =   false;
                    
                    function showHideReturnFlights (vendorToShow, divId, flightCode, minFare) {
                        
                        document.getElementById('vendor').value = vendorToShow;
                        
                        document.getElementById(divId).style.backgroundColor  = '#EA1E63';
                        
                        document.getElementById('flightCodeDeparture').value  = flightCode;
                        
                        document.getElementById('departureAmount').value      = minFare;
                        
                        if (previousDepartureDiv != false) {
                            if (previousDepartureDiv != divId) {
                                document.getElementById(previousDepartureDiv).style.backgroundColor = '';
                                previousDepartureDiv = divId;
                            }
                        } else {
                            previousDepartureDiv = divId;
                        }
                        
                        document.getElementById('amount').value               = minFare;
                            
                        document.getElementById('bookNowDiv').innerHTML       = "₹ " + minFare;            
                    }
                    </script>
                    <?php
                        //echo '<br>VendorData : <pre>' . print_r($vendorData, true) . '</pre>';exit;
                        $htmlString =   '';
                        
                        $divCounter =   1;
                        
                        foreach ($vendorData['departureData'] as $flightCode => $flightData) {
                            
                            $fareArray  =   $flightData['fare'];

                            $fareArrayCount =   count($fareArray);

                            $minFare    =   null;

                            $minFareVendor  =   null;

                            if ($fareArrayCount > 1) {

                                foreach ($fareArray as $vendor => $fare) {
                                    if (empty($minFare)) {
                                        $minFare    =   $fare;
                                        $minFareVendor  =   $vendor;
                                    } else {
                                        if ($minFare > $fare) {
                                            $minFare = $fare;
                                            $minFareVendor = $vendor;
                                        } 
                                    }
                                }
                            } else {
                                foreach ($fareArray as $vendor => $fare) {
                                    $minFare    =   $fare;
                                    $minFareVendor  =   $vendor;
                                }
                            }
                            
                            $airLine    =   substr($flightCode, 0, 2);
                            
                            $hours      =   $flightData['duration']['hours'];
                                    
                            $mins       =   $flightData['duration']['mins'];
                            
                            $divId      =   $minFareVendor . '_div_' . $divCounter++;  

                            $htmlString .=  '
                                <a href="javascript:void(0);" onclick="javascript:showHideReturnFlights 
                                (\'' . $minFareVendor . '\', \'' . $divId . '\', \'' 
                                    . $flightCode . '\', \'' . $minFare . '\');">
                                    <div class="border-bottom pt-2 pb-1 row align-items-center" id="' . $divId . '">
                                        <div class="col-3">
                                            <div>
                                                <img  src="https://images.ixigo.com/img/common-resources/airline-new/' 
                                                . $airLine . '.png" 
                                                width="42">
                                            </div>
                                            <small class="text-muted">' . $flightCode . '</small>
                                        </div>
                                        <div class="col-6 p-0">
                                            <div class="flight-timeing-list">
                                                <ul>
                                                    <li>
                                                        <h5>' . $flightData['departure_time'] . '</h5>
                                                        <small class="text-muted">
                                                            ' . $hours . ' hrs ' 
                                                              . $mins . ' minutes
                                                        </small>
                                                    </li>
                                                    <li class="">
                                                        <h2>
                                                            <i class="fa fa-plane text-muted align-middle" aria-hidden="true">
                                                            </i>
                                                        </h2>
                                                    </li>
                                                    <li>
                                                        <h5>' . $flightData['arrival_time'] . '</h5>
                                                        <small class="text-muted">'
                                                            . (
                                                                !empty($flightData['stops']) && $flightData['stops'] <> 0 
                                                                ? $flightData['stops'] . ' stop(s)' : 'Non-stop'
                                                              )
                                                            .
                                                        '</small>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="text-right col-3 pl-0">
                                            <h4>₹ ' . $minFare . '</h4>
                                            <div>
                                                <!--<img class="img-fluid" src="img/cleartrip.png" >-->
                                                ' . $minFareVendor . '
                                            </div>
                                        </div>
                                    </div>
                                </a>';
                        }
                        
                        echo $htmlString;
            
                } else {
            ?>
                    <div class="row">
                        <div class="col card py-2">
                            <h6>
                                <?php echo $sourceCity . ' - ' . $destinationCity;?>
                            </h6> 
                        </div>
                        <div class="col card py-2">
                            <h6>
                                <?php echo $destinationCity . ' - ' . $sourceCity;?>
                            </h6>
                        </div>
                    </div>	
                    <div class="row">
                        <?php
                            $divCounter = 1;
                            
                            $htmlString =   '<div class="col border-right flymulti-srl">';
                            
                            $vendorArray    =   [];

                            if (!empty($vendorData['departureData'])) {
                                
                                
                                
                                foreach ($vendorData['departureData'] as $flightCode => $flightData) {
                                    $fareArray  =   $flightData['fare'];

                                    $fareArrayCount =   count($fareArray);

                                    $minFare    =   null;

                                    $minFareVendor  =   null;

                                    if ($fareArrayCount > 1) {

                                        foreach ($fareArray as $vendor => $fare) {
                                            if (empty($minFare)) {
                                                $minFare    =   $fare;
                                                $minFareVendor  =   $vendor;
                                            } else {
                                                if ($minFare > $fare) {
                                                    $minFare = $fare;
                                                    $minFareVendor = $vendor;
                                                } 
                                            }
                                        }
                                    } else {
                                        foreach ($fareArray as $vendor => $fare) {
                                            $minFare    =   $fare;
                                            $minFareVendor  =   $vendor;
                                        }
                                    }
                                    
                                    $airLine    =   substr($flightCode, 0, 2);
                                    
                                    //if (!array_key_exists($minFareVendor, $vendorArray)) {
                                    if (empty($vendorArray[$minFareVendor])) {
                                        $vendorArray[$minFareVendor]  =   1;
                                    }
                                    
                                    $divId      =   $minFareVendor . '_div_' . $divCounter;  
                                    
                                    $hours      =   $flightData['duration']['hours'];
                                    
                                    $mins       =   $flightData['duration']['mins'];

                                    $htmlString .=  '
                                <a href="javascript:void(0);" 
                                onclick="javascript:showHideReturnFlights(\'' 
                                            . $minFareVendor . '\', \'' . $divId 
                                            . '\', \'' . $flightCode . '\', \'' 
                                            . $minFare . '\', \'departure\');">
                                    <div class="border-bottom pt-2 pb-1 row align-items-center" 
                                    style="background-color:\'\';" id = "' 
                                            . $divId . '">
                                        <div class="col-4 px-1">
                                            <div>
                                                <img class="img-fluid" 
                                                src="https://images.ixigo.com/img/common-resources/airline-new/' 
                                                . $airLine . '.png" 
                                                width="34">
                                            </div>
                                            <small class="text-muted">' . $flightCode . '</small>
                                        </div>
                                        <div class="col-8 p-0">
                                            <div class="flight-timeing-list">
                                                <ul>
                                                    <li>
                                                        <h6>' . $flightData['departure_time'] . '</h6>
                                                        <small class="text-muted">
                                                            ' . $hours . ' hrs ' . $mins . ' minutes
                                                        </small>
                                                    </li>
                                                    <li class="">
                                                        <h4>
                                                            <i class="fa fa-plane text-muted align-middle" 
                                                            aria-hidden="true"></i>
                                                        </h4>
                                                    </li>
                                                    <li>
                                                        <h6>' . $flightData['arrival_time'] . '</h6>
                                                        <small class="text-muted">' 
                                                            . (
                                                                !empty($flightData['stops']) && $flightData['stops'] <> 0 
                                                                ? $flightData['stops'] . ' stop(s)' : 'Non-stop'
                                                              )
                                                            . '
                                                        </small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="offset-4 col d-flex justify-content-start p-0 ">
                                            <div>
                                                <!--<img class="img-fluid" src="img/cleartrip.png" width="60">-->
                                                ' . $minFareVendor . '
                                            </div>
                                            <h5 class="ml-1">₹ ' . $minFare . ' </h5>
                                        </div>
                                    </div>
                                </a>';
                                    
                                $divCounter++;
                                }
                            }

                            $htmlString .= '</div><div class="col border-right flymulti-srl">';
                            //echo '<br>VendorArray : <pre>' . print_r($vendorArray, true) . '</pre>';exit;
                            if (!empty($vendorData['arrivalData'])) {
                                
                                //$divCounter = 1;
                                
                                foreach ($vendorData['arrivalData'] as $flightCode => $flightData) {
                                    $fareArray  =   $flightData['fare'];

                                    $fareArrayCount =   count($fareArray);

                                    $minFare    =   null;

                                    $minFareVendor  =   null;

                                    if ($fareArrayCount > 1) {

                                        foreach ($fareArray as $vendor => $fare) {
                                            if (!empty($minFare)) {
                                                $minFare    =   $fare;
                                                $minFareVendor  =   $vendor;
                                            } else {
                                                if ($minFare > $fare) {
                                                    $minFare = $fare;
                                                    $minFareVendor = $vendor;
                                                } 
                                            }
                                        }
                                    } else {
                                        foreach ($fareArray as $vendor => $fare) {
                                            $minFare    =   $fare;
                                            $minFareVendor  =   $vendor;
                                        }
                                    }
                                    
                                    //if (!array_key_exists($minFareVendor, $vendorArray)) {
                                    if (empty($vendorArray[$minFareVendor])) {
                                        continue;
                                    }
                                    
                                    $divId      =   $minFareVendor . '_div_' . $divCounter;
                                    
                                    $airLine    =   substr($flightCode, 0, 2);
                                    
                                    $hours      =   $flightData['duration']['hours'];
                                    
                                    $mins       =   $flightData['duration']['mins'];

                                    $htmlString .=  '
                                    <a href="javascript:void(0);" 
                                       id = "' 
                                            . $minFareVendor . '_' 
                                            . $vendorArray[$minFareVendor] 
                                            . '" onclick="javascript:showHideReturnFlights(\'' . $minFareVendor . '\', \'' . $divId . '\', \'' . $flightCode . '\', \'' . $minFare . '\', \'arrival\');">
                                        <div class="border-bottom pt-2 pb-1 row align-items-center" 
                                        id="' . $divId . '">
                                            <div class="col-4 px-1">
                                                <div>
                                                    <img class="img-fluid" 
                                                    src="https://images.ixigo.com/img/common-resources/airline-new/' 
                                                    . $airLine . '.png" 
                                                    width="34">
                                                </div>
                                                <small class="text-muted">' . $flightCode . '</small>
                                            </div>
                                            <div class="col-8 p-0">
                                                <div class="flight-timeing-list">
                                                    <ul>
                                                        <li>
                                                            <h6>' . $flightData['departure_time'] . '</h6>
                                                            <small class="text-muted">
                                                                ' . $hours . ' hrs ' . $mins . ' minutes
                                                            </small>
                                                        </li>
                                                        <li class="">
                                                            <h4>
                                                                <i class="fa fa-plane text-muted align-middle" 
                                                                aria-hidden="true"></i>
                                                            </h4>
                                                        </li>
                                                        <li>
                                                            <h6>' . $flightData['arrival_time'] . '</h6>
                                                            <small class="text-muted">'
                                                            . (
                                                                !empty($flightData['stops']) && $flightData['stops'] <> 0 
                                                                ? $flightData['stops'] . ' stop(s)' : 'Non-stop'
                                                              )
                                                            . '
                                                            </small>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="offset-4 col d-flex justify-content-start p-0 ">
                                                <div>
                                                    <!--<img class="img-fluid" src="img/cleartrip.png" width="60">-->
                                                    ' . $minFareVendor . '
                                                </div>
                                                <h5 class="ml-1">₹ ' . $minFare . ' </h5>
                                            </div>
                                        </div>
                                    </a>';
                                    
                                    $vendorArray[$minFareVendor]    += 1;
                                    
                                    $divCounter++;
                                }
                            }

                            $htmlString .=  '</div>';

                            echo $htmlString;
                            
                        ?>

                    </div>
            
                <script language="javascript" type="text/javascript">
                    
                    function checkBooknowForm()
                    {
                        var error = "";

                        if (document.bookNowForm.vendor.value == "" 
                           || document.bookNowForm.amount.value == "") {
                            error   +=  "Please select a flight";
                        }

                        if (document.bookNowForm.flightCodeDeparture.value == "" 
                           || document.bookNowForm.departureAmount.value == "") {
                            error   +=  "\nPlease select departure flight";
                        }

                        if (document.bookNowForm.flightCodeArrival.value == "" 
                           || document.bookNowForm.arrivalAmount.value == "") {
                            error   +=  "\nPlease select arrival flight";
                        }

                        if (error.length > 0) {
                            alert(error);
                            return false;
                        }

                        document.bookNowForm.submit();
                    }
                    
                    var previousDepartureDiv    =   false;
                    
                    var previousArrivalDiv      =   false;
                    
                    var previousVendor          =   false;
                    
                    
                    function showHideReturnFlights (vendorToShow, divId, flightCode, minFare, flightCodeType) {
                        
                        if (flightCodeType === undefined) {
                            flightCodeType = 'departure';
                        }
        
                        var vendorArray =   new Object();
                        
                        var eleCounter  =   1;
                        
                        var total       =   1;
                        
                        document.getElementById('vendor').value = vendorToShow;
                        
                        if (flightCodeType == 'departure') {
                            
                            document.getElementById(divId).style.backgroundColor = '#EA1E63';
                            document.getElementById('flightCodeDeparture').value  = flightCode;
                            document.getElementById('departureAmount').value      = minFare;
                            
                            if (previousVendor != false && previousVendor != vendorToShow) {
                                
                                document.getElementById('arrivalAmount').value = 0;
                                
                                if (previousArrivalDiv != false) {
                                    document.getElementById(previousArrivalDiv).style.backgroundColor = '';
                                }
                                
                                previousVendor = vendorToShow;
                                
                            } else {
                                previousVendor = vendorToShow;
                            }
                            
                            if (document.getElementById('arrivalAmount').value == 0) {
                                document.getElementById('amount').value               = 0;
                                document.getElementById('bookNowDiv').innerHTML       = "₹ 0";
                            } else {
                                document.getElementById('amount').value = parseInt(document.getElementById('departureAmount').value) 
                                                                        +
                                                                      parseInt(document.getElementById('arrivalAmount').value);
                                                              
                                document.getElementById('bookNowDiv').innerHTML = "₹ " + document.getElementById('amount').value;
                            }
                            
                            
                            
                            
                            if (previousDepartureDiv != false && previousDepartureDiv != divId) {
                                document.getElementById(previousDepartureDiv).style.backgroundColor = '';
                                previousDepartureDiv = divId;
                            } else {
                                previousDepartureDiv = divId;
                            }
                            
                        } else {
                            
                            document.getElementById(divId).style.backgroundColor = '#EA1E63';
                            document.getElementById('arrivalAmount').value = minFare;
                            document.getElementById('flightCodeArrival').value = flightCode;
                            document.getElementById('amount').value = parseInt(document.getElementById('departureAmount').value) 
                                                                        +
                                                                      parseInt(document.getElementById('arrivalAmount').value);
                                                              
                            document.getElementById('bookNowDiv').innerHTML = "₹ " + document.getElementById('amount').value;
                            
                            
                            
                            if (previousArrivalDiv != false  && previousArrivalDiv != divId) {
                                document.getElementById(previousArrivalDiv).style.backgroundColor = '';
                                previousArrivalDiv = divId;
                            } else {
                                previousArrivalDiv = divId;
                            }
                        }
                        
                        if (flightCodeType == 'departure') {
                            <?php
                                foreach ($vendorArray as $vendor => $count) {
                            ?>      vendorArray["<?php echo $vendor;?>"]  =   <?php echo $count;?>;     
                            <?php
                                }
                            ?>

                            for(var vendor in vendorArray)
                            {
                                total   =   vendorArray[vendor];

                                //alert ("Vendor : " + vendor + ", total : " + total);

                                if (vendor == vendorToShow) {
                                    for (eleCounter= 1;eleCounter < total;eleCounter++) {
                                        document.getElementById(vendor + '_' + eleCounter).style.display = '';
                                    }
                                } else {
                                    for (eleCounter= 1;eleCounter < total;eleCounter++) {
                                        document.getElementById(vendor + '_' + eleCounter).style.display = 'none';
                                    }
                                }
                            }
                        }
                    }
                </script>
            <?php
                }
            ?>
        </div>
    </div>
</section>

<footer class="fixed-bottom bg-primary text-white">
    <form name="bookNowForm" method="post" action="{{ url('/booknow') }}" >
        {!! csrf_field() !!}
        <input type="hidden" name="vendor" id="vendor" value="">
        <input type="hidden" name="flightCodeDeparture" id="flightCodeDeparture" value="">
        <input type="hidden" name="departureAmount" id="departureAmount" value="">
        <input type="hidden" name="flightCodeArrival" id="flightCodeArrival" value="">
        <input type="hidden" name="arrivalAmount" id="arrivalAmount" value="">
        <input type="hidden" name="amount" id="amount" value="">
    </form>
    <div class="py-2 px-3 d-flex justify-content-between align-items-center">
        <h2 id="bookNowDiv">₹ 0</h2>
        <a class="btn text-uppercase bg-theme px-3 py-2 mb-0" onclick="javascript:checkBooknowForm();">
            Book Now
        </a>
    </div>
</footer>
@endsection