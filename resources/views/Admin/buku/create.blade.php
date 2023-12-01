@extends('layouts.adminLTE')

@section('title', 'Admin | Tambah Buku')

@section('content')
<div class="content-wrapper">
 <section class="content">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-5 mt-3">
     <div class="card">
      <div class="card-header">{{ __('Tambah Buku') }}</div>

      <div class="card-body">
       <form action="{{ route('Buku.store') }}" method="POST">
        @csrf
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Kode Buku</label>
         <div class="col-sm-8">
          <input type="text" name="kode_buku" id="kode_buku" value='{{ $kodeBuku }}' readonly class="form-control">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Judul Buku</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" name="judul_buku" id="judul_buku">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Penulis Buku</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" name="penulis_buku" id="penulis_buku">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Penerbit Buku</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" name="penerbit_buku" id="penerbit_buku">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Tahun Penerbitan</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" name="tahun_penerbitan" id="tahun_penerbitan">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Pilih Rak</label>
         <div class="col-sm-8">
          <select name="id_rak" id="id_rak" class="form-control">
           <option value="#">-- Pilih Rak Letak Buku--</option>
           @foreach ($rak as $r)
           <option value="{{ $r->id }}">
            {{ $r->nama_rak }}
           </option>
           @endforeach
          </select>
         </div>
        </div>

        <div class="row justify-content-end">
         <div class="col-auto">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="{{ route('Buku.index') }}" class="btn btn-danger">Kembali</a>
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