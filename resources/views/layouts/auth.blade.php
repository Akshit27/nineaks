<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="http://demo.themekita.com/atlantis/livepreview/examples/assets/img/icon.ico" type="image/x-icon"/>

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
</head>
<body class="hold-transition login-page">





  @yield('content')


    <!-- jQuery -->
  <script src="{{url('plugins')}}/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{url('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{url('dist')}}/js/adminlte.min.js"></script>
</body>
</html>