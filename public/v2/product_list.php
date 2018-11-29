<?php include "include/header.php";?>

<!--main container-->

<div class="container product product-category product_list">


	<div class="row">
	<!--filter side-->
		<div class="col-3 product-left-col">

			<div class="card">
				<div class="card-header bg-primary text-white text-uppercase p-2 pl-3">
					Filters By
				</div>
				<div class="card-body">
					<form class="card-text">
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Find Criteria">
							<div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="filters" role="tablist">
				
						<div class="card mt-2">
							<div class="card-header p-2 pl-3 collapsed" role="tab" id="pricehead" data-toggle="collapse" href="#ft-price" aria-expanded="false" aria-controls="collapseOne">
								<h6 class="mb-0">Price</h6>
							</div>

							<div id="ft-price" class="collapse show" role="tabpanel" aria-labelledby="pricehead" data-parent="#filters" style="">
								<div class="card-body range-slider">
								
								<!-- Slider -->
						<div id="pmd-slider-value-range"  class="pmd-range-slider"></div>	

								<!-- Values -->										
								<div class="row">
									<div class="range-value col-6"> <label>From</label>
										₹ <span id="value-min"></span>
									</div>
									<div class="range-value col-6 text-right"><label> To </label>
										₹ <span id="value-max"></span>
									</div>
								</div>
								
								<ul class="list-group list-unstyled mt-3">
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
												  Below ₹ 2000 (1994)
												</label>
											  </div></span>
											</li>
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
												  ₹ 2000 - ₹ 4999 (1392)
												</label>
											  </div></span>
											</li>
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
												  ₹ 5000 - ₹ 9999 (1392)
												</label>
											  </div></span>
											</li>
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
												  ₹ 10000 - ₹ 19999 (423)
												</label>
											  </div></span>
											</li>
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
												  ₹ 20000 - ₹ 29999 (423)
												</label>
											  </div></span>
											</li>
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label>
												  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
												  ₹ 30000 and Above (85)
												</label>
											  </div></span>
											</li>
										</ul>
									
									
									
								</div>


							</div>
						</div>

						<div class="card mt-2">
							<div class="card-header p-2 pl-3 collapsed" role="tab" id="spec-score-head" data-toggle="collapse" href="#spec-score" aria-expanded="false" aria-controls="spec-score">
								<h6 class="mb-0">Oss Spec Score</h6>

							</div>
							
							<div id="spec-score" class="collapse" role="tabpanel" aria-labelledby="spec-score-head" data-parent="#filters" style="">
								<div class="card-body range-slider specs-slider">
								<div class="oss-score d-flex justify-content-between">
												<div class="score-count d-flex flex-column">
													<span class="border-bottom">74</span><span> 100</span>
												</div>
												<div class="score-label">OSS Spec Score</div>
											</div>
								
									<!-- Slider -->
						<div id="specs-slider"  class="pmd-range-slider "></div>	

								<!-- Values -->										
								<div class="row">
									<div class="range-value col-4 pr-0"> 
										<span id="specs-value-min"></span>
									</div>
									<div class="col-4 text-center p-0">
										To
									</div>
									<div class="range-value col-4 text-right pl-0">
										<span id="specs-value-max"></span>
									</div>
									<p class="p-3 m-0">* Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</p>
								</div>



								</div>
							</div>
						</div>

						<div class="card mt-2">
							<div class="card-header p-2 pl-3 collapsed" role="tab" id="brands-head" data-toggle="collapse" href="#brands" aria-expanded="false" aria-controls="brands">
								<h6 class="mb-0">Brands</h6>




							</div>
							<div id="brands" class="collapse" role="tabpanel" aria-labelledby="brands-head" data-parent="#filters" style="">

								<div class="card-body">

								<form class="card-text mb-3">
									<div class="input-group">
										<input type="email" class="form-control" placeholder="Find Criteria" checked>
										<div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</form>
								
										<ul class="list-group list-unstyled">
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Sumsung
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Apple
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> BlackBerry
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> GoodOne
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> I-Smart
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Motorola
												</label>
											  </div>  
											</li>
										</ul>
								



								</div>

							</div>
						</div>

						<div class="card mt-2">
							<div class="card-header p-2 pl-3 collapsed" role="tab" id="online-stoer-head" data-toggle="collapse" href="#stores" aria-expanded="false" aria-controls="stores">
								<h6 class="mb-0">Online Store</h6>
							</div>
							<div id="stores" class="collapse" role="tabpanel" aria-labelledby="online-stoer-head" data-parent="#filters" style="">
								<div class="card-body">
									<form class="card-text mb-3">
									<div class="input-group">
										<input type="email" class="form-control" placeholder="Find Criteria">
										<div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</form>
								<ul class="list-group list-unstyled">
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Amazon
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Flipkart
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Snapdeal
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> GoodOne
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> I-Smart
												</label>
											  </div>  
											</li>
											<li>
											  <div class="checkbox">
												<label>
												  <input type="checkbox"> Shopclues
												</label>
											  </div>  
											</li>
										</ul>

								</div>
							</div>
						</div>

						<div class="card mt-2">
							<div class="card-header p-2 pl-3 collapsed" role="tab" id="color-head" data-toggle="collapse" href="#colors" aria-expanded="false" aria-controls="collapseThree">
								<h6 class="mb-0">Colour</h6>




							</div>
							<div id="colors" class="collapse" role="tabpanel" aria-labelledby="color-head" data-parent="#filters" style="">

								<div class="card-body">
									<ul class="list-group color-block list-unstyled">
									  <li class="btn color-item black"></li>
									  <li class="btn color-item blue active"></li>
									  <li class="btn color-item brown"></li>
									  <li class="btn color-item cream"></li>
									  <li class="btn color-item gray"></li>
									  <li class="btn color-item green active"></li>
									  <li class="btn color-item orange"></li>
									  <li class="btn color-item pink"></li>
									  <li class="btn color-item yellow active"></li>
									</ul>

								</div>

							</div>
						</div>
					</div>

		</div>
	<!--filter side end-->
	
	<!--list side-->
		<div class="col-6 p-0 product-mid-col card">
		<!--bread crumb-->
		<div class="card-header">
			<div class="row"> 
				
				<div class="col">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb m-0 p-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Library</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data</li>
					  </ol>
					  </nav>
					</div>
				<div class="col text-right">Showing 1-15 of 15 Search Results</div>
				
			</div>
		</div>
		<!--bread crumb end-->
		
	
		<div class="card-body ">
		<!--head section-->
		<div class="row">
			<div class="col-6">
				<h4>iPhone 7 Mobiles</h4>
			</div>
			<div class="col-6">
			
				 <div class="row mb-2 bmd-form-group-sm is-filled d-flex justify-content-between">
				 <div class="col-2 p-0">
					<label for="inputPassword2" class="mt-3 text-muted" >Sort by</label>
					 </div>
					 <div class="col-6 p-0">
						 
						<select class="form-control">
						  <option>Price low to high</option>
						  <option>Price high to low</option>
						</select>
						  <i class="fa fa-sort-down product-filter-arrow"></i>
					 </div>
					 <div class="col-4 pr-3 text-right">
						 <button class="btn btn-raised btn-secondary"><i class="fa fa-th"></i></button>
						 <button class="btn btn-raised btn-secondary"><i class="fa fa-list-ul"></i></button>
					 </div>
  				</div>
			</div>
		</div>
		<!--head section end-->	
				
			<ul class="list-unstyled m-0 product-list-view">
        
        <!--list section-->
         	<?php  
