<?php include "include/header.php";?>

<section class="position-relative service-section" style="min-height: 380px;">

	<div class="service-container text-white">
  
	  <div class="text-center pt-4">	
		<h1 class="font-raleway">Travel With OSS</h1>
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
				<li class="text-center"><a href="cabs.php" class="active"><img src="images/home_icon/s5.png" class="img-fluid" alt="Responsive image"><br> 
				Cabs </a></li>
				<li class="text-center"><a href="movies.php"><img src="images/home_icon/s7.png" class="img-fluid" alt="Responsive image"><br> 
				Movie</a></li>
				<li class="text-center"><a href="recharge.php" ><img src="images/home_icon/s8.png" class="img-fluid" alt="Responsive image"><br> 
				Recharge</a></li>
				<li class="text-center"><a href="food.php"><img src="images/home_icon/s6.png" class="img-fluid" alt="Responsive image"><br> 
				Food</a></li>
				<li class="text-center"><a href="holiday.php"><img src="images/home_icon/s9.png" class="img-fluid" alt="Responsive image"><br> 
				Holidays Package</a></li>
	  	</ul>
	  </div>
	  
	  <div class="service-form pl-4 pr-4 pb-3">
	  	<form class="mb-0">
	  	 <div class="d-flex">
			 <div class="radio mr-5">
			  <label>
			  	<input type="radio" name="food" id="optionsRadios1" value="option1" checked> City Taxi
			  </label>
			</div>
			<div class="radio mr-5">
			  <label>
				<input type="radio" name="food" id="optionsRadios1" value="option1"> Outstation
			  </label>
			</div>
			<div class="radio mr-5">
			  <label>
				<input type="radio" name="food" id="optionsRadios1" value="option1"> Rentals  
			  </label>
			</div>
		 </div>
	  	 <div class="form-row align-items-end">
	  	 			<div class="col-4">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">* Enter pickup location</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-primary bmd-btn-icon ml-2 mr-2">
					  <i class="fa fa-random replace" aria-hidden="true"></i>
					</button>
					<div class="col-4">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Enter drop location for ride estimate</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					
					<div class="col">
					<div class="form-group mb-0 pt-0">
							<select class="form-control" id="exampleSelect1">
							  <option>Now</option>
							  <option>Schedule for later</option>
							</select>
							<i class="fa fa-sort-down select"></i>
						  </div>
					</div>
					
		  
		  
		  <div class="col-1"><a href="cabs-search.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a></div>
		  </div>
		</form>
	  </div>
	
	</div>


	<div class="bg-services">
		 <div class="bg-services-image" style="background-image:url(images/cab-service.jpg);  min-height: 380px; max-height: 380px;background-size: cover;"></div>
	</div>

</section>


<section>
	<div class="container">
	<h4 class="text-center p-4">Best Deals & Offers</h4>
		<div class="row pb-5">
			<div class="col-4"><img src="images/cab1.jpg" class="img-thumbnail box-effect" alt=""/></div>
			<div class="col-4"><img src="images/cab2.jpg" class="img-thumbnail box-effect" alt=""/></div>
			<div class="col-4"><img src="images/cab3.jpg" class="img-thumbnail box-effect" alt=""/></div>
		</div>
	</div>
</section>


<section class="bg-white p-4 service-slider">
	<div class="container">
		<div class="pb-3">
		<h4 class="text-center p-4">City wise ride estimates</h4>
		<div class="row">
	  		<div class="col-4">
	  			  <label class="radio-inline mr-5">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> <img class="" src="images/cab-a.jpg">
				  </label>
				  <label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <img class="" src="images/cab-b.jpg">
				  </label>
	  		</div>
	  		<div class="col-8">
	  			
	  			<ul class="cab-city-list">
	  				<li><h6 class="text-uppercase">Top Cities : </h6></li>
					<li><a href="#">Indore</a></li>
	  				<li><a href="#">Bhopal</a></li>
	  				<li><a href="#">Ahmedabad</a></li>
	  				<li><a href="#">Jaipur</a></li>
	  				<li><a href="#">Bangalore</a></li>
	  				<li><a href="#">Patna</a></li>
	  				<li><a href="#">Hyderabad</a></li>
	  				<li><a href="#">Chennai</a></li>
	  				<li><a href="#">Kanpur</a></li>
	  				<li><a href="#">More</a></li>
				</ul>
	  		</div>
		  
		</div>
  
