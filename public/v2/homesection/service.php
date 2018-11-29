
	<div class="container">
		<h4 class="mb-4 mt-5">Find Best Deals & Book</h4>
		<div class="col bg-white border1 card">
			<div class="row ">
				<div class="col-2 pl-0 pr-0 flight">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  <a class="nav-link p-1 active" id="v-pills-flights-tab" data-toggle="pill" href="#v-pills-flights" role="tab" aria-controls="v-pills-flights" aria-selected="true"><i class=""><img src="images/home_icon/s1.png" class="img-fluid" alt="Responsive image"></i> Flights</a>
					  
					  <a class="nav-link p-1" id="v-pills-Hotels-tab" data-toggle="pill" href="#v-pills-Hotels" role="tab" aria-controls="v-pills-Hotels" aria-selected="false"> <i class=""><img src="images/home_icon/s2.png" class="img-fluid" alt="Responsive image"></i>Hotels</a>
					  
					  <a class="nav-link p-1" id="v-pills-trains-tab" data-toggle="pill" href="#v-pills-trains" role="tab" aria-controls="v-pills-trains" aria-selected="false"><i class=""><img src="images/home_icon/s4.png" class="img-fluid" alt="Responsive image"></i>Trains</a>
					  
					  <a class="nav-link p-1" id="v-pills-Bus-tab" data-toggle="pill" href="#v-pills-Bus" role="tab" aria-controls="v-pills-Bus" aria-selected="false"><i class=""><img src="images/home_icon/s3.png" class="img-fluid" alt="Responsive image"></i>Bus</a>
					  
					  <a class="nav-link p-1" id="v-pills-Cabs-tab" data-toggle="pill" href="#v-pills-Cabs" role="tab" aria-controls="v-pills-Cabs" aria-selected="false"> <i class=""><img src="images/home_icon/s5.png" class="img-fluid" alt="Responsive image"></i>Cabs</a>
					  
					  <a class="nav-link p-1" id="v-pills-movies-tab" data-toggle="pill" href="#v-pills-movies" role="tab" aria-controls="v-pills-movies" aria-selected="false"> <i class=""><img src="images/home_icon/s7.png" class="img-fluid" alt="Responsive image"></i>Movies</a>
					  
					  <!--<a class="nav-link p-1" id="v-pills-Recharge-tab" data-toggle="pill" href="#v-pills-Recharge" role="tab" aria-controls="v-pills-Recharge" aria-selected="false"> <i class=""><img src="images/home_icon/s8.png" class="img-fluid" alt="Responsive image"></i>Recharge</a>-->
					  
					  <a class="nav-link p-1" id="v-pills-Food-tab" data-toggle="pill" href="#v-pills-Food" role="tab" aria-controls="v-pills-Food" aria-selected="false"> <i class=""><img src="images/home_icon/s6.png" class="img-fluid" alt="Responsive image"></i>Food Ordering</a>
					  
					  <a class="nav-link p-1" id="v-pills-Food-tab" data-toggle="pill" href="#v-pills-holiday" role="tab" aria-controls="v-pills-holiday" aria-selected="false"> <i class=""><img src="images/home_icon/s9.png" class="img-fluid" alt="Responsive image"></i>Holiday Packages</a>
					  
					</div>
				</div>
				<div class="col-10 pl-0">
					<div class="tab-content" id="v-pills-tabContent">
					  <!--<h5 class="mb-2 mt-4 text-center">Find Top Deals After Compare With Different Portals</h5>-->
						  <div class="tab-pane fade show active" id="v-pills-flights" role="tabpanel" aria-labelledby="v-pills-flights-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ Travel Portals</h5>
						 	 <div class="flight-form">
							<form>
							<div class="d-flex">
								 <div class="radio mr-5">
									<label>
									  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									  One way
									</label>
								  </div>
								  <div class="radio mr-5">
									<label>
									  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									  Round trip
									</label>
								  </div>
								   <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									  Multi trip
									</label>
								  </div>
							</div>
							<div class="form-row align-items-end mt-4">
								<div class="col">
									<label class="sr-only" for="inlineFormInputGroup"></label>
									<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
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
									<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
										<label for="exampleInputName2" class="bmd-label-floating">Flying To</label>
										<input type="text" class="form-control" id="exampleInputName2">
										<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								</div>
							<div class="form-row align-items-end mt-4">
								<div class="col">
									<label class="sr-only" for="inlineFormInputGroup"></label>
									<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
										<label for="exampleInputName2" class="bmd-label-floating">Depart On (DD/MM/YY)</label>
										<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-100"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="bf47226c-8aba-1dae-5478-6890bebed7bb" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
									</div>
								</div>
								<div class="col">
									<label class="sr-only" for="inlineFormInputGroup"></label>
									<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
										<label for="exampleInputName2" class="bmd-label-floating">Return On (DD/MM/YY)</label>
										<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-100"><input id="datepicker1" class="form-control gj-textbox-md" data-type="datepicker" data-guid="aa0f64ef-aa55-787a-6f11-1bd198ce8d94" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
									</div>
								</div>
								<div class="col">
									<div class="form-group mb-0 bmd-form-group is-filled w-100">
										<select class="form-control" id="exampleSelect1">
										  <option>Class Of Travel</option>
										  <option>Economy</option>
										  <option>Premium Economy</option>
										  <option>Business</option>
										  <option>First Class</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>
								</div>
							</div>
							<div class="form-row align-items-end mt-4">
								<div class="col">
									<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										  <option>ADULTS (12+ yrs)</option>
										  <option>1 Adult</option>
										  <option>2 Adults</option>
										  <option>3 Adults</option>
										  <option>4 Adults</option>
										  <option>5 Adults</option>
										  <option>6 Adults</option>
										  <option>7 Adults</option>
										  <option>8 Adults</option>
										  <option>9 Adults</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>

								</div>

								<div class="col">
										<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										  <option>CHILDREN (2-12 yrs)</option>
										  <option>1 Children</option>
										  <option>2 Childrens</option>
										  <option>3 Childrens</option>
										  <option>4 Childrens</option>
										  <option>5 Childrens</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>
								</div>

									<div class="col">
										<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										  <option>INFANTS (0-2 yrs)</option>
										  <option>1 Infants</option>
										  <option>2 Infants</option>
										  <option>3 Infants</option>
										  <option>4 Infants</option>
										  <option>5 Infants</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>
								</div>
							</div>
							<div class="form-row align-items-end mt-4">
							<div class="col">
										<!-- needed to match padding for floating labels -->
										<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search  </a>
								</div>
								</div>
							</form>
						   <div class="row">
			<div class="col-md-12">
			
				<div class="oneadd-slider mt-4">
					<div id="relax2" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d3.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d1.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/d2.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax2" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
						<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax2" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
		</div>
						  
						  </div>
					  	  </div>
						  
						  <div class="tab-pane fade" id="v-pills-Hotels" role="tabpanel" aria-labelledby="v-pills-Hotels-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ Hotels Portals</h5>
								<div class="flight-form">
									<form class="">
										<div class="form-row align-items-end">
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Eg. Taj Hotel, City, locality ...</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>

										</div>
										<div class="form-row align-items-end mt-4">
											
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Check-in</label>
													<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="5c770c0d-10c9-8616-c2eb-f8da412c10d6" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
												</div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Check-out</label>
													<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker1" class="form-control gj-textbox-md" data-type="datepicker" data-guid="743e65ef-d0a4-8a9c-a549-960bb366898a" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
												</div>
											</div>
											<div class="col">
							<button class="btn dropdown-toggle mb-0 border-bottom" type="button" id="buttonMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								 2 Guests 1 Room
							  <div class="ripple-container"></div>
							  </button>
							<div class="dropdown-menu p-2" aria-labelledby="buttonMenu1" x-placement="bottom-start" style="position: absolute; top: 37px; left: 5px; will-change: top, left;">
							
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
								<div class="dropdown-divider mb-3"></div>
									<div class="ml-3">
									<span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span> Solo
										</label>
									  </div></span>
								<span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Couple
										</label>
									  </div></span>
									  <span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Business
										</label>
									  </div></span>
									  <span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Family
										</label>
									  </div></span>
									  </div>
							</div>
					</div>

					
										</div>
										<div class="form-row align-items-end mt-4">
											<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
					
					<div class="col">
							<!-- needed to match padding for floating labels -->
							<a href="hotel-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
					</div>
										</div>
									</form>
								
									<div class="row">
										<div class="col-md-12">
											<div class="oneadd-slider mt-4">
												<div id="hotels" class="carousel slide" data-ride="carousel">
													<div class="carousel-inner">
														<div class="carousel-item active">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h1.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h2.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h3.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
														<div class="carousel-item">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h2.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h3.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h1.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
														<div class="carousel-item">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h3.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h1.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/h2.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
													</div>
													<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#hotels" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
													<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#hotels" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
											</div>
										</div>
		</div>
								
								</div>
					 	  </div>
					  	  
						  <div class="tab-pane fade" id="v-pills-trains" role="tabpanel" aria-labelledby="v-pills-trains-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ trains Portals</h5>
						  <div class="flight-form">
						  	<form>
							<div class="d-flex">
								 <div class="radio mr-5">
									<label>
									  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									  Train Between Stations
									</label>
								  </div>
								  <div class="radio mr-5">
									<label>
									  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									  Check PNR Status
									</label>
								  </div>
								   <div class="radio">
									<label>
									  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									  Spot your Train
									</label>
								  </div>
							</div>
								<div class="form-row align-items-end">
					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
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
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
							<label for="exampleInputName2" class="bmd-label-floating">To</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					</div>
								<div class="form-row align-items-end mt-4">
					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Date (DD/MM/YY)</label>
							<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-75"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="bf47226c-8aba-1dae-5478-6890bebed7bb" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
						</div>
					</div>
					<div class="col"></div>
				</div>
								<div class="form-row align-items-end mt-4">
					<div class="col">
						<div class="form-group mb-0 bmd-form-group is-filled">
							<select class="form-control" id="exampleSelect1">
							  <option>CLASS</option>
							  <option>Sleeper</option>
							  <option>3 AC</option>
							  <option>2 AC</option>
							  <option>1 AC</option>
							  <option>Second Seating</option>
							  <option>Chair Car</option>
							  <option>First Class</option>
							  <option>Executive Class</option>
							</select>
							<i class="fa fa-sort-down select"></i>
						  </div>
							
					</div>
					
					<div class="col">
							<div class="form-group mb-0 bmd-form-group is-filled">
							<select class="form-control" id="exampleSelect1">
							  <option>Quota</option>
							  <option>Premimum Tatkal</option>
							  <option>LOWER BERTH/Sr. CITIZEN</option>
							  <option>GENERAL</option>
							  <option>DIVYANGJAN</option>
							  <option>LADIES</option>
							  <option>TATKAL</option>
							</select>
							<i class="fa fa-sort-down select"></i>
						  </div>
					</div>
					
				</div>
								<div class="form-row align-items-end mt-4">
				<div class="col">
					<a href="train-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
				</div>
					</div>
							</form>
						 	<div class="row">
								<div class="col-md-12">
			
				<div class="oneadd-slider mt-4">
					<div id="train" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t3.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t4.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t2.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t4.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/train/t1.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#train" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
						<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#train" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
								</div>
						  
						  </div>
						  </div>
						  
						  <div class="tab-pane fade" id="v-pills-Bus" role="tabpanel" aria-labelledby="v-pills-Bus-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ Bus Portals</h5>
								<div class="flight-form">
						  			<form>
												<div class="d-flex">
												 <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													  One way
													</label>
												  </div>
												  <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													   Round trip
													</label>
												  </div>
											</div>
												<div class="form-row align-items-end">
													<div class="col">
														<label class="sr-only" for="inlineFormInputGroup"></label>
														<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
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
														<label class="sr-only" for="inlineFormInputGroup"></label>
														<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
															<label for="exampleInputName2" class="bmd-label-floating">To</label>
															<input type="text" class="form-control" id="exampleInputName2">
															<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
															</div>
														</div>
													</div>


												</div>
												<div class="form-row align-items-end mt-4">
													
													<div class="col">
														<label class="sr-only" for="inlineFormInputGroup"></label>
														<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
															<label for="exampleInputName2" class="bmd-label-floating">Onward Date</label>
															<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="871902a9-8e32-5caf-a2e0-4cb8a2c33e86" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
														</div>
													</div>
													<div class="col">
														<label class="sr-only" for="inlineFormInputGroup"></label>
														<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
															<label for="exampleInputName2" class="bmd-label-floating">Return Date</label>
															<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="871902a9-8e32-5caf-a2e0-4cb8a2c33e86" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
														</div>
													</div><!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
													<div class="col">
															<div class="form-group mb-0 bmd-form-group is-filled">
															<select class="form-control" id="exampleSelect1">
															  <option>Number of Seat</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															  <option>6</option>
															</select>
														  </div>

													</div>
												</div>
												<div class="form-row align-items-end mt-4">
													<div class="col">
														<a href="bus-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
													</div>
												</div>
						  			</form>
							  	
							  		<div class="row">
										<div class="col-md-12">
											<div class="oneadd-slider mt-4">
												<div id="bus" class="carousel slide" data-ride="carousel">
													<div class="carousel-inner">
														<div class="carousel-item active">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus1.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus2.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus3.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
														<div class="carousel-item">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus2.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus3.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus1.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
														<div class="carousel-item">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus3.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus1.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/bus2.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
													</div>
													<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#bus" role="button" data-slide="prev"> <i class="fa fa-angle-left text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
													<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#bus" role="button" data-slide="next"> <i class="fa fa-angle-right text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
											</div>
										</div>
		</div>
							  	
							  	</div>
					  	 </div>
					  	 
						  <div class="tab-pane fade" id="v-pills-Cabs" role="tabpanel" aria-labelledby="v-pills-Cabs-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ Cabs Portals</h5>
						  <div class="flight-form">
								<div class="cab-panel">

									<ul class="nav nav-pills" id="pills-tab" role="tablist">
									  <li class="nav-item">
										<a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" aria-expanded="true">City Taxi</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" aria-expanded="false">Outstation</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" aria-expanded="false">Rentals</a>
									  </li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
									  <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" aria-expanded="true">

										<form>
										<div class="form-row align-items-end mt-4">
											<div class="d-flex">
												 <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													  Ola
													</label>
												  </div>
												  <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													  Uber
													</label>
												  </div>
											</div>
										</div>
										<div class="form-row align-items-end mt-4">
												<div class="col">
													<label class="sr-only" for="inlineFormInputGroup"></label>
													<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
														<label for="exampleInputName2" class="bmd-label-floating">Pickup Location</label>
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
													<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
														<label for="exampleInputName2" class="bmd-label-floating">Where To? </label>
														<input type="text" class="form-control" id="exampleInputName2">
														<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
														</div>
													</div>
												</div>
											</div>
										<div class="form-row align-items-end mt-4">
												<div class="col">
														<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>Now</option>
														  <option>Schedule for Later</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												</div>
												<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>Today</option>
														  <option>Tomorrow</option>
														  <option>SUN, 11 Mar</option>
														  <option>MON, 12 Mar</option>
														  <option>TUE, 13 Mar</option>
														  <option>WED, 14 Mar</option>
														  <option>THU, 15 Mar</option>
														  <option>FRI, 16 Mar</option>
														  <option>SAT, 17 Mar</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												  </div>
												<div class="col">
													<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>12:00 AM</option>
														  <option>12:15 AM</option>
														  <option>12:30 AM</option>
														  <option>01:00 AM</option>
														  <option>01:15 AM</option>
														  <option>01:30 AM</option>
														  <option>02:00 AM</option>
														  <option>02:15 AM</option>
														  <option>02:30 AM</option>
														  <option>03:00 AM</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												 </div>
											

											</div>
										</form>
										
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
											
										</div>
									  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" aria-expanded="false">
										<form>
									<!--<div class="form-row align-items-end mt-4">
											<div class="d-flex">
													<div class="form-check form-check-inline mr-5">
														<span class="bmd-form-group is-filled"><div class="radio">
															<label>
															  <input type="radio" name="way" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
															   Ola
															</label>
														</div></span>
													</div>
													<div class="form-check form-check-inline mr-5">
														<span class="bmd-form-group is-filled"><div class="radio">
															<label>
															  <input type="radio" name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
															   Uber
															</label>
														</div></span>
													</div>
												
												</div>
										</div>-->
										<div class="form-row align-items-end mt-4">
												<div class="col">
													<label class="sr-only" for="inlineFormInputGroup"></label>
													<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
														<label for="exampleInputName2" class="bmd-label-floating">Pickup Location</label>
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
													<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
														<label for="exampleInputName2" class="bmd-label-floating">Where To? </label>
														<input type="text" class="form-control" id="exampleInputName2">
														<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
														</div>
													</div>
												</div>
											</div>
										<div class="form-row align-items-end mt-4">
												<div class="col">
														<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>Now</option>
														  <option>Schedule for Later</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												</div>
												<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>Today</option>
														  <option>Tomorrow</option>
														  <option>SUN, 11 Mar</option>
														  <option>MON, 12 Mar</option>
														  <option>TUE, 13 Mar</option>
														  <option>WED, 14 Mar</option>
														  <option>THU, 15 Mar</option>
														  <option>FRI, 16 Mar</option>
														  <option>SAT, 17 Mar</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												  </div>
												<div class="col">
													<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>12:00 AM</option>
														  <option>12:15 AM</option>
														  <option>12:30 AM</option>
														  <option>01:00 AM</option>
														  <option>01:15 AM</option>
														  <option>01:30 AM</option>
														  <option>02:00 AM</option>
														  <option>02:15 AM</option>
														  <option>02:30 AM</option>
														  <option>03:00 AM</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												 </div>
											

											</div>
										</form>
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
											
										</div>
									  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" aria-expanded="false">
											
										<form>
									<!--<div class="form-row align-items-end mt-4">
											<div class="d-flex">
													<div class="form-check form-check-inline mr-5">
														<span class="bmd-form-group is-filled"><div class="radio">
															<label>
															  <input type="radio" name="way" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
															   Ola
															</label>
														</div></span>
													</div>
													<div class="form-check form-check-inline mr-5">
														<span class="bmd-form-group is-filled"><div class="radio">
															<label>
															  <input type="radio" name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
															   Uber
															</label>
														</div></span>
													</div>
												
												</div>
										</div>-->
										<div class="form-row align-items-end mt-4">
												<div class="col">
													<label class="sr-only" for="inlineFormInputGroup"></label>
													<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
														<label for="exampleInputName2" class="bmd-label-floating">Pickup Location</label>
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
													<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
														<label for="exampleInputName2" class="bmd-label-floating">Where To? </label>
														<input type="text" class="form-control" id="exampleInputName2">
														<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
														</div>
													</div>
												</div>
											</div>
										<div class="form-row align-items-end mt-4">
												<div class="col">
														<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>Now</option>
														  <option>Schedule for Later</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												</div>
												<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>Today</option>
														  <option>Tomorrow</option>
														  <option>SUN, 11 Mar</option>
														  <option>MON, 12 Mar</option>
														  <option>TUE, 13 Mar</option>
														  <option>WED, 14 Mar</option>
														  <option>THU, 15 Mar</option>
														  <option>FRI, 16 Mar</option>
														  <option>SAT, 17 Mar</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												  </div>
												<div class="col">
													<div class="form-group mb-0 bmd-form-group is-filled">
														<select class="form-control" id="exampleSelect1">
														  <option>12:00 AM</option>
														  <option>12:15 AM</option>
														  <option>12:30 AM</option>
														  <option>01:00 AM</option>
														  <option>01:15 AM</option>
														  <option>01:30 AM</option>
														  <option>02:00 AM</option>
														  <option>02:15 AM</option>
														  <option>02:30 AM</option>
														  <option>03:00 AM</option>
														</select>
														<i class="fa fa-sort-down select"></i>
													  </div>
												 </div>
											

											</div>
										</form>
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
											
										</div>
									</div>

									</div>
							  
								   <div class="row">
										<div class="col-md-12">
			
				<div class="oneadd-slider">
					<div id="cab" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab3.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab1.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/cab2.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#cab" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
						<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#cab" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
									</div>
						  
						  </div>
						  </div>
						  
						  <div class="tab-pane fade" id="v-pills-movies" role="tabpanel" aria-labelledby="v-pills-movies-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ movies Portals</h5>
						  <div class="flight-form">
							<form>
									
									<div class="d-flex">
												 <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													  Movies
													</label>
												  </div>
												  <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													  Event
													</label>
												  </div>
												  <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													  Theatre
													</label>
												  </div>
												  <div class="radio mr-5">
													<label>
													  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													  Sports
													</label>
												  </div>
											</div>
									<div class="form-row align-items-end mt-4">
								<div class="col">
									<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										  <option>Select Movie</option>
										  <option>Veerey Ki Wedding</option>
										  <option>Billu Ustaad</option>
										  <option>Hey Ram Hamne Gandhi m....</option>
										  <option>Heart Attack 2</option>
										  <option>Pari</option>
										  <option>Daddy's Daughter</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>

								</div>
									<div class="col">
									<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										<option>Select Cinema </option>
										<option>Fun Cinemas -  DB Mall, Bhopal</option>
										<option>Cinepolis -  Aashima Mall, </option>
										<option>Mukta A2 Cinemas</option>
										<option>Bharat Cineplex: Bhopal</option>
										<option>INOX: Century 21 Mall, Bhopal</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>
								</div>

									<div class="col">
									<label class="sr-only" for="inlineFormInputGroup"></label>
									<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
										<label for="exampleInputName2" class="bmd-label-floating">Date (DD/MM/YY)</label>
										<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-75"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="bf47226c-8aba-1dae-5478-6890bebed7bb" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
									</div>
								</div>


								</div>
									<div class="form-row align-items-end mt-4">
								<div class="col">
									<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										 <option>Select Time </option>
											<option>01:45 PM</option>
											<option>02:00 PM</option>
											<option>05:50 PM</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>
								</div>

								<div class="col">
										<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										  <option>Select Class </option>
											<option>Recliner, ₹ 250.00</option>
											<option>Premier, ₹ 118.00</option>
											<option>Standard, ₹ 118.00</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>
								</div>

									<div class="col">
										<div class="form-group mb-0 bmd-form-group is-filled">
										<select class="form-control" id="exampleSelect1">
										  <option>Number of Seats </option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										<i class="fa fa-sort-down select"></i>
									  </div>
								</div>
							</div>
									<div class="form-row align-items-end mt-4">
							<div class="col">
										<!-- needed to match padding for floating labels -->
										<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Book Ticket</a>
								</div>
								</div>
							</form>
						  	
						   <div class="row">
			<div class="col-md-12">
			
				<div class="oneadd-slider mt-4">
					<div id="movie" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m3.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m4.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m5.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m6.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/movie/m3.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#movie" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
						<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#movie" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
		</div>
						  
						  </div>
						
						  </div>
					 	  
						  <div class="tab-pane fade" id="v-pills-Food" role="tabpanel" aria-labelledby="v-pills-Food-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ Food Portals</h5>
						  <div class="flight-form">
									<form class="">
										<div class="form-row align-items-end">
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Restaurant Name, Dish Name, Cuisine ...</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-cutlery" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Eg. Taj Hotel, City, locality ...</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>

										</div>
										<div class="form-row align-items-end mt-4">
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Pickup Order</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Delivery Order</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											
											<div class="col">
							<button class="btn dropdown-toggle mb-0 border-bottom w-100" type="button" id="buttonMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Reservations
							  <div class="ripple-container"></div>
							  </button>
							<div class="dropdown-menu p-2" aria-labelledby="buttonMenu1" x-placement="bottom-start" style="position: absolute; top: 37px; left: 5px; will-change: top, left;">
							
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
								
								<div class="dropdown-divider mb-3"></div>
									<div class="ml-3">
									<span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span> AC
										</label>
									  </div></span>
									  <span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span> Non-AC
										</label>
									  </div></span>
									<span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span> Solo
										</label>
									  </div></span>
								<span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Couple
										</label>
									  </div></span>
									 
									  <span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Family
										</label>
									  </div></span>
									  </div>
							</div>
					</div>

					
										</div>
										<div class="form-row align-items-end mt-4">
										<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search</a>
										</div>
										</div>
									</form>
									<div class="row">
										<div class="col-md-12">
											<div class="oneadd-slider mt-4">
												<div id="food" class="carousel slide" data-ride="carousel">
													<div class="carousel-inner">
														<div class="carousel-item active">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f1.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f2.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f3.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
														<div class="carousel-item">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f4.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f5.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f1.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
														<div class="carousel-item">
															<div class="row">
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f2.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f3.jpg" alt="Card image cap"> </div>
																</div>
																<div class="col-4">
																	<div class="card up-effect"> <img class="card-img-top" src="images/food/f4.jpg" alt="Card image cap"> </div>
																</div>
															</div>
														</div>
													</div>
													<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#food" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
													<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#food" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
											</div>
										</div>
		</div>
								
						  </div>
						  </div>
						  
						  <div class="tab-pane fade" id="v-pills-Recharge" role="tabpanel" aria-labelledby="v-pills-Recharge-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ Recharge Portals</h5>
						  <div class="flight-form">
								<div class="recharg-panel">
									<ul class="nav nav-pills" id="pills-tab" role="tablist">
									  <li class="nav-item">
										<a class="nav-link active show" id="pills-Mobile-tab" data-toggle="pill" href="#pills-Mobile" role="tab" aria-controls="pills-Mobile" aria-selected="true" aria-expanded="true"> Mobile</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-DTH-tab" data-toggle="pill" href="#pills-DTH" role="tab" aria-controls="pills-DTH" aria-selected="false" aria-expanded="false">DTH</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-Electricity-tab" data-toggle="pill" href="#pills-Electricity" role="tab" aria-controls="pills-Electricity" aria-selected="false" aria-expanded="false">Electricity</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-Line-tab" data-toggle="pill" href="#pills-Line" role="tab" aria-controls="pills-Line" aria-selected="false" aria-expanded="false">Land Line</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-GAS-tab" data-toggle="pill" href="#pills-GAS" role="tab" aria-controls="pills-GAS" aria-selected="false" aria-expanded="false">GAS</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-Broadband-tab" data-toggle="pill" href="#pills-Broadband" role="tab" aria-controls="pills-Broadband" aria-selected="false" aria-expanded="false">Broadband</a>
									  </li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
									  <div class="tab-pane fade active show" id="pills-Mobile" role="tabpanel" aria-labelledby="pills-Mobile-tab" aria-expanded="true">

										<form>
										<h5 class="mt-4 text-center">Mobile Recharge or Bill Payment</h5>
										<div class="form-row align-items-end mt-3">
										<div class="d-flex">
											 <div class="radio mr-5">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												  Prepaid
												</label>
											  </div>
											  <div class="radio mr-5">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												 Postpaid
												</label>
											  </div>
										</div>
												
											
						
												
												
												
												
										</div>
										<div class="form-row align-items-end mt-4">
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Mobile No</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-mobile" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Operator</option>
													  <option>Airtel</option>
													  <option>Aircel</option>
													  <option>BSNL</option>
													  <option>Cellone</option>
													  <option>Docomo</option>
													  <option>Idea</option>
													  <option>Uninor</option>
													  <option>Vidafone</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Amount</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Circle</option>
													  <option>Andra Pradesh</option>
													  <option>Assam</option>
													  <option>Bihar</option>
													  <option>Chenni</option>
													  <option>Gujarat</option>
													  <option>Haryana</option>
													  <option>Himachel Pradesh</option>
													  <option>Jk</option>
													  <option>Karnataka</option>
													  <option>Kerala</option>
													  <option>Madhya Pradesh</option>
													  <option>Maharashtra</option>
													  <option>Mumbai</option>
													  <option>North East</option>
													  <option>Orissa</option>
													  <option>Punjab</option>
													  <option>Rajasthan</option>
													  <option>Tamilnadu</option>
													  <option>Uttar Pradesh</option>
													  <option>West Bengal</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
							
											</div>
										</div>
										</form>
										
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
											
										</div>
									  <div class="tab-pane fade" id="pills-DTH" role="tabpanel" aria-labelledby="pills-DTH-tab" aria-expanded="false">
									  	
									  	<form>
									  	<h5 class="text-center mt-3">DTH Recharge</h5>
										<div class="form-row align-items-end mt-4">
											<!--<div class="d-flex">
													<div class="form-check form-check-inline mr-5">
														<span class="bmd-form-group is-filled"><div class="radio">
															<label>
															  <input type="radio" name="way" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
															   Prepaid

															</label>
														</div></span>
													</div>
													
												
												</div>-->
										</div>
										<div class="form-row align-items-end mt-4">
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Operator</option>
													  <option>Airtel</option>
													  <option>Aircel</option>
													  <option>BSNL</option>
													  <option>Cellone</option>
													  <option>Docomo</option>
													  <option>Idea</option>
													  <option>Uninor</option>
													  <option>Vidafone</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Subscriber Id</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Amount</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Circle</option>
													  <option>Andra Pradesh</option>
													  <option>Assam</option>
													  <option>Bihar</option>
													  <option>Chenni</option>
													  <option>Gujarat</option>
													  <option>Haryana</option>
													  <option>Himachel Pradesh</option>
													  <option>Jk</option>
													  <option>Karnataka</option>
													  <option>Kerala</option>
													  <option>Madhya Pradesh</option>
													  <option>Maharashtra</option>
													  <option>Mumbai</option>
													  <option>North East</option>
													  <option>Orissa</option>
													  <option>Punjab</option>
													  <option>Rajasthan</option>
													  <option>Tamilnadu</option>
													  <option>Uttar Pradesh</option>
													  <option>West Bengal</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
							
											</div>
										</div>
										</form>
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
									  </div>
									  <div class="tab-pane fade" id="pills-Electricity" role="tabpanel" aria-labelledby="pills-Electricity-tab" aria-expanded="false">
									  	<form>
										<h5 class="text-center mt-3">Pay For Electricity</h5>
										<div class="form-row align-items-end mt-4">
										<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>State</option>
													  <option>Andra Pradesh</option>
													  <option>Assam</option>
													  <option>Bihar</option>
													  <option>Chenni</option>
													  <option>Gujarat</option>
													  <option>Haryana</option>
													  <option>Himachel Pradesh</option>
													  <option>Jk</option>
													  <option>Karnataka</option>
													  <option>Kerala</option>
													  <option>Madhya Pradesh</option>
													  <option>Maharashtra</option>
													  <option>Mumbai</option>
													  <option>North East</option>
													  <option>Orissa</option>
													  <option>Punjab</option>
													  <option>Rajasthan</option>
													  <option>Tamilnadu</option>
													  <option>Uttar Pradesh</option>
													  <option>West Bengal</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
							
											</div>
											
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Electricity Bord</option>
													  <option>Andra Pradesh</option>
													  <option>Arunachal Pradesh</option>
													  <option>Assam</option>
													  <option>Bihar</option>
													  <option>Chhattisgarh</option>
													  <option>Delhi</option>
													  <option>Goa</option>
													  <option>Gujarat</option>
													  <option>Haryana</option>
													  <option>Himachal Pradesh</option>
													  <option>Jammu & Kashmir</option>
													  <option>Jharkhand</option>
													  <option>Karnataka</option>
													  <option>Kerala</option>
													  <option>Madhya Pradesh</option>
													  <option>Maharashtra</option>
													  <option>Orissa</option>
													  <option>Punjab</option>
													  <option>Rajasthan</option>
													  <option>Uttar Pradesh</option>
													  <option>Tamil Nadu</option>
													  <option>Telangana</option>
													  <option>Uttarakhand</option>
													  <option>West Bengal</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Consumer Number</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon">
													</div>
												</div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Amount</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon">
													</div>
												</div>
											</div>
											
										</div>
										</form>
										
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
									  	
									  </div>
									  <div class="tab-pane fade" id="pills-Line" role="tabpanel" aria-labelledby="pills-Line-tab" aria-expanded="false">
									  	<form>
									  	<h5 class="text-center mt-3">Pay Your Landline/Broadband Bill</h5>
										<div class="form-row align-items-end mt-4">
										<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Operator</option>
													  <option>Airtel</option>
													  <option>Aircel</option>
													  <option>BSNL</option>
													  <option>Cellone</option>
													  <option>Docomo</option>
													  <option>Idea</option>
													  <option>Uninor</option>
													  <option>Vidafone</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Number with STD Code</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-mobile" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Amount</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Circle</option>
													  <option>Andra Pradesh</option>
													  <option>Assam</option>
													  <option>Bihar</option>
													  <option>Chenni</option>
													  <option>Gujarat</option>
													  <option>Haryana</option>
													  <option>Himachel Pradesh</option>
													  <option>Jk</option>
													  <option>Karnataka</option>
													  <option>Kerala</option>
													  <option>Madhya Pradesh</option>
													  <option>Maharashtra</option>
													  <option>Mumbai</option>
													  <option>North East</option>
													  <option>Orissa</option>
													  <option>Punjab</option>
													  <option>Rajasthan</option>
													  <option>Tamilnadu</option>
													  <option>Telangana</option>
													  <option>Uttar Pradesh</option>
													  <option>West Bengal</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
											</div>
										</div>
										</form>
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
									  	
									  </div>
									  <div class="tab-pane fade" id="pills-GAS" role="tabpanel" aria-labelledby="pills-GAS-tab" aria-expanded="false">
									  	
									  	<form>
									  	<h5 class="text-center mt-3">Pay Your Landline/Broadband Bill</h5>
										<div class="form-row align-items-end mt-4">
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Service Provider</option>
													  <option>Bharat</option>
													  <option>Hoec</option>
													  <option>Green Gas LTD</option>
													  <option>Indraprastha</option>
													  <option>Essar</option>
													  <option>Gujatat</option>
													  <option>Gail (India)</option>
													  <option>HP</option>
													  <option>Indian Oil</option>
													  <option>Reliance</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Customer Id</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-mobile" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Amount</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Circle</option>
													  <option>Andra Pradesh</option>
													  <option>Assam</option>
													  <option>Bihar</option>
													  <option>Chenni</option>
													  <option>Gujarat</option>
													  <option>Haryana</option>
													  <option>Himachel Pradesh</option>
													  <option>Jk</option>
													  <option>Karnataka</option>
													  <option>Kerala</option>
													  <option>Madhya Pradesh</option>
													  <option>Maharashtra</option>
													  <option>Mumbai</option>
													  <option>North East</option>
													  <option>Orissa</option>
													  <option>Punjab</option>
													  <option>Rajasthan</option>
													  <option>Tamilnadu</option>
													  <option>Uttar Pradesh</option>
													  <option>West Bengal</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
							
											</div>
										</div>
										</form>
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
									  	
									  </div>
									  <div class="tab-pane fade" id="pills-Broadband" role="tabpanel" aria-labelledby="pills-Broadband-tab" aria-expanded="false">
									  	
									  	<form>
									  	<h5 class="text-center mt-3">Pay Your Landline/Broadband Bill</h5>
										<div class="form-row align-items-end mt-4">
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Operator</option>
													  <option>Airtel</option>
													  <option>Aircel</option>
													  <option>BSNL</option>
													  <option>Cellone</option>
													  <option>Docomo</option>
													  <option>Idea</option>
													  <option>Uninor</option>
													  <option>Vidafone</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Account No</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-mobile" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<label class="sr-only" for="inlineFormInputGroup"></label>
												<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
													<label for="exampleInputName2" class="bmd-label-floating">Number with STD Code</label>
													<input type="text" class="form-control" id="exampleInputName2">
													<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="form-group mb-0 bmd-form-group is-filled">
													<select class="form-control" id="exampleSelect1">
													  <option>Circle</option>
													  <option>Andra Pradesh</option>
													  <option>Assam</option>
													  <option>Bihar</option>
													  <option>Chenni</option>
													  <option>Gujarat</option>
													  <option>Haryana</option>
													  <option>Himachel Pradesh</option>
													  <option>Jk</option>
													  <option>Karnataka</option>
													  <option>Kerala</option>
													  <option>Madhya Pradesh</option>
													  <option>Maharashtra</option>
													  <option>Mumbai</option>
													  <option>North East</option>
													  <option>Orissa</option>
													  <option>Punjab</option>
													  <option>Rajasthan</option>
													  <option>Tamilnadu</option>
													  <option>Uttar Pradesh</option>
													  <option>West Bengal</option>
													</select>
													<i class="fa fa-sort-down select"></i>
												  </div>
							
											</div>
										</div>
										</form>
										<div class="form-row align-items-end mt-4 mb-4">
											<div class="col">
												<a href="#" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search </a>
											</div>
											</div>
									  </div>
									  
									</div>

									</div>
							  
								   <div class="row">
			<div class="col-md-12">
			
				<div class="oneadd-slider mt-4">
					<div id="recharge" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r3.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r4.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r5.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r1.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/reecharge/r4.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#recharge" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
						<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#recharge" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
		</div>
						  
						  </div>
						  
						  </div>
						  
						  <div class="tab-pane fade" id="v-pills-holiday" role="tabpanel" aria-labelledby="v-pills-holiday-tab">
						  <h5 class="mb-2 mt-4 text-center">Find Top Deals after Comparing From 100+ holiday Portals </h5>
						  <div class="flight-form">
							<form>
								
								<div class="form-row align-items-end mt-4">
								<div class="col">
									<label class="sr-only" for="inlineFormInputGroup"></label>
									<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
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
									<label class="sr-only" for="inlineFormInputGroup"></label>
									<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
										<label for="exampleInputName2" class="bmd-label-floating">To</label>
										<input type="text" class="form-control" id="exampleInputName2">
										<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								</div>
								<div class="form-row align-items-end mt-4">
								<div class="col">
								<label class="sr-only" for="inlineFormInputGroup"></label>
								<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
									<label for="exampleInputName2" class="bmd-label-floating">Date (DD/MM/YY)</label>
									<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-75"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="bf47226c-8aba-1dae-5478-6890bebed7bb" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
								</div>
							</div>
								<div class="col">
								<div class="form-group mb-0 bmd-form-group is-filled">
									<select class="form-control" id="exampleSelect1">
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
								<div class="form-group mb-0 bmd-form-group is-filled">
									<select class="form-control" id="exampleSelect1">
									 <option>Budget</option>
									  <option>₹ 10000 - ₹ 19999</option>
									  <option>₹ 20000 - ₹ 29999</option>
									  <option>₹ 30000 and Above </option>
									</select>
									<i class="fa fa-sort-down select"></i>
								  </div>
							</div>
								<div class="col">
									<div class="form-group mb-0 bmd-form-group is-filled">
									<select class="form-control" id="exampleSelect1">
									   <option>Duration</option>
										  <option>3D - 2N</option>
										  <option>4D - 3N</option>
										  <option>5D - 4N</option>
									</select>
									<i class="fa fa-sort-down select"></i>
								  </div>
							</div>
								


							</div>
								<div class="form-row align-items-end mt-4">
								<div class="col">
									<a href="holiday-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">SEARCH </a>
								</div>
								</div>
								
							</form>
						    <div class="row">
			<div class="col-md-12">
			
				<div class="oneadd-slider mt-4">
					<div id="holiday" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho3.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho4.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho5.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho1.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/holiday/ho4.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#holiday" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
						<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#holiday" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
		</div>
						  
						  </div>
						
						  </div>
					</div>
					
				</div>
			</div>
			<div class="row border">
						<div class="col-2 pl-0">
						<div class="arrow_box">
							OUR PARTNERS <i class="fa fa-angle-double-right"></i> 
						</div>
						</div>
						<div class="col-10 compare_partner pr-0 pl-2">
								<div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row mr-0 ml-0">
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b7.png" class="img-fluid " alt="Responsive image">
														</div>
									</div><div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b8.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b9.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b10.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b11.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b12.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									
									
									
									
									
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mr-0 ml-0">
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b13.png" class="img-fluid " alt="Responsive image">
														</div>
									</div><div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b14.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b7.png" class="img-fluid " alt="Responsive image">
														</div>

									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b8.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b9.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b10.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mr-0 ml-0">
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b11.png" class="img-fluid " alt="Responsive image">
														</div>
									</div><div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b12.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b13.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b14.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b7.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									<div class="col-2 pl-0 pr-0">
														<div class="text-center mt-2">
														<img src="images/brands/b8.png" class="img-fluid " alt="Responsive image">
														</div>
									</div>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev"> 
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span> 
							</a> 
							<a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next"> 
							<span class="carousel-control-next-icon" aria-hidden="true"></span> 
							<span class="sr-only">Next</span> 
							</a> 
						</div>
						</div>
						
					</div>
			
			
		</div>
	</div>
	