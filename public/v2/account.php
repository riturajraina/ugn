<?php include "include/header.php";?>



<section class="mb-4 mt-3">
	<div class="container">
		<div class="row">
		<div class="col-3">
			<div class="card">
				<div class="card-header bg-primary text-white text-uppercase p-2 pl-3">
					<!--<div class="d-flex justify-content-start">
					 <i class="fa fa-user"></i>
					 
					</div>
					<div class="d-flex justify-content-end">
					  Welcome
					</div>-->
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
					
					<div id="ft-price" class="collapse show" role="tabpanel" aria-labelledby="pricehead" data-parent="#filters" style="">
								<div class="card-body range-slider">
								<!-- Values -->
								<!--<h6 class="mb-0">ACCOUNT SETTINGS</h6>-->
								<ul class="list-group list-unstyled mt-1">
											<li>
											  <span class="bmd-form-group is-filled"><div class="radio">
												<label class="text-primary"><a href="account.php">Profile Information</a></label>
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
	
		<div class="d-flex">
				  <div><h6 class="mt-2">Personal Information</h6></div>
				  
				  <div class="ml-auto p-2"><a href="#">Edit</a></div>
				</div>
				<div class="row">
				<div class="col">
					<form>
						<div class="form-group">
							<label for="exampleInputPassword1" class="bmd-label-floating">Fist_Name</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						 </div>
					</form>
				</div>
				<div class="col">
					<form>
						<div class="form-group">
							<label for="exampleInputPassword1" class="bmd-label-floating">Fist_Name</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						 </div>
					</form>
				</div>
					
				</div>
				<div><h6 class="mt-2">Your Gender</h6></div>
				<div class="row">
				<div class="col mt-3">
					  <div class="radio">
						<label class="mr-4">
						  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						 Male
						</label>
						<label>
						  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						  Female
						</label>
					  </div>
				</div>
			
					
				</div>
				  <div class="">
				  	<div class="d-flex flex-row">
					  <div class="p-0 mr-4 mt-4">
					  <h6>Email Address</h6>
					  	
					  </div>
					  <div class="p-0 mr-4 mt-4">
					  <a href="#"><b>Edit </b></a>
					 
					  </div>
					  <div class="p-0 mr-4 mt-3">
					 <!-- <a href="#">Change password</a>-->
					   <a type="text" class="btn btn-info" data-toggle="modal" data-target="#Changepassword"> Change password </a>
					  </div>
					</div>
					<div class="row">
							<div class="col-4">
								<form>
									<div class="form-group">
										<label for="exampleInputPassword1" class="bmd-label-floating">Email Address</label>
										<input type="password" class="form-control" id="exampleInputPassword1">
									 </div>
								</form>
								
							</div>
							<div class="col-2">
								<button type="button" class="btn btn-info">Save</button>
							</div>
							</div>
				  	
				  </div>
				  
				  <div class="">
				  	<div class="d-flex flex-row">
					  <div class="p-0 mr-4 mt-4">
					  <h6>Mobile Number</h6>
					  </div>
					  <div class="p-0 mr-4 mt-4"><a href="#"><b>Edit </b></a></div>
					  <div class="p-0 mr-4 mt-4">
					  <!--<a href="#"><b>Cancel</b></a>-->
					  </div>
					</div>
					<div class="row">
							<div class="col-4">
								<form>	
									<div class="form-group">
										<label for="exampleInputPassword1" class="bmd-label-floating">+91 012356789</label>
										<input type="password" class="form-control" id="exampleInputPassword1">
									 </div>
								</form>
								
							</div>
							<div class="col-2">
								<button type="button" class="btn btn-info">Save</button>
							</div>
							</div>
				  </div>
				<!-- <div><a href="#">Deactive Account</a></div>
				  <div><a href="#">Delete Account</a></div>-->
				  <div class="d-flex">
				  <div class="font-weight-bold">
				   <a type="text" class="btn btn-info" data-toggle="modal" data-target="#DeactiveAccount"> Deactive Account </a>
				  </div>
				  <div class="ml-auto p-2 font-weight-bold">
				  <!--<a href="#">Delete Account</a>-->
				  <a type="text" class="btn btn-info" data-toggle="modal" data-target="#DeleteAccount"> Delete Account </a>
				  </div>
				</div>
				 
		</div>
	</div>
	</div> 
</section>







<?php include "homesection/all_popups.php";?>



<?php include "include/footer.php";?>