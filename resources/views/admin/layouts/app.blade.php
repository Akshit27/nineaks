<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="{{asset('admin')}}/img/favicon.ico" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="{{asset('admin')}}/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset('admin')}}/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/css/atlantis.css">


  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/demo.css">
  <link href="{{asset('admin')}}/libs/SnackBar-master/dist/snackbar.min.css" rel="stylesheet">
  <link href="{{asset('admin')}}/libs/dropify-master/dist/css/dropify.min.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue">
        
        <a href="index.html" class="logo">
          <img src="{{asset('admin')}}/img/logo.png" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
        
        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div>
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
              <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                <i class="fa fa-search"></i>
              </a>
            </li>  
         
            
           
         
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                    @if(file_exists(Auth::guard('admin')->user()->profile_picture))
                        <img src="{{url(Auth::guard('admin')->user()->profile_picture)}}" alt="user" class="avatar-img rounded-circle" width="31">
                    @else
                    <img src="{{url('public/admin//img/profile.jpg')}}" alt="user" class="avatar-img rounded-circle" width="31">
                    @endif

                  
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                  <li>
                    <div class="user-box">
                      <div class="avatar-lg">
                        @if(file_exists(Auth::guard('admin')->user()->profile_picture))
                          <img src="{{url(Auth::guard('admin')->user()->profile_picture)}}" alt="user" class="avatar-img rounded-circle" width="31">
                        @else
                          <img src="{{url('public/admin//img/profile.jpg')}}" alt="user" class="avatar-img rounded-circle" width="31">
                        @endif
                        
                  </div>
                      <div class="u-text">
                        <h4>{{Auth::guard('admin')->user()->name}}</h4>
                        <p class="text-muted">{{Auth::guard('admin')->user()->email}}</p> 
                        <!-- <a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a> -->
                      </div>
                    </div>  
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.profile')}}">My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
@extends('admin.layouts.sidebar')



  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
      <footer class="footer">
        <div class="container-fluid">
          <nav class="pull-left">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Help
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>        
        </div>
      </footer>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!--   Core JS Files   -->
  <script src="{{asset('admin')}}/js/core/jquery.3.2.1.min.js"></script>
  <script src="{{asset('admin')}}/js/core/popper.min.js"></script>
  <script src="{{asset('admin')}}/js/core/bootstrap.min.js"></script>

  <!-- jQuery UI -->
  <script src="{{asset('admin')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="{{asset('admin')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="{{asset('admin')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Moment JS -->
  <script src="{{asset('admin')}}/js/plugin/moment/moment.min.js"></script>

  <!-- Chart JS -->
  <script src="{{asset('admin')}}/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="{{asset('admin')}}/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="{{asset('admin')}}/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="{{asset('admin')}}/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="{{asset('admin')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- Bootstrap Toggle -->
  <script src="{{asset('admin')}}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="{{asset('admin')}}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{asset('admin')}}/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

  <!-- Google Maps Plugin -->
  <script src="{{asset('admin')}}/js/plugin/gmaps/gmaps.js"></script>

  <!-- Dropzone -->
  <script src="{{asset('admin')}}/js/plugin/dropzone/dropzone.min.js"></script>

  <!-- Fullcalendar -->
  <script src="{{asset('admin')}}/js/plugin/fullcalendar/fullcalendar.min.js"></script>

  <!-- DateTimePicker -->
  <script src="{{asset('admin')}}/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

  <!-- Bootstrap Tagsinput -->
  <script src="{{asset('admin')}}/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

  <!-- Bootstrap Wizard -->
  <script src="{{asset('admin')}}/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

  <!-- jQuery Validation -->
  <script src="{{asset('admin')}}/js/plugin/jquery.validate/jquery.validate.min.js"></script>

  <!-- Summernote -->
  <script src="{{asset('admin')}}/js/plugin/summernote/summernote-bs4.min.js"></script>

  <!-- Select2 -->
  <script src="{{asset('admin')}}/js/plugin/select2/select2.full.min.js"></script>

  <!-- Sweet Alert -->
  <script src="{{asset('admin')}}/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Owl Carousel -->
  <script src="{{asset('admin')}}/js/plugin/owl-carousel/owl.carousel.min.js"></script>

  <!-- Magnific Popup -->
  <script src="{{asset('admin')}}/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Atlantis JS -->
  <script src="{{asset('admin')}}/js/atlantis.min.js"></script>

  <!-- Atlantis DEMO methods, don't include it in your project! -->
  <script src="{{asset('admin')}}/js/setting-demo.js"></script>
  <script src="{{asset('admin')}}/js/demo.js"></script>
<!-- cus extra -->
  <script src="{{asset('admin')}}/js/form.js"></script>
  <script src="{{asset('admin')}}/libs/SnackBar-master/dist/snackbar.min.js"></script>
  <script src="{{asset('admin')}}/libs/dropify-master/dist/js/dropify.min.js"></script>
  <script src="{{asset('admin')}}/js/custom.js"></script>
 @yield('scripts')
  <script>
    Circles.create({
      id:'circles-1',
      radius:45,
      value:60,
      maxValue:100,
      width:7,
      text: 5,
      colors:['#f1f1f1', '#FF9E27'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-2',
      radius:45,
      value:70,
      maxValue:100,
      width:7,
      text: 36,
      colors:['#f1f1f1', '#2BB930'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-3',
      radius:45,
      value:40,
      maxValue:100,
      width:7,
      text: 12,
      colors:['#f1f1f1', '#F25961'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
      type: 'bar',
      data: {
        labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
        datasets : [{
          label: "Total Income",
          backgroundColor: '#ff9e27',
          borderColor: 'rgb(23, 125, 255)',
          data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        scales: {
          yAxes: [{
            ticks: {
              display: false //this will remove only the label
            },
            gridLines : {
              drawBorder: false,
              display : false
            }
          }],
          xAxes : [ {
            gridLines : {
              drawBorder: false,
              display : false
            }
          }]
        },
      }
    });

    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
      type: 'line',
      height: '70',
      width: '100%',
      lineWidth: '2',
      lineColor: '#ffa534',
      fillColor: 'rgba(255, 165, 52, .14)'
    });
  </script>
</body>

</html>