@extends('template_backend.home')
@section('sub-judul','Post Yang Telah Di Hapus')
@section('content')


			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Post</th>
				<th>Kategori</th>
				<th>Daftar Tags</th>
				<th>Penulis</th>
				<th>Thumbnail</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($post as $result => $hasil)
			<tr>
				<td>{{$result + $post->firstitem()}}</td>
				<td>{{$hasil->judul}}</td>
				<td>{{$hasil->category->name}}</td>
				<td>
					@foreach($hasil->tags as $tag)
						<ul>
							<li>{{$tag->name}}</li>
						</ul>
					@endforeach
				</td>
				<td>{{$hasil->users->name}}</td>
				<td>
					<img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width: 100px">
				</td>
				<td>
					<form method="post" action="{{route('post.kill',$hasil->id)}}">
						@csrf
						@method('delete')
						<a href="{{ route('post.restore', $hasil->id)}}" class="btn btn-info btn-sm">Restore</a>
						<button type="submit" class="btn btn-danger btn-sm">Delete !</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		{{$post->links()}}
@endsection