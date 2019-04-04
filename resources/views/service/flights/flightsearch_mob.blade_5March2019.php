@extends('layouts.mobile')
@section('content')



<!---From here below scripts for core JS Calendar--->

<link rel="stylesheet" type="text/css" href="{{ url('/jscal/codebase/fonts/font_roboto/roboto.css') }}"/>

<link rel="stylesheet" type="text/css" href="{{ url('/jscal/codebase/dhtmlxcalendar.css') }}"/>

<script src="{{ url('/jscal/codebase/dhtmlxcalendar.js') }}"></script>

<style>
    #calendar_input {
        border: 1px solid #dfdfdf;
        font-family: Roboto, Arial, Helvetica;
        font-size: 14px;
        color: #404040;
    }
    #calendar_icon {
        vertical-align: middle;
        cursor: pointer;
    }
</style>

<!---Till here scripts for core JS Calendar--->
<section class="">
<?php
    require_once(env('APP_ROOT') . '/resources/views/service/service_nav.php');
    require_once(env('APP_ROOT') . '/resources/views/service/flights/commonPhpScripts.php');
    
?>
    <script language="javascript" type="text/javascript">
        //arrivalDate
        function selectWay(value)
        {
            if (value == 1) {
                document.getElementById('arrivalDate').value = "";
                document.getElementById('arrivalDate').disabled = true;
                document.getElementById('returnDayDiv').style.display='none';
                document.getElementById('returnDateErrorSpan').style.display='none';
            } else {
                document.getElementById('arrivalDate').disabled = false;
                document.getElementById('returnDayDiv').style.display='';
                document.getElementById('returnDateErrorSpan').style.display='';
            }
        }
    </script>
