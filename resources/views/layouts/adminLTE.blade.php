<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>@yield('title')</title>

 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- Google Font: Source Sans Pro -->
 {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">

 <link rel="stylesheet" href="{{ asset('mycustom.css') }}">
</head>
<body class="hold-transition">
 <div class="wrapper">
  <!-- Navbar -->
  @include('component.navbar')
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  @include('component.sidebar')
  <!-- /.Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="{{ asset('') }}plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="{{ asset('') }}plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="{{ asset('') }}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="{{ asset('') }}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="{{ asset('') }}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="{{ asset('') }}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="{{ asset('') }}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="{{ asset('') }}plugins/jszip/jszip.min.js"></script>
 <script src="{{ asset('') }}plugins/pdfmake/pdfmake.min.js"></script>
 <script src="{{ asset('') }}plugins/pdfmake/vfs_fonts.js"></script>
 <script src="{{ asset('') }}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="{{ asset('') }}plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="{{ asset('') }}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('') }}dist/js/adminlte.min.js"></script>
 <!-- Page specific script -->
 <script>
  $(function() {
   $("#example1").DataTable({
    "responsive": true
    , "lengthChange": false
    , "autoWidth": false
    , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   $('#example2').DataTable({
    "paging": true
    , "lengthChange": false
    , "searching": false
    , "ordering": true
    , "info": true
    , "autoWidth": false
    , "responsive": true
   , });
  });

 </script>
</body>
</html>
