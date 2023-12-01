@extends('layouts.adminLTE')

@section('title', 'Admin | Rak Buku')

@section('content')
<div class="content-wrapper">
 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12 mt-3">
      @if (session('success'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
 
       {{ session("success") }}
 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      @endif
     <div class="card">
      <div class="card-header">{{ __('Rak Buku') }}</div>

      <div class="card-body">
       <a href="{{ route('Rak.create') }}" class="btn btn-primary mb-2" style="margin-top: -10px;"><i class="fas fa-plus"></i> Tambah Rak Buku</a>
       <table class="table table-bordered" id="example1">
        <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Rak</th>
          <th scope="col">Lokasi Rak</th>
          <th scope="col">Action</th>
         </tr>
        </thead>
        <tbody>
         @foreach ($d_rak as $d)
         <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $d->nama_rak }}</td>
          <td>{{ $d->lokasi_rak }}</td>
          <td>
           <a href="{{ route('Rak.edit', $d->id ) }}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
           <form action="{{ route('Rak.destroy', $d->id) }}" method='POST' style='display: inline;'>
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-sm btn-danger"
             onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i> Hapus</button>
           </form>
          </td>
         </tr>
         @endforeach
        </tbody>
       </table>
      </div>
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
@endsection