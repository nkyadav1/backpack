<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Royal Jayka</title>
        <meta name="description" content="Book your restaurant from anywhere, Fastest growing table booking app. Now dine out is super easy with Royal Zayaka." />
        <meta name="keywords" content="restaurant, dinner, lunch, eat, food, rice, dine, menu, dining, meal, cafe, breakfast, Dine-Out, Dine-In, Restaurant Booking, Table Booking" />
        <meta name="author" content="Royal Zayaka">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Fav and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('/')}}/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('/')}}/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('/')}}/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="{{url('/')}}/images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="{{url('/')}}/images/ico/favicon.png">

        <!-- CSS Plugins -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/bootstrap/css/bootstrap.min.css" media="screen">	
        <link href="{{url('/')}}/css/animate.css" rel="stylesheet">
        <link href="{{url('/')}}/css/main.css" rel="stylesheet">
        <link href="{{url('/')}}/css/component.css" rel="stylesheet">

        <!-- CSS Custom -->
        <link href="{{url('/')}}/css/style.css" rel="stylesheet">

        <!-- For your own style -->
        <link href="{{url('/')}}/css/your-style.css" rel="stylesheet">

        <script type="text/javascript" src="{{url('/')}}/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/js/jquery-migrate-1.4.1.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/bootstrap/js/bootstrap.min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="full-width-container transparent-header">

        <div id="introLoader" class="introLoading"></div>

        <!-- start Container Wrapper -->
        <div class="container-wrapper">

            <!-- start Header -->
            <header id="header">

                <!-- start Navbar -->
                <nav class="navbar navbar-default navbar-fixed-top">

                    <div class="header-inner">

                        <div class="navbar-header">
                            <a class="navbar-brand hidden-xs off-sticky" href="{{ url('/')}}"><img src="{{url('/')}}/images/logo-white.png" alt="Image" /></a>
                            <a class="navbar-brand hidden-xs on-sticky" href="{{ url('/')}}"><img src="{{url('/')}}/images/logo.png" alt="Image" /></a>
                            <a class="navbar-brand visible-xs" href="{{ url('/')}}"><img src="{{url('/')}}/images/logo-white-xs.png" alt="Image" /></a>
                        </div>

                        <div id="navbar" class="collapse navbar-collapse navbar-arrow pull-left">					
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li><a href="{{url('/restaurants/list/')}}">Restaurants</a></li>
                                <li><a href="{{url('/how-it-works')}}">How it works</a></li>
                                <li><a href="{{url('/about-us')}}">About Us</a></li>
                                <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                <li><a href="{{url('/join-us')}}">Join Us</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                        <div class="pull-right">
                            <div class="navbar-mini">
                                <ul class="clearfix">
                                    <li><a href="tel:6376470147"><i class="fa fa-phone-square green">&nbsp;</i>6376 470 147</a></li>
                                    <li id="profile-menu" class="dropdown dropdown-user {{(Auth::check()?'':'hidden')}}" >
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
<!--                                    <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg">-->
                                    <span class="username username-hide-on-mobile"> {{ (Auth::check())?Auth::user()->name:'Guest' }}</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{url('/user/profile')}}">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/user/orders')}}">
                                            <i class="icon-envelope-open"></i> My Bookings
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="{{url('/user/logout')}}">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
<!--                                    <li class="dropdown bt-dropdown-click">
                                        <a id="city-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-android-globe"></i><span id="selected-city">Neemuch</span>
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="city-dropdown">
                                            <li><a href="javascript::setCity('Indore');">Indore</a></li>
                                            <li><a href="javascript::setCity('Neemuch');">Neemuch</a></li>
                                            <li><a href="javascript:setCity('Udaipur');">Udaipur</a></li>
                                        </ul>
                                    </li>-->
                                    <li id="signup-button" class="user-action {{(Auth::check()?'hidden':'')}}">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-inverse btn-sm btn-ajax-login" data-toggle="modal">Sign up/in</a>
                                    </li>
                                </ul>
                            </div>
                            

                        </div>

                    </div>

                    <div id="slicknav-mobile"></div>

                </nav>
                <!-- end Navbar -->

            </header>
            <!-- end Header -->
