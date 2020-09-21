@extends('layouts.main')

@section('title', 'Home')
@section('about-nav', 'active')

@section('content')

<div class="jumbotron">
	<h1 class="display-4">About</h1>
	<p class="lead">Halaman About</p>
	<hr class="my-4">
	<p>Kembali ke halaman home</p>
	<a class="btn btn-primary btn-lg" href="{{url('/')}}" role="button">Home</a>
</div>

@endsection