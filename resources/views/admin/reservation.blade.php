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
    <div class="col-lg-12">
      <h1>Reservation list</h1>
      <div>



                  <form action="{{ route('admin_reservationSearch') }}" method="get">
                    <div class="input-group">
                      <input type="search" name="search" class="form-control">
                      <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </span>
                    </div>
                  </form>



                </div>
    <!-- Posts list -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">ID</th>
                        <th width="25%">Date Pick-up</th>
                        <th width="40%">Transactiono Date</th>
                        <th width="20%">Action</th>
                    </thead>

                    <!-- Table Body -->
                    @if(!empty($posts))
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                          <td><div>{{$post->id}}</div></td>
                          <td><div>{{$post->pickupDate}}</div></td>
                          <td><div>{{$post->returnDate}}</div></td>
                          <td>
                            <a href="{{ route('admin_reservationDetails', $post->id) }}" class="label label-success">Details</a>
                            <a href="{{ route('admin_reservationDelete', $post->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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

<script type="text/javascript" src="{{URL::to('assets/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
