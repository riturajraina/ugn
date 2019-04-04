@extends('layouts.mobile_front')

@section('content')
<div id="splash">
	<div id="splash-content">
		<img class="d-block img-fluid" src="mobile/img/logo.png">
	</div>
</div>

<style>
	.home-grid{display: flex;}
	.home-grid-item{position: relative; width: 25%; text-align: center; vertical-align: top; padding: 0.3rem; font-size: 0.8rem;}
	.home-grid-img{width: 44px; height: auto; text-align: center; margin: 0 auto;}
	.home-grid-img img{max-width: 100%; height: auto;}
</style>

<div class="section section-space54">
 



	<div class="card">
		<h6 class="text-uppercase text-center p-1 mt-2">Compare Features & Prices </h6>
		<div class="home-grid clearfix">

			<a href="mobile_intermediate.php" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/p1.png"/> </div>
				<div> Mobile </div>
			</a>

			<a href="#" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/p2.png"/> </div>
				<div> Laptops </div>
			</a>
			
			<a href="#" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/p3.png"/> </div>
				<div> TV's </div>
			</a>
			
			<a href="#" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/p4.png"/> </div>
				<div> Appliances </div>
			</a>
					
		</div>
			<div class="home-grid clearfix">
				<a href="mobile_intermediate.php" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/p5.png"/> </div>
					<div>  Men's </div>
				</a>

				<a href="#" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/p6.png"/> </div>
					<div> Women's </div>
				</a>

				<a href="#" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/p7.png"/> </div>
					<div> Beauty </div>
				</a>

				<a href="#" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/p4.png"/> </div>
					<div> Appliances </div>
				</a>	
		    </div>
	</div>
	
	
	<div class="card mt-2">
		<h6 class="text-uppercase text-center p-1 mt-2">Get Best Offers & Deals</h6>
		<div class="home-grid clearfix">

			<a href="flight.php" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/s1.png"/> </div>
				<div> Flight </div>
			</a>

			<a href="hotel.php" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/s5.png"/> </div>
				<div> Hotels </div>
			</a>
			
			<a href="train.php" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/s2.png"/> </div>
				<div> Trains </div>
			</a>
			
			<a href="bus.php" class="home-grid-item text-truncate">
				<div class="home-grid-img"> <img src="mobile/img/home_icon/s3.png"/> </div>
				<div> Bus </div>
			</a>
					
		</div>
		<div class="clearfix home-grid">
				<a href="cab.php" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/s4.png"/> </div>
					<div>  Cabs </div>
				</a>

				<a href="recharge_mobile.php" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/s7.png"/> </div>
					<div> Recharge </div>
				</a>

				<a href="food.php" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/s6.png"/> </div>
					<div> Food </div>
				</a>

				<a href="services-view-all.php" class="home-grid-item text-truncate">
					<div class="home-grid-img"> <img src="mobile/img/home_icon/p4.png"/> </div>
					<div> Appliances </div>
				</a>	
			</div>
	</div>
	
	<?php 
//echo '<pre/>'; print_r($content['categoryName']);
	      ?>
	<div class="card mt-2">
		<h6 class="text-uppercase text-center p-1 mt-2">Know Important Information</h6>
		
			<?php if(!empty($content['categoryName'])) {
				for($k=0;$k<8;$k++) { 
					if($k==0) {
						echo '<div class="home-grid clearfix">';
					}

					  if($k%4 == 0) { echo '</div><div class="home-grid clearfix">';} ?>
					  
			<a href="/categorycontent/<?php echo $content['categoryName'][$k]['pk_page_category_id'];?>" class="home-grid-item">
				<div class="home-grid-img"> <img src="/images/ugn/category_img/<?php echo $content['categoryName'][$k]['category_image'];?>"/> </div>
				<div> <?php echo $content['categoryName'][$k]['category_name'];?> <br></div>
			</a>

			

		<?php } } ?>
			
			
		</div>
		
		
		

			<?php if(!empty($content['categoryName'])) {
				$leftCategory = count($content['categoryName']);
			for($k=8; $k < $leftCategory; $k++) { 
				if($k==8) {
					echo '<div class="ugn-hide clearfix home-grid" style="display: none">';
				}

				 if($k > 8 && $k%4 == 0) { echo '</div><div class="ugn-hide clearfix home-grid" style="display: none">';} 
				 ?>
			<a href="/categorycontent/<?php echo $content['categoryName'][$k]['pk_page_category_id'];?>" class="home-grid-item">
				<div class="home-grid-img"> <img src="/images/ugn/category_img/<?php echo $content['categoryName'][$k]['category_image'];?>"/> </div>
				<div> <?php echo $content['categoryName'][$k]['category_name'];?> </div>
			</a>
			

		<?php } } ?>
				
			</div>
			<div id="ugn-show" class="alert alert-primary mb-0 pt-1 pb-3 text-center bg-transparent text-primary font-weight-bold" role="alert">
				<a> View All</a>
			</div>
	</div>
	
	
	

</div>

@endsection

