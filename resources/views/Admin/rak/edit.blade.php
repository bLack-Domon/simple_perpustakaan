@extends('layouts.adminLTE')

@section('title', 'Admin | Edit Rak Buku')

@section('content')
<div class="content-wrapper">
 <div class="content">
  <div class="container-fluid">
   <div class="row justify-content-center">
    <div class="col-md-5 mt-3">
     <div class="card">
      <div class="card-header">{{ __('Edit Rak Buku') }}</div>
 
      <div class="card-body">
       <form action="{{ route('Rak.update', $Rak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Nama Rak</label>
         <div class="col-sm-8">
          <input type="text" name="nama_rak" id="nama_rak" value='{{ $Rak->nama_rak }}' class="form-control">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Lokasi Rak</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" name="lokasi_rak" id="lokasi_rak" value='{{ $Rak->lokasi_rak }}'>
         </div>
        </div>
 
        <div class="row justify-content-end">
         <div class="col-auto">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="{{ route('Rak.index') }}" class="btn btn-danger">Kembali</a>
         </div>
        </div>
 
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection