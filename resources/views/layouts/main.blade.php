<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript 

		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >-->
			<!-- OR -->

		<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
			<!--FOR JS,-->

		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
			<!--OR

		<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
			<!--FOR IMAGES,-->

			
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
    </body>
</html>