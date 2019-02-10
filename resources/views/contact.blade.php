<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Royal Zayka</title>
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

    <body class="full-width-container" onload="initialize()">

        <!-- start Container Wrapper -->
        <div class="container-wrapper">

            <!-- start Header -->
            <header id="header">

                <!-- start Navbar -->
                <nav class="navbar navbar-default navbar-fixed-top">

                    <div class="header-inner">

                        <div class="navbar-header">
<!--                            <a class="navbar-brand hidden-xs off-sticky" href="{{ url('/')}}"><img src="{{url('/')}}/images/logo-white.png" alt="Image" /></a>-->
                            <a class="navbar-brand hidden-xs" href="{{ url('/')}}"><img src="{{url('/')}}/images/logo.png" alt="Image" /></a>
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
                        </div><!--/.nav-collapse -->

                        <div class="pull-right">
                            <div class="navbar-mini">
                                <ul>
                                <li><a href="tel:6376470147"><i class="fa fa-phone-square green">&nbsp;</i>6376 470 147</a></li>
                                <li class="dropdown bt-dropdown-click">
                                        <a id="city-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-android-globe"></i> Neemuch
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="city-dropdown">
                                            <li><a href="javascript::setCity('Indore');">Indore</a></li>
                                            <li><a href="javascript::setCity('Neemuch');">Neemuch</a></li>
                                            <li><a href="javascript:setCity('Udaipur');">Udaipur</a></li>
                                        </ul>
                                    </li>
                                <li class="user-action">
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

            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-container">

                <div class="container pt-10 pb-50">

                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>

                    <div class="mt-40">

                        <div class="section-title-02">

                            <h3><span>Contact Us</span></h3>
                            <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for.</p>

                        </div>

                        <div class="contact-wrapper GridLex-gap-30">

                            <div class="GridLex-grid-noGutter-equalHeight">

                                <div class="GridLex-col-3_sm-12_xs-12">

                                    <div class="contact-item-wrapper">

                                        <div class="row">

                                            <div class="col-xss-12 col-xs-6 col-sm-4 col-md-12">
                                                <div class="contact-item mb-25">
                                                    <h6 class="heading">Address</h6>
                                                    <p>Choti Sadri, <br/>Dist. Pratapgarh Rajasthan, <br/> 312604 </p>
                                                </div>
                                            </div>

                                            <div class="col-xss-12 col-xs-6 col-sm-4 col-md-12">

                                                <div class="contact-item mb-25">
                                                    <h6 class="heading">Contact</h6>
                                                    <p><a href="tel:9799076827"><i class="fa fa-phone-square">&nbsp;</i>+91 979 907 6827</a><br/><a href="tel:6376470147"><i class="fa fa-phone-square">&nbsp;</i>+91 637 647 0147</a><br/><a href="mailto:royaljayka.restaurantapp@gmail.com?Subject=Eagerly%20want%20to%20connect%20with%20you"><i class="fa fa-envelope">&nbsp;</i>royaljayka.restaurantapp@gmail.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="GridLex-col-6_sm-12_xs-12">
                                    <div class="GridLex-inner">
                                        <div class="map-contact-wrapper">
                                            <div id="single_office_map" style="height: 385px;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="GridLex-col-3_sm-12_xs-12">
                                    <div class="contact-form-wrapper">
                                        <h6>Send us a Message</h6>
                                        <form class="form-absolute-label" data-toggle="validator">
                                            <div class="row">
                                                <div class="col-xss-12 col-xs-6 col-sm-4 col-md-12">
                                                    <div class="form-group">
                                                        <input id="inputName" type="text" class="form-control" placeholder="Your Name required)" data-error="Your name is required" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xss-12 col-xs-6 col-sm-4 col-md-12">
                                                    <div class="form-group">
                                                        <input id="inputEmail" type="email" class="form-control" placeholder="Your Email (required)" data-error="Your email is required and must be a valid email address" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xss-12 col-xs-6 col-sm-4 col-md-12">
                                                    <div class="form-group">
                                                        <input id="inputMobile" type="tel" class="form-control" placeholder="Your Mobile Number (required)" data-error="Your Mobile Number is required" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xss-12 col-xs-12 col-sm-4 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Subject" />
                                                    </div>
                                                </div>
                                                <div class="col-xss-12 col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea id="inputMessage" class="form-control" placeholder="Message (required)" rows="5" data-minlength="30" data-error="Your message is required and must not less than 30 characters" required></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xss-12 col-xs-12 col-sm-12 col-md-12">
                                                    <div class="mt-10 mt-5-sm">
                                                        <button type="submit" class="btn btn-primary mt-5">Send Message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Main Wrapper -->


        <!-- JS only for contact page -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/infobox.js"></script>
        <script src="js/validator.min.js"></script>
        <script type="text/javascript" src="js/customs-contact.js"></script>
@include('footer')