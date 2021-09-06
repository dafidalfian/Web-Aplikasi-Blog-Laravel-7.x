@extends('template_backend.home')
@section('sub-judul','Tambah User')
@section('content')
	
			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

			@error('name')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror

	<form method="post" action="{{route('user.store')}} ">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="tipe">Tipe</label>
			<select name="tipe" class="form-control" id="tipe">
				<option value="" holder>Pilih Tipe User</option>
				<option value="1" holder>Administrator</option>
				<option value="0" holder>Penulis</option>
			</select>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="text" name="password" id="password" class="form-control">
		</div>
		<div class="form-group">
		<button class="btn btn-primary btn-block">Tambah User</button>
		</div>
	</form>
@endsection