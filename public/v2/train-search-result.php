<?php include "include/header.php";?>

<section class="position-relative service-section" style="min-height: 140px;">

	<div class="service-container text-white">


		<div class="service-nav pt-4">
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

		<div class="service-form pl-4 pr-4 pb-4 card">
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
							<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a>
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
						<li class="breadcrumb-item active" aria-current="page">Train</li>
						<li class="ml-auto">Showing 1-15 of 15 Search Results</li>
					  </ol>
					</nav>
					
					<div class="d-flex justify-content-between col-12">
						<div>OSS best Found 140 Trains</div>
						<div><h6>Bhopal(BPL) <i class="fa fa-subway text-secondary fa-2x align-middle ml-1 mr-1" aria-hidden="true"></i> Mumbai (CST)</h6></div>
						<div>
							<div class="d-flex mb-2">
							
							<button class="btn btn-sm btn-raised mr-3 btn-secondary"><i class="fa fa-bell"></i> Low Price</button>
							
							<button class="btn btn-primary btn-sm"><i class="fa fa-bell"></i> Low Seat</button>
							
							</div>
						</div>
					</div>
				</div>	
								
<div class="text-center text-uppercase p-2 mt-3 bg-secondary text-white">
	<div class="row">
		<div class="col-3 pr-0">
			<a href="#"> </a>
		</div>

		<div class="col-5">
			<div class="flight-timeing-list">
			<ul>
				<li><a href="#">Departure </a></li>
				<li><a href="#">Duration </a></li>
				<li><a href="#">Arrival </a></li>
			</ul>
			</div>
		</div>

		<div class="col-4">
			<a href="#">Best <i class="fa fa-long-arrow-up" aria-hidden="true"></i> </a>
		</div>
	</div>
</div>				


<?php include "include/train-list.php";?>


<?php include "include/pagination.php";?>
	
				
			</div>
			
		</div>
	</div>
</section>




<?php include "include/footer.php";?>