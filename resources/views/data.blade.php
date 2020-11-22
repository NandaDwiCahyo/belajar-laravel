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

	<div class="col-10 shadow m-3 p-3">
		<h3>Tambah Data</h3>
		<form action="{{url('/data')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control bg-transparent @error('nama') is-invalid @enderror" id="nama" required>
				@error('nama')
				<div class="invalid-feedback">
					<strong>{{$message}}</strong>
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="text" name="telepon" class="form-control bg-transparent @error('telepon') is-invalid @enderror" id="telepon" required>
				@error('telepon')
				<div class="invalid-feedback">
					<strong>{{$message}}</strong>
				</div>
				@enderror
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control bg-transparent @error('alamat') is-invalid @enderror" id="alamat" required>
				@error('alamat')
				<div class="invalid-feedback">
					<strong>{{$message}}</strong>
				</div>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<div class="col-10 shadow m-3 p-3">
		<h3>Daftar Data</h3>
		<table class="table text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">No. Telp</th>
					<th scope="col">Alamat</th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $std)
				<tr>
					<th scope="row">{{$loop->iteration}}</th>
					<td>{{$std->nama}}</td>
					<td>{{$std->telepon}}</td>
					<td>{{$std->alamat}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>

@endsection