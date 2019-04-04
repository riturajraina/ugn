

	<?php include "include/header_link.php";?>

	<div id="loading" class="align-content-center justify-content-center">
		<div id="loading-content">
		<img src="images/dummy/loader.gif" width="100%">
			<div class="text-center">Wait don't referesh we are redirect to payment page</div>
			
		</div>
	</div>
	
	<a href="filght_success.php"><img src="images/dummy/payment.jpg" width="100%"></a>

<?php include "include/sub_footer.php";?>

<script>
	$("#loading").show();
	$("#loading-content").show().center();

	setTimeout(function(){    
	  $("#loading").fadeOut();
	}, 4000);
</script>