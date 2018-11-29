<?php include "include/header.php";?>

<section class="position-relative service-section" style="min-height: 380px;">

	<div class="service-container text-white">

		<div class="text-center pt-4">
			<h1 class="font-raleway">Travel With OSS</h1>
			<p class="p-3 mb-0">Find Top Deals after Comparing From 100+ Travel Portals</p>
		</div>

		<div class="service-nav pt-2">
			<ul>
				<li class="text-center"><a  href="flight.php">
				<img src="images/home_icon/s1.png" class="img-fluid" alt="Responsive image"><br>
				Flights</a></li>
				<li class="text-center"><a href="hotel.php" ><img src="images/home_icon/s2.png" class="img-fluid" alt="Responsive image"><br>
				Hotels</a></li>
				<li class="text-center"><a href="train.php" class="active"><img src="images/home_icon/s4.png" class="img-fluid" alt="Responsive image"><br> 
				Trains </a></li>
				<li class="text-center"><a href="bus.php"><img src="images/home_icon/s3.png" class="img-fluid" alt="Responsive image"><br> 
				Bus</a></li> 
				<li class="text-center"><a href="cabs.php"><img src="images/home_icon/s5.png" class="img-fluid" alt="Responsive image"><br> 
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
					<div class="form-check form-check-inline mr-4">
						<div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1" checked>
							   Train Between Stations
							</label>
						</div>
					</div>
					<div class="form-check form-check-inline mr-4">
						<div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1">
							   Check PNR Status
							</label>
						</div>
					</div>
					<div class="form-check form-check-inline mr-4">
						<div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1">
							   Spot your Train
							</label>
						</div>
					</div>
				</div>
				<div class="form-row align-items-end">
					<div class="col">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">From</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>

					<button type="button" class="btn btn-primary bmd-btn-icon ml-2 mr-2">
					  <i class="fa fa-random replace" aria-hidden="true"></i>
					</button>
				
					<div class="col">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">To</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Date of Departure</label>
							<input id="datepicker" class="form-control">
						</div>
					</div>
					<div class="col">
							<div class="form-group mb-0 pt-0">
							<select class="form-control" name="class">
								<option>Class of Travel</option>
								<option value="1A">First AC</option>
								<option value="2A">Second AC</option>
								<option value="3A">Third AC</option>
								<option value="3E">3 AC Economy</option>
								<option value="CC">AC Chair Car</option>
								<option value="FC">First Class </option>
								<option value="SL">Sleeper Class</option>
								<option value="2S">Second Seating</option>
							</select>	
							<i class="fa fa-sort-down select"></i>
						  </div>
					</div>
					<div class="col">
							<div class="form-group mb-0 pt-0">
							<select class="form-control mb10" name="class">
								<option value="TQ">Tatkal Quota</option><option value="LD">Ladies Quota</option>
								<option value="DF">Defence Quota</option>
								<option value="FT">Foreign Tourist Quota</option>
								<option value="SS">Lower Berth Quota</option>
								<option value="PT">Premium Tatkal Quota</option>
								<option value="YU">Yuva Quota</option>
								<option value="DP">Duty Pass Quota</option>
								<option value="HP">Handicaped Quota</option>
								<option value="PH">Parliament House</option>
								<option value="GN">General Quota</option>
							</select>
							<i class="fa fa-sort-down select"></i>
						  </div>
					</div>
					<div class="col-1">
							<a href="train-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a>
					</div>
				</div>
			</form>
		</div>

	</div>


	<div class="bg-services">
		<div class="bg-services-image" style="background-image:url(images/train/bg-train.jpg);  min-height: 380px; max-height: 380px; background-size: cover;"></div>
	</div>

</section>


<section class="p-4 service-slider">
	<div class="container">
		<div class="pb-3">
		<h5>Booking Indian Railway</h5>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row pb-4 pt-4">
						
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/a.png" width="100" height="100">
									  <div class="card-body p-2 card-text">File Ticket Deposit Receipt</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/b.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Trains Between Stations</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/c.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Train/Coach Booking (FTR)</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/d.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Ticket Booking </div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/e.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Quick Ticket Booking</div>
									</div>
								</a>
							</div>
						
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row pb-4 pt-4">
						<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/a.png" width="100" height="100">
									  <div class="card-body p-2 card-text">File Ticket Deposit Receipt</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/b.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Trains Between Stations</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/c.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Train/Coach Booking (FTR)</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/d.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Ticket Booking </div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/e.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Quick Ticket Booking</div>
									</div>
								</a>
							</div>
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row pb-4 pt-4">
						<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/a.png" width="100" height="100">
									  <div class="card-body p-2 card-text">File Ticket Deposit Receipt</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/b.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Trains Between Stations</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/c.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Train/Coach Booking (FTR)</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/d.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Ticket Booking </div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/e.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Quick Ticket Booking</div>
									</div>
								</a>
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

