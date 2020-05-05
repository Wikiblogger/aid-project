<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>Wheel</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/css_reset.css')}}">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/jquery.datetimepicker.min.css')}}">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap-select.min.css')}}">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/loaders.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/index.css')}}">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="https://cdn.lowgif.com/full/eb4afbf380a223b8-wheel-minimal-page-loader-by-akbar-hossain-dribbble.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="{{url('/')}}"><img src="https://sun1-14.userapi.com/GbxsDH9xqJf2ep1FrHJdjMmWjT6sVnoPBlMkxA/qxgkciHsysg.jpg" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children  ">
                                        <a href="{{url('/')}}">Home</a>

                                    </li>
                                   
                                    <li class="menu-item menu-item-has-children  ">
                                        <a href="{{route('auth_contact')}}">Contact</a>
                                       
                                    </li>
                                   
                                    </li>
                                    <li class="menu-item ">
                                        <a href="{{route('auth_about')}}">About</a>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="{{route('auth_account')}}">Account</a>
                                    </li>

                                    @if(Auth::check())
                                        <li class="menu-item ">
                                            <a href="{{route('user_reservation')}}">Reservation</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="{{route('user_logout')}}">Logout</a>
                                        </li>
                                   
                                    @endif
                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="wheel-start3">
            <img src="https://news.rambler.ru/img/2019/03/12103926.605787.4579.jpeg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t355 marg-lg-b80 marg-sm-t200 marg-xs-b30">
                            <h3>Get in touch</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wheel-header wheel-testi-header text-center marg-lg-t155 marg-lg-b65 marg-md-t50  marg-md-b50">
                        <h3>Our contacts</h3>
                    </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<blockquote class="blockquote">
  <h1>For all the time of mankind's existence, we can distinguish three revolutions in the development of cargo transportation, and the fourth is on the way. In the near future, the development of unmanned electric trucks is underway:
<br>* The time when man invented the wheel. After that, the process of cargo transportation became much easier.<br>
 <br>*The period when a person managed to tame some animals (livestock appeared). A person did not have to spend as much effort as he had spent on transportation, exhausting his body.<br>
<br>* Naturally-the invention and manufacture of vehicles. This made it possible to reduce the time of cargo transportation several times and, again, reduced the cost of human effort. At present, when the technology is becoming more and more advanced every day, you can transport goods in any quantities and at any distance.<br></h1>
</blockquote>
        <!-- //////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="wheel-contact-info text-center marg-lg-t150 marg-lg-b50 marg-xs-t50 marg-xs-b50">
                        <div class="wheel-contact-logo"><i class="fa fa-map-marker"></i></div>
                        <h4>Address</h4>
                        <span>Str.Dostyk 1.Almaty city </span>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wheel-contact-info text-center marg-lg-t150 marg-lg-b50 marg-xs-t50 marg-xs-b50">
                        <div class="wheel-contact-logo"><i class="fa fa-phone"></i></div>
                        <h4>telePhone</h4>
                        <a href=""><span>+77778880101</span></a>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wheel-contact-info text-center marg-lg-t150 marg-lg-b50 marg-xs-t50 marg-xs-b50">
                        <div class="wheel-contact-logo"><i class="fa fa-mobile"></i></div>
                        <h4>Fax</h4>
                        <a href=""><span>+77761001010</span></a>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wheel-contact-info text-center marg-lg-t150 marg-lg-b50 marg-xs-t50 marg-xs-b50">
                        <div class="wheel-contact-logo"><i class="fa fa-envelope"></i></div>
                        <h4>Email</h4>
                        <a href=""><span>wheel@gmail.com</span></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /////////////////////////////// -->
       
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
           
            
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 1995 |  By Nurs,Karina,Aida</span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href=""> Pages</a></li>                           
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{URL::to('assets/js/jquery-2.2.4.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
        <!-- count -->
        <script type="text/javascript" src='{{URL::to('assets/js/jquery.countTo.js')}}'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="{{URL::to('assets/js/idangerous.swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('assets/js/equalHeightsPlugin.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('assets/js/jquery.datetimepicker.full.min.js')}}"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="{{URL::to('assets/js/bootstrap-select.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('assets/js/index.js')}}"></script>
        <!-- sixth block end -->
    </body>
</html>