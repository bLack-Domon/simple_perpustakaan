@extends('layouts.adminLTE')

@section('title', 'Admin | Tambah Rak Buku')

@section('content')
<div class="content-wrapper">
 <section class="content">
  <div class="container-fluid">
   <div class="row justify-content-center">
    <div class="col-5 mt-3">
     <div class="card">
      <div class="card-header">{{ __('Tambah Rak Buku') }}</div>

      <div class="card-body">
       <form action="{{ route('Rak.store') }}" method="POST">
        @csrf
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Nama Rak</label>
         <div class="col-sm-8">
          <input type="text" name="nama_rak" id="nama_rak" class="form-control">

          @error('nama_rak')
              <span class="text-danger">{{ $message }}</span>
          @enderror
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Lokasi Rak</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" name="lokasi_rak" id="lokasi_rak">

          @error('lokasi_rak')
              <span class="text-danger">{{ $message }}</span>
          @enderror
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
 </section>
</div>
@endsection