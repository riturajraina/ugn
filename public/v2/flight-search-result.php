<?php include "include/header.php";?>

<section class="position-relative service-section" style="min-height: 140px;">

	<div class="service-container text-white">


		<div class="service-nav pt-4">
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

		<div class="service-form pl-4 pr-4 pb-4 card">
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
						<label class="sr-only" for="inlineFormInputGroup"></label>
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
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Flying To</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Onward Date</label>
							<input id="datepicker" class="form-control">
						</div>
					</div>
					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
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
							<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a>
					</div>
				</div>
			</form>
		</div>

		

	</div>


	<div class="bg-services">
		<div class="bg-services-image"></div>
	</div>

</section>


<section class="pt-3 pb-3">
	<div class="container-fluid">
		<div class="row">
			
			<?php include "include/filters.php";?>

			<div class="col-9 pl-0">
				<div class="card">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb service-breadcrumb border">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Travel</a></li>
						<li class="breadcrumb-item active" aria-current="page">Flight</li>
						<li class="ml-auto">Showing 1-15 of 15 Search Results</li>
					  </ol>
					</nav>
					
					<div class="d-flex justify-content-between col-12">
						<div>OSS best Found 140 flights</div>
						<div><h6>Bangalore <i class="fa fa-plane text-secondary fa-2x align-middle ml-1 mr-1" aria-hidden="true"></i> Mumbai</h6></div>
						<div>
							<div class="d-flex mb-2">
							
							<button class="btn btn-sm btn-raised mr-3 btn-secondary"><i class="fa fa-bell"></i> Low Price</button>
							
							<button class="btn btn-primary btn-sm"><i class="fa fa-bell"></i> Low Seat</button>
							
							</div>
						</div>
					</div>
					
					<div class="text-center"><img src="images/pricegraph.jpg" class="img-fluid" alt=""/></div>
	
			</div>	
								
<div class="text-center text-uppercase p-2 mt-3 bg-secondary text-white">
<div class="row">
	<div class="col-2 pr-0">
		<a href="#"> </a>
	</div>
	
	<div class="col-4">
		<div class="flight-timeing-list">
		<ul>
			<li><a href="#">Departure </a></li>
			<li><a href="#">Duration </a></li>
			<li><a href="#">Arrival </a></li>
		</ul>
		</div>
	</div>
	
	<div class="col-3">
		<a href="#">Price <i class="fa fa-long-arrow-up" aria-hidden="true"></i> </a>
	</div>
	
	
	<div class="col-3">	<a href="#"> Best </a> </div>

</div>
	
</div>				



										
																														


								

	


<?php include "include/flight-list.php";?>


<?php include "include/pagination.php";?>
	
	

	
			

					
				
			</div>
			
			
			
		</div>
	</div>
</section>




<?php include "include/footer.php";?>