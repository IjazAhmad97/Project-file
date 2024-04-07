@extends('Auth.layout')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">Adding Data</div>
        <div class="card-body">
    <form action="{{ url('update-data' ,$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name" value="{{ $student->name }}" placeholder="Enter name">
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Class</label>
      <input type="text" class="form-control" value="{{ $student->class }}" name="class" placeholder="Class">
    </div>
    {{-- <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</div>
</div>

@endsection
