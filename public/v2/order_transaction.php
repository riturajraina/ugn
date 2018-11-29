<?php include "include/header.php";?>



<section class="mb-4 mt-3">
	<div class="container">
		<div class="row">
		<div class="col-3">
			<div class="card">
				<div class="card-header bg-primary text-white text-uppercase p-2 pl-3">
					<div class="d-flex">
				  <div class="p-2"><i class="fa fa-user"></i></div>
				  
				  <div class="ml-auto p-2">Welcome</div>
				</div>
				</div>
			</div>
			<div id="filters" role="tablist">
			<div class="card mt-2">
					<div class="card-header p-2 pl-3 collapsed" role="tab" id="color-head2" data-toggle="collapse" href="#Category" aria-expanded="" aria-controls="collapseThree4">
						<h6 class="mb-0 text-primary"><a href="order_transaction.php">My Orders</a></h6>
					</div>
			</div>
			
			<div class="card mt-2">
					<div class="card-header p-2 pl-3 collapsed" role="tab" id="pricehead" data-toggle="collapse" href="#ft-price" aria-expanded="false" aria-controls="collapseOne">
						<h6 class="mb-0">Account Settings</h6>
					</div>
					
					<div id="ft-price" class="collapse" role="tabpanel" aria-labelledby="pricehead" data-parent="#filters" style="">
								<div class="card-body range-slider">
								<ul class="list-group list-unstyled mt-1">
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label><a href="account.php">Profile Information</a></label>
											  </div></span>
											</li>
										  <li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label><span class="checkbox-decorator"><span class="check"></span></span>Mannage Addreses</label>
											  </div></span>
											</li>
										  <li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label><span class="checkbox-decorator"><span class="check"></span></span>Notification Preferences</label>
											  </div></span>
											</li>
										</ul>
								</div>
					</div>
				</div>
				
			<div class="card mt-2">
				<div class="card-header p-2 pl-3 collapsed" role="tab" id="color-head1" data-toggle="collapse" href="#Deals" aria-expanded="false" aria-controls="collapseThree">
					<h6 class="mb-0">My Alerts</h6>
				</div>
				<div id="Deals" class="collapse " role="tabpanel" aria-labelledby="color-head" data-parent="#filters" style="">
					<div class="card-body">
						<ul class="list-group list-unstyled">
							<li>
							  <span class="bmd-form-group is-filled"><div class="radio">
								<label><span class="checkbox-decorator"><span class="check"></span></span>Price Alerts</label>
							  </div></span>
							</li>
						  <li>
							  <span class="bmd-form-group is-filled"><div class="radio">
								<label><span class="checkbox-decorator"><span class="check"></span></span>Deal  Alerts</label>
							  </div></span>
							</li>
						  <li>
							  <span class="bmd-form-group is-filled"><div class="radio">
								<label><span class="checkbox-decorator"><span class="check"></span></span>Promotinal Alerts</label>
							  </div></span>
							</li>
						</ul>
					</div>
				</div>
			</div> 
			
			<div class="card mt-2">
				<div class="card-header p-2 pl-3 collapsed" role="tab" id="color-head2" data-toggle="collapse" href="#Category" aria-expanded="" aria-controls="collapseThree1">
					<h6 class="mb-0"><a href="my-wishlist.php">My Wishlist</a></h6>
				</div>
				<div id="ft-price" class="collapse show" role="tabpanel" aria-labelledby="pricehead" data-parent="#filters" style="">
								<!--<div class="card-body range-slider">
								<ul class="list-group list-unstyled mt-1">
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label><span class="checkbox-decorator"><span class="check"></span></span>Profile Information</label>
											  </div></span>
											</li>
										  <li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label><span class="checkbox-decorator"><span class="check"></span></span>Mannage Addreses</label>
											  </div></span>
											</li>
										  <li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label><span class="checkbox-decorator"><span class="check"></span></span>Notification Preferences</label>
											  </div></span>
											</li>
										</ul>
								</div>-->
					</div>
			</div>
			
			<div class="card mt-2">
					<div class="card-header p-2 pl-3 collapsed" role="tab" id="color-head3" data-toggle="collapse" href="#Wallet" aria-expanded="" aria-controls="collapseThree2">
						<h6 class="mb-0"> <i class="fa fa-sign-out" aria-hidden="true"></i>Log out</h6>
					</div>
			</div>
				
			<div class="card mt-2">
				<div class="card-header p-2 pl-3 collapsed" role="tab" id="color-head4" data-toggle="collapse" href="#Sales" aria-expanded="false" aria-controls="collapseThree3">
					<h6 class="mb-0">Frequently visted</h6>
				</div>
				<div id="Sales" class="collapse " role="tabpanel" aria-labelledby="color-head" data-parent="#filters" style="">
					<div class="card-body">

						<ul class="list-group list-unstyled">
							 <li>
							  <span class="bmd-form-group is-filled"><div class="radio">
								<label><span class="checkbox-decorator"><span class="check"></span></span>Change password</label>
								<label><span class="checkbox-decorator"><span class="check"></span></span>Help Center</label>
							  </div></span>
							</li>
						</ul>
					</div>
				</div>
			</div>	
			</div> 	
		</div>
		
		
		
	<div class="col-9">
				<div class="row">
					<div class="col">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb m-0 p-0">
								<li class="breadcrumb-item"><a href="#">Home</a>
								</li>
								<li class="breadcrumb-item"><a href="#">Library</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data</li>
							</ol>
						</nav>
					</div>

				</div>
			
			
		<ul class="list-unstyled mt-2">
			<?php
			for ( $i = 0; $i <= 2; $i++ ) {
				?>
			<li>
				<div class="card p-0  mb-3">
			<section>
				<div class="card">
					<!--<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb service-breadcrumb border">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Travel</a></li>
						<li class="breadcrumb-item active" aria-current="page">Flight</li>
						<li class="ml-auto">Showing 1-15 of 15 Search Results</li>
					  </ol>
					</nav>-->
					 <div class="card-header bg-light p-3">
						<div class="d-flex justify-content-between col-12">
						<div><button class="btn btn-sm btn-raised btn-primary"> OD110716082400577000</button></div>
						<div></div>
						<div>
							<!--<div class="d-flex ">
							<button class="btn btn-outline-secondary btn-sm mr-5"><i class="fa fa-question" aria-hidden="true"></i> Need Help</button>
							<button class="btn btn-primary btn-sm"><i class="fa fa-map-marker" aria-hidden="true"></i> Track</button>
							</div>-->
						</div>
					</div>
					 </div>
					
					
					
					<div class="text-left pt-2 pr-4 pl-4 pb-2">
					
					<div class="media bg-white box-effect my-2">
						<img class="alerts_img mr-3" src="images/alerts/mens-t-shirt.jpg" alt="Generic placeholder image">
						<div class="media-body p-2">
								<div class="row">
									<div class="col">
										<h6 class="mt-2">ShopDoze Full Sleeve Solid Men's Jacket</h6>
							<p class="mb-0 mt-1">Color:Black</p>
							<span class="text-secondary"><small>Seller: Fashioncounter</small></span>
									</div>
									<div class="col">
										<h6 class="mt-2">₹994</h6>
							<p class="text-left mb-0 mt-1"><b class="text-success">Offers:</b>2</p>
							
									</div>
									<div class="col">
										<h6 class="mt-2">Returned</h6>
							<p class="mb-0 mt-1">Your item has been returned</p>
							
									</div>
								</div>
							
						</div>
					</div>
					
					</div>
					<div class=" p-3 ">
				<div class="card border border-ligh">
				  <div class="card-header  bg-light">
				  
				  <div class="d-flex justify-content-between col-12">
						<div>Refund Status</div>
						<div></div>
						<div>View Details
						</div>
					</div>
				  </div>
				  <div class="card-body bg-white text-left">
					<div class="media">
						
						<div class="media-body">
								<div class="row">
									<div class="col">
							<p class="mb-0 mt-1">Refund To: PhonePe Wallet</p>
							<p class="mb-0 mt-1">Refund Id: 0123456789</p>
							<span class="text-success"><small >COMPLETED</small></span>
									</div>
									<div class="col">
										<h6 class="mt-2">₹994</h6>
									</div>
									<div class="col">
										<p class="mb-0 mt-1"><span>₹994.0 as refund will be transferred to your <a href="https://www.flipkart.com/account/wallet" target="_blank" rel="noopener noreferrer" class="_3B9QDV">PhonePe Wallet</a> within 1 business day (Bank holidays not included). Credit Card refunds will take 7 business days.</span> </p>
									</div>
								</div>
							
						</div>
					</div>	
				  </div>
				</div>
				
			</div>
			
			<di class="card-footer">
				<div class="d-flex justify-content-between col-12">
						<div>Ordered On Fri, Nov 10th '17</div>
						<div></div>
						<div>Order Total ₹994
						</div>
					</div>
			</di>
	
			</div>
			
				

				
			</section>
			</div>
			</li>
			<?php
			}
			?>
		</ul>
				 
	</div>
	</div>
	</div> 
</section>







<?php include "homesection/all_popups.php";?>



<?php include "include/footer.php";?>