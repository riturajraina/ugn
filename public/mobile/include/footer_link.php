


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
<script src="js/snackbar.min.js"></script>

<!--<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>-->


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