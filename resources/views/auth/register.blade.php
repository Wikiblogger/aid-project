<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
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
                                </ul>
                                    </li>
                                   
                                   
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
            <img src="https://www.bastioncargo.ru/images/avto2.jpg" alt="" class="wheel-img ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Register</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#"> pages </a></li>
                                <li class="active">Register</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->
        <div class="wheel-register-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 padd-l0">
                        <div class="wheel-register-log marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>have an account? Log In</h5>
                            </div>
                            <form action="{{route('auth_logincheck')}}" method="post">
                                <label for="userName" class="fa fa-user"><input type="text" id="username" name="username" placeholder='Username' required autofocus></label>
                                <label for="userPass" class="fa fa-lock"><input type="password" id="password" name="password" placeholder='Passsword' required></label>
                                <button class="wheel-btn" type="submit">Sign in</button>
                                {{csrf_field()}}
                                <label class="password-sing clearfix" for="input-val2">
                                <input type='checkbox' id='input-val2'> <span>Keep me signed in</span>
                                
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-7 padd-r0">
                        <div class="wheel-register-sign marg-lg-t150 marg-lg-b150 marg-sm-t100 marg-sm-b100">
                            <div class="wheel-header">
                                <h5>Sign up Now </h5>
                                <h3>Get <span>Registered</span></h3>

                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                            </div>
                            <form action="{{route('auth_register')}}" method="post">
                                <input type="text" id="firstname" name="fname" placeholder="Firstname" required>
                                <input type="text" id="lastname" name="lname" placeholder="Lastname" required>
                                <input type="number" id="firstname" name="contact" placeholder="Contact" required>
                               <select class="form-control" required name="license">
                                    <option value="">Select License Type</option>
                                     <option value="Prof">Prof</option>
                                     <option value="Non-Prof">Non-Prof</option>
                                 </select>   
                                <input type="email" id="emailadd" name="email" placeholder="Email" required>
                                <input type="text" id="username" name="username" placeholder="Username" required>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                                <input type="password" placeholder="Confirm Password" required name="repeat_password">
                                <label for="input-val1">
                                 
                                <input type="checkbox" id='input-val1' required> <span>I agree with the </span>
                                <a href="">Terms and Conditions</a>
                                </label>
                                <button class="wheel-btn" "submit" name="submit" type="submit">Submit</button>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            <h5>Feedback</h5>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Your Email Adddress">
                            <button class="wheel-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
         <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; WHEEL 1995 | Designed  By Nurs,Aida,Karina</span></div>
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
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
            </div>
        </div>
        <!-- Scripts project -->
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