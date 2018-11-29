<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="images/favicon.png">
        <title>Oss-Desktop</title>
        <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/megamenu.css" rel="stylesheet">
        <link href="css/product.css" rel="stylesheet">
        <link href="css/service.css" rel="stylesheet">
        <link href="css/circle.css" rel="stylesheet">
        <link href="css/nouislider.min.css" rel="stylesheet">
        <link href="css/range-slider.css" rel="stylesheet">
        <link href="css/gijgo.min.css" rel="stylesheet"/>
        <link href="css/theme.css" rel="stylesheet">

    </head>
    <body>

        <header>

            <!-- /CONTAINER HEADER: 2nd-ROW -->
            <div class="bg-white top_row" id="myHeader">
                <div class="container header-central-row py-2">
                    <div class="row header-top-row">
                        <div class="col-sm-3 pr-0">
                            <button type="button" class="btn btn-secondary placepopup p-1 text-secondry" data-toggle="modal" data-target="#exampleModal">
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
                                        <a class="nav-link active" data-toggle="tab" href="#home">Shopping</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu1">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu2">Important Info</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content search_lh" >
                                    <div id="home" class="container tab-pane active p-0"><br>
                                        <div class="search_h_b">
                                            <div class="row">
                                                <div class="col-3 pr-0">
                                                    <div class="dropdown drop_text">
                                                        <button class="btn btn-secondary dropdown-toggle text-capitalize border-right font-weight-normal" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Men's Fashion
                                                        </button>
                                                        <div class="dropdown-menu font-default dropdown-menu-nav" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Mobile</a>
                                                            <a class="dropdown-item" href="#">Tablets</a>
                                                            <a class="dropdown-item" href="#">Laptops</a>
                                                            <a class="dropdown-item" href="#">TVs</a>
                                                            <a class="dropdown-item" href="#">Home Appliances</a>
                                                            <a class="dropdown-item" href="#">Cameras</a>
                                                            <a class="dropdown-item" href="#">Men's Fashion</a>
                                                            <a class="dropdown-item" href="#">Women's Fashion</a>
                                                            <a class="dropdown-item" href="#">Personal Care Products</a>
                                                            <a class="dropdown-item" href="#">Health Care Products</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 pl-0">
                                                    <form class="mb-0"> 	
                                                        <input type="search" class="search-top" placeholder="Search..." />
                                                        <a class="btn btn-secondry btn-search"><i class="fa fa-search" aria-hidden="true"> </i></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="container tab-pane fade p-0"><br>
                                        <div class="search_h_b">
                                            <div class="row">
                                                <div class="col-3 pr-0">
                                                    <div class="dropdown drop_text">
                                                        <button class="btn btn-secondary dropdown-toggle text-capitalize border-right font-weight-normal" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Flights Booking
                                                        </button>
                                                        <div class="dropdown-menu font-default dropdown-menu-nav" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Cabs Booking</a>
                                                            <a class="dropdown-item" href="#">Flights Booking</a>
                                                            <a class="dropdown-item" href="#">Buses Booking</a>
                                                            <a class="dropdown-item" href="#">Trains Booking</a>
                                                            <a class="dropdown-item" href="#">Hotels Booking</a>
                                                            <a class="dropdown-item" href="#">Holidays Booking</a>
                                                            <a class="dropdown-item" href="#">Movies Booking</a>
                                                            <a class="dropdown-item" href="#">Food Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 pl-0">
                                                    <form class="mb-0 position-relative"> 	
                                                        <input type="search" class="search-top" placeholder="Search..." />
                                                        <a class="btn btn-secondry btn-search"><i class="fa fa-search" aria-hidden="true"> </i></a>
                                                        <div class="drag-form card text-left">
                                                            <?php include "homesection/form_search.php"; ?>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu2" class="container tab-pane fade p-0"><br>
                                        <div class="search_h_b">
                                            <div class="row">
                                                <div class="col-3 pr-0">
                                                    <div class="dropdown drop_text">
                                                        <button class="btn btn-secondary dropdown-toggle text-capitalize border-right font-weight-normal" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Money & Tax
                                                        </button>
                                                        <div class="dropdown-menu font-default dropdown-menu-nav" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Identity Cards</a>
                                                            <a class="dropdown-item" href="#">Utility Connections</a>
                                                            <a class="dropdown-item" href="#">Certificates</a>
                                                            <a class="dropdown-item" href="#">Registrations & Agreements</a>
                                                            <a class="dropdown-item" href="#">Money & Tax</a>
                                                            <a class="dropdown-item" href="#">Education Options</a>
                                                            <a class="dropdown-item" href="#">Law Enforcement & Public Safety</a>
                                                            <a class="dropdown-item" href="#">Exams and Careers</a>
                                                            <a class="dropdown-item" href="#">Financial Aid & Support</a>
                                                            <a class="dropdown-item" href="#">Pilgrimage Help</a>
                                                            <a class="dropdown-item" href="#">Public Grievances</a>
                                                            <a class="dropdown-item" href="#">Healthcare</a>
                                                            <a class="dropdown-item" href="#">Immigration & Visas</a>
                                                            <a class="dropdown-item" href="#">Govt Assistance & Support</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 pl-0">
                                                    <form class="mb-0"> 	
                                                        <input type="search" class="search-top" placeholder="Search..." />
                                                        <a class="btn btn-secondry btn-search"><i class="fa fa-search" aria-hidden="true"> </i></a>
                                                    </form>
                                                </div>
                                            </div>
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
                                                <a href="#" class="d-inline-block" id="lr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bell.gif" width="40" height="40" alt=""/></a>

                                                <!--<button class="btn bmd-btn-fab dropdown-toggle notification mb-0 btn-light" style="background: #fcfbf9;" type="button" id="lr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <img src="images/bell.gif" width="26" height="26" alt=""/>
                                                </button>-->

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
                                                                        <img class="d_alerts_img mr-1" src="images/mens-t-shirt.jpg" alt="Generic placeholder image">
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
                                                        <a href="alerts.php" class="btn btn-primary btn-sm pl-3 pr-3 mb-0">VIEW ALL<div class="ripple-container"></div></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                        <li>
                                              <!-- <a href="#" class="d-inline-block" data-toggle="modal" data-target="#loginModal"><img src="images/boy.png" width="34" height="34" alt=""/></a>-->


                                            <a class="d-inline-block nav-link user-menu" href="#" id="user-accounts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/boy.png" width="34" height="34" alt=""/>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right user-menu-dropdown min_w" aria-labelledby="user-accounts">
                                                <a class="dropdown-item" href="#">My Profile</a>
                                                <a class="dropdown-item" href="#">Orders</a>
                                                <a class="dropdown-item" href="#">Wishlist</a>
                                                <a class="dropdown-item" href="#">Alerts & Notifications</a>
                                                <a class="dropdown-item" href="#">Logout</a>
                                            </div>
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
                    <?php include "homesection/mega_heder.php"; ?>
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
                        <img src="images/shop-now-7.jpg" class="img-responsive"> 
                    </div>
                </div>
            </div>



            <?php include "logins.php"; ?>

        </header>

        <div class="">

