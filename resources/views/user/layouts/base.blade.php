<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Index Page</title>
<!-- Import Template Icons CSS Files -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}/">
  <!-- Import Bootstrap CSS File -->

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}/">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}/">
<link rel="stylesheet" href="{{asset('assets/css/vendor/slick.css')}}/">
<link rel="stylesheet" href="{{asset('assets/css/vendor/slick-theme.css')}}/">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}/">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}/">
  
</head>
<body>
  @include("user.layouts.header")
  <!--Banner part---->
 
  @yield("main")

  @include("user.layouts.footer")

<script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-1.11.0.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>

<script src="{{asset('assets/js/slider.js')}}"></script>
@stack('scripts')
</body>
</html>