for ($x = 0; $x <=5; $x++) { ?>
					  	
         <li class="media bg-white">
         
  		  
		
			<div class="col-3 p-0">
 		  <span class="badge badge-danger position-absolute m-2">New</span>
 		 
 		  <a class="custom-control-description badge position-absolute float-right fav-ico" data-toggle="collapse" href="#whislist-popup" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-heart-o"></i></a>
  		  <img class="img-thumbnail mb-3" src="images/product03.png" alt="Generic placeholder image"><br>
  		  <div class="compare-block mt-3">
  		  		<form class="border mb-3">
  		  			<label class="custom-control custom-checkbox btn-secondary">
    				<input type="checkbox" class="custom-control-input" required>
    				<span class="compare-block-in">
						<span class="custom-control-indicator"></span>
						<a class="custom-control-description" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >Add to compare <i class="fa fa-balance-scale align-self-end text-right"></i></a>

						
					</span>
  					</label>
  		  		</form>
  		  </div>
  		  </div>
			<div class="col-9">
							<div class="oss-score d-flex justify-content-between">
												<div class="score-count d-flex flex-column">
													<span class="border-bottom">74</span><span> 100</span>
												</div>
												<div class="score-label">OSS Spec Score</div>
											</div>
								<h5 class="mt-2">Xiaomi Redmi Note</h5>
								<div class="product_rating_review">
								
									<span class="product_rating-val">4.4</span>
									<span class="rating">
										<span class="checked"></span><span class="checked"></span><span class="checked"></span><span></span><span></span>
									</span>
						  			<span class="prdct-list__rtng-cnt">433,615 Ratings</span>
								</div>
								
								<div class="price-block pt-3 pb-3">
									<span class="product_new_price">₹ 4499</span>
									<span class="product_old_price">₹ 6499</span>
									<span class="product_discount-tag">31% off</span>
									<span class="">
										<img src="images/amazon-icon.jpg" alt=""> Amazon 
									</span>
								</div>
								
								<div class="feature">
									<strong>Features :</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisq volutpat mattis eros. Nullam malesuada nibh, viverra non, semper <a href="#" class="see-other">See Full</a>
								</div>
								<div class="row">
									<div class="col-4">
										<a href="product-detail.php" class="btn btn-primary">Buy now</a>
									</div>
									
									<div class="col-6"><a class="see-other" href="#">Check More Prices</a></div>
									<div class="col-2 text-right btn-group-sm">
										<button class="btn btn-danger bmd-btn-fab"><i class="fa fa-bell"></i></button>
									</div>
								</div>
							</div>
			 
		  
		  		  
		  </li>
    	 
    	 <!--list section end-->
     	 
      		<?php }?> 
      	 
         </ul>
		</div>
		</div>
	<!--list side end-->	
	
	<!--right side-->
		<div class = "col-3 right-col-product" >
		<!--topcompare-->
		<div class="card">
			<div class="card-header bg-primary text-white text-uppercase p-2 pl-3">
				Top Comparisons
			</div>
			<div class="card-body">
				<ul class="list-unstyled m-0">
					<li class="media">
						<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>

					<li class="text-center p-3 compare-icon-block">
						<span class="compare-icon">VS</span>
					</li>

					<li class="media">
						<img class="mr-3" src="images/product-02.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>
				</ul>
				<div class="btn-block">
					<button class="btn btn-primary">Compare</button>
				</div>
			</div>
		</div>
		
		
		<div class="card">

			<div class="card-body">
				<ul class="list-unstyled m-0">
					<li class="media">
						<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>

					<li class="text-center p-3 compare-icon-block">
						<span class="compare-icon">VS</span>
					</li>

					<li class="media">
						<img class="mr-3" src="images/product-02.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>
				</ul>
				<div class="btn-block">
					<button class="btn btn-primary">Compare</button>
				</div>
			</div>
		</div>
		<!--topcompare end-->
		
		<!--top search-->
		<div class="card top-search-col">
			<div class="card-header bg-primary text-white text-uppercase p-2 pl-3">
				Top searches
			</div>
			<div class="card-body">
				<ul class="list-unstyled m-0">
					<li class="media">
						<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>
					<li class="media">
						<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>
					<li class="media">
						<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>
					<li class="media">
						<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
						<div class="media-body">
							<h6 class="mt-2">Xiaomi Redmi Note</h6>
							<div class="price-block">
								<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
								<div class="rating">
									<span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
						</div>

					</li>


				</ul>

			</div>
		</div>
		<!--top search-->
		
	</div>
	<!--right side-->

	</div>
	

