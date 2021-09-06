@extends('template_backend.home')
@section('sub-judul','Tambah Kategori')
@section('content')
	
	<form method="post" action="{{route('category.store')}} ">
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
			<label for="name">Kategori</label>
			<input type="text" name="name" id="name" class="form-control">
		</div>
		<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan Kategori</button>
		</div>
	</form>
@endsection