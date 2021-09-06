@extends('template_backend.home')
@section('sub-judul','Edit Tag')
@section('content')
	
	<form method="post" action="{{route('tag.update', $tag->id)}} ">
		@csrf
		@method('patch')
		<div class="form-group">
			@error('name')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror

			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif
			<label for="name">Kategori</label>
			<input type="text" name="name" id="name" class="form-control" value="{{$tag->name}}">
		</div>
		<div class="form-group">
		<button class="btn btn-primary btn-block">Update Tags</button>
		</div>
	</form>
@endsection