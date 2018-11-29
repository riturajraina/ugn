</div>
<footer class="foot">
	<div class="container">
		<div class="row mb-5">
			<div class="col-3 mt-5">
				<h5 class="mb-4"> <a href="#"> ONE STOP SHOP </a></h5>
				<p>Every daily need from morning to night - for young to old is available on OSS through our valued ecosystem of partners and compendium of information.</p>
				<div>
					<p><i class="fa fa-map-marker mr-2" aria-hidden="true"></i> Oss Office,5th Floor, DB city, Bhopal, MP 462011 </p>
					<p><i class="fa fa-phone mr-2" aria-hidden="true"></i> (+91) 12345678 </p>
					<p><i class="fa fa-envelope mr-2" aria-hidden="true"></i> mail@domain.com </p>
				</div>
			</div>
			<div class="col-3 mt-5">
				<h5 class="mb-4"> Quick Links </h5>
				<p> Upcoming Mobiles </p>
				<p>Gadget News &amp; Reviews</p>
				<p>Compare Mobiles</p>
				<p>UGN</p>
				<p>Travels</p>
				<p>Services</p>
				<p>Place of Interest</p>
			</div>
			<div class="col-3 mt-5">
				<h5 class="mb-4"> Group Sites </h5>
				<p> <a> Bhaskar.Com </a> </p>
				<p><a>Divyabhaskar.Com</a>
				</p>
				<p><a>Dailybhaskar.Com</a>
				</p>
				<p><a>Divyamarathi.Com</a>
				</p>
				<p><a>Moneybhaskar.Com</a>
				</p>
				<p><a>Myfmindia.Com</a>
				</p>
				<p><a>Myfmindia.Com</a>
				</p>
				<p><a>Dainikbhaskargroup.Com</a>
				</p>
			</div>
			<div class="col-3 mt-5">
				<h5 class="mb-4"> Mobile App </h5>
				<div> <img src="images/anroid.png" class="img-fluid" alt="Responsive image">
				</div>
				<div class="mt-4"> <img src="images/ios.png" class="img-fluid" alt="Responsive image">
				</div>
				<h5 class="mt-5"> OUR SOCIAL </h5>
				<div class="row mt-1">
					<div class="col-md-1"> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </div>
					<div class="col-md-1"> <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </div>
					<div class="col-md-1"> <a href="#"> <i class="fa fa-wifi" aria-hidden="true"></i> </a> </div>
					<div class="col-md-1"> <a href="#"> <i class="fa fa-address-book" aria-hidden="true"></i> </a> </div>
				</div>
			</div>
		</div>
	</div>
	<div class="foot_bg">
		<ul class="nav justify-content-center clearfix">
			<li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li>
			<li class="nav-item"> <a class="nav-link" href="#">Blog</a> </li>
			<li class="nav-item"> <a class="nav-link" href="sitemap.php">Sitemap</a> </li>
			<li class="nav-item"> <a class="nav-link" href="#">Contact Us</a> </li>
			<li class="nav-item"> <a class="nav-link" href="#">Terms & Conditions</a> </li>
			<li class="nav-item"> <a class="nav-link" href="#">Privacy Policy</a> </li>
		</ul>
	</div>
	<div class="container">
		<div class="row mt-1">
			<div class="col">
				<p class="text-left">© 2016 ossonline.com | All Rights Reserved. </p>
			</div>
			<div class="col">
				<p class="text-right"> Designed by - OSSonline.com </p>
			</div>
		</div>
	</div>
</footer>

<!-- Modal location-->
<div class="modal fade" id="exampleModal" tabindex="-" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<?php include "homesection/city_popup.php";?>
</div>

<!-- Modal location-->	

<a id="back2Top" title="Back to top" href="#">
	<!--&#10148;-->
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</a>

<!-- jQuery CDN -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-material-design.js"></script>
<script src="js/line.js"></script> 
<script src="js/slick.min.js"></script>
<!--<script src="js/wNumb.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/script.js"></script>-->



<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/wNumb.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/script.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/gijgo.min.js" type="text/javascript"></script>


<script>
/***Date calender***/

	$( '#datepicker' ).datepicker( {
		showOtherMonths: true
	});
	$( '#datepicker1' ).datepicker( {
		showOtherMonths: true
	});
	
   /***back to top***/

	$( window ).scroll( function () {
		var height = $( window ).scrollTop();
		if ( height > 100 ) {
			$( '#back2Top' ).fadeIn();
		} else {
			$( '#back2Top' ).fadeOut();
		}
	} );
	$( document ).ready( function () {
		$( "#back2Top" ).click( function ( event ) {
			event.preventDefault();
			$( "html, body" ).animate( {
				scrollTop: 0
			}, "slow" );
			return false;
		} );

	});

</script>

</body>

</html>