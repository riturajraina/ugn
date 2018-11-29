<?php include "include/header.php";?>

<!--main container-->

<div class="container product product-category product_list">


	<div class="row">
		<!--filter side-->
		<div class="col-3">
			<div class="card">
				<div class="card-header bg-primary text-white text-uppercase p-2 pl-3">
					Filters By
				</div>
				<div class="card-body">
					<form class="card-text">
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Search categories">
							<div class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="filters" role="tablist">

				<div class="card mt-2">
					<div class="card-header p-2 pl-3 collapsed" role="tab" id="pricehead" data-toggle="collapse" href="#ft-price" aria-expanded="false" aria-controls="collapseOne">
						<h6 class="mb-0">Categories</h6>
					</div>

					<div id="ft-price" class="collapse show" role="tabpanel" aria-labelledby="pricehead" data-parent="#filters" style="">
						<div class="card-body range-slider">
							<!-- Values -->
							<ul class="list-group list-unstyled mt-3">
								<li>
									<div class="checkbox">
										<label><input type="checkbox">Books, Music and Movies</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Computers, laptops & Accessories</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Electronics</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Fashion & Apparels</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Home Décor & Furnishing</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Kitchen and Home Appliances</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Others</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Personal care & Cosmetics</label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<label><input type="checkbox"> Recharge</label>
									</div>
								</li>
								
								
								
								
								
								
								
								
								
							</ul> 
							</div> 
							</div>
							 </div>



								<div class="card mt-2">
	<div class="card-header p-2 pl-3 collapsed" role="tab" id="brands-head" data-toggle="collapse" href="#brands" aria-expanded="false" aria-controls="brands">
		<h6 class="mb-0">Similar Stores</h6>
	</div>
	<div id="brands" class="collapse" role="tabpanel" aria-labelledby="brands-head" data-parent="#filters" style="">

		<div class="card-body">

			<form class="card-text mb-3">
				<div class="input-group">
					<input type="email" class="form-control" placeholder="Search categories" checked>
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

	<!--list side end-->	

 
	<div class="col-9 ">
		<ul class="list-unstyled">
			<?php
			for ( $i = 0; $i <= 8; $i++ ) {
				?>
			<li>
				<a href="#">
					<div class="media bg-white box-effect my-2">
						<img class="alerts_img mr-3" src="images/alerts/mens-t-shirt.jpg" alt="Generic placeholder image">
						<div class="media-body p-2">

							<h6 class="text-truncate mt-2">Upto 70% Off on Baby Care Products </h6>
							<p class="mb-0 mt-1">Shop from pregnancy pillows, Maternity belts, breast pumps, Maternity dresses, books on Maternity, vitamins, supplements, diapers, baby bedding sets, baby wipes, strollers &amp; prams and more.</p>
							<span class="text-secondary"><small>2 Hours Ago</small></span>
						</div>
					</div>
				</a>
			</li>
			<?php
			}
			?>
		</ul>
		<?php include "include/pagination.php";?>
	</div>
	</div>
<!--main container end-->

<?php include "include/footer.php";?>