<section class="bg-white p-4 service-slider">
	<div class="container">
		<div class="pb-3">
		<h5>Live</h5>
			<div id="train-live" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row pb-4 pt-4">
						
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/2.png" width="100" height="100">
									  <div class="card-body p-2 card-text">Spot your Train</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/5.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Live Train Station</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/3.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Extra Capacity</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/4.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Reschedule trains</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/6.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Diverted trains</div>
									</div>
								</a>
							</div>
						
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row pb-4 pt-4">
						
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/2.png" width="100" height="100">
									  <div class="card-body p-2 card-text">Spot your Train</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/5.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Live Train Station</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/3.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Extra Capacity</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/4.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Reschedule trains</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/6.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Diverted trains</div>
									</div>
								</a>
							</div>
						
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row pb-4 pt-4">
						
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/2.png" width="100" height="100">
									  <div class="card-body p-2 card-text">Spot your Train</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/5.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Live Train Station</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/3.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Extra Capacity</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/4.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Reschedule trains</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/6.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Diverted trains</div>
									</div>
								</a>
							</div>
						
					</div>
				</div>
			  </div>
			  <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#train-live" role="button" data-slide="prev">
				<i class="fa fa-angle-left text-dark" aria-hidden="true"></i>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#train-live" role="button" data-slide="next">
				<i class="fa fa-angle-right text-dark" aria-hidden="true"></i>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
</section>

<section class="p-4 service-slider">
	<div class="container">
		<div class="pb-3">
		<h5>IRCTC Services</h5>
			<div id="train-service" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row pb-4 pt-4">
						
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t4.png" width="100" height="100">
									  <div class="card-body p-2 card-text">Tour Packages</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t5.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">e-bedroll</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t7.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Accommodation</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t8.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Food</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t6.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Tourist Trains</div>
									</div>
								</a>
							</div>
						
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row pb-4 pt-4">
						
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t4.png" width="100" height="100">
									  <div class="card-body p-2 card-text">Tour Packages</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t5.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">e-bedroll</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t7.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Accommodation</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t8.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Food</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t6.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Tourist Trains</div>
									</div>
								</a>
							</div>
						
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row pb-4 pt-4">
						
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t4.png" width="100" height="100">
									  <div class="card-body p-2 card-text">Tour Packages</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t5.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">e-bedroll</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t7.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Accommodation</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t8.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Food</div>
									</div>
								</a>
							</div>
							<div class="col">
								<a href="#">
									<div class="card tbox stytwo text-center d-block">
									  <img class="img-fluid" src="images/train/t6.png" width="100" height="100">
									  <div class="card-body p-2 card-text text-center">Tourist Trains</div>
									</div>
								</a>
							</div>
						
					</div>
				</div>
			  </div>
			  <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#train-service" role="button" data-slide="prev">
				<i class="fa fa-angle-left text-dark" aria-hidden="true"></i>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#train-service" role="button" data-slide="next">
				<i class="fa fa-angle-right text-dark" aria-hidden="true"></i>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="text-center"><img src="images/train/train-banner.jpg" class="img-fluid" alt=""/></div>
</section>

<section class="bg-white p-4">
	<div class="container">
	<h4 class="text-center p-4">Why OSS ?</h4>
		<div class="row pb-5">
			<div class="col-4">
				<div class="card">
				  <div class="card-header bg-primary text-white p-3"><h6>IRCTC Package</h6></div>
				  <div class="card-body">
					<ul class="pl-3 m-0">
						<li><a href="#">irctc packages for tours and travels</a></li>
						<li><a href="#">Train/Coach Booking (FTR)</a></li>
						<li><a href="#">Refund Rule</a></li>
						<li><a href="#">IRCTC Prepaid</a></li>
						<li><a href="#">IRCTC Zone</a></li>
					</ul>
					<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0 mt-3 mx-auto">View More</a>
				  </div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card">
				  <div class="card-header bg-primary text-white p-3"><h6>Top Train Routes</h6></div>
				  <div class="card-body">
					<ul class="pl-3 m-0">
						<li><a href="#">New Delhi (NDLS) To Mumbai Central (BCT)</a></li>
						<li><a href="#">Dadar (DR) To Begampet (BMT)</a></li>
						<li><a href="#">Mumbai Central (BCT) To New Delhi (NDLS)</a></li>
						<li><a href="#">Howrah Jn (HWH) To New Delhi (NDLS)</a></li>
						<li><a href="#">New Delhi (NDLS) To Howrah Jn (HWH)</a></li>
					</ul>
					<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0 mt-3 mx-auto">View More</a>
				  </div>
				</div>
			</div>
			
			<div class="col-4">
				<div class="card">
				  <div class="card-header bg-primary text-white p-3"><h6>Special, Newly or Holiday Trains</h6></div>
				  <div class="card-body">
					<ul class="pl-3 m-0">
						<li><a href="#">Hyderabad - Jaipur </a></li>
						<li><a href="#">Hyderabad - Kakinada Port</a></li>
						<li><a href="#">Hyderabad - Kochuveli </a></li>
						<li><a href="#">Indore – Patna </a></li>
						<li><a href="#">Jabalpur - Coimbatore </a></li>
					</ul>
					<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0 mt-3 mx-auto">View More</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "include/footer.php";?>