        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" data-toggle="modal" data-target="#test"></a>
            </div>

            <ul class="nav navbar-right top-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{Auth::user()->fname}} {{Auth::user()->lname}}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('admin_logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="collapse navbar-collapse navbar-ex1-collapse" id="sides">
                <ul class="nav navbar-nav side-nav">
                    <li >
                      <a href="{{route('admin_home')}}" ><i class="glyphicon glyphicon-home pull-right"></i> Home</a>
                    </li>
                    <li>
<!--                       <a href="{{route('admin_message')}}" ><i class="glyphicon glyphicon-envelope pull-right"></i> Meessage</a>
                    </li>
                    <li class="active">
<a href="{{route('admin_cars')}}" ><i class="glyphicon glyphicon-education pull-right"></i> Cars</a>
                    </li> -->
                     <li >
                      <a href="{{route('admin_reservation')}}" ><i class="glyphicon glyphicon-tasks pull-right"></i> Reservations</a>
                    </li>
                    <li>
                      <a href="{{route('admin_custoemr')}}" ><i class="glyphicon glyphicon-tasks pull-right"></i> Customers</a>
                    </li>
                </ul>
            </div>

        </nav>