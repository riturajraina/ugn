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
    
    
    
    
    
    
    <!--scroll section-->

<script >
	$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
</script>
<!-- here stars scrolling icon -->
	
    <!--scroll section-->
    
    
    
    
    
    
    
    
    
    <!--headder section-->
		<script>
			window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
		</script>
    <!--headder section-->
    
    
    
    
    
    
    
    
   <script>
       
	   $(function () {
 $('.toggle-menu').click(function(){
	$('.exo-menu').toggleClass('display');
	
 });
 
});
	   
	   
	   
	   
    </script>
   
   
   
    <script>
        $('#datepicker').datepicker({
            showOtherMonths: true
        });
		$('#datepicker1').datepicker({
            showOtherMonths: true
        });
    </script>
	
</body>

</html>