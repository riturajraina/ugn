@extends('layouts.mobile')
@section('content')
@include('errors.register')
<form name="hiddenSearchForm" method="post" action="{{ url('/flightsearch') }}">
    {!! csrf_field() !!}
    <input type="hidden" name="way" value="<?php echo $way;?>">
    <input type="hidden" name="sourceCity" value="<?php echo $sourceCity;?>">
    <input type="hidden" name="destinationCity" value="<?php echo $destinationCity;?>">
    <input type="hidden" name="adults" value="<?php echo $data['adults'];?>">
    <input type="hidden" name="seatingClass" value="<?php echo $data['seatingClass'];?>">
    <input type="hidden" name="departureDate" value="<?php echo $data['departureDate'];?>">
    <input type="hidden" name="exampleTravellerInput" value="<?php echo $data['exampleTravellerInput'];?>">
    <input type="hidden" name="children" value="<?php echo $data['children'];?>">
    <input type="hidden" name="infants" value="<?php echo $data['infants'];?>">
    <input type="hidden" name="arrivalDate" value="<?php echo !empty($data['arrivalDate']) ? $data['arrivalDate'] : null;?>">
    
    <input type="hidden" name="sortParam" value="<?php echo !empty($data['sortParam']) ? $data['sortParam'] : null;?>">
    
    <input type="hidden" name="sortType" value="<?php echo !empty($data['sortType']) ? $data['sortType'] : null;?>">
    
    <input type="hidden" name="sortParamReturn" value="<?php echo !empty($data['sortParamReturn']) 
    ? $data['sortParamReturn'] : null;?>">
    
    <input type="hidden" name="sortTypeReturn" value="<?php echo !empty($data['sortTypeReturn']) 
    ? $data['sortTypeReturn'] : null;?>">
    
    <input type="hidden" name="dateFrom" value="<?php echo !empty($data['dateFrom']) ? $data['dateFrom'] : null;?>">
    
    <input type="hidden" name="dateTo" value="<?php echo !empty($data['dateTo']) ? $data['dateTo'] : null;?>">

</form>

<script language="javascript" type="text/javascript">
    function fillSortParams(sortParam, Order)
    {
        document.hiddenSearchForm.sortParam.value = sortParam;
        document.hiddenSearchForm.sortType.value = Order;
        document.hiddenSearchForm.submit();
    }
    
    function fillSortParamsReturn(sortParam, Order)
    {
        document.hiddenSearchForm.sortParamReturn.value = sortParam;
        document.hiddenSearchForm.sortTypeReturn.value = Order;
        document.hiddenSearchForm.submit();
    }
</script>

