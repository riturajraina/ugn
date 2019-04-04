<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#ff9900">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#ff9900">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#ff9900">
<title>OSS Mobile Website</title>

<!-- All CSS CDN -->
<link href="/mobile/css/style.css" rel="stylesheet">
<!-- Our Custom CSS for remove 
<link href="css/header_tab.css" rel="stylesheet">
<link href="css/nick.css" rel="stylesheet">
<link href="css/jeet.css" rel="stylesheet">
<link href="css/sandeep.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<link href="css/circle.css" rel="stylesheet">-->


<link href="/mobile/css/theme.css" rel="stylesheet">
<link href="/mobile/css/dummy.css" rel="stylesheet">
<script src="/mobile/js/jquery.min.js"></script>
<!--<link href="css/gijgo.min.css" rel="stylesheet">-->

<!--<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />-->
</head>
<body>
    <div class="hamburger">
  <nav id="sidebar">
    <div id="dismiss"> <i class="fa fa-times" aria-hidden="true"></i> </div>
    <div class="sidebar-header">
      <h3>One Stop Shop </h3>
    </div>
    <ul class="nav nav-tabs border-bottom flex-column">
          <li class="nav-item"> 
          <a class="nav-link" href="#">Deals & Offers</a> 
          </li>
    </ul>
    <ul class="list-unstyled components clearfix">
      <!--<p>Dummy Heading</p>-->
    
      <li> <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Electronics</a>
        <ul class="list-unstyled collapse" id="homeSubmenu">
          <li class="nav-item"><a class="nav-link" href="#">Mobiles</a></li>
          <li><a href="#">Tablets</a></li>
          <li><a href="#">Laptops</a></li>
          <li><a href="#">TVs</a></li>
          <li><a href="#">Home Appliances</a></li>
          <li><a href="#">Cameras</a></li>
        </ul>
      </li>
      <li> <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Fashion</a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
          <li><a href="#">Men's Fashion</a></li>
          <li><a href="fashion-categegory-list.php">Women's Fashion</a></li>
        </ul>
      </li>
      <li> <a href="#Personal" data-toggle="collapse" aria-expanded="false">Personal & Health</a>
        <ul class="collapse list-unstyled" id="Personal">
          <li><a href="#">Personal Care Products</a></li>
          <li><a href="#">Health Care Products</a></li>
          <li><a href="#">Diet & Nutrition</a></li>
          <li><a href="#">Pet Care</a></li>
        </ul>
      </li>
      <li> <a href="#">Beauty & Wellness</a> </li>
    </ul>
    <ul class="list-unstyled components">
      <li> <a href="#Travel" data-toggle="collapse" aria-expanded="false">Travel</a>
        <ul class="collapse list-unstyled" id="Travel">
          <li><a href="#">Flights</a></li>
          <li><a href="#">Trains</a></li>
          <li><a href="#">Bus</a></li>
          <li><a href="#">Hotels</a></li>
          <li><a href="#">Holidays</a></li>
        </ul>
      </li>
      <li> <a href="#">Cabs</a></li>
      <li> <a href="#">Food</a></li>
      <li> <a href="#">Movies & Entertainment</a></li>
      <li> <a href="#Bills" data-toggle="collapse" aria-expanded="false">Bills & Recharges</a>
        <ul class="collapse list-unstyled" id="Bills">
          <li><a href="#">Bill Payments</a></li>
          <li><a href="#">Recharges</a></li>
        </ul>
      </li>
    </ul>
    <ul class="list-unstyled components">
      <li> <a href="#Govt" data-toggle="collapse" aria-expanded="false">Govt Utilities</a>
        <ul class="collapse list-unstyled" id="Govt">
          <li><a href="#">Utility Connections</a></li>
          <li><a href="#">Registrations & Agreements</a></li>
        </ul>
      </li>
      <li> <a href="#Procedures" data-toggle="collapse" aria-expanded="false">Govt Procedures</a>
        <ul class="collapse list-unstyled" id="Procedures">
          <li><a href="#">Govt Assitance & Support</a></li>
          <li><a href="#">Healthcare Schemes</a></li>
          <li><a href="#">Immigration & Visas</a></li>
          <li><a href="#">Personal Finance & Tax</a></li>

          <li><a href="#">Pilgrimage Help</a></li>
          <li><a href="#">Public Grievances</a></li>
          <li><a href="#">Public Safety & Compliances</a></li>
        </ul>
      </li>
      <li> <a href="#Education" data-toggle="collapse" aria-expanded="false"> Education & Careers</a>
        <ul class="collapse list-unstyled" id="Education">
          <li><a href="#">Career Options</a></li>
          <li><a href="#">Education Options</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  
  
  <div class="overlay"></div>
