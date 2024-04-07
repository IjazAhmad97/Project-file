@extends('Auth.layout')
@section('title', "Login Page")
@section('content')
{{-- <a href=""><button class="btn btn-success">Registration</button></a> --}}
@include('welcome');

<div class="container">
    @if (session()->has('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card mt-5">
        <div class="card-header bg-warning">Login Form</div>
        <div class="card-body">
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email">
                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

@endsection