<section class="bg-section" style="padding-bottom: 60px;">
    <div class="scrollable">
        <ul>
            <?php
                $liHtml =   '';
                
                foreach ($futurePriceArray as $date => $priceArray) {
                    $unixTimestamp  = strtotime($date);
                    
                    $dayOfWeek  =   date("l", $unixTimestamp);
                    
                    $month      =   date('M', $unixTimestamp);
                    
                    $dateTh     =   date('d', $unixTimestamp);
                    
                    $amount     =   $priceArray['minPriceDeparture'] 
                                        + 
                                    $priceArray['minPriceArrival'];
                    
                    /*setlocale(LC_MONETARY, 'en_IN');
                    
                    $amount     =   money_format('%!i', $amount);*/
                    
                    $amount     =   number_format($amount, 0, ".", ",");
                    
                    $liHtml     .=  '<li>
                                        <a href="javascript:void(0)">
                                            <small class="text-muted">
                                                ' . $dayOfWeek . ' ' . $dateTh 
                                                . ' ' . $month . 
                                            '</small>
                                            <h5>₹ ' 
                                            . $amount 
                                            . ' </h5>
                                        </a>
                                    </li>';   
                }
                
                echo $liHtml;
                
            ?>
            
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
    
    <style>
        .sorting-fly{border-right: 1px solid #ccc;}
        .sorting-fly a .toggle{visibility: hidden;}
        .sorting-fly a:hover .toggle{visibility: visible;}
    </style>
    
    <?php
    
        if ($way == 2) {
    ?>
            <div class="row">
                <div class="col card p-0">
                    <div class="sorting-fly">
                        <ul class="nav nav-pills nav-fill bg-primary text-white">
                            <li class="nav-item">
                                <a class="nav-link<?php echo $sortParam == 'departure' ? ' active' : '';?>" 
                                   href="javascript:void(0);" 
                                   onclick="javascript:fillSortParams('departure', '<?php echo $departureSortParam;?>');"
                                   title="<?php echo $departureSortHintMessage;?>">
                                    DEPART 
                                    <?php
                                        $sortClass = 'fa fa-long-arrow-' . $departureSortArrow;

                                        $sortClass .= $sortParam == 'departure' ? '' : ' toggle';
                                    ?>
                                    <i class="<?php echo $sortClass;?>" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo $sortParam == 'arrival' ? ' active' : '';?>" 
                                   href="javascript:void(0);"
                                   onclick="javascript:fillSortParams('arrival', '<?php echo $arrivalSortParam;?>');"
                                   title="<?php echo $arrivalSortHintMessage;?>">
                                    ARRIVE
                                    <?php
                                        $sortClass = 'fa fa-long-arrow-' . $arrivalSortArrow;

                                        $sortClass .= $sortParam == 'arrival' ? '' : ' toggle';
                                    ?>
                                    <i class="<?php echo $sortClass;?>" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo $sortParam == 'price' ? ' active' : '';?>" 
                                   href="javascript:void(0);"
                                   onclick="javascript:fillSortParams('price', '<?php echo $priceSortParam;?>');"
                                   title="<?php echo $priceSortHintMessage;?>" >
                                    PRICE &nbsp;&nbsp;
                                        <?php
                                            $sortClass = 'fa fa-long-arrow-' . $priceSortArrow;

                                            $sortClass .= $sortParam == 'price' ? '' : ' toggle';
                                        ?>
                                        <i class="<?php echo $sortClass;?>" aria-hidden="true"></i> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col card p-0">
                    <div class="sorting-fly">
                        <ul class="nav nav-pills nav-fill bg-primary text-white">
                            <li class="nav-item">
                                <a class="nav-link<?php echo $sortParamReturn == 'departure' ? ' active' : '';?>" 
                                   href="javascript:void(0);" 
                                   onclick="javascript:fillSortParamsReturn('departure', '<?php echo $departureSortReturnParam;?>');"
                                   title="<?php echo $departureSortReturnHintMessage;?>">
                                    DEPART 
                                    <?php
                                        $sortClass = 'fa fa-long-arrow-' . $departureSortReturnArrow;

                                        $sortClass .= $sortParamReturn == 'departure' ? '' : ' toggle';
                                    ?>
                                    <i class="<?php echo $sortClass;?>" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo $sortParamReturn == 'arrival' ? ' active' : '';?>" 
                                   href="javascript:void(0);"
                                   onclick="javascript:fillSortParamsReturn('arrival', '<?php echo $arrivalSortReturnParam;?>');"
                                   title="<?php echo $arrivalSortHintReturnMessage;?>">
                                    ARRIVE
                                    <?php
                                        $sortClass = 'fa fa-long-arrow-' . $arrivalSortReturnArrow;

                                        $sortClass .= $sortParam == 'arrival' ? '' : ' toggle';
                                    ?>
                                    <i class="<?php echo $sortClass;?>" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo $sortParamReturn == 'price' ? ' active' : '';?>" 
                                   href="javascript:void(0);"
                                   onclick="javascript:fillSortParamsReturn('price', '<?php echo $priceSortReturnParam;?>');"
                                   title="<?php echo $priceSortHintReturnMessage;?>" >
                                    PRICE &nbsp;&nbsp;
                                        <?php
                                            $sortClass = 'fa fa-long-arrow-' . $priceSortReturnArrow;

                                            $sortClass .= $sortParamReturn == 'price' ? '' : ' toggle';
                                        ?>
                                        <i class="<?php echo $sortClass;?>" aria-hidden="true"></i> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    <?php
        } else {
    ?>      <div class="sorting-fly">
                <ul class="nav nav-pills nav-fill bg-primary text-white">
                    <li class="nav-item">
                        <a class="nav-link<?php echo $sortParam == 'departure' ? ' active' : '';?>" 
                           href="javascript:void(0);" 
                           onclick="javascript:fillSortParams('departure', '<?php echo $departureSortParam;?>');"
                           title="<?php echo $departureSortHintMessage;?>">
                            DEPART 
                            <?php
                                $sortClass = 'fa fa-long-arrow-' . $departureSortArrow;

                                $sortClass .= $sortParam == 'departure' ? '' : ' toggle';
                            ?>
                            <i class="<?php echo $sortClass;?>" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $sortParam == 'arrival' ? ' active' : '';?>" 
                           href="javascript:void(0);"
                           onclick="javascript:fillSortParams('arrival', '<?php echo $arrivalSortParam;?>');"
                           title="<?php echo $arrivalSortHintMessage;?>">
                            ARRIVE
                            <?php
                                $sortClass = 'fa fa-long-arrow-' . $arrivalSortArrow;

                                $sortClass .= $sortParam == 'arrival' ? '' : ' toggle';
                            ?>
                            <i class="<?php echo $sortClass;?>" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $sortParam == 'price' ? ' active' : '';?>" 
                           href="javascript:void(0);"
                           onclick="javascript:fillSortParams('price', '<?php echo $priceSortParam;?>');"
                           title="<?php echo $priceSortHintMessage;?>" >
                            PRICE &nbsp;&nbsp;
                                <?php
                                    $sortClass = 'fa fa-long-arrow-' . $priceSortArrow;

                                    $sortClass .= $sortParam == 'price' ? '' : ' toggle';
                                ?>
                                <i class="<?php echo $sortClass;?>" aria-hidden="true"></i> 
                        </a>
                    </li>
                </ul>
            </div>
    <?php
        }
    ?>
    
            
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
                        
                        //document.getElementById(divId).style.backgroundColor  = '#EA1E63';
                        
                        document.getElementById(divId).style.backgroundColor  = '#F0F0F0';
                        
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
                            
                            $vendorImage = $minFareVendor == 'cleartrip' 
                                            ? 'cleartrip.png'
                                            :($minFareVendor == 'goibibo' ? 'goibibo_flight.png' : 'happyeasygo_flight.png');
                            
                            $airLine    =   substr($flightCode, 0, 2);
                            
                            $hours      =   $flightData['duration']['hours'];
                                    
                            $mins       =   $flightData['duration']['mins'];
                            
                            $divId      =   $minFareVendor . '_div_' . $divCounter++;  
                            
                            $dateTimeArray = explode(' ', $flightData['departure_time']);
                            
                            $time   =   $dateTimeArray['1'];
                            
                            $dateTimeArray = explode(' ', $flightData['arrival_time']);
                            
                            $arrivalTime = $dateTimeArray['1'];

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
                                                        <!--<h5>' . $flightData['departure_time'] . '</h5>-->
                                                        <h5>' . $time . '</h5>
                                                        <small class="text-muted">
                                                            ' . $hours . ' hrs ' 
                                                              . $mins . ' mins
                                                        </small>
                                                    </li>
                                                    <li class="">
                                                        <h2>
                                                            <i class="fa fa-plane text-muted align-middle" aria-hidden="true">
                                                            </i>
                                                        </h2>
                                                    </li>
                                                    <li>
                                                        <h5>' . $arrivalTime . '</h5>
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
                                                <img class="img-fluid" src="/images/' . $vendorImage . '" >
                                                <!--' . $minFareVendor . '-->
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
                            $divCounter     =   1;
                            
                            $htmlString     =   '<div class="col border-right flymulti-srl">';
                            
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
                                    
                                    $vendorImage = $minFareVendor == 'cleartrip' 
                                            ? 'cleartrip.png' 
                                            :($minFareVendor == 'goibibo' ? 'goibibo_flight.png' : 'happyeasygo_flight.png');
                                            
                                    
                                    $airLine    =   substr($flightCode, 0, 2);
                                    
                                    //if (!array_key_exists($minFareVendor, $vendorArray)) {
                                    if (empty($vendorArray[$minFareVendor])) {
                                        $vendorArray[$minFareVendor]  =   1;
                                    }
                                    
                                    $divId      =   $minFareVendor . '_div_' . $divCounter;  
                                    
                                    $hours      =   $flightData['duration']['hours'];
                                    
                                    $mins       =   $flightData['duration']['mins'];
                                    
                                    $dateTimeArray  =   explode(' ', $flightData['departure_time']);
                            
                                    $time           =   $dateTimeArray['1'];
                                    
                                    $dateTimeArray  =   explode(' ', $flightData['arrival_time']);
                                    
                                    $arrivalTime    =   $dateTimeArray['1'];

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
                                                        <!--<h6>' . $flightData['departure_time'] . '</h6>-->
                                                        <h6>' . $time . '</h6>
                                                        <small class="text-muted">
                                                            ' . $hours . ' hrs ' . $mins . ' mins
                                                        </small>
                                                    </li>
                                                    <li class="">
                                                        <h4>
                                                            <i class="fa fa-plane text-muted align-middle" 
                                                            aria-hidden="true"></i>
                                                        </h4>
                                                    </li>
                                                    <li>
                                                        <!--<h6>' . $flightData['arrival_time'] . '</h6>-->
                                                        <h6>' . $arrivalTime . '</h6>
                                                        
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
                                                <img class="img-fluid" src="/images/' . $vendorImage . '" width="60">
                                                <!--' . $minFareVendor . '-->
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
                                    
                                    $vendorImage = $minFareVendor == 'cleartrip' 
                                            ? 'cleartrip.png' 
                                            : ($minFareVendor == 'goibibo' ? 'goibibo_flight.png' : 'happyeasygo_flight.png');
                                    
                                    //if (!array_key_exists($minFareVendor, $vendorArray)) {
                                    if (empty($vendorArray[$minFareVendor])) {
                                        continue;
                                    }
                                    
                                    $divId      =   $minFareVendor . '_div_' . $divCounter;
                                    
                                    $airLine    =   substr($flightCode, 0, 2);
                                    
                                    $hours      =   $flightData['duration']['hours'];
                                    
                                    $mins       =   $flightData['duration']['mins'];
                                    
                                    $dateTimeArray  =   explode(' ', $flightData['departure_time']);
                            
                                    $time           =   $dateTimeArray['1'];
                                    
                                    $dateTimeArray  =   explode(' ', $flightData['arrival_time']);
                                    
                                    $arrivalTime    =   $dateTimeArray['1'];

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
                                                            <!--<h6>' . $flightData['departure_time'] . '</h6>-->
                                                            <h6>' . $time . '</h6>
                                                            <small class="text-muted">
                                                                ' . $hours . ' hrs ' . $mins . ' mins
                                                            </small>
                                                        </li>
                                                        <li class="">
                                                            <h4>
                                                                <i class="fa fa-plane text-muted align-middle" 
                                                                aria-hidden="true"></i>
                                                            </h4>
                                                        </li>
                                                        <li>
                                                            <!--<h6>' . $flightData['arrival_time'] . '</h6>-->
                                                            <h6>' . $arrivalTime . '</h6>
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
                                                    <img class="img-fluid" src="/images/' . $vendorImage . '" width="60">
                                                    <!--' . $minFareVendor . '-->
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
                            
                            //document.getElementById(divId).style.backgroundColor = '#EA1E63';
                            document.getElementById(divId).style.backgroundColor = '#F0F0F0';
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
                            
                            //document.getElementById(divId).style.backgroundColor = '#EA1E63';
                            document.getElementById(divId).style.backgroundColor = '#F0F0F0';
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
    <form name="bookNowForm" method="post" action="{{ url('/booknow') }}" 
     class="mb-0">
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