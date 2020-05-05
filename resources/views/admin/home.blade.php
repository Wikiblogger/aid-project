<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Whee!</title>


    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap.min.css')}}">


    <link href="{{URL::to('css/sb-admin.css')}}" rel="stylesheet">


    <link href="{{URL::to('css/plugins/morris.css')}}" rel="stylesheet">



<style type="text/css">
    #txt{
        font-size: 48px;
    }
    .navbar {
     background: #2980b9 !important;
   }
   #sides ul {
    background: #2980b9 !important;

   }
   #sides ul li a{
    color: #fff !important;
   }
   body {
    background: #2c3e50;
   }
   span{
    font-size: 40px;
   }

  .dropdown a{
    color: #f39c12 !important;
  }

   body {
    background-color: #323232 !important;
   }
</style>

</head>

<body>

    <div id="wrapper">
      @include('admin.adminNav');

        <div id="page-wrapper">
          <div class="row">
              <div class="col-md-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="badge pull-right">7</span>
                  </div>
                  <div class="panel-body">
                    <h3 class="text-center"><a  href="{{route('admin_custoemr')}}" >Customers</a></h3>
                  </div>
                </div>

              </div>

              <div class="col-md-4">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <span class="glyphicon glyphicon-level-up"></span>
                    <span class="badge pull-right">7</span>
                  </div>
                  <div class="panel-body">
                    <h3 class="text-center"><a href="{{route('admin_reservation')}}" >Reserve</a></h3>
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




</body>

</html>
