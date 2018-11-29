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
  <div class="bg-white top_row">
  <div class="container header-central-row">
	 <div class="row header-top-row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 ">
			<button type="button" class="btn btn-secondary placepopup p-1 text-secondry" data-toggle="modal" data-target="#exampleModal">
			 <i class="fa fa-map-marker"></i> <span class="margin-left-5 hidden-xs "> Cities</span>
			</button>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 text-right text-secondry">
        <ul>
          <li> <a href="#" class=""> <span class="margin-left-5 line-height-30"><span class="hidden-xs">About OSS</span></span> </a> </li>
          <li> <a href="#" class=""> <span class="margin-left-5 line-height-30"><span class="hidden-xs">How it Works</span></span> </a> </li>
          <li> <a href="#" class=""> <i class="fa fa-twitter"></i> </a> </li>
          <li> <a href="#" class=""> <i class="fa fa-facebook"></i> </a> </li>
          <li> <a href="#" class=""> <i class="fa fa-instagram"></i> </a> </li>
          <li> <a href="#" class=""> <i class="fa fa-pinterest-p"></i> </a> </li>
        </ul>
      </div>
    </div>
 	 
 </div>
 </div>
 <div class="bg-white" id="myHeader">
 	<div class="container header-central-row">
 		 <div class="row pb-2">
 	 	 <div class="col-3">
 	 	 
 	 	 <div class="logo">
	 	 		<h2><b><a href="index.php">ONE STOP SHOP </a></b></h2>
		 </div>
		 </div>
		 <div class="col-6 p-0">
		 		 
 
    <!--<form class="mb-0">
      <input type="search" class="search-top" placeholder="Search..." />
		<a class="btn btn-secondry btn-search"><i class="fa fa-search" aria-hidden="true"> </i></a>
     
    </form>-->
    
				<div class="container">
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
			  <div class="tab-content">
				<div id="home" class="container tab-pane active"><br>
				  <form class="mb-0">
					  <input type="search" class="search-top" placeholder="Search..." />
						<a class="btn btn-secondry btn-search"><i class="fa fa-search" aria-hidden="true"> </i></a>
					</form>
				</div>
				<div id="menu1" class="container tab-pane fade"><br>
				  <form class="mb-0">
					  <input type="search" class="search-top" placeholder="Search..." />
						<a class="btn btn-secondry btn-search"><i class="fa fa-search" aria-hidden="true"> </i></a>
					</form>
				</div>
				<div id="menu2" class="container tab-pane fade"><br>
				  <form class="mb-0">
					  <input type="search" class="search-top" placeholder="Search..." />
						<a class="btn btn-secondry btn-search"><i class="fa fa-search" aria-hidden="true"> </i></a>
					</form>
				</div>
			  </div>
			</div>
    
    
    
		 </div>
		 <div class="col-3">
		
        <div class="header-top-row">
      
      <div class="text-right">
        <ul>
          <li>
           <a href="deals_offers.php" class=""> <span class="margin-left-5 line-height-30"><span class="hidden-xs">
			   <button type="button" class="btn btn-primary">DEALS & OFFERS<div class="ripple-container"></div></button>
         </span></span> </a> </li>
          <li> 
         	 
            <div class="dropdown pull-xs-right">
				  <button class="btn btn-danger bmd-btn-fab dropdown-toggle notification mb-0" type="button" id="lr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-bell"></i>
				  </button>
				  
				  <div class="dropdown-menu dropdown-menu-right min_w" aria-labelledby="lr1">
					<div class="d-flex justify-content-between pl-2 pr-2">
						<div>Notification</div>
						<div><i class="fa fa fa-align-right" aria-hidden="true"></i></div>
					</div>
					
					<ul class="list-unstyled">
			  <?php
						for($i = 0; $i <= 3; $i++)
						{
							?>
				  <li>
				  <a href="#">
				  <div class="media bg-white box-effect my-1">
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
         	 <a href="#" class=""> 
         	 <span class="margin-left-5 line-height-30">
         	 <span class="hidden-xs btn-group-sm">
          	 <button type="button" class="btn bmd-btn-fab notification btn-raised btn-secondary mb-0" data-toggle="modal" data-target="#loginModal"> <i class="fa fa-user"></i> </button>
          </span>
          </span>
          </a> 
          </li>
        </ul>
      </div>
    </div>
		 </div>
		 
	 </div>
 	</div>
 </div>
 
 <!-- /CONTAINER HEADER: 2nd-ROW -->
 <!-- /CONTAINER HEADER: 3rd-ROW -->
 		
 		<div class="head_bg">
  		  <ul class="nav mega justify-content-center clearfix">
   					<?php include "homesection/mega_heder.php";?>
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
 
 
  <!--<div id="page-nav-left" role="navigation" class="navbar navbar-expand-sm line-navbar-two">
    <div class="collapse navbar-collapse" id="line-navbar-collapse-2">
      <ul class="nav navbar-nav lnt-nav-mega">
        <li class="menubar1 dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </a>
          <div class="dropdown-menu" role="menu">
            <div class="lnt-dropdown-mega-menu">
              <ul class="lnt-category list-unstyled">
                <li class="active"><a href="#subcategory-home">Home, garden and tools</a></li>
                <li><a href="#subcategory-sports">Sports and outdoors</a></li>
                <li><a href="#subcategory-music">Digital music</a></li>
                <li><a href="#subcategory-books">Books <span class="label label-danger">Hot</span></a></li>
                <li><a href="#subcategory-fashion">Fashion and beauty</a></li>
                <li><a href="#subcategory-movies">Movies and games</a></li>
              </ul>
              
              <div class="lnt-subcategroy-carousel-wrap container-fluid">
                <div id="subcategory-home" class="active"> 
                
                  <div class="lnt-subcategory">
                    <h3 class="lnt-category-name">Home, garden and tools</h3>
                    <div class="row">
                      <ul class="list-unstyled col">
                        <li><a href="http://google.com">Home</a></li>
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Furniture</a></li>
                        <li><a href="#">Wedding</a></li>
                        <li><a href="#">Hardware</a></li>
                        <li><a href="#">Pets</a></li>
                        <li><a href="#">Bed and bath</a> <span class="label label-info">Popular</span></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">Fixtures</a></li>
                        <li><a href="#">Home robots</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">Power tools</a></li>
                        <li><a href="#">Lamps</a></li>
                        <li><a href="#">Redesign</a></li>
                        <li><a href="#">Garden</a></li>
                        <li><a href="#">Decor</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">Wedding</a></li>
                        <li><a href="#">Hardware</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">Lamps</a></li>
                        <li><a href="#">Garden</a></li>
                        <li><a href="#">Redesign</a></li>
                        <li><a href="#">Power tools</a></li>
                        <li><a href="#">Pets</a></li>
                      </ul>
                    </div>
                  </div>
                  
                 
                  
                </div>
                
                <div id="subcategory-sports"> 
                  
                  <div class="lnt-subcategory">
                    <h3 class="lnt-category-name">Sports and outdoors</h3>
                    <div class="row">
                      <ul class="list-unstyled col">
                        <li><a href="#">Exercise</a></li>
                        <li><a href="#">Fitness</a></li>
                        <li><a href="#">Hunting</a></li>
                        <li><a href="#">Fishing</a> <span class="label label-primary">Trending</span></li>
                        <li><a href="#">Boating</a></li>
                        <li><a href="#">Water sports</a></li>
                        <li><a href="#">Hardware</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">Golf</a></li>
                        <li><a href="#">Outdoor clothing</a></li>
                        <li><a href="#">Cycling</a></li>
                        <li><a href="#">Action sports</a></li>
                        <li><a href="#">Game room</a> <span class="label label-danger">Hot</span></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">option</a></li>
                        <li><a href="#">option1</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">option2</a></li>
                        <li><a href="#">option3</a></li>
                        <li><a href="#">option4</a></li>
                        <li><a href="#">option5</a></li>
                        <li><a href="#">option6</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="subcategory-music"> 
                  <div class="lnt-subcategory">
                    <h3 class="lnt-category-name">Digital music</h3>
                    <div class="row">
                      <ul class="list-unstyled col">
                        <li><a href="#">Online</a></li>
                        <li><a href="#">Best</a></li>
                        <li><a href="#">New releases</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">Top selling</a></li>
                        <li><a href="#">Top grossing</a> <span class="label label-info">Popular</span></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">Pop</a></li>
                        <li><a href="#">Jazz</a> <span class="label label-danger">Hot</span></li>
                        <li><a href="#">Country</a></li>
                        <li><a href="#">Classic</a></li>
                        <li><a href="#">Rock</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">option</a></li>
                        <li><a href="#">option1</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">option2</a></li>
                        <li><a href="#">option3</a></li>
                        <li><a href="#">option4</a></li>
                        <li><a href="#">option5</a></li>
                        <li><a href="#">option6</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="subcategory-books">
                  <div class="lnt-subcategory">
                    <h3 class="lnt-category-name">Books</h3>
                    <div class="row">
                      <ul class="list-unstyled col">
                        <li><a href="#">Books</a> <span class="label label-primary">Trending</span></li>
                        <li><a href="#">Magazines</a></li>
                        <li><a href="#">Children</a></li>
                        <li><a href="#">Textbooks</a></li>
                        <li><a href="#">Kindle</a></li>
                        <li><a href="#">Audible</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">Web development</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Novel</a></li>
                        <li><a href="#">Short story</a></li>
                        <li><a href="#">Action</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">option</a></li>
                        <li><a href="#">option1</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">option2</a></li>
                        <li><a href="#">option3</a></li>
                        <li><a href="#">option4</a></li>
                        <li><a href="#">option5</a></li>
                        <li><a href="#">option6</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="subcategory-fashion"> 
                  <div class="lnt-subcategory">
                    <h3 class="lnt-category-name">Fashion and beauty</h3>
                    <div class="row">
                      <ul class="list-unstyled col">
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Girls</a></li>
                        <li><a href="#">Boys</a></li>
                        <li><a href="#">Baby</a></li>
                        <li><a href="#">Top selling</a> <span class="label label-info">Popular</span></li>
                        <li><a href="#">Cheap</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">All beauty</a></li>
                        <li><a href="#">Diets</a></li>
                        <li><a href="#">Baby care</a> <span class="label label-primary">Trending</span></li>
                        <li><a href="#">Men's grooming</a></li>
                        <li><a href="#">Health</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">option</a></li>
                        <li><a href="#">option1</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">option2</a></li>
                        <li><a href="#">option3</a></li>
                        <li><a href="#">option4</a></li>
                        <li><a href="#">option5</a></li>
                        <li><a href="#">option6</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="subcategory-movies"> 
                  <div class="lnt-subcategory">
                    <h3 class="lnt-category-name">Movies and games</h3>
                    <div class="row">
                      <ul class="list-unstyled col">
                        <li><a href="#">Movies and TV</a></li>
                        <li><a href="#">Blu-ray</a></li>
                        <li><a href="#">Div-ix</a> <span class="label label-info">Popular</span></li>
                        <li><a href="#">Instant movies</a></li>
                        <li><a href="#">Free movies</a></li>
                        <li><a href="#">Digital instruments</a></li>
                      </ul>
                      <ul class="list-unstyled col">
                        <li><a href="#">Online games</a></li>
                        <li><a href="#">Trending</a> <span class="label label-danger">hot</span></li>
                        <li><a href="#">Popular</a></li>
                        <li><a href="#">Grossing</a></li>
                        <li><a href="#">Game room</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      
    </div>
   
  </div>-->
  
  
<?php include "logins.php";?>

</header>

<div class="">

