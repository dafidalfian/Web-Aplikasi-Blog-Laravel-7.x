@extends('template_backend.home')
@section('sub-judul','User')
@section('content')


			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif

	<a href="{{ route('user.create') }}" class="btn btn-info btn-sm">Tambeh User</a>
	<br><br>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama User</th>
				<th>Email</th>
				<th>Tipe</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($user as $result => $hasil)
			<tr>
				<td>{{$result + $user->firstitem()}}</td>
				<td>{{$hasil->name}}</td>
				<td>{{$hasil->email}}</td>
				<td>
					@if($hasil->tipe)
						<span class="badge badge-info">Administrator</span>
					@else
						<span class="badge badge-warning">Penulis</span>
					@endif
				</td>
				<td>
					<form method="post" action="{{route('user.destroy', $hasil->id)}}">
						@csrf
						@method('delete')
						<a href="{{route('user.edit', $hasil->id)}}" class="btn btn-primary btn-sm">Edit !</a>
						<button type="submit" class="btn btn-danger btn-sm">Delete !</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		{{$user->links()}}
@endsection