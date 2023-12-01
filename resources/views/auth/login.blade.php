@extends('layouts.app')

@section('title', 'Library of SMK Nurul Jadid')

@section('content')
<div class="login-box">
 <!-- /.login-logo -->
 <div class="card card-outline card-primary">
  <div class="card-header text-center">
   <a href="#" class="h4"><b>Perpustakaan </b></a>
   <p>SMK Nurul Jadid</p>
  </div>
  <div class="card-body">
   <p class="login-box-msg">Selamat Datang di perpustakaan</p>


   <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row mb-3">
     <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

     <div class="col-md-6">
      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

      @error('username')
      <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
      </span>
      @enderror
     </div>
    </div>

    <div class="row mb-3">
     <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

     <div class="col-md-6">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

      @error('password')
      <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
      </span>
      @enderror
     </div>
    </div>


    <div class="row mb-0">
     <div class="col-md-8 offset-md-4">
      <button type="submit" class="btn btn-primary">
       {{ __('Login') }}
      </button>
     </div>
    </div>
   </form>
  </div>
  <!-- /.card-body -->
 </div>
 <!-- /.card -->
</div>
@endsection
