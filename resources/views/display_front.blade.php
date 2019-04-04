@extends('layouts.front')

@section('content')
<!--main container-->

<!--(Banner starts from hear)-->
<script src="/jscal/datepicker/datepicker.js"></script>
<script src="/jscal/datepicker/core.js"></script>
<script src="/jscal/datepicker/md5.js"></script>

<link rel="stylesheet" type="text/css" href="/jscal/datepicker/datepicker.css"/>
<section>
<div id="carouselExampleControls" class="carousel slide mt-6" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item"> <img class="first-slide img-fluid w-100" src="images/banner-4.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <!--     <h1>Example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>  -->

        </div>
      </div>
    </div>
    <div class="carousel-item active"> <img class="second-slide img-fluid w-100" src="images/banner-1.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <!--<h1>EVERYTHING YOU NEED - AT ONE PLACE!!</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
        </div>
      </div>
    </div>
    <div class="carousel-item"> <img class="third-slide img-fluid w-100" src="images/banner-2.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <!--  <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->

        </div>
      </div>
    </div>
    <div class="carousel-item"> <img class="third-slide img-fluid w-100" src="images/banner-3.jpg" alt="fourth slide">
      <div class="container">
        <div class="carousel-caption">
          <!--    <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->

        </div>
      </div>
    </div>
    <a class="carousel-control-prev position-absolute" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next position-absolute" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
</section>

<!--(Banner end  hear)--> 

