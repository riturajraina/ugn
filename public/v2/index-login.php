<?php include "include/header.php";?>


<!--login section-->



<!-- Modal -->
<div class="modal fade oss-login" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body p-0">
       <div class="row mx-0">
       	<div class="col-5 login_bg p-3">
       	<p class="text-center">
       	<img src="images/homicon.png" alt="" class="img-fluid" width="150px">
       	</p>
       		<h2 class="text-center">Why to Signup</h2>
       		
       		<ul class="pl-0 m-4">
       			<li class="d-flex pb-4">
       			<div>
       				<img src="images/login-icon01.png">
       			</div>
       			<div class="pl-2 pt-2">
       			<h6>Personalized Notification</h6>
				<p>Specific to your taste & preferences periodically</p>
     			</div>
      			</li>
      			
      			<li class="d-flex pb-4">
      			<div>
       				<img src="images/login-icon02.png">
       			</div>
       			<div class="pl-2 pt-2">
      			<h6>Price & set alerts</h6>
				<p>you will be updated as and when changes occur</p>
					</div>
      			</li>
      			
      			<li class="d-flex">
      			<div>
       				<img src="images/login-icon03.png">
       			</div>
       			<div class="pl-2 pt-2">
      			<h6>Manage your wishlist</h6>
				<p>Save and revisit your loved products & deals</p>
				</div>
      			</li>
       		</ul>
       	</div>
       	<div class="col-7 p-3 login_content">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       		<form>
       		<h4>OSS LOGIN</h4>
       		<div class="form-group">
    			<label for="" class="bmd-label-floating">Email address</label>
   				 <input type="email" class="form-control" id="">
    
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">Password</label>
				<input type="password" class="form-control" id="">
  			</div>
			</form>
      	 <div class="pb-4">
      	 <div class="row">
      	 <div class="col pr-0">
		  <button type="button" class="btn btn-primary btn-block">Login</button>
		 </div>
		  <div class="col">
		  <button type="button" class="btn btn-outline-primary  btn-block" data-dismiss="modal">Cancel</button>
		   </div>
		   </div>
 		 </div>
 		 
 		 <div class="d-flex justify-content-between">
     		<p><a href="" class="text-primary px-2">Remember me</a> | <a href="#" class="text-primary px-2" data-toggle="modal" data-target="#unableloginModal">Unable to login ?</a></p>
			<p><a href="#" class="text-warning" data-toggle="modal" data-target="#NewuserModal">New User</a></p>
    	 </div>
    	 <div class="d-flex justify-content-center pt-3">
    	 <button type="button" class="btn btn-outline-primary">Login with phone & OTP</button>
			</div>
  	 	 <p class="or pt-4 text-primary">
  	 	 	or
  	 	 </p>
   	 	 <div class="pb-1">
      	 <div class="row">
      	 <div class="col pr-0 w-50">
		  <button type="button" class="btn facebook-btn btn-block"><i class="fa fa-facebook mr-1"></i> Sign in using Facebook</button>
		 </div>
		  <div class="col w-50 pl-1">
		  <button type="button" class="btn google-btn btn-block"><i class="fa fa-google-plus mr-1"></i> Sign in using Google</button>
		   </div>
		   </div>
 		 </div>
    	 
      </div>
       	</div>
       	
       	
       </div>
      
      
    </div>
  </div>
</div>
<!--login section end-->


<!-- Modal -->
<div class="modal fade oss-login" id="unableloginModal" tabindex="-1" role="dialog" aria-labelledby="unableloginModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body p-0">
       <div class="row mx-0">
       	<div class="col-5 login_bg p-3">
       		<p class="text-center">
       	<img src="images/homicon.png" alt="" class="img-fluid" width="150px">
       	</p>
       		<h2 class="text-center">Why to Signup</h2>
       		
       		<ul class="pl-0 m-4">
       			<li class="d-flex pb-4">
       			<div>
       				<img src="images/login-icon01.png">
       			</div>
       			<div class="pl-2 pt-2">
       			<h6>Personalized Notification</h6>
				<p>Specific to your taste & preferences periodically</p>
     			</div>
      			</li>
      			
      			<li class="d-flex pb-4">
      			<div>
       				<img src="images/login-icon02.png">
       			</div>
       			<div class="pl-2 pt-2">
      			<h6>Price & set alerts</h6>
				<p>you will be updated as and when changes occur</p>
					</div>
      			</li>
      			
      			<li class="d-flex">
      			<div>
       				<img src="images/login-icon03.png">
       			</div>
       			<div class="pl-2 pt-2">
      			<h6>Manage your wishlist</h6>
				<p>Save and revisit your loved products & deals</p>
				</div>
      			</li>
       		</ul>
       	</div>
       	<div class="col-7 p-3 login_content">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       		<form>
       		<h4>Unable to LOGIN</h4>
       		<div class="form-group">
    			<label for="" class="bmd-label-floating">Mobile no. or Email Id</label>
   				 <input type="email" class="form-control" id="">
    
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">OTP sent </label>
				<input type="password" class="form-control" id="">
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">Enter OTP</label>
				<input type="password" class="form-control" id="">
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">Set password</label>
				<input type="password" class="form-control" id="">
  			</div>
			</form>
      	 <div class="pb-4">
      	 <div class="row">
      	 <div class="col pr-0">
		  <button type="button" class="btn btn-primary btn-block">Login</button>
		 </div>
		  <div class="col">
		  <button type="button" class="btn btn-outline-primary  btn-block" data-dismiss="modal">Cancel</button>
		   </div>
		   </div>
 		 </div>
 		 <div class="d-flex justify-content-between">
     		<p><a href="" class="text-primary px-2">Remember me</a></p>
			<p><a href="#" class="text-warning" data-toggle="modal" data-target="#NewuserModal">New User</a></p>
    	 </div>
    	 
  	 	 <p class="or pt-4 text-primary">
  	 	 	or
  	 	 </p>
   	 	 <div class="pb-1">
      	 <div class="row">
      	 <div class="col pr-0 w-50">
		  <button type="button" class="btn facebook-btn btn-block"><i class="fa fa-facebook mr-1"></i> Sign in using Facebook</button>
		 </div>
		  <div class="col w-50 pl-1">
		  <button type="button" class="btn google-btn btn-block"><i class="fa fa-google-plus mr-1"></i> Sign in using Google</button>
		   </div>
		   </div>
 		 </div>
    	 
      </div>
       	</div>
       	
       	
       </div>
      
      
    </div>
  </div>
</div>
<!--login section end-->