</div> 
<!--compare popup-->
<div class="bg-theme added-compare pb-3 pt-3 fixed-bottom collapse" id="collapseExample">
<div class="container">
<div class="d-flex justify-content-between">
<div class="d-inline-flex align-items-start">
	<div class="text-white">
		<h5 >Compare Products</h5>
		<h6 class="mt-2">(4 Products)</h6>
	</div>
</div>
	<div class="d-inline-flex align-items-end">
		<div class="align-middle">
		<a href="compare.php" class="btn btn-primary">Let's Compare !!</a>
		</div>
		<div>
		<p class="text-right pl-3 mb-0 pb-2"><a href="#" class="text-white">Clear all</a></p>
		</div>
	</div>
	</div>

<div class="row pt-3 pb-3 ">
		
		<div class="col">
				<div class="media bg-white p-3 border">
							<span class="close"><i class="fa fa-close"></i></span>
								<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
								<div class="media-body">
									<h6 class="mt-2">Xiaomi Redmi Note</h6>
									<div class="price-block">
										<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
										
									</div>
									<div class="rating">
						  <span></span><span></span><span></span><span></span><span></span>
						</div>
								</div>
								
							</div>
		</div>
		<div class="col">
				<div class="media bg-white p-3 border">
							<span class="close"><i class="fa fa-close"></i></span>
								<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
								<div class="media-body">
									<h6 class="mt-2">Xiaomi Redmi Note</h6>
									<div class="price-block">
										<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
										
									</div>
									<div class="rating">
						  <span></span><span></span><span></span><span></span><span></span>
						</div>
								</div>
								
							</div>
		</div>
		<div class="col">
				<div class="media bg-white p-3 border">
							<span class="close"><i class="fa fa-close"></i></span>
								<img class="mr-3" src="images/product-01.png" alt="Generic placeholder image">
								<div class="media-body">
									<h6 class="mt-2">Xiaomi Redmi Note</h6>
									<div class="price-block">
										<p class="real-price mb-0"><i class="fa fa-inr"></i> 14,999</p>
										
									</div>
									<div class="rating">
						  <span></span><span></span><span></span><span></span><span></span>
						</div>
								</div>
								
							</div>
		</div>
		<div class="col dotted-border text-center">
				<a href="#" class="btn btn-primary align-middle mt-4"> + Add Product</a>
		</div>
			
		
	</div>
</div>
</div>

<!--compare popup-->
<!--main container end-->
<?php include "homesection/all_popups.php";?>

<?php include "include/footer.php"; ?>