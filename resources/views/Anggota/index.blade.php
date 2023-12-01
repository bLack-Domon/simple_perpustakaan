<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Welcome | {{ Auth()->user()->name }}</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">
</head>
<body class="hold-transition">
 <div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
    <li class="nav-item">
     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
    <li class="nav-item">
     <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
     </a>
    </li>
   </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="#" class="brand-link">
    <span class="brand-text font-weight-light" style="margin-left: 1rem;"><i class="fas fa-book-reader mr-2"></i>Perpustakaan</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     <div class="image">
      <img src="{{ asset('') }}dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
     </div>
     <div class="info">
      <a href="#" class="d-block">{{ auth()->user()->name }}</a>
     </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
       <a href="{{ route('anggotaDash') }}" class="nav-link {{ Request::routeIs('anggotaDash') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
         Beranda
        </p>
       </a>
      </li>
      <li class="nav-item">
       <a href="{{ route('anggotaHistory') }}" class="nav-link {{ Request::routeIs('anggotaHistory') ? 'active' : '' }}">
        <i class="nav-icon fas fa-clock"></i>
        <p>
         History Peminjaman
        </p>
       </a>
      </li>

      <li class="nav-item">
       <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
         Logout
        </p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
        </form>
       </a>
      </li>
     </ul>
    </nav>
    <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
     <div class="row">
      <div class="col-6 mt-3">
       <div class="card">
        <div class="card-header">
         <h3 class="card-title">Data Buku</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         <table id="anggotaTable" class="table table-bordered table-striped">
          <thead>
           <tr>
            <th>#</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Rak</th>
           </tr>
          </thead>
          <tbody>
           @foreach ($buku as $b)
               <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->kode_buku }}</td>
                <td>{{ $b->judul_buku }}</td>
                <td>{{ $b->penulis_buku }}</td>
                <td>{{ $b->rak->nama_rak }}</td>
               </tr>
           @endforeach
          </tbody>
         </table>
        </div>
        <!-- /.card-body -->
       </div>
      </div>
      <div class="col-6 mt-3">
       <div class="card">
        <div class="card-header">
         <h3 class="card-title">Daftar Buku yang di pinjam</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         <table id="example2" class="table table-bordered table-striped">
          <thead>
           <tr>
            <th>#</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tanggal Kembali</th>
           </tr>
          </thead>
          <tbody>
           @foreach ($status_pinjam as $p)
               <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->buku->kode_buku }}</td>
                <td>{{ $p->buku->judul_buku }}</td>
                <td>{{ $p->buku->penulis_buku }}</td>
                <td>
                 {{ date('d M Y', strtotime($p->tanggal_kembali)) }}
                </td>
               </tr>
           @endforeach
          </tbody>
         </table>
        </div>
        <!-- /.card-body -->
       </div>
      </div>
      <!-- /.col -->
     </div>
     <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
  </div>
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
    , "searching": true
    , "ordering": true
    , "info": true
    , "autoWidth": false
    , "responsive": true
   , });

   $('#anggotaTable').DataTable({
    "paging": true
    , "lengthChange": false
    , "searching": true
    , "ordering": true
    , "info": true
    , "autoWidth": false
    , "responsive": true
   , });
  });

 </script>
</body>
</html>
