<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>UGN Admin Panel</title>
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <script>
            window.Laravel = <?php
                echo json_encode([
                    'csrfToken' => csrf_token(),
                ]);
                ?>
        </script>

        <!---From here below scripts for core JS Calendar--->

        <link rel="stylesheet" type="text/css" href="{{ url('/jscal/codebase/fonts/font_roboto/roboto.css') }}"/>

        <link rel="stylesheet" type="text/css" href="{{ url('/jscal/codebase/dhtmlxcalendar.css') }}"/>

        <script src="{{ url('/jscal/codebase/dhtmlxcalendar.js') }}"></script>

        <style>
            #calendar_input {
                border: 1px solid #dfdfdf;
                font-family: Roboto, Arial, Helvetica;
                font-size: 14px;
                color: #404040;
            }
            #calendar_icon {
                vertical-align: middle;
                cursor: pointer;
            }
        </style>

        <!---Till here scripts for core JS Calendar--->
        
        
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                                data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        
                        
                        <?php
                            if (!Auth::guest()) {
                                //if (Auth::user()->fk_admin_role_id == 1) {
                        ?>
                                    <a class="navbar-brand" href="{{ url('/viewusers') }}" 
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'viewusers') ? 
                                              'background-color:yellow;' : '';?>">
                                        Manage Users
                                    </a>
                                    <a class="navbar-brand" href="{{ url('/viewroles') }}"
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'viewroles') 
                                                    || stristr($_SERVER['REQUEST_URI'], 'editrole')? 
                                              'background-color:yellow;' : '';?>">
                                        Manage User Roles
                                    </a>
                                    <a class="navbar-brand" href="{{ url('/viewrights') }}"
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'viewrights') ? 
                                              'background-color:yellow;' : '';?>">
                                        Manage User Rights
                                    </a>
                                    <a class="navbar-brand" href="{{ url('/createpage') }}"
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'createpage') ? 
                                              'background-color:yellow;' : '';?>">
                                        Create Content Page
                                    </a>
                        
                                    <a class="navbar-brand" href="{{ url('/insertcontentarray') }}"
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'insertcontentarray') ? 
                                              'background-color:yellow;' : '';?>">
                                        Content Array
                                    </a>
                        
                                    <a class="navbar-brand" href="{{ url('/pagelist') }}"
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'pagelist') ? 
                                              'background-color:yellow;' : '';?>">
                                        View Pages
                                    </a>
                        
                                    <a class="navbar-brand" href="{{ url('/viewimages') }}"
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'viewimages') ? 
                                              'background-color:yellow;' : '';?>">
                                        View Images
                                    </a>
                        
                                    <a class="navbar-brand" href="{{ url('/createcategory') }}"
                                     style="<?php echo stristr($_SERVER['REQUEST_URI'], 'createcategory') ? 
                                              'background-color:yellow;' : '';?>">
                                        View Categories
                                    </a>
                        <?php
                                //}
                            }
                        ?>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>

                            @else
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                   aria-expanded="false">
                                    Welcome&nbsp;
                                    {{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" 
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>
        <script src="/js/coreAjax.js"></script>

    </body>
</html>