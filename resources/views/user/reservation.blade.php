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
    <body class=" wheel-bg2 ">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="https://lh3.googleusercontent.com/proxy/XS_5UfA62nkQma_zOren89COIyVrOVpvRyQFYPAls9m7VLzlgvb9id2XPaXV2Dp1gyWlNhgVlihvt8ebt9V9nFeQaRgoTA" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="#"><img src="https://sun3-11.userapi.com/GbxsDH9xqJf2ep1FrHJdjMmWjT6sVnoPBlMkxA/qxgkciHsysg.jpg" alt=""></a>
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
            <img src="https://img1.goodfon.ru/wallpaper/nbig/3/c8/scania-r730-v8-scania-trucks.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <div class="col-lg-6 col-lg-pull-center  padd-lr3">
                    <div class="wheel-start-form">
                                    <div class="alert alert-danger">
                        @if(Session::has('success'))
    <div class="alert alert-success" role= "alert">
        <strong>Successful:</strong>
            {!! session('success') !!}
    </div>
@endif
@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
            <ul>
                @foreach($errors as $error)
                    <li>  {{ $error }} </li>
                @endforeach
            </ul>
    </div>
@endif

                        <form action="{{ route('res.insert') }}" method="post">
                             {{ csrf_field() }}
                        </label>
                            <div class="clearfix">
                                <div class="wheel-date">
                                    <span>Pickup Date</span>
                                    <label for="input-val13" class="fa fa-calendar">
                                    <input  class="datetimepicker" name='pickupDate' id='pickupDate' type="text" value="29 Apr">
                                    </label>
                                </div>
                                <div class="wheel-date ">
                                    <span>Pickup time</span>
                                    <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" name='pickupTime' id='pickupTime' type="text" value="18:00">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Return Date</span>
                                    <label for="input-val15" class="fa fa-calendar">
                                    <input  class="datetimepicker" name='returnDate' id='returnDate' type="text" value="29 Apr">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Return Time</span>
                                    <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" name='returnTime' id='returnTime' type="text" value="18:00">
                                    </label>
                                </div>
                                <div>
                                     <input type="text" id="phone" name="phone" placeholder="  Phone Customer" required>
                                </div>
                            </div>
                            </label>
                            <label for="input-val18" class="promo promo2">
                            <br><button class="wheel-btn" "submit" name="submit">Submit</button><br>
                        </form>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        <div class="prosuct-wrap">
            <div class="container padd-lr0 xs-padd">
                <div class="row">

                </div>

            </div>
            <div class="services" id="services">
        <div class="heading">
        </div>
    <div class="container">
        <div class="servicegrids">
            <div class="servicetopgrids">
                <div class="col-md-4 servicegrid1">
                    <h4>Our service</h4>
                    <p>The delivery service delivers documents and cargo in Kazakhstan, Russia, CIS and all over the world! A wide range of services allows you to choose the most convenient delivery option for you, and an additional service opens up even more opportunities.</p>
                </div>
                <div class="col-md-4 servicegrid1">
                    <h4>Online services</h4>
                    <p>With our online services, you can quickly get information about the order status, call a courier, calculate the cost of delivery, sign a contract, and much more. You will find even more features in your personal account.</p>
                </div>
                <div class="col-md-4 servicegrid1">
                    <h4>Our partners </h4>
                    <p>Our partners are the pride of the Della company! Together we grow and develop, improve our business and look for new opportunities. The desire for fruitful cooperation with every passing year strengthens relationships with existing partners and attract new ones. We will be happy to see you among our partners!</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="servicebottomgrids">
                <div class="col-md-4 servicegrid1">
                    <h4>International delivery</h4>
                    <p>Della-courier service works with popular destinations for international delivery of shipments to Kazakhstan: from Russia, Turkey, the United States, and China. We transport parcels all over the world and know all the features of their delivery from abroad and sending documents abroad.</p>
                </div>
                <div class="col-md-4 servicegrid1">
                    <h4>Urgent mail delivery</h4>
                    <p>The "Urgent delivery" service is specially developed conditions for accelerated delivery of documents and cargo across Kazakhstan "from hand to hand". The shipment is delivered to the destination by a certain hour of the day or night. The speed of delivery depends on the distance of the destination, the hour of processing the request and the parameters of the cargo. The minimum time for urgent delivery is several hours.</p>
                </div>
                <div class="col-md-4 servicegrid1">
                    <h4>Economical delivery in Kazakhstan</h4>
                    <p>Various ways to reduce delivery costs allow our courier service to offer customers more favorable rates. If the delivery time is not so critical, and the price is important, then you can take advantage of our special offer for low-cost delivery "Economy Express".</p>
                </div>
                <div class="clearfix"></div>
            </div>
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
    </body>
</html>