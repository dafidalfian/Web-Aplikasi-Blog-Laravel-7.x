@extends('template_backend.home')
@section('sub-judul','Edit User')
@section('content')
	
			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

			@error('name')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror

	<form method="post" action="{{route('user.update', $user->id)}} ">
		@csrf
		@method('patch')
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" readonly>
		</div>
		<div class="form-group">
			<label for="tipe">Tipe</label>
			<select name="tipe" class="form-control" id="tipe">
				<option value="" holder>Pilih Tipe User</option>
				<option value="1" holder

				@if($user->tipe == 1)
					selected
				@endif
				>Administrator</option>
				

				<option value="0" holder
				@if($user->tipe == 0)
					selected
				@endif
				>Penulis</option>
				
			</select>

		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="text" name="password" id="password" class="form-control">
		</div>
		<div class="form-group">
		<button class="btn btn-primary btn-block">Edit User</button>
		</div>
	</form>
@endsection