@extends('layouts.main')

@section('title', 'Data')
@section('data-nav', 'active')

@section('content')

<form action="/data" method="post">
	@csrf
	<div class="form-group">
		<label for="exampleInputEmail1">Nama</label>
		<input type="text" name="nama" class="form-control" id="exampleInputEmail1">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Telpon</label>
		<input type="text" name="telepon" class="form-control" id="exampleInputEmail1">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Alamat</label>
		<input type="text" name="alamat" class="form-control" id="exampleInputEmail1">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection