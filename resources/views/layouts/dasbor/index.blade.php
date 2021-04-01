@extends('layouts.master')
@section('css')
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('fastes/assets/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="{{asset('fastes/assets/https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet')}}" />
  <link href="{{asset('fastes/assets/https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet')}}">
  <!-- CSS Files -->
  <link href="{{asset('fastes/assets/assets/css/bootstrap.min.css" rel="stylesheet')}}" />
  <link href="{{asset('fastes/assets/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet')}}" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('fastes/assets/assets/demo/demo.css" rel="stylesheet')}}" />
</head>

<body class="">
<div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Positive</p>
                      <p class="card-title">{{ $positive }}<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  Positive di Indonesia
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Sembuh</p>
                      <p class="card-title">{{ $sembuh }}<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  Sembuh di Indonesia
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Meninggal</p>
                      <p class="card-title">{{ $meninggal }}<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
            Meninggal di Indonesia
            </div>
              </div>
            </div>
          </div>

          
        
        </div>

  <!--   Core JS Files   -->
  <script src="{{asset('fastes/assets/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('fastes/assets/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('fastes/assets/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('fastes/assets/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="{{asset('fastes/assets/https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}"></script>
  <!-- Chart JS -->
  <script src="{{asset('fastes/assets/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('fastes/assets/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('fastes/assets/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript')}}"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('fastes/assets/assets/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>


@endsection

@section('js')

@endsection
