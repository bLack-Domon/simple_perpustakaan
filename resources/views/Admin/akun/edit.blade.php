@extends('layouts.adminLTE')

@section('title', 'Admin | Edit Akun')

@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5 mt-3">
					<div class="card">
						<div class="card-header">{{ __('Edit Akun') }}</div>

						<div class="card-body">
							<form action="{{ route('Akun.update', $Akun->id) }}" method="POST">
								@csrf
								@method('PUT')
								<input type='hidden' name='_token' value='{{ csrf_token() }}' />
								<div class="row mb-3">
									<label class="col-sm-4 col-form-label">Nama Lengkap</label>
									<div class="col-sm-8">
										<input type="text" name="name" id="name" value='{{ $Akun->name }}'
											class="form-control">
										@error('name')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-sm-4 col-form-label">Nama Pengguna (Username)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="username" id="username"
											value='{{ $Akun->username }}'>
										@error('username')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-sm-4 col-form-label">Status Akun</label>
									<div class="col-sm-8">
										<select name="status_akun" id="status_akun" class="form-control">
											<option value="#">-- Pilih Status Akun --</option>
											@foreach ($options as $op)
											<option value="{{ $op }}" {{ $Akun->status_akun == $op ? 'selected' : '' }}>{{ ucfirst($op) }}</option>
											@endforeach
										</select>
										@error('status_akun')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-sm-4 col-form-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" id="password">
										@error('password')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-sm-4 col-form-label">Repeat Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password_confirmation"
											id="password_confirmation">
										@error('password_confirmation')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>

								<div class="row justify-content-end">
									<div class="col-auto">
										<button type="submit" class="btn btn-primary">Simpan</button>
										<a href="{{ route('Akun.index') }}" class="btn btn-danger">Kembali</a>
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