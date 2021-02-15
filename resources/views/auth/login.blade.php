@extends('layouts.main')

@section('title', 'Login')
@section('login-nav', 'active')

@section('content')
<div class="card mt-5 w-100">
  <div class="card-body">
    <h5 class="card-title text-center">Login</h5>
    <h6 class="card-subtitle mb-3 text-muted text-center">Login untuk melanjutkan</h6>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
  </div>
</div>
@endsection