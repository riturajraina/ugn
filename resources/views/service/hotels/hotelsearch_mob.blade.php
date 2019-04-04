@extends('layouts.mobile')
@section('content')
@include('errors.register')
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
<section class="pdt54">
<?php
    require_once(env('APP_ROOT') . '/resources/views/service/service_nav.php');
    require_once(env('APP_ROOT') . '/resources/views/service/hotels/commonPhpScripts.php');
    
?>
    
<form name="hotelSearchForm" method="post" action="{{ url('/hotelsearch') }}">
{!! csrf_field() !!}    
<div class="card pl-3 pr-3 pb-3 mb-3 service-form">
    <div class="text-center pt-2">
        <h1 class="font-raleway">Stay With Us</h1>
        <p class="pt-2 pb-2 mb-0">Find Top Deals after Comparing From 100+ Travel Portals</p>
    </div>
  
    <div class="mt-2">
	<div class="input-group mb-3 mb-sm-0 form-group">
            <label for="exampleInputName2" class="bmd-label-floating">
                hotel, City, locality...
            </label>
            <input type="text" class="form-control" id="sourceCity" 
            name="sourceCity" 
            value="<?php echo !empty($sourceCity) ? $sourceCity : '';?>" 
            oninput="javascript:fetchCityList(this.value, 'sourceCity', 'ajaxContainerSourceCity');"
            autocomplete="off">
            <div id="ajaxContainerSourceCity"></div>
            <div class="input-group-addon border-0 bg-transparent map-icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
	 </div>
	 
	 <div class="input-group mb-3 mb-sm-0 form-group">
            <label for="exampleInputName2" class="bmd-label-floating">
                CheckIn
            </label>
            <input id="checkInDate" name="checkInDate" 
            READONLY class="form-control bg-transparent" 
            value="<?php echo !empty($checkInDate) ? $checkInDate : '';?>">
	 </div>
      
	 <div class="input-group mb-3 mb-sm-0 form-group">
            <label for="exampleInputName2" class="bmd-label-floating">CheckOut</label>
            <input id="checkOutDate" name="checkOutDate" 
            READONLY class="form-control bg-transparent" 
            value="<?php echo !empty($checkOutDate) ? $checkOutDate : '';?>"
            >
	 </div>
	 <div class="mb-3">
            <fieldset class="form-group" data-toggle="modal" data-target="#Traveller">
               <label for="exampleInputEmail1" class="bmd-label-static">
                   Traveller & Rooms
               </label>
               <input type="text" class="form-control pt-2" id="exampleTravellerInput" 
                value="<?php echo !empty($exampleTravellerInput) ? $exampleTravellerInput : '1 Traveller(s) , 1 room(s)';?>" 
                name="exampleTravellerInput" readonly>
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
                                    <div class="m-1">CHILDREN <small>(2-12 yrs)</small></div>
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
                                    <div class="m-1">ROOMS</div>
                                    <nav aria-label="...">
                                       <ul class="pagination pagination-sm">
                                           <?php
                                                $selectedValue = !empty($rooms)
                                                                 ? $rooms : '1';
                                                $data = [
                                                    'total'             =>  8, 
                                                    'type'              => 'rooms', 
                                                    'hiddenFieldName'   => 'rooms',
                                                    'startIndex'        =>  1,
                                                    'selectedValue'     =>  $selectedValue,
                                                ];
                                                renderTravellersSelection($data);
                                           ?>
                                       </ul>
                                       <input type="hidden" name="rooms" id="rooms" 
                                       value="<?php echo $selectedValue;?>">
                                    </nav>
                                    <div class="dropdown-divider mb-3"></div>
                                    
                             </div>
                             <div class="modal-footer">
                                <button type="button" class="btn btn-primary" 
                                data-dismiss="modal">Done</button>
                             </div>
                        </div>
                </div>
            </div>
	 </div>
	 <a href="javascript:void(0);" 
            class="btn btn-primary text-uppercase pl-3 pr-3 mb-0 btn-block" 
            onclick="javascript:document.hotelSearchForm.submit();">
             SEARCH HOTELS
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
    
    require_once(env('APP_ROOT') . '/resources/views/service/hotels/commonJsScripts.php');
?>

@endsection