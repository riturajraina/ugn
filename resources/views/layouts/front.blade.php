<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Oss</title>
        <!-- Styles -->
        

        <script>
            window.Laravel = <?php
			echo json_encode([
				'csrfToken' => csrf_token(),
			]);
			?>
        </script>

        <link rel="icon" href="/images/favicon.png">

        <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/megamenu.css" rel="stylesheet">
        <link href="/css/product.css" rel="stylesheet">
        <link href="/css/service.css" rel="stylesheet">
        <link href="/css/circle.css" rel="stylesheet">
        <link href="/css/nouislider.min.css" rel="stylesheet">
        <link href="/css/range-slider.css" rel="stylesheet">
        <link href="/css/gijgo.min.css" rel="stylesheet"/>
        <link href="/css/theme.css" rel="stylesheet">

        <script src="/js/jquery.min.js"></script>
    </head>
    <body>

        <header>

            <!-- /CONTAINER HEADER: 2nd-ROW -->
            <div class="bg-white top_row" id="myHeader">
                <div class="container header-central-row py-2">
                    <div class="row header-top-row">
                        <div class="col-sm-3 pr-0">
                            <button type="button" class="btn btn-secondary placepopup p-1 text-secondry" data-toggle="modal" 
                                    data-target="#exampleModal">
                                <i class="fa fa-map-marker"></i> <span class="margin-left-5 hidden-xs "> Cities</span>
                            </button>

                            <div class="logo">
                                <h2><b><a href="index.php">ONE STOP SHOP </a></b></h2>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right text-secondry">
                            <div class="container headertab p-0 mt-1">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="<?php echo !(stristr($_SERVER['REQUEST_URI'], 'ugnsearch') 
                                                  || stristr($_SERVER['REQUEST_URI'], 'display'))? 
                                                  'nav-link active' : 'nav-link';?>" data-toggle="tab" href="#home">Shopping</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu1">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?php echo stristr($_SERVER['REQUEST_URI'], 'ugnsearch') 
                                                  || stristr($_SERVER['REQUEST_URI'], 'display')? 
                                                  'nav-link active' : 'nav-link';?>" data-toggle="tab" 
                                         href="#menu2">Important Info</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content search_lh" >
                                    <div id="home" class="container tab-pane p-0"><br>
                                        <div class="search_h_b">
                                            <div class="row">
                                                <div class="col-3 pr-0">
                                                    <div class="custom-select drop_three_select border-right">
                                                        <select>
                                                          <option value="0">Men's Fashion</option>
                                                          <option value="1">Tablets</option>
                                                          <option value="2">Laptops</option>
                                                          <option value="3">TVs</option>
                                                          <option value="4">Home Appliances</option>
                                                          <option value="5">Cameras</option>
                                                          <option value="6">Women's Fashion</option>
                                                          <option value="7">Personal Care </option>
                                                          <option value="8">Health Care</option> 
                                                        </select>
                                                  </div>
                                                </div>
                                                <div class="col-9 pl-0">
                                                    <form class="mb-0"> 	
                                                        <input type="search" class="search-top" placeholder="Search..." />
                                                        <a class="btn btn-secondry btn-search">
                                                            <i class="fa fa-search" aria-hidden="true"> </i>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="container tab-pane fade p-0"><br>
                                        <div class="search_h_b">
                                            <div class="row">
                                                <div class="col-3 pr-0">
                                                    <div class="custom-select drop_three_select border-right">
                                                        <select>
                                                              <option value="0">Flights Booking</option>
                                                              <option value="1">Cabs Booking</option>
                                                              <option value="2">Flights Booking</option>
                                                              <option value="3">Buses Booking</option>
                                                              <option value="4">Trains Booking</option>
                                                              <option value="5">Hotels Booking</option>
                                                              <option value="6">Holidays Booking</option>
                                                              <option value="7">Movies Booking</option>
                                                              <option value="8">Food Booking</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-9 pl-0">
                                                    <form class="mb-0 position-relative"> 	
                                                        <input type="search" class="search-top" placeholder="Search..." />
                                                        <a class="btn btn-secondry btn-search">
                                                            <i class="fa fa-search" aria-hidden="true"> </i>
                                                        </a>
                                                        <div class="drag-form card text-left">
                                                        <?php 
                                                        require_once (env('VIEWSPATH') ."/layouts/homesection/form_search.php"); 
                                                        ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu2" class="container tab-pane <?php echo stristr($_SERVER['REQUEST_URI'], 
                                            'ugnsearch') || stristr($_SERVER['REQUEST_URI'], 'display') ? 'active' : 'fade';?> p-0
                                            "><br>
                                        <div class="search_h_b">
                                            <form name="ugnSearchForm" method="post" action="/ugnsearch">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-3 pr-0">

                                                        <div class="custom-select drop_three_select border-right">

                                                            <select name="ugnCategory" id="ugnCategory">
                                                            <?php
                                                                use App\Helpers\SelectOptionsManager;

                                                                $selectOptionsManager   =   new SelectOptionsManager();

                                                                require_once(env('UGNCATEGORYARRAYPATH'));
                                                                
                                                                $ugnCategory    =   !empty($ugnCategory) ? $ugnCategory 
                                                                                    : (!empty($_REQUEST['ugnCategory']) 
                                                                                        ? $_REQUEST['ugnCategory'] : null);
                                                                
                                                                
                                                                
                                                                $searchText     =   !empty($searchText) ? $searchText 
                                                                                    : (!empty($_REQUEST['searchText']) 
                                                                                        ? $_REQUEST['searchText'] : null);

                                                                echo $selectOptionsManager->showSelectOptions($categoryArray, 
                                                                        $ugnCategory, true);
                                                            ?>
                                                            </select>
                                                            
                                                        </div>

                                                    </div>
                                                    <div class="col-9 pl-0">
                                                        <div class="mb-0">
                                                            <input type="text" name = "searchText" class="search-top" 
                                                                   placeholder="Search..." value="<?php echo $searchText;?>" />
                                                            <a class="btn btn-secondry btn-search" 
                                                               onclick ="javascript:document.ugnSearchForm.submit();">
                                                                <i class="fa fa-search" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right text-secondry">
                            <ul>
                                <li> <a href="#" class=""> <span class="margin-left-5 line-height-30"><span class="hidden-xs">About OSS</span></span> </a> </li>
                                <li> <a href="#" class=""> <span class="margin-left-5 line-height-30"><span class="hidden-xs">How it Works</span></span> </a> </li>
                                <li> <a href="#" class=""> <i class="fa fa-twitter"></i> </a> </li>
                                <li> <a href="#" class=""> <i class="fa fa-facebook"></i> </a> </li>
                                <li> <a href="#" class=""> <i class="fa fa-instagram"></i> </a> </li>
                                <li> <a href="#" class=""> <i class="fa fa-pinterest-p"></i> </a> </li>
                            </ul>
                            <div class="header-top-row align-self-center">
                                <div class="text-right">
                                    <ul>
                                        <li>
                                            <a href="deals_offers.php">
                                                <button type="button" class="btn btn-primary px-4 m-0">DEALS & OFFERS</button>
                                            </a>
                                        </li>
                                        <li class="mx-1"> 
                                            <div class="dropdown">
                                                <a href="#" class="d-inline-block" id="lr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/images/bell.gif" width="40" height="40" alt=""/></a>

                                                <div class="dropdown-menu dropdown-menu-right min_w" aria-labelledby="lr1">
                                                    <div class="d-flex justify-content-between pl-2 pr-2">
                                                        <div>Notification</div>
                                                        <div><i class="fa fa fa-align-right" aria-hidden="true"></i></div>
                                                    </div>

                                                    <ul class="list-unstyled">
                                                        <?php
                                                        for ($i = 0; $i <= 3; $i++) {
                                                            ?>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="media bg-white my-1">
                                                                        <img class="d_alerts_img mr-1" src="/images/mens-t-shirt.jpg" alt="Generic placeholder image">
                                                                        <div class="media-body p-2">

                                                                            <h6 class="text-truncate">Flipkart Pay Day Sale </h6>
                                                                            <p class="mb-0">10% Instant Discount with All Debit Cards  </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                    <div class="text-right mt-2">
                                                        <a href="alerts.php" class="btn btn-primary btn-sm pl-3 pr-3 mb-0">
                                                            VIEW ALL<div class="ripple-container"></div></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            @if (Session::has('userDetails'))      
                                                    <a class="d-inline-block nav-link user-menu" href="#" id="user-accounts" 
                                                       role="button" data-toggle="dropdown" aria-haspopup="true" 
                                                       aria-expanded="false">
                                                        <img src="/images/boy.png" width="34" height="34" alt=""/>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right user-menu-dropdown min_w" 
                                                         aria-labelledby="user-accounts">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            {{ Session::get('userDetails')['0']['fname']}} 
                                                            {{ Session::get('userDetails')['0']['lname'] }}
                                                        </a>
                                                        <!--<a class="dropdown-item" href="#">My Profile</a>
                                                        <a class="dropdown-item" href="#">Orders</a>
                                                        <a class="dropdown-item" href="#">Wishlist</a>
                                                        <a class="dropdown-item" href="#">Alerts & Notifications</a>-->
                                                        <a class="dropdown-item" href="<?php echo env('APP_URL') . '/flogout';?>">
                                                            Logout
                                                        </a>
                                                    </div>
                                            @else
                                                    <a href="#" class="d-inline-block" data-toggle="modal" 
                                                       data-target="#loginModal">
                                                        <img src="/images/boy.png" width="34" height="34" alt=""/>
                                                    </a>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /CONTAINER HEADER: 3rd-ROW -->

            <div class="head_bg content">
                <ul class="nav mega justify-content-center clearfix">
                    <?php 
                        /*
                         * require_once (env('VIEWSPATH') ."/layouts/homesection/mega_heder.php"); 
                         * D:\xampp\htdocs\ugn\public\homesection\ugn_dynamic_header.php
                         */
                         require_once (env('VIEWSPATH') ."/layouts/homesection/mega_heder.php"); 
                         //require_once (env('UGNHEADERPATH')); 
                    ?>
                </ul>
            </div>
            <!-- /CONTAINER HEADER: 3rd-ROW -->
            <!-- /CONTAINER 4th HEADER: CENTRAL-ROW -->
            <div class="hedder4_bg">
                <ul class="nav justify-content-center clearfix">
                    <li class="nav-item"> <a href="product_list.php" class="text-danger ">QUICK LINKS <i class="fa fa-angle-double-right"></i></a> </li>
                    <li class="nav-item"> <a href="product_list.php">Mobiles</a> </li>
                    <li class="nav-item"> <a href="#">Laptops</a> </li>
                    <li class="nav-item"> <a href="#">Men's Clothing</a> </li>
                    <li class="nav-item"> <a href="fashion-grid.php">Women's Clothing</a> </li>
                    <li class="nav-item"> <a href="cabs.php">Cabs</a> </li>
                    <li class="nav-item"> <a href="flight.php">Flights</a> </li>
                    <li class="nav-item"> <a href="hotel.php">Hotels</a> </li>
                    <li class="nav-item"> <a href="movies.php">Movies</a> </li>
                    <li class="nav-item"> <a href="ugn-detail.php">PAN Card</a> </li>
                    <li class="nav-item"> <a href="ugn-registration-detail.php">Making A WIll</a> </li>
                    <li class="nav-item"> <a href="#">Careers</a> </li>
                    <li class="nav-item"> <a href="#">US Visa</a> </li>
                </ul>
            </div>
            <!-- /CONTAINER 4th HEADER: CENTRAL-ROW -->

            <div class="dropdown-menu dropdown-mega-content" style="">
                <div class="row" style="padding: 20px; padding-bottom: 0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <h3>Tops</h3>
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Blouses &amp; Shirts</a><span class="badge-color-1">New</span></li>
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Jumpsuits &amp; Rompers</a></li>
                            <li><a href="#">Bra &amp; Brief Sets</a><span class="badge-color-2">Sale</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <h3>Bottoms</h3>
                        <ul>
                            <li><a href="#">Skirts</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Pants &amp; Capris</a><span class="badge-color-1">New</span></li>
                            <li><a href="#">Leggings</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <h3>Outwear &amp; Sweaters</h3>
                        <ul>
                            <li><a href="#">Blazers</a></li>
                            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                            <li><a href="#">Basic Jackets</a></li>
                            <li><a href="#">Trench</a><span class="badge-color-2">Sale</span></li>
                            <li><a href="#">Pullovers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
                        <img src="/images/shop-now-7.jpg" class="img-responsive"> 
                    </div>
                </div>
            </div>



            
            <!--from here logins code-->
            
            @include('layouts.include.logins')
            
            <!--till here logins code-->
            

        </header>

        <div class="">
            @yield('content')
        </div>
        <footer class="foot">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-4 mt-5">
                        <div class="logo text-white mb-4">
                            <h2><b><a href="index.php">ONE STOP SHOP </a></b></h2>
                        </div>
                        <p>Every daily need from morning to night - for young to old is available on OSS through our valued ecosystem of partners and compendium of information.</p>
                        <div>
                            <p><i class="fa fa-map-marker mr-2" aria-hidden="true"></i> Oss Office,5th Floor, DB city, Bhopal, MP 462011 </p>
                            <p><i class="fa fa-phone mr-2" aria-hidden="true"></i> (+91) 12345678 </p>
                            <p><i class="fa fa-envelope mr-2" aria-hidden="true"></i> mail@domain.com </p>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="heading-font mb-3 mt-5"> Quick Links </h5>
                        <p> Upcoming Mobiles </p>
                        <p>Gadget News &amp; Reviews</p>
                        <p>Compare Mobiles</p>
                        <p>UGN</p>
                        <p>Travels</p>
                        <p>Services</p>
                        <p>Place of Interest</p>
                    </div>
                    <div class="col">
                        <h5 class="heading-font mb-3 mt-5"> Group Sites </h5>
                        <p> <a> Bhaskar.Com </a> </p>
                        <p><a>Divyabhaskar.Com</a>
                        </p>
                        <p><a>Dailybhaskar.Com</a>
                        </p>
                        <p><a>Divyamarathi.Com</a>
                        </p>
                        <p><a>Moneybhaskar.Com</a>
                        </p>
                        <p><a>Myfmindia.Com</a>
                        </p>
                        <p><a>Myfmindia.Com</a>
                        </p>
                        <p><a>Dainikbhaskargroup.Com</a>
                        </p>
                    </div>
                    <div class="col">
                        <h5 class="heading-font mb-3 mt-5"> Mobile App </h5>
                        <div> <img src="/images/anroid.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="mt-4"> <img src="/images/ios.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <h5 class="heading-font mb-3 mt-5"> OUR SOCIAL </h5>
                        <div class="row mt-1">
                            <div class="col-md-1"> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </div>
                            <div class="col-md-1"> <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </div>
                            <div class="col-md-1"> <a href="#"> <i class="fa fa-wifi" aria-hidden="true"></i> </a> </div>
                            <div class="col-md-1"> <a href="#"> <i class="fa fa-address-book" aria-hidden="true"></i> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot_bg">
                <ul class="nav justify-content-center clearfix">
                    <li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Blog</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="sitemap.php">Sitemap</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Contact Us</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Terms & Conditions</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Privacy Policy</a> </li>
                </ul>
            </div>
            <div class="container">
                <div class="row py-2">
                    <div class="col">
                        <p class="text-left">� 2016 ossonline.com | All Rights Reserved. </p>
                    </div>
                    <div class="col">
                        <p class="text-right"> Designed by - OSSonline.com </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal location-->
        <div class="modal fade" id="exampleModal" tabindex="-" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <?php require_once (env('VIEWSPATH') ."/layouts/homesection/city_popup.php"); ?>
        </div>

        <!-- Modal location-->	

        <a id="back2Top" title="Back to top" href="#">
            <!--&#10148;-->
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>

        <!-- jQuery CDN -->
        
		
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap-material-design.js"></script>
		
				    
        <script src="/js/line.js"></script> 
        <script src="/js/slick.min.js"></script>
        <!--<script src="js/wNumb.js"></script>
        <script src="js/nouislider.js"></script>
        <script src="js/script.js"></script>-->



        <script src="/js/jquery.nicescroll.min.js"></script>
        <script src="/js/wNumb.js"></script>
        <script src="/js/nouislider.js"></script>

        <script src="/js/script.js"></script>
	
        
        
        <script src="/js/modernizr.js"></script>
        <script src="/js/gijgo.min.js" type="text/javascript"></script>


        <script>
                    /***Date calender***/

                    $('#datepicker').datepicker({
                        showOtherMonths: true
                    });
                    $('#datepicker1').datepicker({
                        showOtherMonths: true
                    });

                    /***back to top***/

                    $(window).scroll(function () {
                        var height = $(window).scrollTop();
                        if (height > 100) {
                            $('#back2Top').fadeIn();
                        } else {
                            $('#back2Top').fadeOut();
                        }
                    });
                    $(document).ready(function () {
                        $("#back2Top").click(function (event) {
                            event.preventDefault();
                            $("html, body").animate({
                                scrollTop: 0
                            }, "slow");
                            return false;
                        });

                    });

        </script>

    </body>
    <!-- Scripts -->
    <!--
        <script src="/js/app.js"></script>
        Disabling laravel app.js script as its interfering in
        accordion display in front end...Rituraj 28 Sept 2018
    
    <script src="/js/app_nikhilesh.js"></script>-->
    <script src="/js/coreAjax.js"></script>
</html>