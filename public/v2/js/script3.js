

 $(".goto").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });





	$("#sidebar").niceScroll({
		cursorcolor: '#53619d',
		cursorwidth: 4,
		cursorborder: 'none'
	});

	$('#dismiss, .overlay').on('click', function () {
		$('#sidebar').removeClass('active');
		$('.overlay').fadeOut();
	});

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').addClass('active');
		$('.overlay').fadeIn();
		$('.collapse.in').toggleClass('in');
		$('a[aria-expanded=true]').attr('aria-expanded', 'false');
	});







$(function () {
	$('#login-form-link').click(function (e) {
		$("#login-form").delay(100).fadeIn(100);
		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function (e) {
		$("#register-form").delay(100).fadeIn(100);
		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});




$.fn.center = function () {
  this.css("position","absolute");
  this.css("top", Math.max(0, (
    ($(window).height() - $(this).outerHeight()) / 2) + 
     $(window).scrollTop()) + "px"
  );
  this.css("left", Math.max(0, (
    ($(window).width() - $(this).outerWidth()) / 2) + 
     $(window).scrollLeft()) + "px"
  );
  return this;
}

$("#splash").show();
$("#splash-content").show().center();

setTimeout(function(){    
  $("#splash").fadeOut();
}, 1000);


 

$( document ).ready( function () {
					//If your <ul> has the id "glasscase"
					$( '#glasscase' ).glassCase( {
						'thumbsPosition': 'bottom',
						'widthDisplay': 560
					} );
				} );




$(document).ready(function(){
    $("#fly-show").click(function(){
        $(".hide").slideToggle();
    });
});


 
 
$(document).ready(function(){
    $("#hotel-show").click(function(){
        $(".hotel-hide").slideToggle();
    });
});

$('[data-toggle="tooltip"]').tooltip()

/*price slider*/
	// multiple handled with value 
	var pmdSliderValueRange = document.getElementById('pmd-slider-value-range');
	
	noUiSlider.create(pmdSliderValueRange, {
		start: [ 500, 50000 ], // Handle start position
		connect: true, // Display a colored bar between the handles
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		}),
		range: { // Slider can select '0' to '100'
			'min': 500,
			'max': 50000
		}
	});
	
	var valueMax = document.getElementById('value-max'),
		valueMin = document.getElementById('value-min');
	
	// When the slider value changes, update the input and span
	pmdSliderValueRange.noUiSlider.on('update', function( values, handle ) {
		if ( handle ) {
			valueMax.innerHTML = values[handle];
		} else {
			valueMin.innerHTML = values[handle];
		}
	});	



/*spec slider*/
	// multiple handled with value 
	var pmdSliderValueRange = document.getElementById('specs-slider');
	
	noUiSlider.create(pmdSliderValueRange, {
		start: [ 1, 10 ], // Handle start position
		connect: true, // Display a colored bar between the handles
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		}),
		range: { // Slider can select '0' to '100'
			'min': 1,
			'max': 10
		}
	});
	
	var valueMax2 = document.getElementById('specs-value-max'),
		valueMin2 = document.getElementById('specs-value-min');
	
	// When the slider value changes, update the input and span
	pmdSliderValueRange.noUiSlider.on('update', function( values, handle ) {
		if ( handle ) {
			valueMax2.innerHTML = values[handle];
		} else {
			valueMin2.innerHTML = values[handle];
		}
	});	





$( document ).ready( function () {
					//If your <ul> has the id "glasscase"
					$( '#glasscase' ).glassCase( {
						'thumbsPosition': 'bottom',
						'widthDisplay': 560
					} );
				} );


