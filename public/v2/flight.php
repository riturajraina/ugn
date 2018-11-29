<?php include "include/header.php";?>

<section class="position-relative service-section" style="min-height: 380px;">

	<div class="service-container text-white">

		<div class="text-center pt-4">
			<h1 class="font-raleway">Fly With OSS</h1>
			<p class="p-3 mb-0">Find Top Deals after Comparing From 100+ Travel Portals</p>
		</div>

		<div class="service-nav pt-2">
			<ul>
				<li class="text-center"><a class="active" href="flight.php">
				<img src="images/home_icon/s1.png" class="img-fluid" alt="Responsive image"><br>
				Flights</a></li>
				<li class="text-center"><a href="hotel.php"><img src="images/home_icon/s2.png" class="img-fluid" alt="Responsive image"><br>
				Hotels</a></li>
				<li class="text-center"><a href="train.php"><img src="images/home_icon/s4.png" class="img-fluid" alt="Responsive image"><br> 
				Trains </a></li>
				<li class="text-center"><a href="bus.php"><img src="images/home_icon/s3.png" class="img-fluid" alt="Responsive image"><br> 
				Bus</a></li> 
				<li class="text-center"><a href="cabs.php"><img src="images/home_icon/s5.png" class="img-fluid" alt="Responsive image"><br> 
				Cabs </a></li>
				<li class="text-center"><a href="movies.php"><img src="images/home_icon/s7.png" class="img-fluid" alt="Responsive image"><br> 
				Movie</a></li>
				<li class="text-center"><a href="recharge.php"><img src="images/home_icon/s8.png" class="img-fluid" alt="Responsive image"><br> 
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
							  <input type="radio" onclick = "document.location.href='flight-search-result.php'" name="way" id="optionsRadios1" value="option1" checked>
							   One way
							</label>
						</div>
					</div>
					<div class="form-check form-check-inline mr-4">
						<div class="radio">
							<label>
							  <input type="radio" onclick = "document.location.href='flight-search-result-round.php'" name="way" id="optionsRadios1" value="option1">
							   Round trip
							</label>
						</div>
					</div>
					<div class="form-check form-check-inline">
						<div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1">
							   Multi trip
							</label>
						</div>
					</div>
				</div>
				<div class="form-row align-items-end">
					<div class="col">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Flying From</label>
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
							<label for="exampleInputName2" class="bmd-label-floating">Flying To</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Onward Date</label>
							<input id="datepicker" class="form-control">
						</div>
					</div>
					<div class="col">
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Return Date</label>
							<input id="datepicker1" class="form-control">
						</div>
					</div>

					<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
					<div class="col">
							<button class="btn dropdown-toggle mb-0 border-bottom" type="button" id="buttonMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								 2 Traveller(s) , Economy
							  </button>
							<div class="dropdown-menu p-2 bg-white" aria-labelledby="buttonMenu1">
							
							<div class="m-1">ADULTS <small>(+12 yrs)</small></div>
								<nav aria-label="...">
									<ul class="pagination pagination-sm">
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item active"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item"><a class="page-link" href="#">6</a></li>
										<li class="page-item"><a class="page-link" href="#">7</a></li>
										<li class="page-item"><a class="page-link" href="#">8</a></li>
									</ul>
								</nav>
								<div class="m-1">CHILDREN <small>(2-12 yrs)</small></div>
								<nav aria-label="...">
									<ul class="pagination pagination-sm">
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item"><a class="page-link" href="#">6</a></li>
										<li class="page-item"><a class="page-link" href="#">7</a></li>
										<li class="page-item"><a class="page-link" href="#">8</a></li>
									</ul>
								</nav>
								<div class="m-1">INFANTS <small>(0-2 yrs)</small></div>
								<nav aria-label="...">
									<ul class="pagination pagination-sm">
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item"><a class="page-link" href="#">6</a></li>
										<li class="page-item"><a class="page-link" href="#">7</a></li>
										<li class="page-item"><a class="page-link" href="#">8</a></li>
									</ul>
								</nav>
								<div class="dropdown-divider mb-3"></div>
									<div class="ml-3">
									<div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Economy
										</label>
									  </div>
								<div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Premium Economy
										</label>
									  </div>
									  <div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Business
										</label>
									  </div>
									  <div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> First Class
										</label>
									  </div>
									  </div>
							</div>
					</div>
					<div class="col-1">
							<!-- needed to match padding for floating labels -->
							<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a>
					</div>
				</div>
			</form>
		</div>

	</div>


	<div class="bg-services">
		<div class="bg-services-image" style="background-image:url(images/bg-service.jpg);  min-height: 380px; max-height: 380px; background-size: cover;"></div>
	</div>

</section>


<section>
	<div class="container">
		<h4 class="text-center p-4">Best Deals & Offers</h4>
		<div class="row pb-5">
			<div class="col-4"><img src="images/d1.jpg" class="img-thumbnail box-effect" alt=""/>
			</div>
			<div class="col-4"><img src="images/d2.jpg" class="img-thumbnail box-effect" alt=""/>
			</div>
			<div class="col-4"><img src="images/d3.jpg" class="img-thumbnail box-effect" alt=""/>
			</div>
		</div>
	</div>
</section>

<section class="bg-white p-4 service-slider">
	<div class="container">
		<div class="pb-3">
			<h4 class="text-center p-4">Best Flight Deals Of The Day</h4>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner pb-4">
					<div class="carousel-item active">
						<div class="row p-1">
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a1.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
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
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
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
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
										<span>₹ 1,114</span>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
									<div class="card-body p-2 d-flex justify-content-between">
										<span class="card-text">Goa <i class="fa fa-plane" aria-hidden="true"></i> Mumbai </span>
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
	<div class="text-center"><img src="images/flightdeals.jpg" class="img-fluid" alt=""/>
	</div>
</section>

<section class="bg-white p-4">
	<div class="container">
		<h4 class="text-center p-4">Why OSS ?</h4>
		<div class="row pb-5">
			<div class="col-4">
				<div class="card box-effect">
					<div class="text-center p-4"><img class="" src="images/t1.png">
					</div>
					<div class="text-center">
						<h5>Process to Follows</h5>
						<p>Lorem ipsum dolor sit amet. </p>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card box-effect">
					<div class="text-center p-4"><img class="" src="images/t2.png">
					</div>
					<div class="text-center">
						<h5>Check list of bagage</h5>
						<p>what to carry / what not to carry</p>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card box-effect">
					<div class="text-center p-4"><img class="" src="images/t3.png">
					</div>
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