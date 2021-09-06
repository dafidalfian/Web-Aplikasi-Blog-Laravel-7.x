@extends('template_backend.home')
@section('sub-judul','Edit Kategori')
@section('content')
	
	<form method="post" action="{{route('category.update', $category->id)}} ">
		@csrf
		@method('patch')
		<div class="form-group">
			@error('name')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
			<label for="name">Kategori</label>
			<input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
		</div>
		<div class="form-group">
		<button class="btn btn-primary btn-block">Update Kategori</button>
		</div>
	</form>
@endsection