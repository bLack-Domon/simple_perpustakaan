@extends('layouts.adminLTE')

@section('title', 'Admin | Peminjaman Buku')

@section('content')
<div class="content-wrapper">
 <section class="content">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-5 mt-3">
     <div class="card">
      <div class="card-header">{{ __('Peminjaman Buku') }}</div>

      <div class="card-body">
       <form action="{{ route('Peminjaman.store') }}" method="POST">
        @csrf
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <input type="hidden" name="id_petugas" id="id_petugas" value="{{ Auth()->user()->id }}">
        <input type="hidden" name="status_buku" id="status_buku" value="belum">
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Buku</label>
         <div class="col-sm-8">
										<select name="id_buku" id="id_buku" class="form-control">
											@foreach ($buku as $b)
											<option value="{{ $b->id }}">{{ $b->kode_buku }} - {{ $b->judul_buku }}</option>
											@endforeach
										</select>
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Nama Anggota</label>
         <div class="col-sm-8">
										<select name="id_anggota" id="id_anggota" class="form-control">
											@foreach ($anggota as $a)
											<option value="{{ $a->id }}">{{ $a->name }}</option>
											@endforeach
										</select>
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Tanggal Pinjam</label>
         <div class="col-sm-8">
          <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control">
         </div>
        </div>
        <div class="row mb-3">
         <label class="col-sm-4 col-form-label">Tanggal Kembali</label>
         <div class="col-sm-8">
          <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control">
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