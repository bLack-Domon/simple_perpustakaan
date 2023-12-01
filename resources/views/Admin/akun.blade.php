@extends('layouts.adminLTE')

@section('title', 'Admin | Data Akun Pengguna')

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
      <div class="card-header">{{ __('Data Akun') }}</div>

      <div class="card-body">
       <a href="{{ route('Akun.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Akun</a>
       <table class="table table-bordered" id="example1">
        <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Nama Pengguna (Username)</th>
          <th scope="col">Status Akun</th>
          <th scope="col">Action</th>
         </tr>
        </thead>
        <tbody>
         @foreach ($akun as $d)
         <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $d->name }}</td>
          <td>{{ $d->username }}</td>
          <td>{{ $d->status_akun }}</td>
          <td>
           <a href="{{ route('Akun.edit', $d->id ) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i>
            Edit</a>
           <form action="{{ route('Akun.destroy', $d->id) }}" method='POST' style='display: inline;'>
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