<!-- Modal -->
<div class="modal fade oss-login" id="NewuserModal" tabindex="-1" role="dialog" aria-labelledby="NewuserModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body p-0">
       <div class="row mx-0">
       	<div class="col-5 login_bg p-3">
       		<p class="text-center">
       	<img src="images/homicon.png" alt="" class="img-fluid" width="150px">
       	</p>
       		<h2 class="text-center">Why to Signup</h2>
       		
       		<ul class="pl-0 m-4">
       			<li class="d-flex pb-4">
       			<div>
       				<img src="images/login-icon01.png">
       			</div>
       			<div class="pl-2 pt-2">
       			<h6>Personalized Notification</h6>
				<p>Specific to your taste & preferences periodically</p>
     			</div>
      			</li>
      			
      			<li class="d-flex pb-4">
      			<div>
       				<img src="images/login-icon02.png">
       			</div>
       			<div class="pl-2 pt-2">
      			<h6>Price & set alerts</h6>
				<p>you will be updated as and when changes occur</p>
					</div>
      			</li>
      			
      			<li class="d-flex">
      			<div>
       				<img src="images/login-icon03.png">
       			</div>
       			<div class="pl-2 pt-2">
      			<h6>Manage your wishlist</h6>
				<p>Save and revisit your loved products & deals</p>
				</div>
      			</li>
       		</ul>
       	</div>
       	<div class="col-7 p-3 login_content">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       		<form>
       		<h4>OSS Signup</h4>
       		<div class="form-group">
    			<label for="exampleInputEmail1" class="bmd-label-floating">Name</label>
   				 <input type="email" class="form-control" id="exampleInputEmail1">
    
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">Mobile no. or Email id</label>
				<input type="password" class="form-control" id="">
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">Email address</label>
				<input type="password" class="form-control" id="">
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">Password</label>
				<input type="password" class="form-control" id="">
  			</div>
  			<div class="form-group">
				<label for="" class="bmd-label-floating">Confirm Password</label>
				<input type="password" class="form-control" id="">
  			</div>
			</form>
      	 <div class="pb-4">
      	 <div class="row">
      	 <div class="col pr-0">
		  <button type="button" class="btn btn-primary btn-block">Signup</button>
		 </div>
		  <div class="col">
		  <button type="button" class="btn btn-outline-primary  btn-block" data-dismiss="modal">Cancel</button>
		   </div>
		   </div>
 		 </div>
 	
    	 
  	 	 <p class="or pt-4 text-primary">
  	 	 	or
  	 	 </p>
   	 	 <div class="pb-1">
      	 <div class="row">
      	 <div class="col pr-0 w-50">
		  <button type="button" class="btn facebook-btn btn-block"><i class="fa fa-facebook mr-1"></i> Sign in using Facebook</button>
		 </div>
		  <div class="col w-50 pl-1">
		  <button type="button" class="btn google-btn btn-block"><i class="fa fa-google-plus mr-1"></i> Sign in using Google</button>
		   </div>
		   </div>
 		 </div>
    	 
      </div>
       	</div>
       	
       	
       </div>
      
      
    </div>
  </div>
</div>
<!--login section end-->






<!--(Banner starts from hear)-->
<section>
<div id="carouselExampleControls" class="carousel slide mt-6" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item"> <img class="first-slide img-fluid w-100" src="images/banner-4.jpg" alt="First slide">
			<div class="container">
				<div class="carousel-caption">
					<!--     <h1>Example headline.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>  -->

				</div>
			</div>
		</div>
		<div class="carousel-item active"> <img class="second-slide img-fluid w-100" src="images/banner-1.jpg" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>EVERYTHING YOU NEED - AT ONE PLACE!!</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
		</div>
		<div class="carousel-item"> <img class="third-slide img-fluid w-100" src="images/banner-2.jpg" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">
					<!--  <h1>One more for good measure.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->

				</div>
			</div>
		</div>
		<div class="carousel-item"> <img class="third-slide img-fluid w-100" src="images/banner-3.jpg" alt="fourth slide">
			<div class="container">
				<div class="carousel-caption">
					<!--    <h1>One more for good measure.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->

				</div>
			</div>
		</div>
		<a class="carousel-control-prev position-absolute" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next position-absolute" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</div>
</section>

<!--(Banner end  hear)--> 