<table class="table price-table table-dark table-striped text-center">
	<thead>
		<tr class="text-white">
			<th></th>
			<th><div><img class="" src="images/cabs/ola-share.svg" width="55"></div>Share</th>
			<th><div><img class="" src="images/cabs/ola-micro.svg" width="55"></div>Micro</th>
			<th><div><img class="" src="images/cabs/ola-mini.svg" width="55"></div>Mini</th>
			<th><div><img class="" src="images/cabs/ola-prime-sedan.svg" width="55"></div>Prime Sedan</th>
			<th><div><img class="" src="images/cabs/ola-prime-play.svg" width="55"></div>Prime Play</th>
			<th><div><img class="" src="images/cabs/ola-auto.svg" width="55"></div>Prime SUV</th>
			<th><div><img class="" src="images/cabs/ola-lux.svg" width="55"></div>LUX</th>
			<th><div><img class="" src="images/cabs/ola-e-rick.svg" width="55"></div>E-Risk</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Base Fare</th>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
		</tr>
		<tr>
			<th>Minimum Fare</th>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
			<td>₹40</td>
		</tr>
		<tr>
			<th>Rate/Km</th>
			<td>₹6/km</td>
			<td>₹5/km</td>
			<td>₹8/km</td>
			<td>₹7/km</td>
			<td>₹10/km</td>
			<td>₹6/km</td>
			<td>₹6/km</td>
			<td>₹6/km</td>
		</tr>
		<tr>
			<th>Ride Time rate</th>
			<td>₹1/min</td>
			<td>₹1/min</td>
			<td>₹1/min</td>
			<td>₹1/min</td>
			<td>₹1/min</td>
			<td>₹1/min</td>
			<td>₹1/min</td>
			<td>₹1/min</td>
		</tr>
		<tr>
			<th>Fare Increases</th>
			<td>After 10 kms</td>
			<td>After 10 kms</td>
			<td>After 10 kms</td>
			<td>After 10 kms</td>
			<td>After 10 kms</td>
			<td>After 10 kms</td>
			<td>After 10 kms</td>
			<td>After 10 kms</td>
		</tr>
		<tr>
			<th>Cars Provided</th>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
			<td>Hyundai Eon<br>Datsun Go<br>Maruti Alto</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th></th>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
			<td><a href="#!" class="btn btn-sm btn-more">More</a></td>
		</tr>
	</tfoot>
</table>
		</div>
	</div>
</section>		


<section class="p-4 service-slider">
	<div class="container">
		<div class="pb-3">
		<h4 class="text-center p-4">Deals on Taxi Booking for Popular Cities</h4>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner pb-4">
				<div class="carousel-item active">
					<div class="row p-1">
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary " aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row p-1">
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row p-1">
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
							  </div>
							</div>
						</div>
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Goa <i class="fa fa-taxi text-secondary" aria-hidden="true"></i> Mumbai </span>
								<span>₹ 1,114</span>
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
	<div class="text-center"><img src="images/cab-banner.jpg" class="img-fluid" alt=""/></div>
</section>

<section class="p-4">
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
					<h5>Check list of bagage</h5>
					<p>what to carry / what not to carry</p>
				  </div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card box-effect">
				  <div class="text-center p-4"><img class="" src="images/t3.png"></div>
				  <div class="text-center">
					<h5>Flight boarding FAQ</h5>
					<p>Lorem ipsum dolor sit amet</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "include/footer.php";?>