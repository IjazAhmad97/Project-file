@extends('Auth.layout')
@section('content')
@include('welcome');
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <span class="navbar-text text-end">
      </span>
</nav>
<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">{{ $success }}</div>
    @endif
<div class="card ">
    <div class="card-header bg-dark"><h1>Registration Form</h1></div>
    <div class="card-body">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter username">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
              </div>
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