</div>

<div id="splash">
    <div id="splash-content">
        <img class="d-block img-fluid" src="/mobile/img/logo.png">
    </div>
</div>
<div class="fixed-top bg-theme text-white">
  <nav class="navbar navbar-default p-0">
    <div class="container-fluid d-flex justify-content-start align-items-center p-0">

          <div>
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn mb-0 height54 px-2"> <img src="/mobile/img/svg/menu.svg" alt="" width="22" height="22"/></button>
          </div>
          <a href="index.php"><h2 class="text-left">ONE STOP SHOP</h2></a>
     
        <div class="ml-auto">
              <button class="btn btn-info mb-0 height54 px-2" type="button" data-toggle="tooltip" data-placement="top" title="Add to Home screen"> <img src="/mobile/img/svg/smartphone-call.svg" alt="" width="20" height="20"/>
              </button>
          
            <button type="button" class="btn btn-info navbar-btn mb-0 height54 px-2"> 
                <a href="https://mugn.mysabkuch.com/msearch"><img src="/mobile/img/svg/search.svg" alt="" width="20" height="20"/></a>
            </button>
        </div>
   
    </div>
  </nav>
</div>


        <!--till here header-->
        <div class="pdt54">
            @yield('content')
        </div>
        <!--from here footer-->

       <footer class="fixed-bottom bg-primary text-white fxdftr-list">

<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link bg-theme" href="index.php"><h2><img src="/images/ugn/house-outline.svg" width="20" height="20"/></h2>Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="trending.php"><h2><img src="/images/ugn/trending.svg" width="20" height="20"/></h2>Trending</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="offers.php"><h2><img src="/images/ugn/tag.svg" width="20" height="20"/></h2>Offers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php"><h2><img src="/images/ugn/avatar.svg" width="20" height="20"/></h2>Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="alerts.php"><h2><img src="/images/ugn/notification.svg" width="20" height="20"/></h2>Alerts</a>
  </li>
</ul>
</footer>

        <!-- jQuery CDN -->
        
        

        <!--<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/mobile/js/gijgo.min.js" type="text/javascript"></script>-->

        <script src="/mobile/js/jquery.min.js"></script>
<script src="/mobile/js/popper.min.js"></script>
<script src="/mobile/js/bootstrap-material-design.js"></script>
<script src="/mobile/js/line.js"></script> 
<script src="/mobile/js/slick.min.js"></script>
<!--<script src="js/wNumb.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/script.js"></script>-->



<script src="/mobile/js/jquery.nicescroll.min.js"></script>
<script src="/mobile/js/wNumb.js"></script>
<script src="/mobile/js/nouislider.js"></script>
<script src="/mobile/js/script.js"></script>



        <script src="/mobile/js/modernizr.js"></script>
        <script src="/mobile/js/gijgo.min.js" type="text/javascript"></script>
        <script src="/mobile/js/snackbar.min.js"></script>
    </body>

</html>


        <script>
                        /***Date calender***/

                        /*$('#datepicker').datepicker({
                            showOtherMonths: true
                        });
                        $('#datepicker1').datepicker({
                            showOtherMonths: true
                        });*/

                        /***back to top***/

                        $(window).scroll(function () {
                            var height = $(window).scrollTop();
                            if (height > 100) {
                                $('#back2Top').fadeIn();
                            } else {
                                $('#back2Top').fadeOut();
                            }
                        });
                        $(document).ready(function () {
                            $("#back2Top").click(function (event) {
                                event.preventDefault();
                                $("html, body").animate({
                                    scrollTop: 0
                                }, "slow");
                                return false;
                            });

                        });

        </script>