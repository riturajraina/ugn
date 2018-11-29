/**search dropdown starts**/
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
/**search dropdown end**/


/**Sticky headder for all pages start**/


window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

/**Sticky headder for all pages end**/


$(document).ready(function() { $('body').bootstrapMaterialDesign(); });

/***home page product slider***/
      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
      });


/***bootstrap carousel interval 0 ***/
$('.carousel').carousel({
  interval: 0
});


/****tool-tip****/
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});


/****UGN go to inside tab****/
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



/***login popups***/

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




/****UGN go to inside tab****/
$(document).ready(function(){
    $("#fly-show").click(function(){
        $(".hide").slideToggle();
    });
	
	
	//accordion-ugn -jit
    
    $('#qs-1 a').on('click', function(event){
        $('#my-tabs .et_pb_tab_1 a').click();
		$('#accordion #headingFive a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
	});
	
	$('#qs-2 a').on('click', function(event){
        $('#my-tabs .et_pb_tab_2 a').click();
		$('#accordion2 #pw-headingSix a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
	});
	
	$('#qs-3 a').on('click', function(event){
        $('#my-tabs .et_pb_tab_4 a').click();
		$('#accordion4 #wlfq-headingThirteen a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
	});
	
	$('#qs-4 a').on('click', function(event){
        $('#my-tabs .et_pb_tab_2 a').click();
		$('#accordion2 #pw-headingFive a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
	});
	
	$('#qs-5 a').on('click', function(event){
        $('#my-tabs .et_pb_tab_4 a').click();
		$('#accordion4 #wlfq-headingFour a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
	});
	
	$('#qs-6 a').on('click', function(event){
        $('#my-tabs .et_pb_tab_4 a').click();
		$('#accordion4 #wlfq-headingFive a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
	});
	
	$('#ldesk a').on('click', function(event){
        $('#my-tabs .et_pb_tab_2 a').click();
		$('#accordion2 #pw-headingFour a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
	});
	
	
	//accordion-ugn-fir-jit
    
    $('#fir-qs-1 a').on('click', function(event){
        $('#my-tabs-fir .fir_pb_tab_2 a').click();
		$('#fir-accordion2 #acr_2_heading_1 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
		
	});
	
	$('#fir-qs-2 a').on('click', function(event){
        $('#my-tabs-fir .fir_pb_tab_2 a').click();
		$('#fir-accordion2 #acr_2_heading_6 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
	$('#fir-qs-3 a').on('click', function(event){
        $('#my-tabs-fir .fir_pb_tab_4 a').click();
		$('#fir-accordion4 #acr_4_heading_9 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
	$('#fir-qs-4 a').on('click', function(event){
        $('#my-tabs-fir .fir_pb_tab_4 a').click();
		$('#fir-accordion4 #acr_4_heading_14 a').click();
		$("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
		
	$('#fir-qs-5 a').on('click', function(event){
        $('#my-tabs-fir .fir_pb_tab_4 a').click();
		$('#fir-accordion4 #acr_4_heading_8 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
	$('#fir-qs-6 a').on('click', function(event){
        $('#my-tabs-fir .fir_pb_tab_4 a').click();
		$('#fir-accordion4 #acr_4_heading_15 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
	$('#ldesk a').on('click', function(event){
        $('#my-tabs-fir .fir_pb_tab_2 a').click();
		$('#fir-accordion2 #pw-headingFour a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
	//accordion-ugn-property-jit
    
    $('#property-qs-1 a').on('click', function(event){
        $('#my-tabs-property .property_pb_tab_2 a').click();
		$('#property-accordion2 #property_acr_2_heading_6 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-property').offset().top }, 1000);
		
	});
	
	$('#property-qs-2 a').on('click', function(event){
        $('#my-tabs-property .property_pb_tab_3 a').click();
		$('#property-accordion3 #property_acr_2_heading_1 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-property').offset().top }, 1000);
	});
	
	$('#property-qs-3 a').on('click', function(event){
        $('#my-tabs-property .property_pb_tab_6 a').click();
		$('#property-accordion6 #property_acr_6_heading_16 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-property').offset().top }, 1000);
	});
	
	$('#property-qs-4 a').on('click', function(event){
        $('#my-tabs-property .property_pb_tab_6 a').click();
		$('#property-accordion6 #property_acr_6_heading_5 a').click();
		$("html, body").animate({ scrollTop: $('#my-tabs-property').offset().top }, 1000);
	});
	
		
	$('#property-qs-5 a').on('click', function(event){
        $('#my-tabs-property .property_pb_tab_6 a').click();
		$('#property-accordion6 #property_acr_6_heading_8 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-property').offset().top }, 1000);
	});
	
	$('#property-qs-6 a').on('click', function(event){
        $('#my-tabs-property .property_pb_tab_6 a').click();
		$('#property-accordion6 #property_acr_6_heading_10 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-property').offset().top }, 1000);
	});
	
	
	
	
	
	 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//accordion-ugn-pmay -sandy
	
	 $('#pmay-qs-1 a').on('click', function(event){
        $('#my-tabs-pmay .pmay_pb_tab_5 a').click();
		$('#pmay-accordion5 #acr_5_heading_3 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-pmay').offset().top }, 1000);
		return false;
	});
	
	$('#pmay-qs-2 a').on('click', function(event){
        $('#my-tabs-pmay .pmay_pb_tab_2 a').click();
		$('#pmay-accordion2 #acr_2_heading_1 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-pmay').offset().top }, 1000);
		return false;
	});
	
	$('#pmay-qs-3 a').on('click', function(event){
        $('#my-tabs-pmay .pmay_pb_tab_4 a').click();
		$('#pmay-accordion4 #acr_4_heading_5 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-pmay').offset().top }, 1000);
		return false;
	});
	
	
	 $('#pmay-qs-4 a').on('click', function(event){
        $('#my-tabs-pmay .pmay_pb_tab_5 a').click();
		$('#pmay-accordion5 #acr_5_heading_10 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-pmay').offset().top }, 1000);
		return false;
	});
	
	$('#pmay-qs-5 a').on('click', function(event){
        $('#my-tabs-pmay .pmay_pb_tab_5 a').click();
		$('#pmay-accordion5 #acr_5_heading_15 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-pmay').offset().top }, 1000);
		return false;
	});
	
	$('#pmay-qs-6 a').on('click', function(event){
        $('#my-tabs-pmay .pmay_pb_tab_5 a').click();
		$('#pmay-accordion5 #acr_5_heading_17 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-pmay').offset().top }, 1000);
		return false;
	});
	
	$('#ldesk a').on('click', function(event){
        $('#my-tabs-pmay .pmay_pb_tab_2 a').click();
		$('#fir-accordion2 #pw-headingFour a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
	
	
	//accordion-ugn-education-career-sandy
	
	 $('#edca-qs-1 a').on('click', function(event){
        $('#my-tabs-edca .edca_pb_tab_5 a').click();
		$('#edca-accordion5 #acr_5_heading_1 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-edca').offset().top }, 1000);
		return false;
	});
	
	$('#edca-qs-2 a').on('click', function(event){
        $('#my-tabs-edca .edca_pb_tab_2 a').click();
		$('#edca-accordion2 #acr_2_heading_3 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-edca').offset().top }, 1000);
		return false;
	});
	
	$('#edca-qs-3 a').on('click', function(event){
        $('#my-tabs-edca .edca_pb_tab_3 a').click();
		$('#edca-accordion3 #acr_3_heading_4 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-edca').offset().top }, 1000);
		return false;
	});
	
	
	 $('#edca-qs-4 a').on('click', function(event){
        $('#my-tabs-edca .edca_pb_tab_4 a').click();
		$('#edca-accordion4 #acr_4_heading_2 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-edca').offset().top }, 1000);
		return false;
	});
	
	$('#edca-qs-5 a').on('click', function(event){
        $('#my-tabs-edca .edca_pb_tab_5 a').click();
		$('#edca-accordion5 #acr_5_heading_10 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-edca').offset().top }, 1000);
		return false;
	});
	
	$('#edca-qs-6 a').on('click', function(event){
        $('#my-tabs-edca .edca_pb_tab_1 a').click();
		$('#acr_1_heading_1 ').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-edca').offset().top }, 1000);
		return false;
	});
	
	$('#ldesk a').on('click', function(event){
        $('#my-tabs-edca .edca_pb_tab_2 a').click();
		$('#fir-accordion2 #pw-headingFour a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs-fir').offset().top }, 1000);
	});
	
	
	
	
	
});


 
 


$(document).ready(function(){
    $("#hotel-show").click(function(){
        $(".hotel-hide").slideToggle();
    });
});


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


/****date time****/
/*document.getElementById("para1").innerHTML = formatAMPM();

function formatAMPM() {
var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? ' PM' : ' AM',
    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
return days[d.getDay()]+', '+months[d.getMonth()]+' '+d.getDate()+' - '+d.getFullYear()+' <br>'+hours+':'+minutes+ampm;
}
*/



	/***header fixed***/

	window.onscroll = function () {
		myFunction()
	};

	var header = document.getElementById( "myHeader" );
	var sticky = header.offsetTop;

	function myFunction() {
		if ( window.pageYOffset >= sticky ) {
			header.classList.add( "sticky" );
		} else {
			header.classList.remove( "sticky" );
		}
	}







/***wishlist stricky***/

	$( function () {
		$( '.toggle-menu' ).click( function () {
			$( '.exo-menu' ).toggleClass( 'display' );

		});
	});