<main role="main">
  <section>
  <?php include "homesection/compare.php";?>
  </section>
  <!--Find Best Deals & Book starts from hear-->
  <section>
  
  <?php// include "homesection/service.php";?>
  <?php //include "homesection/ugn.php";?>
  <?php
  // include('homesection/ugn_dynamic_category.php');
   ?>
    @include('layouts.homesection.service')
    @include('layouts.homesection.ugn_dynamic_category')
 

    <div class="row">
      <div class="col-md-12 mt-5 oneadd_slider">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner pb-4">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b1.jpg" alt="Card image cap">
                
              </div>
            </div>
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b2.jpg" alt="Card image cap">
                
              </div>
            </div>
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b3.jpg" alt="Card image cap">
                
              </div>
            </div>
            
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b1.jpg" alt="Card image cap">
                
              </div>
            </div>
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b2.jpg" alt="Card image cap">
                
              </div>
            </div>
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b3.jpg" alt="Card image cap">
                
              </div>
            </div>
            
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b1.jpg" alt="Card image cap">
                
              </div>
            </div>
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b2.jpg" alt="Card image cap">
                
              </div>
            </div>
            <div class="col-4">
              <div class="card box-effect">
                <img class="img-fluid p-img img-thumbnail" src="images/b3.jpg" alt="Card image cap">
                
              </div>
            </div>
            
          </div>
        </div>
        </div>
        <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="fa fa-angle-left text-dark" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class="fa fa-angle-right text-dark" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
        </a>
      </div>
      </div>

    </div>
    <!--Most Popular Mobiles section-->
    <div class="row">
      <div class="col-12 col-md-12">
        <h4 class="heading-font mb-3 mt-4">Most Popular Mobiles</h4>
        <div class="regular slider">
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m1.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content pl-2 pr-2">
                  <h3 class="title text-truncate">Cillcips Air Purifier A215 Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h" data-toggle="tooltip" data-placement="top" title="Compare"></a>
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m2.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>
                  </li>
                  <li><a href="product-detail.php#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m3.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>   
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m4.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add2 ml-3"><span>New</span>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->

                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m5.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m6.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add2 ml-3"><span>New</span>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m7.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m8.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span></div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/mobile/m9.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social">
                  <!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
                  </li>-->
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="compare.php" class="fa fa-arrows-h"></a>
                  </li>
                  <li><a href="product-detail.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>

    <!--Most Popular Mobiles section-->
    <!--Top Trending On OSS start hear-->
    <div class="row">
      <div class="col-12 col-md-12">
        <h4 class="heading-font mb-3 mt-5">Top Trending On OSS</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="oneadd-slider">
              <div id="information" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner pb-4">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c1.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h5 class="mb-2">Best Flights fares on OSS</h5>
                            <p class="card-text text-secondary">Compare and get cheapest fares from 50+ sites</p>
                            <div class="b_height2">
                            <div class="text-center  mb-2">
                              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-light mt-1 box-shadow">
                               
                                <div class="bfn"> ₹4,200 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/esy.png" alt="First slide"> </div>
                                </label>
                              
                                <label class="btn btn-light active mt-1 box-shadow">
                                <div class="bfn"> ₹3,800 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/cleartrip.png" alt="First slide"> </div>
                                </label>
                              
                                <label class="btn btn-light mt-1 box-shadow">
                                <div class="bfn"> ₹3,900 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/sas.png" alt="First slide"> </div>
                                </label>
                              
                              </div>
                              
                            </div>
                            </div>
                            <div class="text-center"> <a href="flight-search-result.php" class="btn btn-secondry btn-block">Compare all fare on oss</a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c2.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h5 class="mb-2">Aadhar Linking To PAN Mandatory </h5>
                            <p class="card-text text-secondary">DBPost.com | 3 hours ago</p>
                            <div class="b_height2">
                            <p>Individuals having permanent account number (PAN) will have to link it to their existing Aadhaar number from 1 July, a finance ministry (View More)</p>
                            </div>
                            <div class="text-center"> <a href="ugn-index.php" class="btn btn-secondry btn-block">Know In Detail Steps</a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c3.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h5 class="mb-2">Top Fashion Tips</h4>
                            <p class="card-text text-secondary">Most Popular Women’s Clothing Styles in 2017</p>
                            <div class="b_height2">
                            <p>The Love Boat soon will making another the Love Boat promises something will making another the Love Boat something...</p>
                            </div>
                            <div class="text-center"> <a href="fashion-grid.php" class="btn btn-secondry btn-block">Explore More Trending Styles</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c1.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h4 class="card-title">Best Flights fares on OSS</h4>
                            <p class="card-text">Compare and get cheapest fares from 50+ sites</p>
                            <div class="b_height2">
                            <div class="text-center  mb-2">
                              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-light mt-1 box-shadow">
                               
                                <div class="bfn"> ₹4,200 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/esy.png" alt="First slide"> </div>
                                </label>
                              
                                <label class="btn btn-light active mt-1 box-shadow">
                                <div class="bfn"> ₹3,800 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/cleartrip.png" alt="First slide"> </div>
                                </label>
                              
                                <label class="btn btn-light mt-1 box-shadow">
                                <div class="bfn"> ₹3,900 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/sas.png" alt="First slide"> </div>
                                </label>
                              
                              </div>
                              
                            </div>
                            </div>
                            <div class="text-center"> <a href="#" class="btn btn-secondry btn-block">Compare all fare on oss</a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c2.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h4 class="card-title">Aadhar Linking To PAN Mandatory </h4>
                            <p class="card-text">DBPost.com | 3 hours ago</p>
                            <div class="b_height2">
                            <p>Individuals having permanent account number (PAN) will have to link it to their existing Aadhaar number from 1 July, a finance ministry (View More)</p>
                            </div>
                            <div class="text-center"> <a href="#" class="btn btn-secondry btn-block">Know In Detail Steps</a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c3.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h4 class="card-title">Top Fashion Tips</h4>
                            <p class="card-text">Most Popular Women’s Clothing Styles in 2017</p>
                            <div class="b_height2">
                            <p>The Love Boat soon will making another the Love Boat promises something will making another the Love Boat something...</p>
                            </div>
                            <div class="text-center"> <a href="#" class="btn btn-secondry btn-block">Explore More Trending Styles</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c1.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h4 class="card-title">Best Flights fares on OSS</h4>
                            <p class="card-text">Compare and get cheapest fares from 50+ sites</p>
                            <div class="b_height2">
                            <div class="text-center  mb-2">
                              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-light mt-1 box-shadow">
                               
                                <div class="bfn"> ₹4,200 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/esy.png" alt="First slide"> </div>
                                </label>
                              
                                <label class="btn btn-light active mt-1 box-shadow">
                                <div class="bfn"> ₹3,800 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/cleartrip.png" alt="First slide"> </div>
                                </label>
                              
                                <label class="btn btn-light mt-1 box-shadow">
                                <div class="bfn"> ₹3,900 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/sas.png" alt="First slide"> </div>
                                </label>
                              
                              </div>
                              
                            </div>
                            </div>
                            <div class="text-center"> <a href="#" class="btn btn-secondry btn-block">Compare all fare on oss</a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c2.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h4 class="card-title">Aadhar Linking To PAN Mandatory </h4>
                            <p class="card-text">DBPost.com | 3 hours ago</p>
                            <div class="b_height2">
                            <p>Individuals having permanent account number (PAN) will have to link it to their existing Aadhaar number from 1 July, a finance ministry (View More)</p>
                            </div>
                            <div class="text-center"> <a href="#" class="btn btn-secondry btn-block">Know In Detail Steps</a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="card up-effect"> <img class="card-img-top" src="images/c3.jpg" alt="Card image cap">
                          <div class="card-body allbody_height">
                            <h4 class="card-title">Top Fashion Tips</h4>
                            <p class="card-text">Most Popular Women’s Clothing Styles in 2017</p>
                            <div class="b_height2">
                            <p>The Love Boat soon will making another the Love Boat promises something will making another the Love Boat something...</p>
                            </div>
                            <div class="text-center"> <a href="#" class="btn btn-secondry btn-block">Explore More Trending Styles</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#information" role="button" data-slide="prev"> <i class="fa fa-angle-left text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#information" role="button" data-slide="next"> <i class="fa fa-angle-right text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Top Trending On OSS end hear-->
    
  </div>
  
  </section>
  <!--add section start hear-->
      <div class="row">
        <div class="adds_test w-100 mt-4">
        <img class="second-slide img-fluid w-100" src="images/banner-strip.jpg" alt="Second slide">
          
        </div>
      </div>
  <!--add section start hear-->
  
  <sectoin>
    <div class="container">
      <div class="row">
      <div class="col-12 col-md-12">
        <h4 class="heading-font mb-3 mt-5">Latest In Fashion</h4>
        <div class="regular slider">
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f1.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f5.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f2.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f6.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add2 ml-3"><span>New</span>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f3.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f7.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add2 ml-3"><span>New</span>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f8.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f6.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span></div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/f9.jpg" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social1">
                  <li><a class="fa fa-heart-o custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ></a>
                  </li>
                  <li><a href="fashion-grid.php" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mt-5">
        <div class="pro-off-slider">
          <div id="relax" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner pb-4">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/p1.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/p2.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/p3.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/p4.jpg" alt="Card image cap"> </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p5.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p6.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p7.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p8.jpg" alt="Card image cap"> </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p5.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p6.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p7.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-3 pl-1 pr-1">
                    <div class="card up-effect"> <img class="card-img-top" src="images/p8.jpg" alt="Card image cap"> </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12">
        <h4 class="heading-font mb-3 mt-4">New Arrivals in Electronics</h4>
        <div class="regular slider">
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e1.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e2.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e3.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add2 ml-3"><span>New</span>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e4.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e5.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add2 ml-3"><span>New</span>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e7.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e8.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add ml-3"><span>50% off</span></div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-item">
              <div class="our-team">
                <div class="pic"> <img src="images/electric/e9.png" class="img-fluid" alt="Responsive image"> </div>
                <div class="team-content">
                  <h3 class="title">Cillcips Air Purifier A215</h3>
                  <span class="post">₹124.00</span>
                  <div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
                </div>
                <div class="labul_add1 ml-3"><span>Sale</span>
                </div>
                <ul class="social1">
                  <li><a href="#" class="fa fa-heart-o"></a>
                  </li>
                  <li><a href="#" class="fa fa-eye"></a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-5 mt-5">
        <h4 class="heading-font mb-4">Top Deals</h4>
        <div class="row">
          <div class="col-md-12 pictop"> <a href="#"><img src="images/td1.png" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
        </div>
      </div>
      <div class="col-7 mt-5 deal_tabs">
        <ul class="nav nav-pills justify-content-end mb-2 mr-right" id="pills-tab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all1" role="tab" aria-controls="pills-all" aria-selected="true">All</a> </li>
          <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-electronics1" role="tab" aria-controls="pills-profile" aria-selected="false">Electronics</a> </li>
          <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-fashion1" role="tab" aria-controls="pills-contact" aria-selected="false">Fashion</a> </li>
          <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-beauty1" role="tab" aria-controls="pills-contact" aria-selected="false">Beauty &amp; Wellness</a> </li>
          <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-travel1" role="tab" aria-controls="pills-contact" aria-selected="false">Travel</a> </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-all1" role="tabpanel" aria-labelledby="pills-home-all1">
            <div class="fivetabs">
              <div id="topbrands1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item ">
                        <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                      <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>

                  </div>
                </div>
                <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands1" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
                <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands1" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
                </div>
            </div>

          </div>
          <div class="tab-pane fade" id="pills-electronics1" role="tabpanel" aria-labelledby="pills-electronics1-tab">
            <div class="fivetabs">
              <div id="topbrands2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item ">
                        <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                      <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>

                  </div>
                </div>
                <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands2" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
                <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands2" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-fashion1" role="tabpanel" aria-labelledby="pills-fashion1-tab">
            <div class="fivetabs">
              <div id="topbrands3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item ">
                        <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                      <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>

                  </div>
                </div>
                
              <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands3" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
              
                <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands3" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
              
              
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-beauty1" role="tabpanel" aria-labelledby="pills-beauty1-tab">
            <div class="fivetabs">
              <div id="topbrands4" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item ">
                        <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                      <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>

                  </div>
                </div>
                <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands4" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
                <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands4" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
                 </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-travel1" role="tabpanel" aria-labelledby="pills-travel1-tab">
            <div class="fivetabs">
              <div id="topbrands5" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item ">
                        <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                      <div class="row text-center">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>
                    <div class="row text-center mt-4">
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                      <div class="col-md-3">
                        <div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
                      </div>
                    </div>

                  </div>
                </div>
                <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands5" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
                <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands5" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    </div>
  </sectoin>
  <!--add section start hear-->
      <div class="row mt-5">
        <div class="adds_test w-100">
          <!--<img class="second-slide img-fluid w-100" src="images/banner-5.jpg" alt="Second slide"> -->
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sabkuch -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9843003136613152"
     data-ad-slot="6766711145"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>
      </div>
  <!--add section start hear-->
  
  <section>
    <div class="container">
      <div class="row">
      <div class="col-md-12">
      <h4 class="heading-font mb-3 mt-5">Latest Govt Procedure news</h4>
        <div class="oneadd-slider">
          <div id="relax1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner pb-4">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b6.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b7.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b8.jpg" alt="Card image cap"> </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b6.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b7.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b8.jpg" alt="Card image cap"> </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b6.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b7.jpg" alt="Card image cap"> </div>
                  </div>
                  <div class="col-4">
                    <div class="card up-effect"> <img class="img-fluid p-img img-thumbnail" src="images/b8.jpg" alt="Card image cap"> </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax1" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax1" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
        </div>
      </div>
    </div>
    </div>
  </section>

</main>



<?php include "homesection/all_popups.php";?>



 
<?php //include "include/footer.php";?>
@endsection