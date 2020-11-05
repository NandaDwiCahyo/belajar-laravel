@extends('layouts.main')

@section('title', 'Home')
@section('home-nav', 'active')

@section('content')

<div class="jumbotron">
	<h1 class="display-4">Home</h1>
	<p class="lead">Halaman Home</p>
	<hr class="my-4">
	<p>Cek halaman about</p>
	<a class="btn btn-primary btn-lg" href="{{url('/about')}}" role="button">About</a>
	<a class="btn btn-success btn-lg" href="{{url('/data')}}" role="button">Data</a>
</div>

@endsection