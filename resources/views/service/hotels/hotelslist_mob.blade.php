@extends('layouts.mobile')
@section('content')
@include('errors.register')

<section class="bg-section pdt54">
    <div class="bg-light px-2 py-1">
        <div class="d-flex justify-content-start align-items-center alerts">
            <div class="mr-auto">
                <h5>Select for </h5>
            </div>
            <div class="switch mr-3">
                <label>
                    <input type="checkbox" checked class="p-0">
                    Price Alert
		</label>
            </div>
            <div class="switch">
                <label>
                    <input type="checkbox">
                    Rooms Alert
		</label>
            </div>
	</div>
    </div>
            
    <div class="">
        <ul class="nav nav-pills nav-fill bg-primary text-white">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);">NEW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">BEST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    PRICE <span> <i class="fa fa-long-arrow-up" aria-hidden="true"></i> </span>
                </a>
            </li>
        </ul>
    </div>
    
    <?php
        //echo '<br>vendorData : <pre>' . print_r($vendorData, true) . '</pre>';exit;
        if (!empty($vendorData) && is_array($vendorData)) {
            
            $hotelImagesArray = ['h1.jpg', 'h2.jpg', 'h3.jpg', 'h4.jpg'];
            
            if (count($vendorData)) {
                foreach ($vendorData as $hotelName => $data) {
                    
                    $imageUrl   =   !empty($data['image']) 
                                    ? $data['image'] 
                                    : '/images/' . $hotelImagesArray[mt_rand(0,3)]; 
                    
                    $wifi       =   !empty($data['wifi']) && $data['wifi'] == 'Yes' ? 'Yes' : 'No';
                    
                    $breakFast  =   !empty($data['breakFast']) && $data['breakFast'] == 'Yes' ? 'Yes' : 'No';
                    
                    $swimmingPool  =   !empty($data['swimmingPool']) && $data['swimmingPool'] == 'Yes' ? 'Yes' : 'No';
                    
                    $gymnasium  =   !empty($data['gymnasium']) && $data['gymnasium'] == 'Yes' ? 'Yes' : 'No';
                    
                    $html = '<a href="javascript:void(0);">
                                <div class="card mb-3">
                                    <div class="position-relative">
                                        <div>
                                            <img class="d-block img-fluid" src="' 
                                            . $imageUrl . '" alt="">
                                        </div>
                                        <!--<div class="position-absolute hotel-label">
                                            <span href="#" class="badge badge-danger mr-2">20% off</span>
                                            <span href="#" class="badge badge-success">Free Cancellation</span>
                                        </div>-->
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row pb-2 pt-1">
                                            <h4 class="text-truncate p-2">
                                                ' . $hotelName . '
                                            </h4>
                                            <div class="col-8 pr-0 pl-2">
                                                <p class="text-muted font-italic text-truncate pt-1">
                                                    ' . $data['address'] . '
                                                </p>
                                                <p class="py-1">
                                                    <!--<img src="img/h-rating.png" class="img-fluid" alt=""/>
                                                    <img src="img/h-ole.png" class="img-fluid" alt=""/>
                                                    <small>88/100 </small>
                                                    <small class="text-primary">(672 reviews)</small>-->
                                                    <small>
                                                        <strong>Star Rating : </strong>' 
                                                        . $data['starRating']['hotel-info:rating'] 
                                                        . '
                                                    </small>
                                                </p>
                                                <div class="list-amenities mt-1">
                                                    <ul class="text-muted">
                                                        ' . (
                                                                $wifi == 'Yes' 
                                                                ? 
                                                                '<li>
                                                                    <i class="fa fa-wifi" aria-hidden="true"></i>
                                                                </li>' 
                                                                : ''
                                                            )   
                                                            . '
                                                                
                                                            ' . (
                                                                $breakFast == 'Yes' 
                                                                ? 
                                                                '<li>
                                                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                                                </li>' 
                                                                : ''
                                                            )   
                                                            . '
                                                                
                                                            ' . (
                                                                $swimmingPool == 'Yes' 
                                                                ? 
                                                                '<li>
                                                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                                                </li>' 
                                                                : ''
                                                            )   
                                                            . '
                                                        
                                                        
                                                        <li>
                                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                                        </li>
                                                        
                                                        <!--<li>
                                                            <i class="fa fa-glass" aria-hidden="true"></i>
                                                        </li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-4 text-right px-2">
                                                <h2>₹ ' . $data['rent'] . '</h2>
                                                <div>
                                                    <object>
                                                        <a  href="javascript:void(0);" 
                                                        class="btn btn-primary text-uppercase px-3 btn-sm mt-2">
                                                            Book Now
                                                        </a> 
                                                    </object>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </a>';
                    
                    echo $html;
                }
            } else {
    ?>          <div class="card mb-3">No hotels found</div>
    <?php
            }
        } else {
    ?>      <div class="card mb-3">No hotels found</div>
    <?php
        }
    ?>
        
    
        
</section>


@endsection