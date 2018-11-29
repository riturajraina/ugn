<div class="col-3">

				<div class=""><!--card-->
					<div class="card-header bg-primary text-white text-uppercase p-2 pl-3">
						<b>Dummy Filters</b>
					</div>
					<div class=""><!--card-body p-3-->
						<form class="card-text mb-2 pl-3 pr-3 pb-3 card">
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Find Criteria">
								<div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
						</form>

						<div id="service-filters" role="tablist">
							<div class="card mt-2">
								<div class="card-header collapsed p-2 pl-3" role="tab" id="pricehead" data-toggle="collapse" href="#ft-price" aria-expanded="false" aria-controls="collapseOne">
									<p class="mb-0 text-uppercase">Dummy filters Price</p>
								</div>

								<div id="ft-price" class="collapse show border-top" role="tabpanel" aria-labelledby="pricehead" data-parent="#filters" style="">
									<div class="card-body range-slider p-3">

										<!-- Slider -->
										<div id="pmd-slider-value-range" class="pmd-range-slider"></div>

										<!-- Values -->
										<div class="row">
											<div class="range-value col-6"> <label>From</label> ₹ <span id="value-min"></span>
											</div>
											<div class="range-value col-6 text-right"><label> To </label> ₹ <span id="value-max"></span>
											</div>
										</div>


										<ul class="list-group list-unstyled mt-3">
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 1
												</label>
											  </div>
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 2
												</label>
											  </div>
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 3
												</label>
											  </div>
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 4
												</label>
											  </div>
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 5
												</label>
											  </div>
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 6
												</label>
											  </div>
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 7
												</label>
											  </div>
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Range 8
												</label>
											  </div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="card mt-2">
								<div class="card-header collapsed p-2 pl-3" role="tab" id="spec-score-head" data-toggle="collapse" href="#spec-score" aria-expanded="false" aria-controls="spec-score">
									<p class="mb-0 text-uppercase">Dummy filters time </p>

								</div>

								<div id="spec-score" class="collapse show border-top" role="tabpanel" aria-labelledby="spec-score-head" data-parent="#filters" style="">
									<div class="card-body range-slider specs-slider p-3">

										<div class="shift clearfix">
											<ul>
												<li class="active"> <div><img src="images/s1.png" width="34" height="30" alt=""/></div> <small>00 - 06</small></li>
												<li class=""><div><img src="images/s2.png" width="34" height="30" alt=""/></div> <small>06 - 12</small></li>
												<li class=""><div><img src="images/s3.png" width="34" height="30" alt=""/></div> <small>12 - 18</small></li>
												<li class=""><div><img src="images/s4.png" width="34" height="30" alt=""/></div> <small>18 - 00</small></li>
											</ul>
										</div>
										
										
									</div>
								</div>
							</div>
							

							<div class="card mt-2">
								<div class="card-header collapsed p-2 pl-3" role="tab" id="online-stoer-head" data-toggle="collapse" href="#stores" aria-expanded="false" aria-controls="stores">
									<p class="mb-0 text-uppercase ">dummy filters type 1</p>
								</div>
								<div id="stores" class="collapse show border-top" role="tabpanel" aria-labelledby="online-stoer-head" data-parent="#filters" style="">
									<div class="card-body p-3">
										<ul class="list-group list-unstyled">
											<li>
											  <div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												  	Select 1
												</label>
											  </div>
											</li>

											<li>
												<div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												 	Select 2
												</label>
											  </div>
											</li>
											
											<li>
												<div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												 	Select 3
												</label>
											  </div>
											</li>
											
											<li>
												<div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												 	Select 4
												</label>
											  </div>
											</li>
											
											<li>
												<div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												 	Select 5
												</label>
											  </div>
											</li>

										</ul>
									</div>
								</div>
							</div>
							
							<div class="card mt-2">
								<div class="card-header collapsed p-2 pl-3" role="tab" id="online-stoer-head" data-toggle="collapse" href="#Airlines" aria-expanded="false" aria-controls="stores">
									<p class="mb-0 text-uppercase">dummy filters type 2 
									<a data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
									</p> 
								</div>
								<div id="Airlines" class="collapse show border-top" role="tabpanel" aria-labelledby="online-stoer-head" data-parent="#filters" style="">
									<div class="card-body p-3">
										<!--<form class="card-text mb-3">
											<div class="input-group">
												<input type="email" class="form-control" placeholder="Find Criteria">
												<div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
												</div>
											</div>
										</form>-->
										<ul class="list-group list-unstyled">
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Choice 1
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Choice 2
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Choice 3
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Choice 4
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Choice 5
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Choice 6
												</label>
											  </div>  
											</li>
										</ul>

									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>