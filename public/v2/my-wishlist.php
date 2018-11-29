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
						<h6 class="mb-0"><a href="order_transaction.php">My Orders</a></h6>
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
					<h6 class="mb-0 text-primary"><a href="my-wishlist.php">My Wishlist</a></h6>
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
		
		
		
	<div class="col-9 bg-white p-3">
	<h5>My Wishlist (9) </h5>
	
		<ul class="list-unstyled">
			<?php
			for ( $i = 0; $i <= 4; $i++ ) {
				?>
			<li>
				<a href="#">
					<div class="media bg-white box-effect my-2">
						<img class="alerts_img mr-3" src="images/alerts/ch_by.jpg" alt="Generic placeholder image">
						<div class="media-body p-2">
							<h6 class="text-truncate mt-2">My Baby Excel Hot wheels Speed Club 2 Wheel Scooter</h6>
							<div class="mb-0 mt-1"><img height="21" src="images/alerts/brand.png" alt="Generic placeholder image"> </div>
							<span><h6 class="mt-2"><b>₹ 996</b></h6></span>
							<!--<span style="text-decoration: line-through;">₹ 6499</span>-->
						</div>
					</div>
				</a>
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