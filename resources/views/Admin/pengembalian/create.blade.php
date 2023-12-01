@extends('layouts.adminLTE')

@section('title', 'Admin | Pengembalian Buku')

@section('content')
<div class="content-wrapper">
 <section class="content">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-5 mt-3">
     <div class="card">
      <div class="card-header">{{ __('Pengembalian Buku') }}</div>

      <div class="card-body">
       <form action="{{ route('Pengembalian.store') }}" method="POST">
        @csrf
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <input type="hidden" name="id_petugas" id="id_petugas" value="{{ Auth()->user()->id }}">
        <input type="hidden" name="id_peminjaman" id="id_peminjaman" value="{{ $id_peminjaman->id }}">
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Buku</label>
         <div class="col-sm-8">
										<input type="text" readonly class="form-control" value="{{ $buku->judul_buku }}">
										<input type="hidden" class="form-control" value="{{ $buku->id }}" name="id_buku" id="id_buku">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Nama Anggota</label>
         <div class="col-sm-8">
										<input type="text" readonly class="form-control" value="{{ $anggota->name }}">
										<input type="hidden" class="form-control" value="{{ $anggota->id }}" name="id_anggota" id="id_anggota">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Tanggal Kembali</label>
         <div class="col-sm-8">
          <input type="text" value="{{ $id_peminjaman->tanggal_kembali }}" class="form-control" readonly>
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Tanggal Pengembalian</label>
         <div class="col-sm-8">
          <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Denda</label>
         <div class="col-sm-8">
          <input type="text" name="denda" id="denda" class="form-control">
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