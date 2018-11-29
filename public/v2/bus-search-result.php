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
				<li class="text-center"><a href="train.php" ><img src="images/home_icon/s4.png" class="img-fluid" alt="Responsive image"><br> 
				Trains </a></li>
				<li class="text-center"><a href="bus.php" class="active"><img src="images/home_icon/s3.png" class="img-fluid" alt="Responsive image"><br> 
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
							  <input onclick = "document.location.href='bus-search-result.php'" type="radio" name="way" id="optionsRadios1" value="option1" checked>
							   One way
							</label>
						</div>
					</div>
					<div class="form-check form-check-inline mr-4">
						<div class="radio">
							<label>
							  <input onclick = "document.location.href='bus-search-result-round.php'" type="radio" name="way" id="optionsRadios1" value="option1">
							   Round trip
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
					
					<div class="col">
							<div class="form-group mb-0 pt-0">
							<select class="form-control" id="exampleSelect1">
							  <option>Number of Seat</option>
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							  <option>6</option>
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
					  <ol class="breadcrumb service-breadcrumb border mb-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Travel</a></li>
						<li class="breadcrumb-item active" aria-current="page">Buses</li>
						<li class="ml-auto">Showing 1-15 of 15 Search Results</li>
					  </ol>
					</nav>
					
					<div class="d-flex justify-content-between col-12 pb-0 pt-2">
						<div>OSS best Found 1400 Buses</div>
						<div><h6>Bhopal <i class="fa fa-bus text-secondary fa-2x align-middle ml-1 mr-1" aria-hidden="true"></i> Indore</h6></div>
						<div>
							<div class="d-flex mb-1">
							
							<button class="btn btn-sm mr-3 btn-raised btn-secondary"><i class="fa fa-bell"></i> Low Price</button>
							
							<button class="btn btn-primary btn-sm"><i class="fa fa-bell"></i> Low Seat</button>
							
							</div>
						</div>
					</div>
				</div>	
								
				<div class="bg-secondary text-white text-center text-uppercase p-2 mt-3">
<div class="row">
	<div class="col-6 pl-4 text-left">
		1400 Buses available in Bhopal 
	</div>
	
	
	<div class="col-2">	<a href="#">Popularity </a> </div>
	<div class="col-2">	<a href="#">Best </a> </div>
	
	<div class="col-2">
		<a href="#">Price <i class="fa fa-long-arrow-up" aria-hidden="true"></i> </a>
	</div>

</div>
	
</div>				



										
		

<?php include "include/bus-list.php";?>	

<?php include "include/pagination.php";?>

	
	

	
			

					
				
			</div>
			
			
			
		</div>
	</div>
</section>

<div class="modal fade" id="hotelgallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Taj Palace Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
			  </ol>
			  <div class="carousel-inner">
				<div class="carousel-item active"><img class="d-block w-100" src="images/z1.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" src="images/z2.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" src="images/z3.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" src="images/z4.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" src="images/z5.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" src="images/z6.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" src="images/z7.jpg"></div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
      </div>
    </div>
  </div>
</div>


<?php include "include/footer.php";?>