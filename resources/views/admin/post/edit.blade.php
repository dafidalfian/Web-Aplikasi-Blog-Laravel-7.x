@extends('template_backend.home')
@section('sub-judul','Edit Post')
@section('content')
	
	<form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
		@csrf
		@method('patch')

			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

			@error('name')
			    <div class="alert alert-danger">{{ $message }}</div>
			@enderror
		<div class="form-group">
			<label>Judul</label>
			<input type="text" name="judul" class="form-control" value="{{$post->judul}}">
		</div>
		<div class="form-group">
			<label>Kategori</label>
				<select class="form-control" name="category_id">
						<option value="" holder>Pilih Kategori</option>
					@foreach($category as $result)
						<option value="{{$result->id}}"
							@if($result->id == $post->category_id)
							selected
							@endif
							>{{$result->name}}</option>
					@endforeach
				</select>
		</div>
		<div class="form-group">
            <label>Pilih Tags</label>
                <select class="form-control select2" multiple="" name="tags[]">
                    @foreach($tags as $tag)
                    	<option value="{{$tag->id}}"

                    		@foreach($post->tags as $value)
                    		@if($tag->id == $value->id)
                    		selected
                    		@endif
                    		@endforeach
                    		>{{$tag->name}}</option>
                    @endforeach
            	</select>
        </div>

		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control" name="content" id="content">{{$post->content}}</textarea>
		</div>
		<div class="form-group">
			<label>Thumbnail</label>
			<input type="file" name="gambar" class="form-control">
		</div>
		<div class="form-group">
		<button class="btn btn-primary btn-block">Update Post</button>
		</div>
	</form>

	<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

	<script>
		CKEDITOR.replace( 'content' );
	</script>

@endsection