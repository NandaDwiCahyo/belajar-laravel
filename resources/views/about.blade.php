@extends('layouts.main')

@section('title', 'About')
@section('about-nav', 'active')

@section('content')

<div class="jumbotron">
	<h1 class="display-4">About me</h1>
	<p class="lead">Nanda Dwi Cahyo Wibowo / 12 RPL 2 / 21</p>
	<hr class="my-4">
	<p>Cek menu lain</p>
	<a class="btn btn-primary btn-lg" href="{{url('/')}}" role="button">Home</a>
	<a class="btn btn-info btn-lg" href="{{url('/data')}}" role="button">Data</a>
	<a class="btn btn-success btn-lg" href="{{url('/login')}}" role="button">Login</a>
	<a class="btn btn-danger btn-lg" href="{{url('/logout')}}" role="button">Logout</a>
</div>

@endsection