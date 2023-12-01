<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
 <!-- icheck bootstrap -->
 <link rel="stylesheet" href="{{ asset('') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">

 <link rel="stylesheet" href="{{ asset('') }}login.css">
 <title>@yield('title')</title>

 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.bunny.net">
</head>

<body class="hold-transition login-page">
  @yield('content')


 <!-- jQuery -->
 <script src="{{ asset('') }}plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('') }}dist/js/adminlte.min.js"></script>
</body>
</html>
