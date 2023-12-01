@extends('layouts.adminLTE')

@section('title', 'Admin | Daftar Buku')

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
      <div class="card-header">{{ __('Daftar Buku') }}</div>

      <div class="card-body">
       <a href="{{ route('Buku.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Buku</a>
       <table class="table table-bordered" id="example1">
        <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Penulis Buku</th>
          <th scope="col">Rak</th>
          <th scope="col">Action</th>
         </tr>
        </thead>
        <tbody>
         @foreach ($buku as $d)
         <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $d->judul_buku }}</td>
          <td>{{ $d->penulis_buku }}</td>
          <td>{{ $d->rak->nama_rak }}</td>
          <td>
           <a href="{{ route('Buku.edit', $d->id ) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i>
            Edit</a>
           <form action="{{ route('Buku.destroy', $d->id) }}" method='POST' style='display: inline;'>
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-sm btn-danger"
             onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i>
             Hapus</button>
           </form>
          </td>
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