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
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="{{route('auth_car_list')}}"> Listing </a>


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
                                            <a href="{{route('car_add')}}">Car Add</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="{{route('car_list')}}">Car List</a>
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
             <br><br><br><br><br><img src="https://www.ixbt.com/img/n1/news/2018/10/2/nikola-tre-1_large.jpg" alt="" class="wheel-img"><br><br>
             <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 padd-lr10">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b50 marg-sm-t190 marg-xs-b30">
                            <div class="col-lg-9 col-lg-pull-0  padd-lr0">
                                <div class="wheel-start-form">
                                  <div id="page-wrapper">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <h1>Car list</h1>

                                        <!-- Car list -->

                                        <div class="row">
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                            <table class="table table-striped task-table">

                                              <!-- Table Headings -->
                                              <thead>
                                                <th width="25%">ID</th>
                                                <th width="25%">Maker</th>
                                                <th width="40%">Model</th>
                                                <th width="20%">Year</th>
                                                <th width="20%">Action</th>
                                              </thead>

                                              <!-- Table Body -->
                                              @if(!empty($posts))
                                              <tbody>
                                                @foreach($posts as $post)
                                                <tr>
                                                  <td><div>{{$post->id}}</div></td>
                                                  <td><div>{{$post->maker}}</div></td>
                                                  <td><div>{{$post->model}}</div></td>
                                                  <td><div>{{$post->year}}</div></td>
                                                  <td>
                                                    <!-- <a href="{{ route('admin_reservationDetails', $post->id) }}" class="label label-success">Details</a>
                                                      <a href="{{ route('admin_reservationDelete', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a> -->

                                                      </td>
                                                    </tr>
                                                  @endforeach
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
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