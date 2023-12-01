@extends('layouts.adminLTE')
@section('title', 'Admin | Data Pengembalian Buku')
@section('content')
<div class="content-wrapper">
 <section class="content">
  <div class="container-fluid">
   <div class="row justify-content-center">
    <div class="col-md-12 mt-3">
     @if (session('success'))
     <div class="alert alert-warning alert-dismissible fade show" role="alert">

      {{ session("success") }}

      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
     @endif
     <div class="card">
      <div class="card-header">{{ __('Data Pengembalian Buku') }}</div>

      <div class="card-body">
       <table class="table table-bordered" id="example1">
        <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Penulis Buku</th>
          <th scope="col">Nama Anggota</th>
          <th scope="col">Nama Petugas</th>
          <th scope="col">Tanggal Pengembalian</th>
          <th scope="col">Denda</th>
         </tr>
        </thead>
        <tbody>
         @foreach ($kembali as $k)
             <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $k->koneksi_buku->judul_buku }}</td>
              <td>{{ $k->koneksi_buku->penulis_buku }}</td>
              <td>{{ $k->anggota->name }}</td>
              <td>{{ $k->petugas->name }}</td>
              <td>{{ $k->tanggal_pengembalian }}</td>
              <td style="width: 100px;">Rp. {{ $k->denda }}</td>
             </tr>
         @endforeach
        </tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
</div>
@endsection
