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

	      ?>
	<div class="card mt-2">
		<h6 class="text-uppercase text-center p-1 mt-2">Know Important Information</h6>
		<div class="home-grid clearfix">
			<?php if(!empty($content['categoryName'])) {
				for($k=0;$k<4;$k++) { ?>
			<a href="/categorycontent/<?php echo $content['categoryName'][$k]['pk_page_category_id'];?>" class="home-grid-item">
				<div class="home-grid-img"> <img src="/images/ugn/category_img/<?php echo $content['categoryName'][$k]['category_image'];?>"/> </div>
				<div> <?php echo $content['categoryName'][$k]['category_name'];?> <br></div>
			</a>

		<?php } } ?>
			
			<!-- <a href="ugn-list-certificate.php" class="home-grid-item">
				<div class="home-grid-img"> <img src="images/ugn/list/certicate.png"/> </div>
				<div> Certificates  <br></div>
			</a>

			<a href="ugn-list-career-options.php" class="home-grid-item">
				<div class="home-grid-img"> <img src="images/ugn/list/education.png"/> </div>
				<div> Education Options </div>
			</a>
			
			<a href="ugn-list-govt-asssistance.php" class="home-grid-item">
				<div class="home-grid-img"> <img src="images/ugn/list/asssistance.png"/> </div>
				<div> Govt. Asssistance </div>
			</a> -->
		</div>
		
		<div class="home-grid clearfix">
			
		<?php if(!empty($content['categoryName'])) {
			for($k=4;$k<8;$k++) { ?>
			<a href="/categorycontent/<?php echo $content['categoryName'][$k]['pk_page_category_id'];?>" class="home-grid-item">
				<div class="home-grid-img"> <img src="/images/ugn/category_img/<?php echo $content['categoryName'][$k]['category_image'];?>"/> </div>
				<div> <?php echo $content['categoryName'][$k]['category_name'];?> <br></div>
			</a>

		<?php } } ?>
			
			<!-- <a href="ugn-list-id.php" class="home-grid-item">
				<div class="home-grid-img"> <img src="images/ugn/list/identity.png"/> </div>
				<div> Identity Cards </div>
			</a>
			
			<a href="#" class="home-grid-item">
				<div class="home-grid-img"> <img src="images/ugn/list/imm.png"/> </div>
				<div> Immigration & Visas </div>
			</a>
			
			<a href="#" class="home-grid-item">
				<div class="home-grid-img"> <img src="images/ugn/list/finance.png"/> </div>
				<div> Personal Finance </div>
			</a> -->
				
		</div>			
		<div class="ugn-hide clearfix home-grid" style="display: none">

			<?php if(!empty($content['categoryName'])) {
				$leftCategory = count($content['categoryName']);
			for($k=8; $k < $leftCategory; $k++) { ?>
			<a href="/categorycontent/<?php echo $content['categoryName'][$k]['pk_page_category_id'];?>" class="home-grid-item">
				<div class="home-grid-img"> <img src="/images/ugn/category_img/<?php echo $content['categoryName'][$k]['category_image'];?>"/> </div>
				<div> <?php echo $content['categoryName'][$k]['category_name'];?> <br></div>
			</a>

		<?php } } ?>
				<!-- <a href="#" class="home-grid-item">
					<div class="home-grid-img"> <img src="images/ugn/list/pilgrimage.png"/> </div>
					<div> Pilgrimage Help </div>
				</a>

				<a href="#" class="home-grid-item">
					<div class="home-grid-img"> <img src="images/ugn/list/grivance.png"/> </div>
					<div> Public Grievances </div>
				</a>

				<a href="ugn-list-id.php" class="home-grid-item">
					<div class="home-grid-img"> <img src="images/ugn/list/govt.png"/> </div>
					<div>Registration & Agreeme </div>
				</a>

				<a href="services-view-all.php" class="home-grid-item">
					<div class="home-grid-img"> <img src="images/ugn/list/pro-utility.jpg"/> </div>
					<div> Utility Services </div>
				</a>	 -->
			</div>
			<div id="ugn-show" class="alert alert-primary mb-0 pt-1 pb-3 text-center bg-transparent text-primary font-weight-bold" role="alert">
				<a> View All</a>
			</div>
	</div>
	
	
	

</div>

@endsection

