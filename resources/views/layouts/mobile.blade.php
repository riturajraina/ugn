<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>OSS Mobile Website</title>
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
            window.Laravel = <?php
			echo json_encode([
				'csrfToken' => csrf_token(),
			]);
			?>
        </script>
        
        
        
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#ff9900">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#ff9900">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#ff9900">

        

        <!-- All CSS CDN -->
        <link href="/mobile/css/import.css" rel="stylesheet">
        <!-- Our Custom CSS for remove -->
        <link href="/mobile/css/header_tab.css" rel="stylesheet">
        <link href="/mobile/css/nick.css" rel="stylesheet">
        <link href="/mobile/css/jeet.css" rel="stylesheet">
        <link href="/mobile/css/sandeep.css" rel="stylesheet">
        <link href="/mobile/css/login.css" rel="stylesheet">
        <link href="/mobile/css/circle.css" rel="stylesheet">
        <link href="/mobile/css/theme.css" rel="stylesheet">

        <link href="/mobile/css/dummy.css" rel="stylesheet">

        <script src="/mobile/js/jquery.min.js"></script>
       
        <script src="/mobile/js/popper.min.js"></script>
        <script src="/mobile/js/bootstrap-material-design.js"></script>
        <script src="/mobile/js/line.js"></script> 
        <script src="/mobile/js/slick.min.js"></script>
        


        <script src="/mobile/js/jquery.nicescroll.min.js"></script>
        <script src="/mobile/js/wNumb.js"></script>
        <script src="/mobile/js/nouislider.js"></script>
        <script src="/mobile/js/script.js"></script>
        
       
       
        <!--<link href="/mobile/css/gijgo.min.css" rel="stylesheet">-->

        <!--<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/mobile/css/gijgo.min.css" rel="stylesheet" type="text/css" />-->
    </head>
    <body>
        <div class="fixed-top bg-theme text-white">
            <nav class="navbar navbar-default p-0">
                <div class="container-fluid d-flex justify-content-start align-items-center p-0">

                    <div>
                        <button onclick="javascript:history.go(-1);" type="button" class="btn btn-info navbar-btn mb-0 d-flex justify-content-start align-items-center height54 px-2">
                            <img src="/images/left-arrow-white.svg" alt=""/>
                        </button>
                    </div>

                    <div>
                        <button onclick="location.href = 'https://design.mysabkuch.com/oss_v5/index.php';" type="button" 
                        class="btn btn-info navbar-btn mb-0 d-flex justify-content-start align-items-center height54 text-white px-2" > <i class="fa fa-home fa-2x"></i>
                        </button>
                    </div>
                    
                    <a href="https://design.mysabkuch.com/oss_v5/index.php"><h1 class="text-left">ONE STOP SHOP</h1></a>

                    <div class="ml-auto">
                        <a href="/msearch" class="btn btn-info navbar-btn mb-0 height54 d-flex align-items-center">
                            <img src="/images/search.svg" alt="Search Page"/> 
                        </a>
                    </div>
                    
                </div>
                
                
            </nav>
        </div>

        <!--till here header-->
        <div class="pdt54 ugn-wrapper ugn_home">
            @yield('content')
        </div>
        <!--from here footer-->

        <footer class="fixed-bottom">

        </footer>
        <div class="bdr-bottom"></div>

        <!-- jQuery CDN -->
        
        

        <!--<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/mobile/js/gijgo.min.js" type="text/javascript"></script>-->


        <script>
                        /***Date calender***/

                        $('#datepicker').datepicker({
                            showOtherMonths: true
                        });
                        $('#datepicker1').datepicker({
                            showOtherMonths: true
                        });

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
        
        <script src="/mobile/js/modernizr.js"></script>
        <script src="/mobile/js/gijgo.min.js" type="text/javascript"></script>
        <script src="/mobile/js/snackbar.min.js"></script>
    </body>

</html>