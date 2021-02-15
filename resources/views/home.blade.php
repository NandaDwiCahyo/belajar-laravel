@extends('layouts.main')

@section('title', 'Home')
@section('home-nav', 'active')

@section('content')

@if(session('alert'))
<div class="alert alert-success">{{ session('alert') }}</div>
@endif

<div class="jumbotron">
	<h1 class="display-4">Selamat datang!
	</h1>
	<p class="lead">Halaman Home</p>
	<hr class="my-4">
	<p>Cek menu lain</p>
	<a class="btn btn-secondary btn-lg" href="{{url('/about')}}" role="button">About</a>
	<a class="btn btn-info btn-lg" href="{{url('/data')}}" role="button">Data</a>
	<a class="btn btn-success btn-lg" href="{{url('/login')}}" role="button">Login</a>
	<a class="btn btn-danger btn-lg" href="{{url('/logout')}}" role="button">Logout</a>
</div>

@endsection