<?php include "include/header.php";?>

<section class="position-relative service-section" style="min-height: 380px;">

	<div class="service-container text-white">
  
	  <div class="text-center pt-4">	
		<h1 class="font-raleway">Stay With Us</h1>
		<p class="p-3 mb-0">All Travel Plans At OSS Place</p>
	  </div>	
		
	  <div class="service-nav pt-2">
	  	<ul>
	  		<li class="text-center"><a  href="flight.php">
				<img src="images/home_icon/s1.png" class="img-fluid" alt="Responsive image"><br>
				Flights</a></li>
				<li class="text-center"><a href="hotel.php" ><img src="images/home_icon/s2.png" class="img-fluid" alt="Responsive image"><br>
				Hotels</a></li>
				<li class="text-center"><a href="train.php" ><img src="images/home_icon/s4.png" class="img-fluid" alt="Responsive image"><br> 
				Trains </a></li>
				<li class="text-center"><a href="bus.php" ><img src="images/home_icon/s3.png" class="img-fluid" alt="Responsive image"><br> 
				Bus</a></li> 
				<li class="text-center"><a href="cabs.php" ><img src="images/home_icon/s5.png" class="img-fluid" alt="Responsive image"><br> 
				Cabs </a></li>
				<li class="text-center"><a href="movies.php"><img src="images/home_icon/s7.png" class="img-fluid" alt="Responsive image"><br> 
				Movie</a></li>
				<li class="text-center"><a href="recharge.php" ><img src="images/home_icon/s8.png" class="img-fluid" alt="Responsive image"><br> 
				Recharge</a></li>
				<li class="text-center"><a href="food.php"><img src="images/home_icon/s6.png" class="img-fluid" alt="Responsive image"><br> 
				Food</a></li>
				<li class="text-center"><a href="holiday.php" class="active"><img src="images/home_icon/s9.png" class="img-fluid" alt="Responsive image"><br> 
				Holidays Package</a></li>
	  	</ul>
	  </div>
	  
	  <div class="service-form pt-4 pl-4 pr-4 pb-2">
	  	<form class="">
	  	
	  	<div class="form-row align-items-end">
					<div class="col-4">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">From</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>

					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">From Date</label>
							<input id="datepicker" class="form-control">
						</div>
					</div>

					<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
					<div class="col">
					  <div class="bmd-form-group is-filled">
						<select class="form-control mb-2 mr-sm-2 mb-sm-0" id="">
					  	  <option>Type</option>
						  <option>Adventure</option>
						  <option>Safaris</option>
						  <option>couple</option>
						  <option>Family</option>
						  <option>Camping</option>
						</select>
						<i class="fa fa-sort-down select"></i>
						</div>
					</div>
					<div class="col">
					  <div class="bmd-form-group is-filled">
					  <select class="form-control mb-2 mr-sm-2 mb-sm-0" id="">
						  <option>Budget</option>
						  <option>₹ 10000 - ₹ 19999</option>
						  <option>₹ 20000 - ₹ 29999</option>
						  <option>₹ 30000 and Above </option>
						</select>
						<i class="fa fa-sort-down select"></i>
						</div>
					</div>
					<div class="col">
					  <div class="bmd-form-group is-filled">
					  <select class="form-control mb-2 mr-sm-2 mb-sm-0" id="">
						  <option>Duration</option>
						  <option>3D - 2N</option>
						  <option>4D - 3N</option>
						  <option>5D - 4N</option>
						</select>
						<i class="fa fa-sort-down select"></i>
						</div>
					</div>
				
				
					<div class="col-1">
							<a href="holiday-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a>
					</div>
				</div>
				
	  	 
		</form>
	  </div>
	
	</div>


	<div class="bg-services">
		 <div class="bg-services-image" style="background-image:url(images/holiday-banner1.jpg); min-height: 380px; max-height: 380px; background-size: cover;"></div>
	</div>

</section>


<section>
	<div class="container">
	<h4 class="text-center p-4">Best Deals & Offers</h4>
		<div class="row pb-5">
			<div class="col-4"><img src="images/holy1.jpg" class="img-thumbnail box-effect" alt=""/></div>
			<div class="col-4"><img src="images/holy2.jpg" class="img-thumbnail box-effect" alt=""/></div>
			<div class="col-4"><img src="images/holy3.jpg" class="img-thumbnail box-effect" alt=""/></div>
		</div>
	</div>
</section>

<section class="bg-white p-4 service-slider">
	<div class="container">
		<div class="pb-3">
		<h4 class="text-center p-4">Tranding Holiday Packages In India</h4>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner pb-4">
				<div class="carousel-item active">
					<div class="row p-1">
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">holiday packages in goa </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">couple packages for goa </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">europe holiday packages</span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">holiday planing with family </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row p-1">
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">holiday packages in goa </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">couple packages for goa </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">europe holiday packages</span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">holiday planing with family </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row p-1">
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">holiday packages in goa </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">couple packages for goa </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">europe holiday packages</span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/holy-a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">holiday planing with family </span>
								<small class="text-warning">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</small>
							  </div>
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
</section>

<section>
	<div class="text-center"><img src="images/holiday_banner.jpg" class="img-fluid" alt=""/></div>
</section>

<section class="bg-white p-4">
	<div class="container">
	<h4 class="text-center p-4">Why OSS ?</h4>
		<div class="row pb-5">
			<div class="col-4">
				<div class="card box-effect">
				  <div class="text-center p-4"><img class="" src="images/t1.png"></div>
				  <div class="text-center">
					<h5>Process to Follows</h5>
					<p>Lorem ipsum dolor sit amet. </p>
				  </div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card box-effect">
				  <div class="text-center p-4"><img class="" src="images/t2.png"></div>
				  <div class="text-center">
					<h5>Check in / Check out Tips</h5>
					<p>Lorem ipsum dolor sit amet. </p>
				  </div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card box-effect">
				  <div class="text-center p-4"><img class="" src="images/t4.png"></div>
				  <div class="text-center">
					<h5>Holiday boarding FAQ</h5>
					<p>Lorem ipsum dolor sit amet</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "include/footer.php";?>