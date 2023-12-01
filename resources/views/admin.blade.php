@extends('layouts.adminLTE')

@section('title', 'Admin | Dashboard')

@section('content')
<div class="content-wrapper">
 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-3 col-6 mt-3">
     <!-- small box -->
     <div class="small-box bg-info">
      <div class="inner">
       <h3>{{ $totalAnggota }}</h3>

       <p>Total Anggota</p>
      </div>
      <div class="icon">
       <i class="fas fa-users"></i>
      </div>
     </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6 mt-3">
     <!-- small box -->
     <div class="small-box bg-success">
      <div class="inner">
       <h3>{{ $totalPetugas }}</h3>

       <p>Total Petugas</p>
      </div>
      <div class="icon">
       <i class="fas fa-user-cog"></i>
      </div>
     </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6 mt-3">
     <!-- small box -->
     <div class="small-box bg-warning">
      <div class="inner">
       <h3>{{ $totalBuku }}</h3>

       <p>Total Buku</p>
      </div>
      <div class="icon">
       <i class="fas fa-book"></i>
      </div>
     </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6 mt-3">
     <!-- small box -->
     <div class="small-box bg-danger">
      <div class="inner">
       <h3>{{ $totalPeminjaman }}</h3>

       <p>Total Peminjaman</p>
      </div>
      <div class="icon">
       <i class="ion ion-pie-graph"></i>
      </div>
     </div>
    </div>
    <!-- ./col -->
   </div>
   <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
 </section>
 <!-- /.content -->
</div>
@endsection
