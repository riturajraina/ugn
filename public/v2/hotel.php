<?php include "include/header.php";?>

<section class="position-relative service-section" style="min-height: 380px;">

	<div class="service-container text-white">
  
	  <div class="text-center pt-4">	
		<h1 class="font-raleway">Stay With Us</h1>
		<p class="p-3 mb-0">Find Top Deals after Comparing From 100+ Travel Portals</p>
	  </div>	
		
	  <div class="service-nav pt-2">
	  	<ul>
	  			
				<li class="text-center"><a  href="flight.php">
				<img src="images/home_icon/s1.png" class="img-fluid" alt="Responsive image"><br>
				Flights</a></li>
				<li class="text-center"><a href="hotel.php" class="active"><img src="images/home_icon/s2.png" class="img-fluid" alt="Responsive image"><br>
				Hotels</a></li>
				<li class="text-center"><a href="train.php"><img src="images/home_icon/s4.png" class="img-fluid" alt="Responsive image"><br> 
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
	  
	  <div class="service-form pt-4 pl-4 pr-4 pb-2">
	  	<form class="">
	  	
	  	<div class="form-row align-items-end">
					<div class="col-5">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Hotel, City, Locality ...</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>

					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">CheckIn</label>
							<input id="datepicker" class="form-control">
						</div>
					</div>
					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">CheckOut</label>
							<input id="datepicker1" class="form-control">
						</div>
					</div>

					<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
					<div class="col">
							<button class="btn dropdown-toggle mb-0 border-bottom" type="button" id="buttonMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								 2 Guests 1 Room
							  </button>
							<div class="dropdown-menu p-2" aria-labelledby="buttonMenu1">
							
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
								<div class="m-1">Rooms</div>
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
							</div>
					</div>
					<div class="col-1">
							<a href="hotel-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a>
					</div>
				</div>
				
	  	 
		</form>
	  </div>
	
	</div>


	<div class="bg-services">
		 <div class="bg-services-image" style="background-image:url(images/bg-hotel.jpg);  min-height: 380px; max-height: 380px; background-size: cover;"></div>
	</div>

</section>


<section>
	<div class="container">
	<h4 class="text-center p-4">Best Deals & Offers</h4>
		<div class="row pb-5">
			<div class="col-4"><img src="images/h1.jpg" class="img-thumbnail box-effect" alt=""/></div>
			<div class="col-4"><img src="images/h2.jpg" class="img-thumbnail box-effect" alt=""/></div>
			<div class="col-4"><img src="images/h3.jpg" class="img-thumbnail box-effect" alt=""/></div>
		</div>
	</div>
</section>

<section class="bg-white p-4 service-slider">
	<div class="container">
		<div class="pb-3">
		<h4 class="text-center p-4">Top Hotels by City</h4>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner pb-4">
				<div class="carousel-item active">
					<div class="row p-1">
						<div class="col-3">
							<div class="card">
							  <img class="card-img-top" src="images/a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Goa </span>
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
							  <img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Mumbai </span>
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
							  <img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Hyderabad </span>
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
							  <img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Chennai </span>
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
							  <img class="card-img-top" src="images/a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Goa </span>
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
							  <img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Mumbai </span>
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
							  <img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Hyderabad </span>
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
							  <img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Chennai </span>
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
							  <img class="card-img-top" src="images/a1.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Goa </span>
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
							  <img class="card-img-top" src="images/a2.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Mumbai </span>
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
							  <img class="card-img-top" src="images/a3.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Hyderabad </span>
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
							  <img class="card-img-top" src="images/a4.jpg" alt="Card image cap">
							  <div class="card-body p-2 d-flex justify-content-between">
								<span class="card-text">Top Hotels in Chennai </span>
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
	<div class="text-center"><img src="images/hotels_banner1.jpg" class="img-fluid" alt=""/></div>
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
					<h5>Hotel boarding FAQ</h5>
					<p>Lorem ipsum dolor sit amet</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "include/footer.php";?>