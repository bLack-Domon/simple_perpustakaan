@extends('layouts.adminLTE')

@section('title', 'Admin | Data Peminjaman')

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
      <div class="card-header">{{ __('Data Peminjaman') }}</div>

      <div class="card-body">
       <a href="{{ route('Peminjaman.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Pinjam Buku</a>
       <table class="table table-bordered" id="example1">
        <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Penulis Buku</th>
          <th scope="col">Rak</th>
          <th scope="col">Nama Anggota</th>
          <th scope="col">Nama Petugas</th>
          <th scope="col">Tanggal Pinjam</th>
          <th scope="col">Tanggal Kembali</th>
          <th scope="col">Action</th>
         </tr>
        </thead>
        <tbody>
         @foreach ($peminjaman as $p)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $p->buku->judul_buku }}</td>
          <td>{{ $p->buku->penulis_buku }}</td>
          <td>{{ $p->buku->id_rak }}</td>
          <td>{{ $p->anggota->name }}</td>
          <td>{{ $p->petugas->name }}</td>
          <td>
           {{ date('d M Y', strtotime($p->tanggal_pinjam)) }}
          </td>
          <td>
           {{ date('d M Y', strtotime($p->tanggal_kembali)) }}
          </td>
          <td><a href="{{ route('ngembalikan_buku', $p->id ) }}" class="btn btn-warning btn-sm">Kembalikan Buku</a></td>
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
