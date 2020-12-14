@extends('layouts.main')

@section('title', 'Data')
@section('data-nav', 'active')

@section('content')

@if(session('alert'))
<div class="alert alert-success">
	{{ session('alert') }}
</div>
@endif

<div class="row justify-content-center">

	@if($updateMode)
	@include('data.edit')
	@else
	@include('data.tambah')
	@endif

	<div class="col-10 shadow m-3 p-3">
		<h3>Daftar Data</h3>
		<table class="table text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">No. Telp</th>
					<th scope="col">Alamat</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $std)
				<tr>
					<th scope="row">{{$loop->iteration}}</th>
					<td>{{$std->nama}}</td>
					<td>{{$std->telepon}}</td>
					<td>{{$std->alamat}}</td>
					<td>
						<a href="/data/{{$std->id}}/edit" class="btn btn-sm btn-warning">Perbarui</a>
						<a href="#" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>

@endsection