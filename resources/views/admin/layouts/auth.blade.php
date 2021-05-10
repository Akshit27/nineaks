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
   <link href="{{asset('admin')}}/libs/SnackBar-master/dist/snackbar.min.css" rel="stylesheet">
</head>
<body class="hold-transition login-page">





  @yield('content')


  <script src="{{asset('admin')}}/js/core/jquery.3.2.1.min.js"></script>
  <script src="{{asset('admin')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
 -->
  <script src="{{asset('admin')}}/js/core/popper.min.js"></script>
  <script src="{{asset('admin')}}/js/core/bootstrap.min.js"></script>
  <script src="{{asset('admin')}}/js/atlantis.min.js"></script>
  <script src="{{asset('admin')}}/js/form.js"></script>
  <script src="{{asset('admin')}}/libs/SnackBar-master/dist/snackbar.min.js"></script>
  <script src="{{asset('admin')}}/js/custom.js"></script>
    @yield('scripts')
</body>
</html>