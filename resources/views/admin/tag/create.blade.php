@extends('template_backend.home')
@section('sub-judul','Tambah Tag')
@section('content')
	
	<form method="post" action="{{route('tag.store')}} ">
		@csrf
		<div class="form-group">
			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

			@error('name')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<label for="name">Tag</label>
			<input type="text" name="name" id="name" class="form-control">
		</div>
		<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan Tag</button>
		</div>
	</form>
@endsection