<form name="flightSearchForm" method="post" action="{{ url('/flightsearch') }}">
{!! csrf_field() !!}    
<div class="card pl-3 pr-3 pb-3 mb-3 service-form">
  <div class="text-center pt-2">
    <h1 class="font-raleway">Fly With OSS</h1>
    <p class="pt-2 pb-2 mb-0">Find Top Deals after Comparing From 100+ Travel Portals</p>
  </div>
  <div class="d-flex">
	 <div class="form-check form-check-inline mr-4">
		<div class="radio">
		   <label>
                   <?php
                        $way = !empty($way) ? $way : 1;
                        
                        
                   ?>
		   <input type="radio" name="way" id="optionsRadios1" value="1" 
                   <?php echo $way == 1 ? 'checked' : '';?> onclick="javascript:selectWay(this.value)">
		   One way
		   </label>
		</div>
	 </div>
	 <!--onclick = "document.location.href='flight-search-result.php'"-->
	 <div class="form-check form-check-inline mr-4">
		<div class="radio">
		   <label>
		   <input type="radio" name="way" id="optionsRadios1" value="2"
                   <?php echo $way == 2 ? 'checked' : '';?> onclick="javascript:selectWay(this.value)">
		   Round trip
		   </label>
		</div>
	 </div>
         @if ($errors->has('way'))
            <span class="help-block">
                <strong>{{ $errors->first('way') }}</strong>
            </span>
         @endif
  </div>
  
  <div class="mt-2">
	 <div class="input-group mb-3 mb-sm-0 form-group">
            <label for="exampleInputName2" class="bmd-label-floating">Flying From</label>
            <input type="text" class="form-control" id="sourceCity" 
                   name="sourceCity" autocomplete="off"
            value="<?php echo !empty($sourceCity) ? $sourceCity : '';?>" 
            oninput="javascript:fetchAirportList(this.value, 'sourceCity', 'ajaxContainerSourceCity');">
            
            
            
            <div id="ajaxContainerSourceCity">
            </div>
            
            <div class="input-group-addon border-0 bg-transparent map-icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            
            
                
	 </div>
         
        <span class="help-block text-danger" id="sourceCityErrorSpan">
            @if ($errors->has('sourceCity'))
                <strong>{{ $errors->first('sourceCity') }}</strong>
            @endif
        </span>
         
	 <div class="text-center">
            <button type="button" class="btn btn-primary bmd-btn-icon ml-2 mr-2"
            onclick="javascript:swapSource();">
                <i class="fa fa-random replace rotate" aria-hidden="true"></i>
            </button>
	 </div>
            
	 <div class="input-group mb-3 mb-sm-0 form-group">
            <label for="exampleInputName2" class="bmd-label-floating">Flying To</label>
            <input type="text" class="form-control" id="destinationCity" 
                   name="destinationCity" autocomplete="off"
            value="<?php echo !empty($destinationCity) ? $destinationCity : '';?>" 
            oninput="javascript:fetchAirportList(this.value, 'destinationCity', 'ajaxContainerDestinationCity');">
            <div id="ajaxContainerDestinationCity"></div>
            <div class="input-group-addon border-0 bg-transparent map-icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            
	 </div>
         
         
         <span class="help-block text-danger" id="destinationCityErrorSpan">
            @if ($errors->has('destinationCity'))
                <strong>{{ $errors->first('destinationCity') }}</strong>
            @endif
         </span>
         
         
         <script language="javascript" type="text/javascript">
            function swapSource()
            {
                var source = document.getElementById("sourceCity");

                var destination = document.getElementById("destinationCity");

                var swap    =   0;

                if (typeof(source.value) != 'undefined' 
                        && typeof(destination.value) != 'undefined') 
                {
                    swap = destination.value;

                    destination.value = source.value;

                    source.value = swap;
                }
            }
            
            function submitForm()
            {
                var errorFound = false;
                
                if (document.flightSearchForm.sourceCity.value == '') {
                    document.getElementById('sourceCityErrorSpan').innerHTML 
                            = '<strong>The Departure City field is required.</strong>';
                    errorFound = true;
                } else {
                    document.getElementById('sourceCityErrorSpan').innerHTML 
                            = '';
                }
                
                if (document.flightSearchForm.destinationCity.value == '') {
                    document.getElementById('destinationCityErrorSpan').innerHTML 
                            = '<strong>The Arrival City field is required.</strong>';
                    errorFound = true;
                } else {
                    document.getElementById('destinationCityErrorSpan').innerHTML 
                            = '';
                }
                
                if (document.flightSearchForm.departureDate.value == '') {
                    document.getElementById('departureCityErrorSpan').innerHTML 
                            = '<strong>The Departure date field is required.</strong>';
                    errorFound = true;
                } else {
                    document.getElementById('departureCityErrorSpan').innerHTML 
                            = '';
                }
                
                if (document.flightSearchForm.way.value == 2 && 
                        document.flightSearchForm.arrivalDate.value == '') {
                    document.getElementById('returnDateErrorSpan').innerHTML 
                            = '<strong>The Arrival date field is required.</strong>';
                    errorFound = true;
                } else {
                    document.getElementById('returnDateErrorSpan').innerHTML 
                            = '';
                }
                
                if (errorFound == false) {
                    document.flightSearchForm.submit();
                }
            }
         </script>
            
	 <div class="input-group mb-3 mb-sm-0 form-group">
            <label for="exampleInputName2" class="bmd-label-floating">Onward Date</label>
            <input id="departureDate" name="departureDate" 
            READONLY class="form-control bg-transparent" 
            value="<?php echo !empty($departureDate) ? $departureDate : '';?>">
	 </div>
         
        <span class="help-block text-danger" id="departureCityErrorSpan">
            @if ($errors->has('departureDate'))
                <strong>{{ $errors->first('departureDate') }}</strong>
            @endif
        </span>
         
         
	 <div class="input-group mb-3 mb-sm-0 form-group" id="returnDayDiv"
         <?php echo $way == 1 ? 'style="display:none;"' : '';?>>
            <label for="exampleInputName2" class="bmd-label-floating">Return Date</label>
            <input id="arrivalDate" name="arrivalDate" 
            READONLY class="form-control bg-transparent" 
            value="<?php echo !empty($arrivalDate) ? $arrivalDate : '';?>"
            <?php echo $way == 1 ? 'disabled' : '';?>>
            
	</div>
         
        
        <span class="help-block text-danger" id="returnDateErrorSpan">
            @if ($errors->has('arrivalDate'))
                <strong>{{ $errors->first('arrivalDate') }}</strong>
            @endif
        </span>
        
         
	 <div class="mb-3">
            <fieldset class="form-group" data-toggle="modal" data-target="#Traveller">
               <label for="exampleInputEmail1" class="bmd-label-static">
                   Traveller & Class
               </label>
               <input type="text" class="form-control pt-2 bg-transparent" id="exampleTravellerInput" 
                value="<?php echo !empty($exampleTravellerInput) ? $exampleTravellerInput : '1 Traveller(s) , Economy';?>" 
                name="exampleTravellerInput" readonly >
            </fieldset>
            <div class="modal fade" id="Traveller" tabindex="-1" role="dialog" 
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header p-3">
                                <h5 class="modal-title" 
                                    id="exampleModalLabel">
                                    Select Travellers
                                </h5>
                                <button type="button" class="close" 
                                        data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pl-3 pr-3 pt-0 pb-0">
                                <div class="m-1">
                                    ADULTS <small>(+12 yrs)</small>
                                </div>
                                <nav aria-label="...">
                                   <ul class="pagination pagination-sm">
                                       <?php
                                            $selectedValue = !empty($adults) 
                                                             ? $adults : 1;
                                            $data = [
                                                'total'             =>  8, 
                                                'type'              => 'adults', 
                                                'hiddenFieldName'   => 'adults',
                                                'selectedValue'     => $selectedValue,
                                            ];
                                            renderTravellersSelection($data);
                                       ?>
                                   </ul>
                                   <input type="hidden" name="adults" id="adults" 
                                   value="<?php echo $selectedValue;?>">
                                </nav>
                                <div class="m-1">CHILDREN <small>(2-11 yrs)</small></div>
                                <nav aria-label="...">
                                   <ul class="pagination pagination-sm">
                                       <?php
                                            $selectedValue = !empty($children)
                                                             ? $children : '0';
                                            $data = [
                                                'total'             =>  8, 
                                                'type'              => 'children', 
                                                'hiddenFieldName'   => 'children',
                                                'startIndex'        =>  0,
                                                'selectedValue'     =>  $selectedValue,
                                            ];
                                            renderTravellersSelection($data);
                                       ?>
                                   </ul>
                                   <input type="hidden" name="children" id="children" 
                                   value="<?php echo $selectedValue;?>">
                                </nav>
                                <div class="m-1">INFANTS <small>(0-2 yrs)</small></div>
                                <nav aria-label="...">
                                   <ul class="pagination pagination-sm">
                                        <?php
                                            $selectedValue = !empty($infants)
                                                             ? $infants : '0';
                                            $data = [
                                                'total'             =>  8, 
                                                'type'              => 'infants', 
                                                'hiddenFieldName'   => 'infants',
                                                'startIndex'        =>  0,
                                                'selectedValue'     =>  $selectedValue,
                                            ];
                                            renderTravellersSelection($data);
                                       ?>
                                   </ul>
                                   <input type="hidden" name="infants" id="infants" 
                                   value="<?php echo $selectedValue;?>">
                                </nav>
                                <div class="dropdown-divider mb-3"></div>
                                <div class="m-1">SEATING CLASS</div>
                                <div class="ml-2">
                                   <?php
                                        $seatingClass = !empty($seatingClass)
                                                        ? $seatingClass : 'economy';

                                        renderSeatingClassHTML($seatingClass);
                                   ?>
                                </div>
                           </div>
                           <div class="modal-footer">
                              <!--<button type="button" class="btn btn-secondary mr-2" 
                              data-dismiss="modal">Cancel</button>-->
                              <button type="button" class="btn btn-primary" 
                              data-dismiss="modal">Done</button>
                           </div>
                      </div>
                </div>
            </div>
	 </div>
	 <a href="javascript:void(0);" 
            class="btn btn-primary text-uppercase pl-3 pr-3 mb-0 btn-block" 
            onclick="javascript:submitForm();//document.flightSearchForm.submit();">
             Search Flights
         </a>
  </div>
</div>
</form>   

<!--<div class="clearfix">
  <div class="compare-body">
	 <div id="carouselExampleControls" class="carousel slide pdt10" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
		   <div class="carousel-item active">
                        <img class="d-block img-fluid" src="img/tf8.jpg" alt="First slide">
		   </div>
		   <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/tf11.jpg" alt="Second slide">
		   </div>
		   <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/tf12.jpg" alt="Third slide">
		   </div>
		   <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/tf13.jpg" alt="Third slide">
		   </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
		</a>
	 </div>
  </div>
</div>-->
</section>
<?php
    /*if ($way == 1) {
        echo '<script language="javascript" type="text/javascript">selectWay(2);</script>';
    }*/
    
    require_once(env('APP_ROOT') . '/resources/views/service/flights/commonJsScripts.php');
?>

@endsection