<main role="main" class="mb-5">
	<section>
	<div class="container">
		<div class="row mt-5">
			<div class="col-12 col-md-8">
            <h4 class="mb-4">Compare Features & Prices</h4>
            <div class="p-brand card">
              <div class="compare_feature_price_slider">
                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <div class="row mr-0 ml-0">
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Mobiles</p>
                            <img src="images/pro/p9.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Laptop</p>
                            <img src="images/pro/p10.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>TV</p>
                            <img src="images/pro/p11.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Home Appliance</p>
                            <img src="images/pro/p12.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                      </div>
                      <div class="row mr-0 ml-0">
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Men's Fashion</p>
                            <img src="images/pro/p13.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Women's Fashion</p>
                            <img src="images/pro/p14.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Beauty &amp; Wellness</p>
                            <img src="images/pro/p15.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Personal &amp; Health</p>
                            <img src="images/pro/p16.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row mr-0 ml-0">
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Mobiles</p>
                            <img src="images/pro/p9.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Laptop</p>
                            <img src="images/pro/p10.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>TV</p>
                            <img src="images/pro/p11.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Home Appliance</p>
                            <img src="images/pro/p12.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                      </div>
                      <div class="row mr-0 ml-0">
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Men's Fashion</p>
                            <img src="images/pro/p13.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Women's Fashion</p>
                            <img src="images/pro/p14.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Beauty &amp; Wellness</p>
                            <img src="images/pro/p15.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Personal &amp; Health</p>
                            <img src="images/pro/p16.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                      </div>
                    </div>
                    <div class="carousel-item active">
                      <div class="row mr-0 ml-0">
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Mobiles</p>
                            <img src="images/pro/p9.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Laptop</p>
                            <img src="images/pro/p10.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>TV</p>
                            <img src="images/pro/p11.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Home Appliance</p>
                            <img src="images/pro/p12.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                      </div>
                      <div class="row mr-0 ml-0">
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Men's Fashion</p>
                            <img src="images/pro/p13.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Women's Fashion</p>
                            <img src="images/pro/p14.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Beauty &amp; Wellness</p>
                            <img src="images/pro/p15.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                        <div class="col-3 pl-0 pr-0"> <a href="#">
                          <div class="text-center border p-2 bdr-shadow">
                            <p>Personal &amp; Health</p>
                            <img src="images/pro/p16.png" class="img-fluid side-effect mt-2" alt="Responsive image"> </div>
                          </a> </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleControls1" role="button" data-slide="prev"> <i class="fa fa-angle-left text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleControls1" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
              </div>
              <div class="row">
                <div class="col-2 pr-0">
                  <div class="arrow_box"> OUR PARTNERS <i class="fa fa-angle-double-right"></i> </div>
                </div>
                <div class="col-10 compare_partner pl-4">
                  <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item">
                        <div class="row mr-0 ml-0">
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b1.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b2.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b3.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b4.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row mr-0 ml-0">
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b2.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b3.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b4.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b1.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                        </div>
                      </div>
                      <div class="carousel-item active">
                        <div class="row mr-0 ml-0">
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b3.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b4.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b1.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                          <div class="col-3 pl-0 pr-0"> <a href="#">
                            <div class="text-center mt-2"> <img src="images/brands/b2.png" class="img-fluid " alt="Responsive image"> </div>
                            </a> </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                </div>
              </div>
            </div>
          </div>
			
			<div class="col-12 col-md-4">
				<h4 class="mb-4">Top Comparisons on OSS </h4>
				<div class="p-brand topcompare_slider">
					<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a href="#">
									<div class="row">
										<div class="col-6 pr-0 pl-0">
										
									
											<div class="text-center" href="#"> 
											<div class="compar-team">
												<div class="pic">
														<img src="images/cm1.png" class="img-fluid" alt="Responsive image">
												</div>
												<h5 class="mt-1">Xiaomi Redmi 4 </h5>
												<p class="mb-0">₹ 9,499.00 </p>
												<div class="rating hidden-sm "> <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i> </div>
											</div>
											</div>
											
										</div>
										<div class="col-6 pr-0 pl-0">
											<div class="text-center" href="#"> 
											<div class="compar-team">
												<div class="pic">
														<img src="images/cm2.png" class="img-fluid" alt="Responsive image">
												</div>
												<h5 class="mt-1">Xiaomi Redmi 5 </h5>
												<p class="mb-0">₹ 10,499.00 </p>
												<div class="rating hidden-sm "> <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i> </div>
											</div>
											</div>
										</div>
										<div class="VS-botton">
												<form action="#" method="post" class="last">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="display" value="1">
													<button class="bg-VS-botton" type="submit" name="submit" value="">VS</button>
												</form>
										</div>
									</div>
								</a>
								<div class="mt-1">
									<button type="button" class="btn btn-primary btn-lg btn-block">COMPARE</button>
								</div>
							</div>
							<div class="carousel-item">
								<a href="#">
									<div class="row">
										<div class="col-6 pr-0 pl-0">
											<div class="text-center" href="#"> 
											<div class="compar-team">
												<div class="pic">
														<img src="images/tv.png" class="img-fluid" alt="Responsive image">
												</div>
												<h5 class="mt-1">CloudWalker   </h5>
												<p class="mb-0">₹ 69,999 </p>
												<div class="rating hidden-sm "> <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i> </div>
											</div>
											</div>
											
										</div>
										
											<div class="col-6 pr-0 pl-0">
											<div class="text-center" href="#"> 
											<div class="compar-team">
												<div class="pic">
														<img src="images/TV1.png" class="img-fluid" alt="Responsive image">
												</div>
												<h5 class="mt-1">LG 108 cm   </h5>
												<p class="mb-0">₹ 54,990 </p>
												<div class="rating hidden-sm "> <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i> </div>
											</div>
											</div>
										</div>
										
										
										<div class="VS-botton">
												<form action="#" method="post" class="last">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="display" value="1">
													<button class="bg-VS-botton" type="submit" name="submit" value="">VS</button>
												</form>
											</div>
										
										
										
										
									</div>
								</a>
								<div class="mt-1">
									<button type="button" class="btn btn-primary btn-lg btn-block">COMPARE</button>
								</div>
							</div>
							<div class="carousel-item">
								<a href="#">
									<div class="row">
										<div class="col-6 pr-0 pl-0">
											<div class="text-center" href="#"> 
											<div class="compar-team">
												<div class="pic">
														<img src="images/lapy.png" class="img-fluid" alt="Responsive image">
												</div>
												<h5 class="mt-1">Dell Inspiron </h5>
												<p class="mb-0">₹ 25,990.00 </p>
												<div class="rating hidden-sm "> <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i> </div>
											</div>
											</div>
											
										</div>
										
											<div class="col-6 pr-0 pl-0">
											<div class="text-center" href="#"> 
											<div class="compar-team">
												<div class="pic">
														<img src="images/lapy1.png" class="img-fluid" alt="Responsive image">
												</div>
												<h5 class="mt-1">Acer Switch  </h5>
												<p class="mb-0">₹ 11,990.00 </p>
												<div class="rating hidden-sm "> <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i> </div>
											</div>
											</div>
										</div>
										
										
										<div class="VS-botton">
												<form action="#" method="post" class="last">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="display" value="1">
													<button class="bg-VS-botton" type="submit" name="submit" value="">VS</button>
												</form>
											</div>
										
										
										
										
									</div>
								</a>
								<div class="mt-1">
									<button type="button" class="btn btn-primary btn-lg btn-block">COMPARE</button>
								</div>
							</div>
						
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleControls2" role="button" data-slide="prev"> <i class="fa fa-angle-left text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
						<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleControls2" role="button" data-slide="next"> <i class="fa fa-angle-right text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> 
					</div>
				
					
				</div>
			</div>
		</div>
	</div>
	</section>
	<!--Find Best Deals & Book starts from hear-->
	<section>
	<div class="container">
		<h4 class="mb-4 mt-5">Find Best Deals & Book</h4>
		<div class="col bg-white border1 card">
			<div class="row ">
				<div class="col-2 pl-0 pr-0 flight">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  <a class="nav-link p-2 active" id="v-pills-flights-tab" data-toggle="pill" href="#v-pills-flights" role="tab" aria-controls="v-pills-flights" aria-selected="true"><i class=""><img src="images/home_icon/s1.png" class="img-fluid" alt="Responsive image"></i> Flights</a>
					  <a class="nav-link p-2" id="v-pills-trains-tab" data-toggle="pill" href="#v-pills-trains" role="tab" aria-controls="v-pills-trains" aria-selected="false"><i class=""><img src="images/home_icon/s4.png" class="img-fluid" alt="Responsive image"></i>Trains</a>
					  <a class="nav-link p-2" id="v-pills-Bus-tab" data-toggle="pill" href="#v-pills-Bus" role="tab" aria-controls="v-pills-Bus" aria-selected="false"><i class=""><img src="images/home_icon/s3.png" class="img-fluid" alt="Responsive image"></i>Bus</a>
					  <a class="nav-link p-2" id="v-pills-Cabs-tab" data-toggle="pill" href="#v-pills-Cabs" role="tab" aria-controls="v-pills-Cabs" aria-selected="false"> <i class=""><img src="images/home_icon/s5.png" class="img-fluid" alt="Responsive image"></i>Cabs</a>
					  <a class="nav-link p-2" id="v-pills-Hotels-tab" data-toggle="pill" href="#v-pills-Hotels" role="tab" aria-controls="v-pills-Hotels" aria-selected="false"> <i class=""><img src="images/home_icon/s2.png" class="img-fluid" alt="Responsive image"></i>Hotels</a>
					  <a class="nav-link p-2" id="v-pills-Food-tab" data-toggle="pill" href="#v-pills-Food" role="tab" aria-controls="v-pills-Food" aria-selected="false"> <i class=""><img src="images/home_icon/s6.png" class="img-fluid" alt="Responsive image"></i>Food</a>
					  <a class="nav-link p-2" id="v-pills-Recharge-tab" data-toggle="pill" href="#v-pills-Recharge" role="tab" aria-controls="v-pills-Recharge" aria-selected="false"> <i class=""><img src="images/home_icon/s8.png" class="img-fluid" alt="Responsive image"></i>Recharge</a>
					  <a class="nav-link p-2" id="v-pills-movies-tab" data-toggle="pill" href="#v-pills-movies" role="tab" aria-controls="v-pills-movies" aria-selected="false"> <i class=""><img src="images/home_icon/s7.png" class="img-fluid" alt="Responsive image"></i>Movies</a>
					</div>
				</div>
				<div class="col-10 pl-0">
					<div class="tab-content" id="v-pills-tabContent">
					  <h5 class="mb-2 mt-4 text-center">Find Top Deals After Compare With Different Portals</h5>
						  <div class="tab-pane fade show active" id="v-pills-flights" role="tabpanel" aria-labelledby="v-pills-flights-tab">
						 	 <div class="flight-form">
						  	<form>
				<div class="d-flex">
					<div class="form-check form-check-inline mr-5">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" onclick="document.location.href='flight-search-result.php'" name="way" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
							   One way
							</label>
						</div></span>
					</div>
					<div class="form-check form-check-inline mr-5">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" onclick="document.location.href='flight-search-result-round.php'" name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
							   Round trip
							</label>
						</div></span>
					</div>
					<div class="form-check form-check-inline">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
							   Multi trip
							</label>
						</div></span>
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
							<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-75"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="bf47226c-8aba-1dae-5478-6890bebed7bb" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
						</div>
					</div>
					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Return On (DD/MM/YY)</label>
							<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-75"><input id="datepicker1" class="form-control gj-textbox-md" data-type="datepicker" data-guid="aa0f64ef-aa55-787a-6f11-1bd198ce8d94" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
						</div>
					</div>

					<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
					<div class="col">
							<button class="btn dropdown-toggle mb-0 border-bottom w-75" type="button" id="buttonMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  Class Of Travel 
							  </button>
							<div class="dropdown-menu p-2" aria-labelledby="buttonMenu1">
								<div class="dropdown-divider mb-3"></div>
									<div class="ml-3">
									<span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span> Economy
										</label>
									  </div></span>
								<span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Premium Economy
										</label>
									  </div></span>
									  <span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> Business
										</label>
									  </div></span>
									  <span class="bmd-form-group is-filled"><div class="radio">
										<label>
										  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="bmd-radio"></span> First Class
										</label>
									  </div></span>
									  </div>
							</div>
					</div>
					
				</div>
				
				<div class="form-row align-items-end mt-4">
					<div class="col">
						<div class="form-group mb-0 bmd-form-group is-filled">
							<select class="form-control" id="exampleSelect1">
							  <option>ADULTS</option>
							  <option>1 Adult</option>
							  <option>2 Adults</option>
							  <option>3 Adults</option>
							  <option>4 Adults</option>
							  <option>5 Adults</option>
							</select>
							<i class="fa fa-sort-down select"></i>
						  </div>
							
					</div>
					
					<div class="col">
							<div class="form-group mb-0 bmd-form-group is-filled">
							<select class="form-control" id="exampleSelect1">
							  <option>CHILDREN</option>
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
							  <option>INFANTS</option>
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
							<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search Flight <i class="fa fa-plane"></i></a>
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
						  <div class="tab-pane fade" id="v-pills-trains" role="tabpanel" aria-labelledby="v-pills-trains-tab">
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
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
							<label for="exampleInputName2" class="bmd-label-floating">Enter Train Number</label>
							<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable w-75"><input id="datepicker1" class="form-control gj-textbox-md" data-type="datepicker" data-guid="aa0f64ef-aa55-787a-6f11-1bd198ce8d94" data-datepicker="true" role="input" month="1" year="2018"></div>
						</div>
					</div>

					<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
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
					
						<div class="col">
							<div class="form-group mb-0 bmd-form-group is-filled">
							<select class="form-control" id="exampleSelect1">
							  <option>INFANTS</option>
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
							<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search Flight <i class="fa fa-plane"></i></a>
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
								<div class="flight-form">
						  			<form>
						  			
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
															<label for="exampleInputName2" class="bmd-label-floating">Date of Journey</label>
															<div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker" class="form-control gj-textbox-md" data-type="datepicker" data-guid="871902a9-8e32-5caf-a2e0-4cb8a2c33e86" data-datepicker="true" role="input" month="1" year="2018"><i class="gj-icon event" role="right-icon"></i></div>
														</div>
													</div>

													<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
													<div class="col">
															<div class="form-group mb-0 bmd-form-group is-filled">
															<select class="form-control" id="exampleSelect1">
															  <option>Number of Seat</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
														  </div>

													</div>
													
												
												</div>
												<div class="form-row align-items-end mt-4">
													<div class="col">
															<a href="bus-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search Bus <i class="fa fa-bus"></i></a>
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
						  <div class="flight-form">
						  	<form>
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
											<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search Cab <i class="fa fa-car"></i></a>
									</div>
									</div>
							</form>
						  	
								<div class="cab-panel">

									<ul class="nav nav-pills" id="pills-tab" role="tablist">
									  <li class="nav-item">
										<a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" aria-expanded="true">OLA</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" aria-expanded="false">Uber</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" aria-expanded="false">Rentals</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" aria-expanded="false">Outstation</a>
									  </li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
									  <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" aria-expanded="true">

										<table class="table table-striped">
							  <thead>
								<tr>
								  <th scope="col">Cabs &amp; Auto</th>
								  <th scope="col">Fare</th>
								  <th scope="col">Pick in</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">OLA Share</th>
								  <td>₹ 50 - 60 </td>
								  <td>2 Min</td>
								</tr>
								<tr>
								  <th scope="row">OLA Micro</th>
								  <td>₹ 70 - 90 </td>
								  <td>8 Min</td>
								</tr>
								<tr>
								  <th scope="row">OLA Mini</th>
								  <td>₹ 90 - 110 </td>
								  <td>12 min</td>
								</tr>
								<tr>
								  <th scope="row">Prime Sadan</th>
								  <td>₹ 90 - 130 </td>
								  <td>30 min</td>
								</tr>
							  </tbody>
							</table>

										</div>
									  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" aria-expanded="false">
										<table class="table table-striped">
							  <thead>
								<tr>
								  <th scope="col">Cabs &amp; Auto</th>
								  <th scope="col">Fare</th>
								  <th scope="col">Pick in</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">OLA Share</th>
								  <td>₹ 50 - 60 </td>
								  <td>2 Min</td>
								</tr>
								<tr>
								  <th scope="row">OLA Micro</th>
								  <td>₹ 70 - 90 </td>
								  <td>8 Min</td>
								</tr>
								<tr>
								  <th scope="row">OLA Mini</th>
								  <td>₹ 90 - 110 </td>
								  <td>12 min</td>
								</tr>
								<tr>
								  <th scope="row">Prime Sadan</th>
								  <td>₹ 90 - 130 </td>
								  <td>30 min</td>
								</tr>
							  </tbody>
							</table>
										</div>
									  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" aria-expanded="false">
										<table class="table table-striped">
							  <thead>
								<tr>
								  <th scope="col">Cabs &amp; Auto</th>
								  <th scope="col">Fare</th>
								  <th scope="col">Pick in</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">OLA Share</th>
								  <td>₹ 50 - 60 </td>
								  <td>2 Min</td>
								</tr>
								<tr>
								  <th scope="row">OLA Micro</th>
								  <td>₹ 70 - 90 </td>
								  <td>8 Min</td>
								</tr>
								<tr>
								  <th scope="row">OLA Mini</th>
								  <td>₹ 90 - 110 </td>
								  <td>12 min</td>
								</tr>
								<tr>
								  <th scope="row">Prime Sadan</th>
								  <td>₹ 90 - 130 </td>
								  <td>30 min</td>
								</tr>
							  </tbody>
							</table>
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
						  <div class="tab-pane fade" id="v-pills-Hotels" role="tabpanel" aria-labelledby="v-pills-Hotels-tab">
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
							<a href="hotel-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search Hotels</a>
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
						  <div class="tab-pane fade" id="v-pills-Food" role="tabpanel" aria-labelledby="v-pills-Food-tab">
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
											<!--https://codepen.io/alenabdula/pen/jBBOMb Date picker-->
					
					<div class="col">
							<!-- needed to match padding for floating labels -->
							<a href="hotel-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Search Food</a>
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
						  <div class="flight-form">
						  	<form>
				<div class="d-flex">
					<div class="form-check form-check-inline mr-5">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
							   Prepaid
							</label>
						</div></span>
					</div>
					<div class="form-check form-check-inline mr-5">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio"  name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
							   Postpaid
							</label>
						</div></span>
					</div>
				</div>
				
				
				
				
				<div class="form-row align-items-end mt-4">
					<div class="col">
						<div class="form-group mb-0 bmd-form-group is-filled">
							<select class="form-control" id="exampleSelect1">
							  <option>Mobile</option>
							  <option>DTH</option>
							  <option>Electricity</option>
							  <option>Land Line</option>
							  <option>GAS</option>
							  <option>Broadband</option>
							</select>
							<i class="fa fa-sort-down select"></i>
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
					<!--<div class="form-row align-items-end mt-4">
					<div class="col">
						<label class="sr-only" for="inlineFormInputGroup"></label>
						<div class="input-group mb-2 mb-sm-0 form-group bmd-form-group">
							<label for="exampleInputName2" class="bmd-label-floating">DTH Number</label>
							<input type="text" class="form-control" id="exampleInputName2">
							<div class="input-group-addon border-0 bg-transparent map-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="form-group mb-0 bmd-form-group is-filled">
							<select class="form-control" id="exampleSelect1">
							  <option>Operator</option>
							  <option>Dish TV</option>
							  <option>Sun Direct</option>
							  <option>Tata Sky</option>
							  <option>Videocon D2H</option>
							  <option>Airtel Digital TV</option>
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
					</div>-->
					
				<div class="form-row align-items-end mt-4">
				<div class="col">
							<!-- needed to match padding for floating labels -->
							<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Recharge Now </a>
				</div>
				</div>
			</form>
						  	
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
						  <div class="tab-pane fade" id="v-pills-movies" role="tabpanel" aria-labelledby="v-pills-movies-tab">
								<div class="flight-form">
						  	<form>
						<div class="d-flex">
					<div class="form-check form-check-inline mr-5">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" onclick="document.location.href='#'" name="way" id="optionsRadios1" value="option1" checked=""><span class="bmd-radio"></span>
							   Movies
							</label>
						</div></span>
					</div>
					<div class="form-check form-check-inline mr-5">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
							   Event
							</label>
						</div></span>
					</div>
					<div class="form-check form-check-inline mr-5">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
							   Theatre
							</label>
						</div></span>
					</div>
					<div class="form-check form-check-inline">
						<span class="bmd-form-group is-filled"><div class="radio">
							<label>
							  <input type="radio" name="way" id="optionsRadios1" value="option1"><span class="bmd-radio"></span>
							   Sports
							</label>
						</div></span>
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
							<a href="flight-search-result.php" class="btn btn-primary text-uppercase pl-3 pr-3 mb-0">Book Ticket<i class="fa fa-plane"></i></a>
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
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b7.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div><div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b8.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b9.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b10.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b11.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b12.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									
									
									
									
									
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mr-0 ml-0">
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b13.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div><div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b14.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b7.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b8.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b9.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b10.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									
									
									
									
									
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mr-0 ml-0">
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b11.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div><div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b12.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b13.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b14.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b7.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

									</div>
									<div class="col-2 pl-0 pr-0">
													<a href="#">
														<div class="text-center mt-2">
														<img src="images/brands/b8.png" class="img-fluid " alt="Responsive image">
														</div>
													</a>

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
	<div class="container">
		<!--Govt section start hear-->
		<h4 class="mb-4 mt-5">Know Govt Utilities & Procedures</h4>
		<div class="tabs card">
			<nav>
				<div class="gov-tabs nav nav-tabs nav-fill" id="nav-tab" role="tablist">
					<a class="gov-tabs gov-link nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
						<div class="tabicon">
							<!--<i class="fa fa-certificate" aria-hidden="true"></i>-->
							<img src="images/certicate.png" class="img-fluid" alt="Responsive image"> </div>
						Certificates</a>
					<a class="gov-tabs gov-link nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
						<div class="tabicon"> <img src="images/career.png" class="img-fluid" alt="Responsive image"> </div>
						Career Option</a>
					<a class="gov-tabs gov-link nav-item nav-link" id="nav-healt-tab" data-toggle="tab" href="#nav-healt" role="tab" aria-controls="nav-healt" aria-selected="false">
						<div class="tabicon"> <img src="images/health.png" class="img-fluid" alt="Responsive image"> </div>
						Healthcare</a>
						<a class="gov-tabs gov-link nav-item nav-link active" id="nav-identity-tab" data-toggle="tab" href="#nav-identity" role="tab" aria-controls="nav-identity" aria-selected="false">
						<div class="tabicon"> <img src="images/identity.png" class="img-fluid" alt="Responsive image"> </div>
						Identity cards</a>
					<a class="gov-tabs gov-link nav-item nav-link " id="nav-immig-tab" data-toggle="tab" href="#nav-immig" role="tab" aria-controls="nav-immig" aria-selected="false">
						<div class="tabicon"> <img src="images/imm.png" class="img-fluid" alt="Responsive image"> </div>
						Immigration</a>
					<a class="gov-tabs gov-link nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
						<div class="tabicon"> <img src="images/education.png" class="img-fluid" alt="Responsive image"> </div>
						Money & Tax</a>
					<a class="gov-tabs gov-link nav-item nav-link" id="nav-got-tab" data-toggle="tab" href="#nav-got" role="tab" aria-controls="nav-got" aria-selected="false">
						<div class="tabicon"> <img src="images/govt.png" class="img-fluid" alt="Responsive image"> </div>
						Registrations</a>
					
					
					<a class="gov-tabs gov-link nav-item nav-link" href="ugn-index.php">
						<div class="tabicon"> <img src="images/view_all.png" class="img-fluid" alt="Responsive image"> </div>
						View All</a>
				</div>
			</nav>
			<div class="tab-content pt-4 pb-3" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>	

					<div class="container-fluid">
					
					  <img class="second-slide img-fluid w-100" src="images/idcard.jpg">
					</div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>
					<div class="container-fluid"> <img class="second-slide img-fluid w-100" src="images/banner-2.jpg">	
					</div>
				</div>
				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>
					<div class="container-fluid"> <img class="second-slide img-fluid w-100" src="images/banner-3.jpg">
					</div>
				</div>
				<div class="tab-pane fade" id="nav-got" role="tabpanel" aria-labelledby="nav-contact-tab">
					
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>	
					
					<div class="container-fluid"> <img class="second-slide img-fluid w-100" src="images/banner-4.jpg">
					</div>
				</div>
				<div class="tab-pane fade" id="nav-healt" role="tabpanel" aria-labelledby="nav-contact-tab">
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>
					
					<div class="container-fluid"> <img class="second-slide img-fluid w-100" src="images/banner-1.jpg">
					</div>
				</div>
				<div class="tab-pane fade" id="nav-identity" role="tabpanel" aria-labelledby="nav-contact-tab">
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>
						
					<div class="container-fluid"> <img class="second-slide img-fluid w-100" src="images/banner-2.jpg">
					</div>
				</div>
				<div class="tab-pane fade" id="nav-immig" role="tabpanel" aria-labelledby="nav-contact-tab">
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>
						
					<div class="container-fluid"> <img class="second-slide img-fluid w-100" src="images/banner-3.jpg">
					</div>
				</div>
				<div class="tab-pane fade" id="nav-view" role="tabpanel" aria-labelledby="nav-contact-tab">
					<div class="container-fluid gov-procedures">	
							<ul class="list-unstyled">
	
		<li class="row mb-3 ">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="gov-procedures-link d-flex justify-content-between align-items-center" href="#">Aadhar Card <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="ugn-detail.php">PAN Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Voter ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DRIVINF LICENCE <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Passport <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Ration Card <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>
				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">ESIC<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">Pensioner <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
		<li class="row mb-3">
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">KISAAN CREDIT CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">DISABILITY ID CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">FREEDOM FIGHTER CARD <i class="fa fa-angle-right fa-2x align-middle"></i></a></div>

					

				  </div>
				</div>
			</div>
			<div class="col-3">
				<div class="card box-effect">
				  <div class="card-body p-2">
					<div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="#">SAMAGRA ID (MP GOVT) <i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
				</div>
				</div>
			</div>
		
		</li>
		
	
		
	</ul>
					</div>
						
					<div class="container-fluid"> <img class="second-slide img-fluid w-100" src="images/banner-4.jpg">
					</div>
				</div>
			</div>
		</div>

		<!--Govt section end hear-->

		

		<div class="row">
			<div class="col-md-12 mt-5 oneadd_slider">
				
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner pb-4">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b1.jpg" alt="Card image cap">
							  
							</div>
						</div>
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b2.jpg" alt="Card image cap">
							  
							</div>
						</div>
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b3.jpg" alt="Card image cap">
							  
							</div>
						</div>
						
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row">
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b1.jpg" alt="Card image cap">
							  
							</div>
						</div>
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b2.jpg" alt="Card image cap">
							  
							</div>
						</div>
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b3.jpg" alt="Card image cap">
							  
							</div>
						</div>
						
					</div>
				</div>
				<div class="carousel-item">
				  <div class="row">
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b1.jpg" alt="Card image cap">
							  
							</div>
						</div>
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b2.jpg" alt="Card image cap">
							  
							</div>
						</div>
						<div class="col-4">
							<div class="card box-effect">
							  <img class="card-img-top" src="images/b3.jpg" alt="Card image cap">
							  
							</div>
						</div>
						
					</div>
				</div>
			  </div>
			  <a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<i class="fa fa-angle-left text-dark" aria-hidden="true"></i>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#carouselExampleIndicators" role="button" data-slide="next">
				<i class="fa fa-angle-right text-dark" aria-hidden="true"></i>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			</div>
		</div>
		<!--Most Popular Mobiles section-->
		<div class="row">
			<div class="col-12 col-md-12 mt-5">
				<h4 class="mb-4">Most Popular Mobiles</h4>
				<div class="regular slider">
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m1.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m2.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m3.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>   
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m4.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add2 ml-3"><span>New</span>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->

									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m5.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m6.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add2 ml-3"><span>New</span>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m7.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m8.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span></div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/mobile/m9.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social">
									<!--<li><a href="product_list.php" class="fa fa-shopping-cart"></a>
									</li>-->
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-arrows-h"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
				</div>
			</div>
		</div>

		<!--Most Popular Mobiles section-->
		<!--Top Trending On OSS start hear-->
		<div class="row">
			<div class="col-12 col-md-12 mt-5">
				<h4 class="mb-4">Top Trending On OSS</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="oneadd-slider">
							<div id="information" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner pb-4">
									<div class="carousel-item active">
										<div class="row">
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c1.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Best Flights fares on OSS</h4>
														<p class="card-text">Compare and get cheapest fares from 50+ sites</p>
														<div class="b_height2">
														<div class="text-center  mb-2">
															<div class="btn-group btn-group-toggle" data-toggle="buttons">
																<label class="btn btn-light mt-1 box-shadow">
                               
                                <div class="bfn"> ₹4,200 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/esy.png" alt="First slide"> </div>
                                </label>
															
																<label class="btn btn-light active mt-1 box-shadow">
                                <div class="bfn"> ₹3,800 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/cleartrip.png" alt="First slide"> </div>
                                </label>
															
																<label class="btn btn-light mt-1 box-shadow">
                                <div class="bfn"> ₹3,900 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/sas.png" alt="First slide"> </div>
                                </label>
															
															</div>
															
														</div>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-primary btn-lg btn-block">Compare all fare on oss</a> </div>
													</div>
												</div>
											</div>
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c2.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Aadhar Linking To PAN Mandatory </h4>
														<p class="card-text">DBPost.com | 3 hours ago</p>
														<div class="b_height2">
														<p>Individuals having permanent account number (PAN) will have to link it to their existing Aadhaar number from 1 July, a finance ministry (View More)</p>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-raised btn-warning btn-lg btn-block">Know In Detail Steps</a> </div>
													</div>
												</div>
											</div>
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c3.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Top Fashion Tips</h4>
														<p class="card-text">Most Popular Women’s Clothing Styles in 2017</p>
														<div class="b_height2">
														<p>The Love Boat soon will making another the Love Boat promises something will making another the Love Boat something...</p>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-raised btn-warning btn-lg btn-block">Explore More Trending Styles</a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c1.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Best Flights fares on OSS</h4>
														<p class="card-text">Compare and get cheapest fares from 50+ sites</p>
														<div class="b_height2">
														<div class="text-center  mb-2">
															<div class="btn-group btn-group-toggle" data-toggle="buttons">
																<label class="btn btn-light mt-1 box-shadow">
                               
                                <div class="bfn"> ₹4,200 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/esy.png" alt="First slide"> </div>
                                </label>
															
																<label class="btn btn-light active mt-1 box-shadow">
                                <div class="bfn"> ₹3,800 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/cleartrip.png" alt="First slide"> </div>
                                </label>
															
																<label class="btn btn-light mt-1 box-shadow">
                                <div class="bfn"> ₹3,900 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/sas.png" alt="First slide"> </div>
                                </label>
															
															</div>
															
														</div>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-primary btn-lg btn-block">Compare all fare on oss</a> </div>
													</div>
												</div>
											</div>
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c2.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Aadhar Linking To PAN Mandatory </h4>
														<p class="card-text">DBPost.com | 3 hours ago</p>
														<div class="b_height2">
														<p>Individuals having permanent account number (PAN) will have to link it to their existing Aadhaar number from 1 July, a finance ministry (View More)</p>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-raised btn-warning btn-lg btn-block">Know In Detail Steps</a> </div>
													</div>
												</div>
											</div>
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c3.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Top Fashion Tips</h4>
														<p class="card-text">Most Popular Women’s Clothing Styles in 2017</p>
														<div class="b_height2">
														<p>The Love Boat soon will making another the Love Boat promises something will making another the Love Boat something...</p>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-raised btn-warning btn-lg btn-block">Explore More Trending Styles</a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c1.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Best Flights fares on OSS</h4>
														<p class="card-text">Compare and get cheapest fares from 50+ sites</p>
														<div class="b_height2">
														<div class="text-center  mb-2">
															<div class="btn-group btn-group-toggle" data-toggle="buttons">
																<label class="btn btn-light mt-1 box-shadow">
                               
                                <div class="bfn"> ₹4,200 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/esy.png" alt="First slide"> </div>
                                </label>
															
																<label class="btn btn-light active mt-1 box-shadow">
                                <div class="bfn"> ₹3,800 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/cleartrip.png" alt="First slide"> </div>
                                </label>
															
																<label class="btn btn-light mt-1 box-shadow">
                                <div class="bfn"> ₹3,900 </div>
                                <div class="ser-fly-com-logo"> <img class="img-fluid" src="images/sas.png" alt="First slide"> </div>
                                </label>
															
															</div>
															
														</div>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-primary btn-lg btn-block">Compare all fare on oss</a> </div>
													</div>
												</div>
											</div>
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c2.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Aadhar Linking To PAN Mandatory </h4>
														<p class="card-text">DBPost.com | 3 hours ago</p>
														<div class="b_height2">
														<p>Individuals having permanent account number (PAN) will have to link it to their existing Aadhaar number from 1 July, a finance ministry (View More)</p>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-raised btn-warning btn-lg btn-block">Know In Detail Steps</a> </div>
													</div>
												</div>
											</div>
											<div class="col-4">
												<div class="card up-effect"> <img class="card-img-top" src="images/c3.jpg" alt="Card image cap">
													<div class="card-body allbody_height">
														<h4 class="card-title">Top Fashion Tips</h4>
														<p class="card-text">Most Popular Women’s Clothing Styles in 2017</p>
														<div class="b_height2">
														<p>The Love Boat soon will making another the Love Boat promises something will making another the Love Boat something...</p>
														</div>
														<div class="text-center"> <a href="#" class="btn btn-raised btn-warning btn-lg btn-block">Explore More Trending Styles</a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#information" role="button" data-slide="prev"> <i class="fa fa-angle-left text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#information" role="button" data-slide="next"> <i class="fa fa-angle-right text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Top Trending On OSS end hear-->
		
	</div>
	</section>
	<!--add section start hear-->
			<div class="row">
				<div class="adds_test w-100">
					Banner images hear  
				</div>
			</div>
	<!--add section start hear-->
	
	<sectoin>
		<div class="container">
			<div class="row">
			<div class="col-12 col-md-12 mt-5">
				<h4 class="mb-4">Latest In Fashion</h4>
				<div class="regular slider">
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f1.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f5.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f2.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f6.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add2 ml-3"><span>New</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f3.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f7.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add2 ml-3"><span>New</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f8.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f6.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span></div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/f9.jpg" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="pro-off-slider">
					<div id="relax" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner pb-4">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p1.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p2.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p3.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p4.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p5.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p6.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p7.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p8.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p5.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p6.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p7.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-3 pl-1 pr-1">
										<div class="card up-effect"> <img class="card-img-top" src="images/p8.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-12 mt-5">
				<h4 class="mb-4">New Arrivals in Electronics</h4>
				<div class="regular slider">
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e1.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e2.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e3.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add2 ml-3"><span>New</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e4.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e5.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add2 ml-3"><span>New</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e7.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e8.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add ml-3"><span>50% off</span></div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-item">
							<div class="our-team">
								<div class="pic"> <img src="images/electric/e9.png" class="img-fluid" alt="Responsive image"> </div>
								<div class="team-content">
									<h3 class="title">Cillcips Air Purifier A215</h3>
									<span class="post">₹124.00</span>
									<div class="rating hidden-sm"> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="price-text-color fa fa-star"></i> <i class="fa fa-star"></i> </div>
								</div>
								<div class="labul_add1 ml-3"><span>Sale</span>
								</div>
								<ul class="social1">
									<li><a href="#" class="fa fa-heart-o"></a>
									</li>
									<li><a href="#" class="fa fa-eye"></a>
									</li>
								</ul>
							</div>
						</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-5 mt-5">
				<h4 class="mb-3 mt-2">Top Deals</h4>
				<div class="row">
					<div class="col-md-12 pictop"> <a href="#"><img src="images/td1.png" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
				</div>
			</div>
			<div class="col-7 mt-5 deal_tabs">
				<ul class="nav nav-pills justify-content-end mb-2 mr-right" id="pills-tab" role="tablist">
					<li class="nav-item"> <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all1" role="tab" aria-controls="pills-all" aria-selected="true">All</a> </li>
					<li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-electronics1" role="tab" aria-controls="pills-profile" aria-selected="false">Electronics</a> </li>
					<li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-fashion1" role="tab" aria-controls="pills-contact" aria-selected="false">Fashion</a> </li>
					<li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-beauty1" role="tab" aria-controls="pills-contact" aria-selected="false">Beauty &amp; Wellness</a> </li>
					<li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-travel1" role="tab" aria-controls="pills-contact" aria-selected="false">Travel</a> </li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-all1" role="tabpanel" aria-labelledby="pills-home-all1">
						<div class="fivetabs">
							<div id="topbrands1" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
									</div>
									<div class="carousel-item ">
												<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										
									</div>
									<div class="carousel-item">
											<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>

									</div>
								</div>
								
								
								
								<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands1" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
								
								
								
								
								
								<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands1" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
								
								<!--<a class="carousel-control-prev" href="#topbrands1" role="button" data-slide="prev"> <i class="fa fa-angle-left fa-2x text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a>-->
								
								
								<!--<a class="carousel-control-next topdeal_top" href="#topbrands1" role="button" data-slide="next"> <i class="fa fa-angle-right fa-2x text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a>--> 
								</div>
						</div>

					</div>
					<div class="tab-pane fade" id="pills-electronics1" role="tabpanel" aria-labelledby="pills-electronics1-tab">
						<div class="fivetabs">
							<div id="topbrands2" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
									</div>
									<div class="carousel-item ">
												<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										
									</div>
									<div class="carousel-item">
											<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>

									</div>
								</div>
								
								
								
								<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands2" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
								
								
								<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands2" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
								
								
								</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-fashion1" role="tabpanel" aria-labelledby="pills-fashion1-tab">
						<div class="fivetabs">
							<div id="topbrands3" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
									</div>
									<div class="carousel-item ">
												<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										
									</div>
									<div class="carousel-item">
											<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>

									</div>
								</div>
								
							<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands3" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
							
								<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands3" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
							
							
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-beauty1" role="tabpanel" aria-labelledby="pills-beauty1-tab">
						<div class="fivetabs">
							<div id="topbrands4" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
									</div>
									<div class="carousel-item ">
												<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										
									</div>
									<div class="carousel-item">
											<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>

									</div>
								</div>
								<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands4" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
							
								<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands4" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a>
								 </div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-travel1" role="tabpanel" aria-labelledby="pills-travel1-tab">
						<div class="fivetabs">
							<div id="topbrands5" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
									</div>
									<div class="carousel-item ">
												<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										
									</div>
									<div class="carousel-item">
											<div class="row text-center">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs3.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs4.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>
										<div class="row text-center mt-4">
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs5.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs6.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs1.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
											<div class="col-md-3">
												<div class="pictop"> <a href="#"> <img src="images/tbs2.jpg" class="img-fluid p-img img-thumbnail" alt="Responsive image"> </a> </div>
											</div>
										</div>

									</div>
								</div>
								<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands5" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> <div class="ripple-container"></div></a>
							
								<a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#topbrands5" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> <div class="ripple-container"></div></a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		</div>
	</sectoin>
	<!--add section start hear-->
			<div class="row">
				<div class="adds_test w-100">
					Banner images hear  
				</div>
			</div>
	<!--add section start hear-->
	
	<section>
		<div class="container">
			<div class="row">
			<div class="col-md-12 mt-5">
			<h4 class="mb-4">Latest Govt Procedure news</h4>
				<div class="oneadd-slider">
					<div id="relax1" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner pb-4">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b6.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b7.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b8.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b6.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b7.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b8.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b6.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b7.jpg" alt="Card image cap"> </div>
									</div>
									<div class="col-4">
										<div class="card up-effect"> <img class="card-img-top" src="images/b8.jpg" alt="Card image cap"> </div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax1" role="button" data-slide="prev"> <i class="fa fa-angle-left  text-dark" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next btn btn-default bmd-btn-fab bmd-btn-fab-sm position-absolute" href="#relax1" role="button" data-slide="next"> <i class="fa fa-angle-right  text-dark" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
				</div>
			</div>
		</div>
		</div>
	</section>

</main>







<?php include "include/footer.php";?>